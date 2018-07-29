<?php 
namespace App\Tests\Sample3;

use PHPUnit\Framework\TestCase;
use App\Sample3\Hsinchu;

class HsinchuTest extends TestCase {

	public function setUp() {
		$this->hsinchu = new Hsinchu();
	}

	public function testCalculateFee_WeightIs10_Return230() {
		$result = $this->hsinchu->calculateFee(10);
		$this->assertEquals(230, $result);
	}

	public function testClassHsinchu_ReturnLogisticsInterface() {
		$this->assertInstanceOf(\App\Sample3\LogisticsInterface::class, $this->hsinchu);
		$this->assertContainsOnlyInstancesOf(\App\Sample3\LogisticsInterface::class, [ $this->hsinchu ]);
	}
}