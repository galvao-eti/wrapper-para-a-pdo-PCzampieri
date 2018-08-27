<?php 
require '../autoload.php';
use Turma3\Config;
use Turma3\Base;
declare(strict_types = 1);
namespace turma3;

class Categoria
{
	public $id;
	public $nome;

	public function __construct($id, $nome)
	{
		
	}

	public function salvar()
	{
		$base = new Base($objetoPDO);
		$base->preparar();
		
	}
}
