<?php

namespace FOO\Controller;

use BLOG\core\Controller\AbstractController;

class TestController extends AbstractController {

	function initializeController() {
		die('foo');
	}
}
