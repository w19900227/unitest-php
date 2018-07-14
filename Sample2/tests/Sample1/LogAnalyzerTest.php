<?php
namespace App\Tests\Sample1;

use PHPUnit\Framework\TestCase;
use App\Tests\Sample1\FakeExtensionManager;
use App\Sample1\LogAnalyzer;

class LogAnalyzerTest extends TestCase {
	public function testIsValidFileName_NameSupportedExtension_ReturnTrue() {
		$myFakeManager = new FakeExtensionManager();
		$myFakeManager->WillBeValid = true;
		$log = new LogAnalyzer($myFakeManager);
		$result = $log->IsValidLogFileName('short.ext');
		$this->assertEquals(true, $result);
	}
}