<?php

namespace BLOG\core;

use \BLOG\backend\Controller\CategoryController,
    \BLOG\backend\Controller\PageController,
    \BLOG\backend\Controller\PluginController,
    \BLOG\backend\Controller\SessionController,
    \BLOG\core\Service\RequestService,
    \BLOG\core\Service\LocallangService,
    \BLOG\core\Service\MysqliDb,
    \BLOG\core\Service\PdoDbService;

class Backend extends Engine {

    /**
     * @var \BLOG\core\Service\PdoDbService
     */
    protected $database;

    /**
     * @var string
     */
    protected $controller;

    /**
     * @var \BLOG\backend\Controller\SessionController
     */
    protected $session;

    /**
     * @var \BLOG\core\Service\LocallangService
     */
    protected $lllService;

    function __construct($settings) {
        $this->initializePage($settings);
        $this->initializeDatabase();
        $this->initializeController();
    }

    /**
     * initialize page configuration
     *
     * @param array $settings
     * @todo get $settings from database
     */
    private function initializePage($settings) {
        $this->confPath = $_SERVER['DOCUMENT_ROOT'] . '/system/configuration/';
        $this->session = new SessionController();
        $this->request = new RequestService();
        $this->action = ($this->request->hasArgmunet('action')) ? strtolower($this->request->getArgmunet('action')) : 'dashboard';
        $this->controller = ($this->request->hasArgmunet('controller')) ? $this->request->getArgmunet('controller') : 'Backend';
        $this->sysConf = json_decode(file_get_contents($this->confPath . 'default.json'), true);
        $this->settings = array_merge($settings, $this->sysConf['public']);
        $this->lllService = new LocallangService($this->sysConf['language'], true);

        $this->includes = array();
        $this->domains = array();

        $this->initializeView('/Private/Templates', '/Private/Layouts', '/Private/Partials');

        $this->view->assignMultiple(
            array(
                'settings' => array_merge($this->settings, array('action' => $this->action, 'controller' => $this->controller)),
                'version' => $this->version,
                'language' => $this->sysConf['language']['default']
            )
        );
    }

    /**
     * initialize the database object
     * see https://github.com/joshcam/PHP-MySQLi-Database-Class
     * @todo make port (and charset?) configurable
     */
    public function initializeDatabase_OLD() {
        require_once (CORE_PATH . 'Service/MysqliDb.php');
        $dbSettings = $this->sysConf['database'];
        $this->database = new PdoDbService(
            array(
                'host' => $dbSettings['db_host'],
                'username' => $dbSettings['db_user'],
                'password' => $dbSettings['db_password'],
                'db'=> $dbSettings['db_name'],
                'port' => 3306,
                'charset' => 'utf8'
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
     */
    private function initializeView($templatePath, $layoutPath, $partialPath) {
        require_once VIEW_PATH . '/Scripts/fluid.php';

        $this->view = new \TYPO3\Fluid\View\StandaloneView();

        $this->view->setTemplateRootPath(BACKEND_CORE_PATH . 'View' . $templatePath);
        $this->view->setLayoutRootPath(BACKEND_CORE_PATH . 'View' . $layoutPath);
        $this->view->setPartialRootPath(BACKEND_CORE_PATH . 'View' . $partialPath);

        $this->view->getTemplateContext()->setControllerName($this->controller);
        $this->view->getTemplateContext()->setControllerActionName($this->action);
        $this->view->getTemplateContext()->setFormat('html');
    }

    /**
     * initialize called controller
     * @todo throw exeption if classname doesn't exist or is not loaded
     */
    private function initializeController() {
        $controllerClassName = '\\BLOG\\backend\\Controller\\' . ucfirst($this->controller) . 'Controller';
        $this->controller = new $controllerClassName($this->action, $this->view, $this->request, $this->database, $this->session, $this->sysConf);

        $actionName = $this->action . 'Action';

        if ($this->action == 'edit' || $this->action == 'show') {
            if ($this->request->hasArgmunet('post')) {
                $param = $this->request->getArgmunet('post');
            }

            if ($this->request->hasArgmunet('Post')) {
                $param = $this->request->getArgmunet('Post');
            }

            $this->controller->$actionName($param);
        } else {
            $this->controller->$actionName();
        }
    }
}
