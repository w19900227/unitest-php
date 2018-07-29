<?php 
namespace App\Sample3;

use App\Sample3\LogisticsInterface;

class PostOffice implements LogisticsInterface {
	
	public function calculateFee($weight) {
		return 70 + $weight * 20;
	}
}