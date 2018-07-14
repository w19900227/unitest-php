<?php
namespace App\Tests\Sample5;

use PHPUnit\Framework\TestCase;
use App\Tests\Sample5\FakeExtensionManager;
use App\Sample5\FileExtensionManager;
use App\Sample5\LogAnalyzer;
use App\Sample5\ExtensionManagerFactory;

class LogAnalyzerTest extends TestCase {
	public function testIsValidFileName_NameSupportedExtension_ReturnTrue() {
		$myFakeManager = new FakeExtensionManager();
		$myFakeManager->WillBeValid = true;

		$extensionManagerFactory = new ExtensionManagerFactory();
		$extensionManagerFactory->setManager($myFakeManager);

		$log = new LogAnalyzer();
		$log->setExtensionManager($extensionManagerFactory->create());
		$result = $log->IsValidLogFileName('short.ext');
		$this->assertEquals(true, $result);
	}
}