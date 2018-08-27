<?php 
require '../autoload.php';
declare(strict_types = 1);
namespace turma3;
use turma3\Config;


class Base
{
    public $objetoPDO;

    public function __construct(Config, $objetoPDO)
    {
    	self::$objetoPDO = $objetoPDO;
    }

    public function conectar()
    {
    	$config = new Config('mysql', 'localhost', 3306, 'turma3', 'root', '');
		$dbh = new Base($config);
		$objetoPDO = new PDO($dbh);

    }

    public function preparar()
    {
    	$stmt = $objetoPDO->preparar(sprintf("INSERT INTO categoria (nome) VALUES ('%s')", $_POST['nome']));
		$stmt->execute();
    }

    public function desconectar()
    {
    	$objetoPDO->desconectar();
    }
} 