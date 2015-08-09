<?php

namespace BLOG\core\Service;

class PdoDbService extends \PDO {

	public function execute($query, $values = null){
		if ($values == null) {
			$values = array();
		} else if (!is_array($values)) {
			$values = array($values);
		}

		$stmt = $this->prepare($query);
		$stmt->execute($values);

		return $stmt;
	}

	public function fetch($query, $values = null){
		if ($values == null) {
			$values = array();
		} else if(!is_array($values)) {
			$values = array($values);
		}

		$stmt = $this->execute($query, $values);

		return $stmt->fetch(self::FETCH_ASSOC);
	}

	public function fetchAll($query, $values = null, $key = null){
		if ($values == null) {
			$values = array();
		} else if(!is_array($values)) {
			$values = array($values);
		}

		$stmt = $this->execute($query, $values);
		$results = $stmt->fetchAll(self::FETCH_ASSOC);

		// Allows the user to retrieve results using a
		// column from the results as a key for the array
		if ($key != null && $results[0][$key]){
			$keyed_results = array();

			foreach($results as $result){
				$keyed_results[$result[$key]] = $result;
			}

			$results = $keyed_results;
		}

		return $results;
	}

	/**
	 * @param null $name
	 * @return string
	 */
	public function getLastInsertId($name = null){
		return $this->lastInsertId($name);
	}

	/**
	 * @param string $table
	 * @param string $fields
	 * @param array $where
	 * @return array
	 */
	public function lastRow($table, $fields = '*', $where = array()) {
		return $this->fetch($this->getQueryString($table, $fields, $where, 'id', 1));
	}

	/**
	 * @param string $table
	 * @param array $fieldValues
	 */
	public function insert($table, $fieldValues) {
		$this->execute($this->getInsertQueryString($table, $fieldValues));
	}

	/**
	 * @param $table
	 * @param string $fields
	 * @param array $where
	 * @param string $orderby
	 * @param string $limit
	 * @return string
	 */
	public function getQueryString($table, $fields = '*', $where = array(), $orderby = '', $limit = '') {
		$queryString = "SELECT " . $fields . " FROM " . $table;

		if (count($where) > 0) {
			$count = 1;
			$queryString .= " WHERE ";

			foreach ($where as $field => $value) {
				$dbValue = (is_int($value)) ? $value : $this->quote($value);
				$and = ($count > 1) ? ' AND ' : '';
				$queryString .= $and . $field . ' = ' . $dbValue;
				$count++;
			}
		}

		if ($orderby != '') {
			$queryString .= " ORDER BY " . $orderby;
		}

		if ($limit != '') {
			$queryString .= " LIMIT " . $limit;
		}

		return $queryString;
	}

	public function getInsertQueryString($table, $fieldValues) {
		$insertData = '';
		$valuesData = '';
		$count = 1;

		foreach ($fieldValues as $field => $value) {
			$sep = ($count < count($fieldValues)) ? ',' : '';
			$insertData .= $field . $sep;
			$valuesData .= $this->quote($value) . $sep;
			$count++;
		}

		$queryString = "INSERT INTO " . $table . " (" . $insertData . ") VALUES (" . $valuesData . ")";

		return $queryString;
	}
}
