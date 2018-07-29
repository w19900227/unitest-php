<?php 
namespace App\Sample2;

use App\Sample2\LogisticsInterface;

class BlackCat implements LogisticsInterface {
	
	public function calculateFee($weight) {
		return 100 + $weight * 10;
	}
}