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