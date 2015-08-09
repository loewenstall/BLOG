<?php

namespace BLOG\backend\Controller;

class PostController extends \BLOG\backend\Controller\BackendController {

    /**
	 * list all posts
     */
    public function listAction() {
        $posts = $this->blogRepository->findAll();
        $this->view->assign('posts', $posts);
    }

    /**
     * @param integer $post
     */
    public function editAction($post) {
        $post = $this->blogRepository->findByUid('*', $post);
        $this->view->assign('post', $post);
    }

    /**
     */
    public function newAction() {
        $this->view->assignMultiple(
            array(
                'categories' => $this->categoryRepository->findAll(),
                'post' => $this->session->getSessionData('post')
            )
        );
    }

    public function createAction() {
        echo 'foo';
    }
}
