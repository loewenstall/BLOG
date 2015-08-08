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
	 * @param string $database
	 * @param \BLOG\core\Service\RequestService $request
	 */
	function __construct($database, $request) {
		$this->db = $database;
		$this->request = $request;
	}

	/**
	 * returns all posts
	 *
	 * @param string $table
	 * @param string $fields
	 * @param array $where
	 * @param string $orderby
	 * @param string $limit
	 * @return array
	 */
	public function findAll($table, $fields = '*', $where = array(), $orderby = '', $limit = '') {
		return $this->db->fetchAll($this->db->getQueryString($table, $fields, $where , $orderby, $limit));
	}

	/**
	 * returns the last row
	 *
	 * @param string $table
	 * @param string $fields
	 * @param array $where
	 * @return array
	 */
	public function findLatest($table, $fields = '*', $where = array()) {
		return $this->db->lastRow($table, $fields, $where);
	}

	/**
	 * returns a single post
	 *
	 * @param string $table
	 * @param string $fields
	 * @param integer $id
	 * @return array
	 */
	public function findByUid($table, $fields = '*', $id) {
		return $this->db->fetch($this->db->getQueryString($table, $fields, array('id' => $id)));
	}
}
