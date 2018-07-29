<?php 
namespace App\Tests\Sample2;

use PHPUnit\Framework\TestCase;
use App\Sample2\ShippingService;

class ShippingServiceTest extends TestCase {

	public function testClassBlackCat_calculateFee_Return200() {
		$shippingService = new ShippingService();
		$result = $shippingService->calculateFee('BlackCat', 10);

		$this->assertEquals(200, $result);
	}

	public function testClassHsinchu_calculateFee_Return230() {
		$shippingService = new ShippingService();
		$result = $shippingService->calculateFee('Hsinchu', 10);

		$this->assertEquals(230, $result);
	}

	public function testClassPostOffice_calculateFee_Return270() {
		$shippingService = new ShippingService();
		$result = $shippingService->calculateFee('PostOffice', 10);

		$this->assertEquals(270, $result);
	}

	public function testMockShippingService_MethodCalculateFee() {
		// $mock = $this->createMock(ShippingService::class)->getMock();
		// $mock = $this->getMock('\App\Sample2\ShippingService');
		$mock = $this->getMock(ShippingService::class);

		$mock->method('calculateFee')
			// ->with($this->anything())
			// ->withAnyParameters()
			->with('companyName', 'weight')
			->willReturn(1);

		$this->assertEquals(1, $mock->calculateFee('companyName', 'weight'));
	}
}