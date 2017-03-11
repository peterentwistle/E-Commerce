<?php
class User {
	public function DoLogin($username, $password) {
		require_once("/inc/includes.php");
		global $dbcon;
	}
	public function DoLogout($token) {
		require_once("/inc/includes.php");
		global $dbcon;
	}
	public function GenerateToken() {
		require_once("/inc/includes.php");
		global $dbcon;
	}
}
?>