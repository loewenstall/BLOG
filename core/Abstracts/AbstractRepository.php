<?php

namespace BLOG\core\Abstracts;

abstract class AbstractRepository {

	/**
	 * @var \BLOG\core\Service\PdoDbService
	 */
	public $db;

	/**
	 * @var \BLOG\core\Service\RequestService
	 */
	public $request;

	/**
	 * @var string
	 */
	public $table;

	/**
	 * @param string $database
	 * @param \BLOG\core\Service\RequestService $request
	 */
	function __construct($database, $request) {
		$this->db = $database;
		$this->request = $request;
		$this->initializeRepository();
	}

	protected function initializeRepository() {
		$this->table = $this->getTableByRepository();
	}

	/**
	 * returns all posts
	 *
	 * @param string $fields
	 * @param array $where
	 * @param string $orderby
	 * @param string $limit
	 * @return array
	 */
	public function findAll($fields = '*', $where = array(), $orderby = '', $limit = '') {
		return $this->db->fetchAll($this->db->getQueryString($this->table, $fields, $where , $orderby, $limit));
	}

	/**
	 * returns the last row
	 *
	 * @param string $fields
	 * @param array $where
	 * @return array
	 */
	public function findLatest($fields = '*', $where = array()) {
		return $this->db->lastRow($this->table, $fields, $where);
	}

	/**
	 * returns a single post
	 *
	 * @param string $fields
	 * @param integer $id
	 * @return array
	 */
	public function findByUid($fields = '*', $id) {
		return $this->db->fetch($this->db->getQueryString($this->table, $fields, array('id' => $id)));
	}

	/**
	 * @param string $table
	 */
	protected function setTable($table) {
		$this->table = $table;
	}

	/**
	 * @return string
	 */
	private function getTableByRepository() {
		$classPath = get_called_class();
		$parts = explode('\\', $classPath);
		$repository = explode('Repository', array_pop($parts));

		return 'sys_' . strtolower($repository[0]);
	}
}
