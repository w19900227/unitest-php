<?php
namespace App;

class User {
	private $name=null;
	private $Address=null;
	private $Sex=null;

	public function setName($name) { $this->name = $name; }
	public function getName() { return $this->name; }
	public function setAddress($Address) { $this->Address = $Address; }
	public function getAddress() { return $this->Address; }
	public function setSex($Sex) { $this->Sex = $Sex; }
	public function getSex() { return $this->Sex; }
}

?>