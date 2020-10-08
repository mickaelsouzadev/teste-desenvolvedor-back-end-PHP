<?php  
require 'vendor\autoload.php';
date_default_timezone_set('America/Sao_Paulo');

use App\Usuario;

$usuario = new Usuario();

try {
	$usuario->preencherDados("Fulano Tal", "5598000000", 4);
	$usuario->cadastrar();

	echo "Nome: {$usuario->getNome()}<br> Telefone: {$usuario->getTelefone()}<br> Nivel: {$usuario->getNivel()}<br> Data Cadastro: {$usuario->getDataCadastro()}";
} catch (Exception $e) {
	echo "Erro: ".$e->getMessage();
}