<?php
namespace App\Tests\Sample5;

use App\Sample5\IExtensionManager;

class FakeExtensionManager implements IExtensionManager {
	public $WillBeValid = false;
	public function IsValid($fileName) {
		return $this->WillBeValid;
	}
}