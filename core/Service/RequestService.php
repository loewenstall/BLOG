<?php

namespace BLOG\core\Service;

class RequestService {
	function __construct() {

	}

	public function getArgmunets() {
        return $_GET;
    }

    public function getArgmunet($name) {
        return $_GET[$name];
    }

    public function hasArgmunet($name) {
        return isset($_GET[$name]);
    }
}
