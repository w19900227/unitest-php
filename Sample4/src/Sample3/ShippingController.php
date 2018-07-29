<?php 
namespace App\Sample3;

use App\Sample3\ShippingService;
use App\Sample3\BlackCat;
use App\Sample3\Hsinchu;
use App\Sample3\PostOffice;

class ShippingController {

	public function calculateFeeBlackCat($weight) {
		$shippingService = new ShippingService(new BlackCat());
		return $shippingService->calculateFee($weight);
	}

	public function calculateFeeHsinchu($weight) {
		$shippingService = new ShippingService(new Hsinchu());
		return $shippingService->calculateFee($weight);
	}
	
	public function calculateFeePostOffice($weight) {
		$shippingService = new ShippingService(new PostOffice());
		return $shippingService->calculateFee($weight);
	}
}