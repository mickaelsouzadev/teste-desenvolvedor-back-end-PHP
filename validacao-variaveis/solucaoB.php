<?php  

$variavel = [ "nome" => "Pedro Luiz", "endereco" => "", "telefone" => "(51) 5151-51511" ];

if(isset($variavel) && is_array($variavel)) {
	if(isset($variavel['endereco']) && is_string($variavel['endereco'])) {
		$variavel["endereco"] = "Av Taquara";

		echo $variavel["endereco"];
	}
}