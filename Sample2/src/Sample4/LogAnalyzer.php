<?php
namespace App\Sample4;

use App\Sample4\IExtensionManager;
use App\Sample4\FileExtensionManager;

class LogAnalyzer {
	private $manager;
	public function __construct() {
		$this->manager = new FileExtensionManager();
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