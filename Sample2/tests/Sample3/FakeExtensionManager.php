<?php
namespace App\Tests\Sample3;

use App\Sample3\IExtensionManager;

class FakeExtensionManager implements IExtensionManager {
	public $WillBeValid = false;
	public $WillThrow = null;
	public function IsValid($fileName) {
		if ($this->WillThrow != null) {
			// new \Exception('this is fake');
			$this->WillThrow;
		}
		
		return $this->WillBeValid;
	}
}