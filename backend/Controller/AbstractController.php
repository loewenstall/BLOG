<?php

namespace BLOG\backend\Controller;

abstract class AbstractController {

    /**
     * @var \TYPO3\Fluid\View\StandaloneView
     */
    public $view;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var \BLOG\core\Service\RequestService
     */
    protected $request;

    /**
     * @var \BLOG\core\Repository\BlogRepository
     */
    protected $blogRepository;

    /**
     * @var \BLOG\backend\Controller\SessionController
     */
    protected $session;

    /**
     * @var \BLOG\core\Service\PdoDbService
     */
    protected $database;

    /**
     * @var array
     */
    protected $sysConf;

    /**
     * @var array
     */
    protected $postData;

    /**
     * @var \BLOG\core\Service\LocallangService
     */
    protected $lllService;

    /**
     * @param string $action
     * @param \TYPO3\Fluid\View\StandaloneView $view
     * @param \BLOG\core\Service\RequestService $request
     * @param \BLOG\core\Service\MysqliDb $database
     * @param \BLOG\backend\Controller\SessionController $session
     * @param array $config
     */
    public function __construct($action, \TYPO3\Fluid\View\StandaloneView $view, $request, $database, $session, $config) {
        $this->action = $action;
        $this->view = $view;
        $this->request = $request;
        $this->database = $database;
        $this->session = $session;
        $this->sysConf = $config;
        $this->blogRepository = new \BLOG\backend\Repository\BlogRepository($database, $request);
        $this->postData = $_POST;

        if ($this->action != 'login' && $this->session->getSession() === false) {
            $this->redirect('login');
        } else {
            $this->initializeAction();
        }
    }

    /**
     * let controllers call a custom constructor
     */
    public function initializeAction() {
        $this->blogRepository = new \BLOG\core\Repository\BlogRepository($this->database, $this->request);
        $this->lllService = new \BLOG\core\Service\LocallangService($this->sysConf['language']);
    }

    /**
	 * backend login
     */
    public function loginAction() {
        if (isset($this->postData['user'])) {
            $username = $this->postData['user'];
            $password = $this->getSaltedPasswordString($this->postData['pass']);

            $dbUser = $this->getUserData($username);

            var_dump($dbUser);

            if ($dbUser === null) {
                $this->view->assign('login_error', 'User "' . $username . '" not found.');
            }

            if ($dbUser !== null && $dbUser['password'] != $password) {
                $this->view->assign('login_error', 'Wrong password.');
            }

            if ($dbUser !== null && $dbUser['password'] == $password) {
                $user = array(
                    'id' => $dbUser['id'],
                    'name' => $dbUser['name'],
                    'fullname' => $dbUser['fullname'],
                    'admin' => $dbUser['admin'],
                    'settings' => $dbUser['settings']
                );

                $this->session->initSession($user);
            }

            $this->redirect('dashboard');
        }
    }

    protected function editAction() {

    }

    protected function hideAction() {

    }


    protected function deleteAction() {

    }

    /**
     * get login user by username
     *
     * @param string $username
     * @return array
     */
    private function getUserData($username) {
		return $this->database->fetch($this->database->getQueryString('sys_user', '*', array('name' => $username)));
    }

    /**
     * @param string $password
     * @return string
     */
    protected function getSaltedPasswordString($password) {
        return crypt($password, '$2a$06$' . md5($password) . '$');
    }

    /**
     * set/override the action name
     *
     * @param string
     */
    public function setAction($name) {
        $this->action = $name;
    }

    /**
     * redirect to action/controller
     *
     * @param string $action
     * @param string $controller
     */
    protected function redirect($action, $controller = '') {
        if ($controller != '') {
            header('Location: index.php?controller=' . $controller . '&action=' . $action);
        } else {
            header('Location: index.php?action=' . $action);
        }
    }

    /**
     * @param string $message
     */
    private function log($message = '') {
        \BLOG\core\Engine::log('[BACKEND]', $message);
    }

    /**
     * render view in destruction
     */
    public function __destruct() {
        if ($this->view) {
            echo $this->view->render($this->action);
        } else {
            $this->log('No instance of view found in ' . __FILE__ . ' line ' . (__LINE__ - 3));
            //@todo throw exeption
        }
    }
}
