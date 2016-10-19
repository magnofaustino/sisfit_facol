<?php
class Fornecedor{

    
public $razao;
public $nome_fantasia;
public $tipo;
public $cpf_cnpj;
public $telefone;
     
    
    function _construct()
	{		
				
	}
    
    	public function getRazao(){return $this->razao;}
        public function getNome_fantasia(){return $this->nome_fantasia;}
        public function getTipo(){return $this->tipo;}
        public function getCpf_cnpj(){return $this->cpf_cnpj;}
        public function getTelefone(){return $this->telefone;}
       
    
    
    
    
        public function setRazao($razao){$this->razao=$razao;}
        public function setNome_fantasia($nome_fantasia){$this->nome_fantasia=$nome_fantasia;}
        public function setTipo($tipo){$this->tipo=$tipo;}
        public function setCpf_cnpj($cpf_cnpj){$this->cpf_cnpj=$cpf_cnpj;}
        public function setTelefone($telefone){$this->telefone=$telefone;}
    
    
}
?>