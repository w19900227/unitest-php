<?php
namespace App\Tests\Sample2;

use App\Sample2\IExtensionManager;

class FakeExtensionManager implements IExtensionManager {
	public $WillBeValid = false;
	public function IsValid($fileName) {
		return $this->WillBeValid;
	}
}