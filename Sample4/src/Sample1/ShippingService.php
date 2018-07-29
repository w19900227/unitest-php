<?php 
namespace App\Sample1;

use App\Sample1\BlackCat;
use App\Sample1\Hsinchu;
use App\Sample1\PostOffice;

class ShippingService {
	public function calculateFee($companyName , $weight) {
		switch ($companyName) {
			case 'BlackCat':
				$blackCat = new BlackCat();
				return $blackCat->calculateFee($weight);
			case 'Hsinchu':
				$hsinchu = new Hsinchu();
				return $hsinchu->calculateFee($weight);
			case 'PostOffice':
				$postOffice = new PostOffice();
				return $postOffice->calculateFee($weight);
			default:
				throw new \Exception('No company exception', 999);
		}
	}
}