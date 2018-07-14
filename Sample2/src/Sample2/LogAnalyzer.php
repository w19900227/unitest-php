<?php
namespace App\Sample2;

use App\Sample2\IExtensionManager;

class LogAnalyzer {
	private $manager;
	public function __construct(IExtensionManager $mgr) {
		$this->manager = $mgr;
	}

	public function IsValidLogFileName($fileName) {
		return $this->manager->IsValid($fileName);
	}
}