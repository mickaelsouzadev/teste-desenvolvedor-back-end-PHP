<?php  
namespace App;

use Exception;
use App\Permissao;

class Usuario extends Permissao 
{
	private $telefone;
	private $data_cadastro;
	private $nome;

	public function cadastrar() 
	{
		if(empty($this->nome) OR empty($this->telefone) OR empty($this->nivel)) {

			$dados = ["nome" => $this->nome, "telefone" => $this->telefone, "nivel" =>  $this->nivel];

			$campos_vazios = "";

			foreach ($dados as $key => $value) {
				if(empty($value)) {
					$campos_vazios.="$key ";
				}
			}

			$campos_vazios = str_replace(" ", ", ", $campos_vazios);
			$ultima_virgula = strripos($campos_vazios, ",");
			$campos_vazios = substr_replace($campos_vazios, ".", $ultima_virgula);


			throw new \Exception("Os campos não foram totalmente preenchidos, o(s) seguinte(s) campo(s) está(ão) vazio(s): {$campos_vazios}" );
		}

		$this->data_cadastro =  date("d/m/Y h:i:s A");
	}

	public function preencherDados($nome = "", $telefone = "", $nivel = 0)
	{
		$this->telefone = $telefone;
		$this->nome = $nome;
		$this->setNivel($nivel);
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function getDataCadastro()
	{
		return $this->data_cadastro;
	}

	public function getNome() {
		return $this->nome;
	}


}