<?php
namespace App\Tests\Sample3;

use PHPUnit\Framework\TestCase;
use App\Tests\Sample3\FakeExtensionManager;
use App\Sample3\LogAnalyzer;

class LogAnalyzerTest extends TestCase {
	public function testIsValidFileName_NameSupportedExtension_ReturnTrue() {
		$myFakeManager = new FakeExtensionManager();
		$myFakeManager->WillThrow = new \Exception('this is fake');
		$log = new LogAnalyzer($myFakeManager);
		$result = $log->IsValidLogFileName('short.ext');
		
		// $this->assertInstanceOf('Exception', $result);
		// $this->assertEquals('this is fake', $result->getMessage());
	}
}