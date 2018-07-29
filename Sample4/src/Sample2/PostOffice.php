<?php 
namespace App\Sample2;

use App\Sample2\LogisticsInterface;

class PostOffice implements LogisticsInterface {
	
	public function calculateFee($weight) {
		return 70 + $weight * 20;
	}
}