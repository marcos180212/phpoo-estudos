<?php 

class SobrecargaDeMetodos
{
	public function __call($name, $args)
	{
		var_dump($name, $args);
	}

	public static function __callStatic($name, $args)
	{
		var_dump($name, $args);
	}
}

$sm = new SobrecargaDeMetodos();
$sm->meuMetodo('Hello World 1', 'Hello World 2'); // __call

SobrecargaDeMetodos::meuMetodoEstatico('Hello World 1', 'Hello World 2'); // __callStatic