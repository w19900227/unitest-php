<?php 
namespace App\Sample1;

class PostOffice {
	
	public function calculateFee($weight) {
		return 70 + $weight * 20;
	}
}