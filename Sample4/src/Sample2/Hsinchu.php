<?php 
namespace App\Sample2;

use App\Sample2\LogisticsInterface;

class Hsinchu implements LogisticsInterface {

	public function calculateFee($weight) {
		return 80 + $weight * 15;
	}
}