<?php
namespace App\Sample5;

use App\Sample5\ExtensionManagerFactory;

class LogAnalyzer {
	private $manager;
	public function __construct() {
	}

	public function setExtensionManager($mgr) {
		$this->manager = $mgr;
	}

	public function getExtensionManager() {
		return $this->manager;
	}

	public function IsValidLogFileName($fileName) {
		return $this->manager->IsValid($fileName);
	}
}