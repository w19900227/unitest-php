<?php 
namespace App\Sample2;

use App\Sample2\BlackCat;
use App\Sample2\Hsinchu;
use App\Sample2\PostOffice;

class LogisticsFactory {
	
	public function create($companyName) {
		switch ($companyName) {
			case 'BlackCat':
				return new BlackCat();
			case 'Hsinchu':
				return new Hsinchu();
			case 'PostOffice':
				return new PostOffice();
			default:
				throw new \Exception('No company exception', 999);
		}
	}
}