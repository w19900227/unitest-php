<?php 
namespace App\Tests\Sample3;

use PHPUnit\Framework\TestCase;
use App\Sample3\ShippingController;

class ShippingControllerTest extends TestCase {

	public function setUp() {
		$this->shippingController = new ShippingController();
	}

	public function testMethod_calculateFeeBlackCat_Return300() {
		$result = $this->shippingController->calculateFeeBlackCat(10);

		$this->assertEquals(300, $result);
	}

	public function testMethod_calculateFeeHsinchu_Return330() {
		$result = $this->shippingController->calculateFeeHsinchu(10);

		$this->assertEquals(330, $result);
	}

	public function testMethod_calculateFeePostOffice_Return370() {
		$result = $this->shippingController->calculateFeePostOffice(10);

		$this->assertEquals(370, $result);
	}

}