<?php

namespace BLOG\backend\Repository;

class BlogRepository extends \BLOG\core\Abstracts\AbstractRepository {

	protected function initializeRepository() {
		$this->setTable('sys_post');
	}
}
