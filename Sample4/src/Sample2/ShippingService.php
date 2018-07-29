<?php 
namespace App\Sample2;

use App\Sample2\LogisticsFactory;

class ShippingService {

	public function calculateFee($companyName, $weight) {
		$logisticsFactory = new LogisticsFactory();
		$logistics = $logisticsFactory->create($companyName);
		return $logistics->calculateFee($weight);
	}
}