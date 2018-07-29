<?php 
namespace App\Sample3;

use App\Sample3\LogisticsFactory;

class ShippingService {

	private $logistics;

	/**
	 * ShippingService constructor.
	 * @param LogisticsInterface $logistics
	 */
	public function __construct(LogisticsInterface $logistics) {
		$this->logistics = $logistics;
	}

	public function calculateFee($weight) {
		return $this->logistics->calculateFee($weight) + 100;
	}
}