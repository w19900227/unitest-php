<?php
namespace App\Sample1;

use App\Sample1\IExtensionManager;

class LogAnalyzer {
	private $manager;
	public function __construct(IExtensionManager $mgr) {
		$this->manager = $mgr;
	}

	public function IsValidLogFileName($fileName) {
		return $this->manager->IsValid($fileName);
	}
}