<?php
class Fornecedor{

    
public $nome;
public $cpf_cnpj;
public $telefone;

     
    
    function _construct()
	{		
				
	}
    
    	public function getNome(){return $this->nome;}
      public function getCpf_cnpj(){return $this->cpf_cnpj;}
        public function getTelefone(){return $this->telefone;}
       
    
    
    
    
     public function setNome($nome){$this->nome=$nome;}
  public function setCpf_cnpj($cpf_cnpj){$this->cpf_cnpj=$cpf_cnpj;}
    public function setTelefone($telefone){$this->telefone=$telefone;}
       
    
    
}
?>