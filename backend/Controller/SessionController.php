<?php

namespace BLOG\backend\Controller;

class SessionController {

	/**
	 * @var boolean
	 */
	private $login;

	public function getLogin() {
		return $this->login;
	}

    public function getSession() {
		return (isset($_SESSION['BLOG_backend'])) ? $_SESSION['BLOG_backend'] : false;
	}

	/**
	 * @param array $user
	 */
	public function initSession($user) {
		$_SESSION['BLOG_backend'] = array(
			'user' => $user
		);
	}

	public function updateSessionData($key, $data) {
		if (!isset($_SESSION['BLOG_backend'])) {
			return false;
		}

		$_SESSION['BLOG_backend'][$key] = $data;
	}

	public function getSessionData($key) {
		if (!isset($_SESSION['BLOG_backend'])) {
			return false;
		}

		return $_SESSION['BLOG_backend'][$key];
	}

	public function removeSessionData($key) {
		if (!isset($_SESSION['BLOG_backend'])) {
			return false;
		}

		unset($_SESSION['BLOG_backend'][$key]);
	}

	public function logout() {
		$this->removeSessionData('user');
		session_destroy();
	}
}
