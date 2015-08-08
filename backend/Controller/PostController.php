<?php

namespace BLOG\backend\Controller;

class PostController extends \BLOG\backend\Controller\AbstractController {

    function __construct($action, \TYPO3\Fluid\View\StandaloneView $view, $request, $database, $session, $config) {
        parent::__construct($action, $view, $request, $database, $session, $config);
    }

    /**
	 * list all posts
     */
    public function listAction() {
        $posts = $this->blogRepository->findAll('sys_post', '*');
        $this->view->assign('posts', $posts);
    }

    /**
     * @param integer $post
     */
    public function editAction($post) {
        $post = $this->blogRepository->findByUid('sys_post', '*', $post);
        $this->view->assign('post', $post);
    }

    /**
	 *
     */
    public function newAction() {
    }
}
