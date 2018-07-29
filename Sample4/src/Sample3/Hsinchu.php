<?php 
namespace App\Sample3;

use App\Sample3\LogisticsInterface;

class Hsinchu implements LogisticsInterface {

	public function calculateFee($weight) {
		return 80 + $weight * 15;
	}
}