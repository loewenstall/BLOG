<?php

namespace BLOG\core\Controller;

class BlogController extends \BLOG\core\Abstracts\AbstractController {

    /**
     * returns a list of posts
     */
    public function listAction() {
        $posts = $this->blogRepository->findAll('sys_post', '*');
        $this->view->assign('posts', $posts);
    }

    /**
     * returns a single post
     *
     * @param $post
     */
    public function showAction($post) {
        $this->view->assign('post', $this->blogRepository->findByUid('sys_post', $post));
    }
}
