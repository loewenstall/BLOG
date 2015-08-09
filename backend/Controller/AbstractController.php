<?php

namespace BLOG\backend\Controller;

abstract class AbstractController {

    /**
     * @var string
     */
    private $action;

    /**
     * @var \TYPO3\Fluid\View\StandaloneView
     */
    public $view;

    /**
     * @var \BLOG\core\Service\RequestService
     */
    protected $request;

    /**
     * @var \BLOG\core\Service\PdoDbService
     */
    protected $database;

    /**
     * @var \BLOG\backend\Controller\SessionController
     */
    protected $session;

    /**
     * @var array
     */
    protected $sysConf;

    /**
     * @var \BLOG\core\Repository\BlogRepository
     */
    protected $blogRepository;

    /**
     * @var \BLOG\core\Repository\PostRepository
     */
    protected $postRepository;

    /**
     * @var \BLOG\core\Repository\CommentRepository
     */
    protected $commentRepository;

    /**
     * @var \BLOG\core\Repository\CategoryRepository
     */
    protected $categoryRepository;

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
        $this->postRepository = new \BLOG\core\Repository\PostRepository($this->database, $this->request);
        $this->commentRepository = new \BLOG\core\Repository\CommentRepository($database, $request);
        $this->categoryRepository = new \BLOG\core\Repository\CategoryRepository($database, $request);
        $this->postData = $_POST;

        if ($this->action != 'login' && $this->session->getSession() === false) {
            $this->redirect('login');
        } else {
            $this->initializeAction();

            $caller = get_called_class();

            if (function_exists($caller::initializeAction())) {
                $caller::initializeAction();
            }
        }
    }

    /**
     * let controllers call a custom constructor
     */
    public function initializeAction() {
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
     * @todo implement salted passwords (while a user is created)
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
     * get current action name
     *
     * @return string
     */
    public function getAction() {
        return $this->action;
    }

    protected function validateNewPost() {
        $postData = $this->session->getSessionData('post');
        $newPost = $postData['new_post'];
        $newPost['errors'] = null;
        $errorCount = 0;

        if (strlen($newPost['title']) == 0) {
            $newPost['errors']['title'] = true;
            $errorCount++;
        }

        if (strlen($newPost['content']) == 0) {
            $newPost['errors']['content'] = true;
            $errorCount++;
        }

        if ($errorCount > 0) {
            $this->session->updateSessionData('post', $newPost);
            $this->redirect('new', 'Post');
        } else {
            $this->saveAndCleanup($newPost);
        }
    }

    private function saveAndCleanup($newPost) {
        $this->blogRepository->add($this->finishPost($newPost));
        $this->session->removeSessionData('post');
        $this->redirect('dashboard', 'Backend');
    }

    /**
     * finish post and set some extra data
     *
     * @param $postData
     * @return mixed
     */
    private function finishPost($postData) {
        unset($postData['errors']);

        $date = new \DateTime();

        $postData['crdate'] = $date->format('Y-m-d H:i:s');
        $postData['modified'] = $date->format('Y-m-d H:i:s');
        $postData['author'] = $this->session->getUserId();

        return $postData;
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
            if ($this->action != 'create') {
                echo $this->view->render($this->action);
            }
        } else {
            $this->log('No instance of view found in ' . __FILE__ . ' line ' . (__LINE__ - 3));
            //@todo throw exeption
        }
    }
}
