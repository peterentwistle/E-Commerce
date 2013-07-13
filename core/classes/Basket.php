<?php
class Basket {
	public function basketContents($itemArray, $items) {
		include_once("core/classes/Shop.php");
		$shop = new Shop;
		$currency = $shop->displayCurrency($currency);
		foreach ($itemArray as $itemId => $data) {
			$itemPrice = $shop->itemPrice($itemId, $items);
			$itemName = $shop->itemName($itemId, $items);
			echo '<p>Name: '.$itemName.' Item ID: '.$data['item-id'].' Quantity: '.$data['quantity'].
			' Price: '.$currency.$itemPrice * $data['quantity'].'</p>';
		}
	}
}
?>