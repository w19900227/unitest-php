<?php
namespace App\Tests\Sample4;

use PHPUnit\Framework\TestCase;
use App\Tests\Sample4\FakeExtensionManager;
use App\Sample4\LogAnalyzer;

class LogAnalyzerTest extends TestCase {
	public function testIsValidFileName_NameSupportedExtension_ReturnTrue() {
		$myFakeManager = new FakeExtensionManager();
		$myFakeManager->WillBeValid = true;
		$log = new LogAnalyzer($myFakeManager);
		$log->setExtensionManager($myFakeManager);
		$result = $log->IsValidLogFileName('short.ext');
		$this->assertEquals(true, $result);
	}
}