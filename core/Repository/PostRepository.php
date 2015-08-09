<?php

namespace BLOG\core\Repository;

class PostRepository extends \BLOG\core\Abstracts\AbstractRepository {

	/**
	 * returns a single post
	 *
	 * @param string $fields
	 * @param integer $id
	 * @return array
	 */
	public function findCommentedByUid($fields = '*', $id) {
		$post = $this->db->fetch($this->db->getQueryString($this->table, $fields, array('id' => $id)));
		return $this->fetchComments($post);
	}

	/**
	 * check for post comments and add them to the post
	 *
	 * @param array $post
	 * @return array
	 */
	private function fetchComments(&$post) {
		$comments = $this->db->fetchAll($this->db->getQueryString('sys_comment', '*', array('post' => $post['id'])));

		if (count($comments) > 0) {
			$post['comments'] = $comments;
		}

		return $post;
	}
}
