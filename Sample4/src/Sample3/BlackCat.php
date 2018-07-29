<?php 
namespace App\Sample3;

use App\Sample3\LogisticsInterface;

class BlackCat implements LogisticsInterface {
	
	public function calculateFee($weight) {
		return 100 + $weight * 10;
	}
}