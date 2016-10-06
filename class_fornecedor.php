<?php
class Fornecedor{

    
public $razao;
public $nomefantasia;
public $cpf_cnpj;
public $telefone;
public $tipo;
public $email;
public $endereco;
public $bairro;
public $municipio;
public $numero;
public $cep;
             
    
    function _construct()
	{		
				
	}
               //GET
            public function getRazao(){return $this->razao;}
            public function getNomefantasia(){return $this->nomefantasia;}
            public function getCpf_cnpj(){return $this->cpf_cnpj;}
            public function getTelefone(){return $this->telefone;}
            public function getTipo(){return $this->tipo;}
            public function getEmail(){return $this->email;}
            public function getEndereco(){return $this->endereco;}
            public function getBairro(){return $this->bairro;}
            public function getMunicipio(){return $this->municipio;}
            public function getNumero(){return $this->numero;}
            public function getCep(){return $this->cep;}
            
                //SET
            public function setNome($nome){$this->nome=$nome;}
            public function setCpf_cnpj($cpf_cnpj){$this->cpf_cnpj=$cpf_cnpj;}
            public function setTelefone($telefone){$this->telefone=$telefone;}
            public function setTipo($telefone){$this->telefone=$tipo;}
            public function setEmail(){return $this->email;}
            public function setEndereco(){return $this->endereco;}
            public function setBairro(){return $this->bairro;}
            public function setMunicipio(){return $this->municipio;}
            public function setNumero(){return $this->numero;}
            public function setCep(){return $this->cep;}

}
?>