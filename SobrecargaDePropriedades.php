<?php 

class SobrecargaDePropriedades
{
	private $data = [];
	private $firstname;
	private $lastname;

	public function __set($name, $value)
	{
		if (isset($name) && $name === 'firstname') {
			$this->data['firstname'] = $value;
		}

		if (isset($name) && $name === 'lastname') {
			$this->data['lastname'] = $value;
		}
	}

	public function __get($name)
	{
		if (isset($name) && $name === 'firstname') {
			return $this->data['firstname'];
		}

		if (isset($name) && $name === 'lastname') {
			return $this->data['lastname'];
		}
	}

	public function __isset($name)
	{
		return isset($this->data[$name]);
	}

	public function __unset($name)
	{
		echo "Apagando $name\n";
		unset($this->data[$name]);
	}
}

$sp = new SobrecargaDePropriedades();
$sp->firstname = 'Marcos'; // __set
$sp->lastname = 'Silva'; // __set

echo "$sp->firstname\n"; // __get
echo "$sp->lastname\n"; // __get
var_dump($sp);

var_dump(isset($sp->firstname)); // __isset
unset($sp->lastname); // __unset