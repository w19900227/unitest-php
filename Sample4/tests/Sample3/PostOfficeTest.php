<?php 
namespace App\Tests\Sample3;

use PHPUnit\Framework\TestCase;
use App\Sample3\PostOffice;

class PostOfficeTest extends TestCase {

	public function setUp() {
		$this->postOffice = new PostOffice();
	}
	
	public function testCalculateFee_WeightIs10_Return270() {
		$result = $this->postOffice->calculateFee(10);
		$this->assertEquals(270, $result);
	}

	public function testClassPostOffice_ReturnLogisticsInterface() {
		$this->assertInstanceOf(\App\Sample3\LogisticsInterface::class, $this->postOffice);
		$this->assertContainsOnlyInstancesOf(\App\Sample3\LogisticsInterface::class, [ $this->postOffice ]);
	}
}