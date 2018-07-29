<?php 
namespace App\Tests\Sample1;

use PHPUnit\Framework\TestCase;
use App\Sample1\PostOffice;

class PostOfficeTest extends TestCase {
	
	public function testCalculateFee_WeightIs10_Return270() {
		$postOffice = new PostOffice();
		$result = $postOffice->calculateFee(10);
		$this->assertEquals(270, $result);
	}
}