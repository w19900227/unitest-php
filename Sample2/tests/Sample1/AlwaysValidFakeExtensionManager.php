<?php
namespace App\Tests\Sample1;

use App\Sample1\IExtensionManager;
class AlwaysValidFakeExtensionManager implements IExtensionManager {
	public function IsValid($fileName) {
		return true;
	}
}