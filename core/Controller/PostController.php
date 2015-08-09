<?php

namespace BLOG\core\Controller;

class PostController extends \BLOG\core\Abstracts\AbstractController {

    /**
     * returns a list of posts
     */
    public function listAction() {
        $posts = $this->postRepository->findAll('*', array('hidden' => 0), 'crdate DESC');
        $this->view->assign('posts', $posts);
    }

    /**
     * returns a single post
     *
     * @param integer $postId
     */
    public function showAction($postId) {
        $this->view->assign('post', $this->postRepository->findCommentedByUid('*', $postId));
    }
}
