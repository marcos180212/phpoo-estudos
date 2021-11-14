<?php 

class SobrecargaDePropriedades
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

$sp = new SobrecargaDePropriedades();
$sp->firstname = 'Marcos';
$sp->lastname = 'Silva';

echo "$sp->firstname\n";
echo "$sp->lastname\n";
var_dump($sp);
