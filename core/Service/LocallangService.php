<?php

namespace BLOG\core\Service;

class LocallangService {
	function __construct($language, $backend = false) {
		$this->language = $language['default'];
		$this->langFilePath = 'language/';

		if ($backend === true) {
			$this->langFilePath .= 'backend/';
		}
	}

	/**
	 * @param string $lang
	 * @param string $key
	 */
	public function getTranslation($lang, $key) {

	}
}
