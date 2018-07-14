<?php
namespace App\Sample5;

use App\Sample5\FileExtensionManager;

class ExtensionManagerFactory {
	private $customManager = null;
	public function create() {
		if ($this->customManager!=null) {
			return $this->customManager;
		}
		return new FileExtensionManager();
	}

	public function setManager($mgr) {
		$this->customManager = $mgr;
	}
}