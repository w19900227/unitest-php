<?php 
namespace App\Tests\Sample2;

use PHPUnit\Framework\TestCase;
use App\Sample2\LogisticsFactory;

class LogisticsFactoryTest extends TestCase {

	public function setUp() {
		$this->shippingService = new LogisticsFactory();
	}

	public function testCreateInputBlackCat_ReturnBlackCatClass() {
		$result = $this->shippingService->create('BlackCat');

		$this->assertInstanceOf(\App\Sample2\BlackCat::class, $result);
		$this->assertContainsOnlyInstancesOf(\App\Sample2\BlackCat::class, [ $result ]);
	}

	public function testCreateInputHsinchu_ReturnHsinchuClass() {
		$result = $this->shippingService->create('Hsinchu');

		$this->assertInstanceOf(\App\Sample2\Hsinchu::class, $result);
		$this->assertContainsOnlyInstancesOf(\App\Sample2\Hsinchu::class, [ $result ]);
	}
	
	public function testCreateInputPostOffice_ReturnPostOfficeClass() {
		$result = $this->shippingService->create('PostOffice');

		$this->assertInstanceOf(\App\Sample2\PostOffice::class, $result);
		$this->assertContainsOnlyInstancesOf(\App\Sample2\PostOffice::class, [ $result ]);
	}
	
	/**
	* @expectedException Exception
	* @expectedExceptionMessage No company exception
	* @expectedExceptionCode 999
	*/
	public function testCreateWithoutCompanyName_ReturnException() {
		$this->shippingService->create('exception');
	}
}