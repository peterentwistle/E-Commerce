<?php
class Shop {

	public function listItems($itemArray, $currency) {
		foreach ($itemArray as $itemId => $item) {
			echo '<p><a href="/shop.php?item='.$itemId.'">'.$item["name"].
			' costs: '.$this->displayCurrency($currency).
			$this->currencyFormat($currency_format, $item["price"]).'<a></p>';
		}
	}

	public function displayItemDetails($itemId, $items) {
		$item = $items[$itemId];
		$details = '';
		$details .= '<h1>'.$item["name"].'</h1>'."\n";
		$details .= '<p id="item-description">'.$item["description"].'</p>'."\n";
		$details .= '<p id="item-price">'.$this->displayCurrency($currency).
			$this->currencyFormat($currency_format, $item["price"]).'</p>'."\n";
		return $details;
	}

	public function itemName($itemId, $items) {
		$item = $items[$itemId];
		return $item["name"];
	}

	public function itemPrice($itemId, $items) {
		$item = $items[$itemId];
		return $this->currencyFormat($currency_format, $item["price"]);
	}

	public function addItemToBasket($itemId, $quantity, $basketSession, $items) {
		if (!isset($basketSession)) {
			$basket = array();
		} else {
			$basket = $basketSession;
		}
		$total = $this->itemPrice($itemId, $items) * $quantity;
		$basket[$itemId] = array("item-id" => $itemId,
								"quantity" => $quantity,
								"price" => $total);
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

	public function currencyFormat($currency_format, $number) {

		switch ($currency_format) {
			case 'english':
				$currencyFormat = number_format($number, 2, '.', ',');
				return $currencyFormat;
				break;
			case 'european':
				$currencyFormat = number_format($number, 2, ',', '.');
				return $currencyFormat;
				break;
			case 'eng_without_thous':
				$currencyFormat = number_format($number, 2, '.', '');
				return $currencyFormat;
				break;
			default:
				$currencyFormat = number_format($number, 2, '.', ',');
				return $currencyFormat;
				break;
		}
	}

}
?>