<?php

namespace BLOG\backend\Controller;

class BackendController extends \BLOG\backend\Controller\AbstractController {

    /**
     * @param string $action
     * @param \TYPO3\Fluid\View\StandaloneView $view
     * @param \BLOG\core\Service\RequestService $request
     * @param \BLOG\core\Service\MysqliDb $database
     * @param SessionController $session
     * @param array $config
     */
    function __construct($action, \TYPO3\Fluid\View\StandaloneView $view, $request, $database, $session, $config) {
        parent::__construct($action, $view, $request, $database, $session, $config);
    }

    /**
	 *
     */
    public function dashboardAction() {
        $session = $this->session->getSession();
        $postCount = $this->blogRepository->findAll('sys_post', 'count(*) cnt', array('storage' => 'post'));
        $hiddenPostcount = $this->blogRepository->findAll('sys_post', 'count(*) cnt', array('storage' => 'post', 'hidden' => 1));
        $publicPostcount = $this->blogRepository->findAll('sys_post', 'count(*) cnt', array('storage' => 'post', 'hidden' => 0));
        $trash = $this->blogRepository->findAll('sys_post', 'count(*)', array('storage' => 'trash'));
        $commentCount = $this->blogRepository->findAll('sys_comment', 'count(*) cnt');
        $latestPost = $this->blogRepository->findLatest('sys_post', '*', array('hidden' => 0));

        $this->view->assignMultiple(
            array(
                'user' => $session['user'],
                'postCount' => $postCount[0]['cnt'],
                'commentCount' => $commentCount[0]['cnt'],
                'hiddenPostCount' => $hiddenPostcount[0]['cnt'],
                'publicPostCount' => $publicPostcount[0]['cnt'],
                'trash' => $trash[0]['count(*)'],
                'latestPost' => $latestPost
            )
        );
    }

    /**
     * user profile
     */
    public function profileAction() {
    }

    /**
     * blog settings
     */
    public function settingsAction() {
    }

    /**
     * logout
     */
    public function logoutAction() {
        $this->session->logout();
        $this->redirect('login');
    }
}
