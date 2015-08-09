<?php

namespace BLOG\backend\Repository;

class BlogRepository extends \BLOG\core\Abstracts\AbstractRepository {

	protected function initializeRepository() {
		$this->setTable('sys_post');
	}

	public function getLatestCommentWithPost(&$comment) {
        $post = $this->findByUid('*', $comment['post']);

        if (count($post) > 0) {
            $comment['post'] = $post;
        }

        return $comment;
    }
}
