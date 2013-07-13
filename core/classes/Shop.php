<?php
class Shop {
	public function listItems($itemArray, $currency) {
		foreach ($itemArray as $item) {
			echo "<p>The ".$item["name"]." costs: ".$this->displayCurrency($currency).$item["price"]."</p>";
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