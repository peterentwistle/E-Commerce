<?php
class Shop {

	public function listItems($itemArray, $currency) {
		foreach ($itemArray as $itemId => $item) {
			echo '<p><a href="/shop.php?item='.$itemId.'">'.$item["name"].
			' costs: '.$this->displayCurrency($currency).$item["price"].'<a></p>';
		}
	}

	public function displayItemDetails($itemId, $items) {
		$item = $items[$itemId];
		$details = '';
		$details .= '<h1>'.$item["name"].'</h1>';
		$details .= '<p id="item-description">'.$item["description"].'</p>';
		$details .= '<p id="item-price">'.$this->displayCurrency($currency).$item["price"].'</p>';
		return $details;
	}

	public function itemName($itemId, $items) {
		$item = $items[$itemId];
		return $item["name"];
	}

	public function itemPrice($itemId, $items) {
		$item = $items[$itemId];
		return $item["price"];
	}

	public function addItemToBasket($itemId, $quantity, $basketSession) {
		if (!isset($basketSession)) {
			$basket = array();
		} else {
			$basket = $basketSession;
		}
		$basket[$itemId] = array("item-id" => $itemId,
								"quantity" => $quantity);
		$_SESSION['basketSession'] = $basket;
	}

	public function displayCurrency($currency) {
		switch ($currency) {
			case 'GBP':
				return "£";
				break;
			case 'USD':
				return "$";
				break;
			case 'EUR':
				return "€";
				break;
			default:
				return "£";
				break;
		}
	}
}
?>