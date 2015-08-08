<?php

namespace BLOG\core;

use \BLOG\core\Interfaces\ControllerInterface,
    \BLOG\core\Model\BlogModel,
	\BLOG\core\Controller\BlogController,
	\BLOG\core\Controller\ServiceController,
    \BLOG\core\Service\LocallangService,
    \BLOG\core\Repository\BlogRepository,
    \BLOG\core\Service\RequestService,
    \BLOG\core\Service\PdoDbService;

class Engine {

    /**
     * @var array
     */
    protected $sysConf;

    /**
     * @var array
     */
    protected $settings;

    /**
     * @var string
     */
    protected $confPath;

    /**
     * @var array
     */
    protected $includes;

    /**
     * @var array
     */
    protected $domains;

    /**
     * @var \BLOG\core\Controller\ServiceController
     */
    protected $services;

    /**
     * @var \BLOG\core\Model\AbstractModel
     */
    protected $model;

    /**
     * @var \BLOG\core\Service\RequestService
     */
    protected $request;

    /**
     * @var \BLOG\core\Service\PdoDbService
     */
    protected $database;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var \TYPO3\Fluid\View\StandaloneView
     */
    protected $view;

    /**
     * @var string
     */
    protected $version = '0.0.1';

    /**
     * @var \BLOG\core\Controller\AbstractController
     */
    protected $controller;

    function __construct($settings) {
        $this->initializePage($settings);
        $this->initializeDatabase();
        $this->initializeController();
        $this->initializeService();
        $this->initializeRepository();
    }

    /**
     * initialize page configuration
     *
     * @param array $settings
     * @todo get $settings from database
     */
    private function initializePage($settings) {
        $this->confPath = $_SERVER['DOCUMENT_ROOT'] . '/system/configuration/';
        $this->request = new RequestService();
        $this->action = ($this->request->hasArgmunet('action')) ? strtolower($this->request->getArgmunet('action')) : 'list';
        $this->sysConf = json_decode(file_get_contents($this->confPath . 'default.json'), true);
        $this->settings = array_merge($settings, $this->sysConf['public']);

        $this->includes = array();
        $this->domains = array();

        foreach ($this->sysConf['domains'] as $domain) {
            $domainConfFile = $this->confPath . '/domains/' . $domain . '.json';

            if (file_exists($domainConfFile)) {
                $this->domains = json_decode(file_get_contents($domainConfFile), true);
            } else {
                $this->log('[NOTICE]', 'DOMAIN "' . $domain . '" was set, no domain config file found.');
            }
        }

        if ($this->sysConf['includes']) {
            foreach ($this->sysConf['includes'] as $confFile) {
                if (file_exists($this->confPath . $confFile)) {
                    $this->includes = json_decode(file_get_contents($this->confPath . $confFile), true);
                } else {
                    $this->log('[NOTICE]', 'INCLUDE "' . $confFile . '" was set to include but file doesn\'t exist.');
                }
            }
        }

        $this->initializeView($this->sysConf['view']['templateRootPath'], $this->sysConf['view']['layoutRootPath'], $this->sysConf['view']['partialRootPath'], 'Blog');

        $this->view->assignMultiple(
            array(
                'stylesheets' => $this->getThemeStylsheets(),
                'settings' => array_merge($this->settings, array('action' => $this->action)),
                'language' => $this->sysConf['language']['default']
            )
        );
    }

    /**
     * initialize the database object
     * @todo make port (and charset?) configurable
     */
    public function initializeDatabase() {
        $dbSettings = $this->sysConf['database'];
        $dsn      = 'mysql:dbname=' . $dbSettings['db_name'] . ';host=' . $dbSettings['db_host'];
        $this->database = new PdoDbService($dsn, $dbSettings['db_user'], $dbSettings['db_password'], array(\PDO::ATTR_PERSISTENT => true));
    }

    /**
     * initialize FLUID
     *
     * @param string $templatePath
     * @param string $layoutPath
     * @param string $partialPath
     * @param string $controllerName
     */
    private function initializeView($templatePath, $layoutPath, $partialPath, $controllerName) {
        require_once VIEW_PATH . '/Scripts/fluid.php';

        $this->view = new \TYPO3\Fluid\View\StandaloneView();

        $this->view->setTemplateRootPath(THEMES_PATH . $this->settings['theme'] . $templatePath);
        $this->view->setLayoutRootPath(THEMES_PATH . $this->settings['theme'] . $layoutPath);
        $this->view->setPartialRootPath(THEMES_PATH . $this->settings['theme'] . $partialPath);

        $this->view->getTemplateContext()->setControllerName($controllerName);
        $this->view->getTemplateContext()->setControllerActionName($this->action);
        $this->view->getTemplateContext()->setFormat('html');
    }

    /**
     * initialize called controller
     * @todo throw exeption if classname doesn't exist or is not loaded
     */
    private function initializeController() {
        $this->controller = new BlogController($this->action, $this->view, $this->request, $this->database, $this->sysConf);

        $actionName = $this->action . 'Action';
        $actionParam = ($this->action == 'show' && isset($_GET['post'])) ? $_GET['post'] : '';

        $this->controller->$actionName($actionParam);
    }

    /**
     * initialize Service
     */
    private function initializeService() {
        $this->services = new ServiceController();
    }

    /**
     * initialize repository
     */
    private function initializeRepository() {
        $this->services = new BlogRepository($this->database, $this->request);
    }

    /**
     * get all theme css
     * @return array
     */
    private function getThemeStylsheets() {
        $cssRelPath = $this->settings['theme'] . '/Public/Stylesheets/';
        $cssAbsPath = THEMES_PATH . $cssRelPath;
        return $this->fetchFiles($cssAbsPath, 'css', $cssRelPath);
    }

    /**
     * get all theme js
     * @return array
     */
    private function getThemeJavascripts() {
        $jsRelPath = $this->settings['theme'] . '/Public/Javascripts/';
        $jsAbsPath = THEMES_PATH . $jsRelPath;
        return $this->fetchFiles($jsAbsPath, 'js', $jsRelPath);
    }

    /**
     * @param string $dir
     * @param string $type
     * @param string $relPath
     * @return array
     */
    protected function fetchFiles($dir, $type, $relPath) {
        $files = array();
        $handle = opendir($dir);

        while ($file = readdir($handle)) {
            if ($file != '.' && $file != '..') {
                $ext = explode('.', $file);

                if ($ext[1] == $type) {
                    $files[] = $this->settings['baseUrl'] . THEMES_REL_PATH . $relPath . $file;
                }
            }
        }

        return $files;
    }

    /**
     * generate log entry (notice, warn, error)
     *
     * @param string $type
     * @param string $message
     */
    public static function log($type, $message = '') {
        if (!is_dir(TEMP_PATH . 'SysLog/')) {
            mkdir(TEMP_PATH . 'SysLog', 0777);
        }

        $logFile = TEMP_PATH . 'SysLog/' . date('Y-m-d') . '_log.txt';
        $handle = fopen($logFile, 'a');

        fwrite($handle, $type . ' - ' . $message . "\r\n");
        fclose($handle);
    }

    /**
     * clear old logs
     *
     * @param integer $time
     * @todo implement
     */
    protected function cleanupLog($time) {

    }
}
