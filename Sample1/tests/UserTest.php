<?php
use PHPUnit\Framework\TestCase;

use App\User;

class UserTest extends TestCase {
	private $user;
	public function setUp() {
		$this->user = new User();
	}
	public function testName() {
		$this->user->setName('UserName');
		$this->assertEquals('UserName', $this->user->getName());
	}

	public function testAddress() {
		$this->user->setAddress('Address');
		$this->assertEquals('Address', $this->user->getAddress());
	}

}

?>