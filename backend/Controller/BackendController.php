<?php

namespace BLOG\backend\Controller;

class BackendController extends \BLOG\backend\Controller\AbstractController {

    public function initializeAction() {
        $session = $this->session->getSession();
        $this->view->assign('user', $session['user']);

        if ($this->getAction() == 'create') {
            $this->session->updateSessionData('post', $this->postData);
            $this->validateNewPost();
        }
    }

    /**
	 * shows the dashboard
     */
    public function dashboardAction() {
        $hiddenPostcount = $this->blogRepository->findAll('count(*) as cnt', array('storage' => 'post', 'hidden' => 1));
        $draftPostcount = $this->blogRepository->findAll('count(*) as cnt', array('storage' => 'draft'));
        $publicPostcount = $this->blogRepository->findAll('count(*) as cnt', array('storage' => 'post', 'hidden' => 0));
        $trash = $this->blogRepository->findAll('count(*)', array('storage' => 'trash'));
        $commentCount = $this->commentRepository->findAll('count(*) cnt');
        $latestPost = $this->blogRepository->findLatest('*', array('hidden' => 0));
        $latestComment = $this->blogRepository->getLatestCommentWithPost($this->commentRepository->findLatest('*', array('hidden' => 0)));

        $this->view->assignMultiple(
            array(
                'commentCount' => $commentCount[0]['cnt'],
                'hiddenPostCount' => $hiddenPostcount[0]['cnt'],
                'draftPostcount' => $draftPostcount[0]['cnt'],
                'publicPostCount' => $publicPostcount[0]['cnt'],
                'trash' => $trash[0]['count(*)'],
                'latestPost' => $latestPost,
                'latestComment' => $latestComment
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
