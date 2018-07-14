<?php
namespace App\Tests\Sample4;

use App\Sample4\IExtensionManager;

class FakeExtensionManager implements IExtensionManager {
	public $WillBeValid = false;
	public function IsValid($fileName) {
		return $this->WillBeValid;
	}
}