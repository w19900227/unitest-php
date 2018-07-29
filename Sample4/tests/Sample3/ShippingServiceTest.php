<?php 
namespace App\Tests\Sample3;

use PHPUnit\Framework\TestCase;
use App\Sample3\ShippingService;
use App\Sample3\BlackCat;
use App\Sample3\Hsinchu;
use App\Sample3\PostOffice;

class ShippingServiceTest extends TestCase {

	public function testClassBlackCat_calculateFee_Return300() {
		$shippingService = new ShippingService(new BlackCat());
		$result = $shippingService->calculateFee(10);

		$this->assertEquals(300, $result);
	}

	public function testClassHsinchu_calculateFee_Return300() {
		$shippingService = new ShippingService(new Hsinchu());
		$result = $shippingService->calculateFee(10);

		$this->assertEquals(330, $result);
	}

	public function testClassPostOffice_calculateFee_Return300() {
		$shippingService = new ShippingService(new PostOffice());
		$result = $shippingService->calculateFee(10);

		$this->assertEquals(370, $result);
	}

	public function testMockClassBlackCat() {
		// $mock = $this->createMock(BlackCat::class)->getMock();
		// $mock = $this->getMock('\App\Sample3\BlackCat');
		$mock = $this->getMock(BlackCat::class);

		$mock->method('calculateFee')
			// ->with($this->anything())
			// ->withAnyParameters()
			->with('weight')
			->willReturn(1);

		$shippingService = new ShippingService($mock);

		$this->assertEquals(101, $shippingService->calculateFee('weight'));
	}

	public function testMockClassHsinchu() {
		// $mock = $this->createMock(Hsinchu::class)->getMock();
		// $mock = $this->getMock('\App\Sample3\Hsinchu');
		$mock = $this->getMock(Hsinchu::class);

		$mock->method('calculateFee')
			->will(
				$this->onConsecutiveCalls(2, 4, 6)
			);

		$shippingService = new ShippingService($mock);

		$this->assertEquals(102, $shippingService->calculateFee('weight'));
		$this->assertEquals(104, $shippingService->calculateFee('weight'));
		$this->assertEquals(106, $shippingService->calculateFee('weight'));
	}

	public function testMockClassPostOffice() {
		// $mock = $this->createMock(PostOffice::class)->getMock();
		// $mock = $this->getMock('\App\Sample3\PostOffice');
		$mock = $this->getMock(PostOffice::class);

		$mock->method('calculateFee')
			->will(
				$this->returnValueMap([
					[ 3, 10 ],
					[ 5, 15 ]
				])
			);

		$shippingService = new ShippingService($mock);

		// 因為你指定 "3" => 他帶入"10"的參數進去計算
		$this->assertEquals(110, $shippingService->calculateFee(3));

		// 因為你指定 "5" => 他帶入"15"的參數進去計算
		$this->assertEquals(115, $shippingService->calculateFee(5));
	}
}