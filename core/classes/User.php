<?php
class User {
	public function DoLogin($username, $password) {
		require_once("/inc/includes.php");
		global $dbcon;
		$userToken = GenerateToken();
	}
	public function DoLogout($token) {
		require_once("/inc/includes.php");
		global $dbcon;
	}
	public function CheckToken($token) {
		require_once("inc/includes.php");
		global $dbcon;
		$sql = "SELECT Token FROM logintokens WHERE Token='{$token}'";
		$result = $dbcon->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				//TODO: Make it so that there is a token expiry time
				return true;
			}
		} else {
			return false;
		}
	}
	public function GenerateToken() {
		require_once("/inc/includes.php");
		global $dbcon;
		$token = md5(microtime());
		$sql = "SELECT Token FROM logintokens WHERE Token='{$token}'";
		$result = $dbcon->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				return GenerateToken();
			}
		} else {
			return $token;
		}
	}
}
?>