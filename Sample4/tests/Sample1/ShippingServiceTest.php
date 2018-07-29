<?php 
namespace App\Tests\Sample1;

use PHPUnit\Framework\TestCase;
use App\Sample1\ShippingService;

class ShippingServiceTest extends TestCase {

	/**
	* @expectedException Exception
	* @expectedExceptionMessage No company exception
	* @expectedExceptionCode 999
	*/
	public function testCalculateFeeWithoutCompanyName_ReturnException() {
		$shippingService = new ShippingService();
		$shippingService->calculateFee('exception', 100);
	}

	public function testShippingService_MethodCalculateFee() {
		// $mock = $this->createMock(\App\Sample1\ShippingService::class)->getMock();
		// $mock = $this->getMock('\App\Sample1\ShippingService');
		$mock = $this->getMock(ShippingService::class);

		$mock->method('calculateFee')
			// ->with($this->anything())
			// ->withAnyParameters()
			->with('companyName', 'weight')
			->willReturn(1);

		$this->assertEquals(1, $mock->calculateFee('companyName', 'weight'));
	}
}