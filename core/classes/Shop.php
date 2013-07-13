<?php
class Shop {

	public function listItems($itemArray, $currency, $currency_format) {
		foreach ($itemArray as $itemId => $item) {
			echo '<p><a href="/shop.php?item='.$itemId.'">'.$item["name"].
			' costs: '.$this->displayCurrency($currency).
			$this->currencyFormat($currency_format, $item["price"]).'<a></p>';
		}
	}

	public function displayItemDetails($itemId, $items, $currency, $currency_format) {
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

	public function itemPrice($itemId, $items, $currency_format) {
		$item = $items[$itemId];
		return $this->currencyFormat($currency_format, $item["price"]);
	}

	public function addItemToBasket($itemId, $quantity, $basketSession, $items) {
		if (!isset($basketSession)) {
			$basket = array();
		} else {
			$basket = $basketSession;
		}
		$total = $this->itemPrice($itemId, $items, $currency_format) * $quantity;
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
				$formattedCurrency = number_format($number, 2, '.', ',');
				return $formattedCurrency;
				break;
			case 'european':
				$formattedCurrency = number_format($number, 2, ',', '.');
				return $formattedCurrency;
				break;
			case 'eng_without_thous':
				$formattedCurrency = number_format($number, 2, '.', '');
				return $formattedCurrency;
				break;
			default:
				$formattedCurrency = number_format($number, 2, '.', ',');
				return $formattedCurrency;
				break; 
		}
	}

}
?>