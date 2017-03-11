<?php
class Item {
	public function LoadItem($id) {
		require_once("/inc/includes.php");
		global $dbcon;
		$sql = "SELECT id, Name, Type, Quantity FROM items WHERE id='{$id}'";
		$result = $dbcon->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$item[0] = $row["id"];
				$item[1] = $row["Name"];
				$item[2] = $row["Type"];
				$item[3] = $row["Quantity"];
				$item[4] = $row["Enabled"];
			}
		} else {
			$item[0] = -1;
			$item[1] = "NULL";
			$item[2] = -1;
			$item[3] = -1;
			$item[4] = -1;
		}
		return $item;
	}
}
?>