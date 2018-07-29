<?php 
namespace App\Tests\Sample1;

use PHPUnit\Framework\TestCase;
use App\Sample1\Hsinchu;

class HsinchuTest extends TestCase {

	public function testCalculateFee_WeightIs10_Return230() {
		$hsinchu = new Hsinchu();
		$result = $hsinchu->calculateFee(10);
		$this->assertEquals(230, $result);
	}
}