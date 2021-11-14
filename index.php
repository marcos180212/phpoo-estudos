<?php 

class Eu
{
	private $firstname;
	private $lastname;

	public function __set($name, $value)
	{
		if (isset($name) && $name === 'firstname') {
			$this->firstname = $value;
		}

		if (isset($name) && $name === 'lastname') {
			$this->lastname = $value;
		}
	}

	public function __get($name)
	{
		if (isset($name) && $name === 'firstname') {
			return $this->firstname;
		}

		if (isset($name) && $name === 'lastname') {
			return $this->lastname;
		}
	}
}

$eu = new Eu();
$eu->firstname = 'Marcos';
$eu->lastname = 'Silva';

echo "$eu->firstname\n";
echo "$eu->lastname\n";
var_dump($eu);