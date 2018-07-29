<?php 
namespace App\Tests\Sample1;

use PHPUnit\Framework\TestCase;
use App\Sample1\BlackCat;

class BlackCatTest extends TestCase {
	public function testCalculateFee_WeightIs10_Return200() {
		$blackCat = new BlackCat();
		$result = $blackCat->calculateFee(10);
		$this->assertEquals(200, $result);
	}
}