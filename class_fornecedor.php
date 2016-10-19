<?php
class Fornecedor{

    
public $razao;
public $nome_fantasia;
public $tipo;
public $cpf_cnpj;
public $telefone;
public $email;
public $endereco;
public $bairro;
public $municipio;
public $numero;
public $cep;
     
    
    function _construct()
	{		
				
	}
    
    	public function getRazao(){return $this->razao;}
        public function getNome_fantasia(){return $this->nome_fantasia;}
        public function getTipo(){return $this->tipo;}
        public function getCpf_cnpj(){return $this->cpf_cnpj;}
        public function getTelefone(){return $this->telefone;}
        public function getEmail(){return $this->email;}
        public function getEndereco(){return $this->endereco;}
        public function getBairro(){return $this->bairro;}
        public function getMunicipio(){return $this->municipio;}
        public function getNumero(){return $this->numero;}
        public function getCep(){return $this->cep;}
       
    
    
    
    
        public function setRazao($razao){$this->razao=$razao;}
        public function setNome_fantasia($nome_fantasia){$this->nome_fantasia=$nome_fantasia;}
        public function setTipo($tipo){$this->tipo=$tipo;}
        public function setCpf_cnpj($cpf_cnpj){$this->cpf_cnpj=$cpf_cnpj;}
        public function setTelefone($telefone){$this->telefone=$telefone;}
        public function setEmail($email){$this->email=$email;}
        public function setEndereco($endereco){$this->endereco=$endereco;}
        public function setBairro($bairro){$this->bairro=$bairro;}
        public function setMunicipio($municipio){$this->municipio=$municipio;}
        public function setNumero($numero){$this->numero=$numero;}
        public function setCep($cep){$this->cep=$cep;}
        
    
}
?>