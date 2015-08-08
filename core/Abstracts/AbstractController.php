<?php

namespace BLOG\core\Abstracts;

abstract class AbstractController implements \BLOG\core\Interfaces\ControllerInterface {

    /**
     * @var string
     */
    protected $action;

    /**
     * @var \TYPO3\Fluid\View\StandaloneView
     */
    public $view;

    /**
     * @var \BLOG\core\Service\RequestService
     */
    protected $request;

    /**
     * @var array
     */
    protected $sysConf;

    /**
     * @var \BLOG\core\Repository\PostRepository
     */
    protected $postRepository;

    /**
     * @param string $action
     * @param \TYPO3\Fluid\View\StandaloneView $view
     * @param \BLOG\core\Service\RequestService $request
     * @param \BLOG\core\Service\MysqliDb $database
     * @param array $config
     */
    public function __construct($action, \TYPO3\Fluid\View\StandaloneView $view, $request, $database, $config) {
        $this->action = $action;
        $this->view = $view;
        $this->request = $request;
        $this->sysConf = $config;
        $this->postRepository = new \BLOG\core\Repository\PostRepository($database, $request);

        $this->initializeAction();
    }

    /**
     * let controllers call a custom constructor
     */
    public function initializeAction() {}

    /**
     * @param string $message
     */
    private function log($message = '') {
        \BLOG\core\Engine::log('[CONTROLLER]', $message);
    }

    /**
     * render view in destruction
     */
    public function __destruct() {
        if ($this->view) {
            echo $this->view->render($this->action);
        } else {
            $this->log('No instance of view found in ' . __FILE__ . ' line ' . (__LINE__ - 3));
        }
    }
} 
