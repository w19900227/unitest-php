<?php
namespace App\Sample1;

use App\Sample1\IExtensionManager;
use App\Sample1\FileExtensionManager;
class IsValidLogFileName {
	public function IsValidLogFileName($fileName) {
		// (IExtensionManager) $mgr = new FileExtensionManager();
		$mgr = new FileExtensionManager();
		return $mgr->Isvalid($fileName);
	}
}