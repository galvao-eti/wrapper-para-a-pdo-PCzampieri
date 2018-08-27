<?php

use turma3\Categoria;
use turma3\Base;

$dados = $_POST;

$Base = new Base($objetoPDO);

$categoria = new Categoria($nome);
$categoria->salvar($dados[nome]);

echo("cadstro ok");