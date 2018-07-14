<?php
namespace App\Sample3;

use App\Sample3\IExtensionManager;

class LogAnalyzer {
	private $manager;
	public function __construct(IExtensionManager $mgr) {
		$this->manager = $mgr;
	}

	public function IsValidLogFileName($fileName) {
		return $this->manager->IsValid($fileName);
	}
}