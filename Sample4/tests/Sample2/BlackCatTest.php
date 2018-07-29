<?php 
namespace App\Tests\Sample2;

use PHPUnit\Framework\TestCase;
use App\Sample2\BlackCat;

class BlackCatTest extends TestCase {

	public function setUp() {
		$this->blackCat = new BlackCat();
	}

	public function testCalculateFee_WeightIs10_Return200() {
		$result = $this->blackCat->calculateFee(10);
		$this->assertEquals(200, $result);
	}

	public function testClassBlackCat_ReturnLogisticsInterface() {
		$this->assertInstanceOf(\App\Sample2\LogisticsInterface::class, $this->blackCat);
		$this->assertContainsOnlyInstancesOf(\App\Sample2\LogisticsInterface::class, [ $this->blackCat ]);
	}
}