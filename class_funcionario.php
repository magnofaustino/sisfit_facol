<?php
class Funcionario{

    
public $nome;
public $cpf;
public $rg;
public $telefone;
public $matricula;
public $admissao;

     
    
    function _construct()
	{		
				
	}
    
    	public function getNome(){return $this->nome;}
        public function getCpf(){return $this->cpf;}
        public function getRg(){return $this->rg;}
        public function getTelefone(){return $this->telefone;}
        public function getMatricula(){return $this->matricula;}
        public function getAdmissao(){return $this->admissao;}
       
    
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setCpf($cpf){$this->cpf=$cpf;}
        public function setRg($rg){$this->rg=$rg;}
        public function setTelefone($telefone){$this->telefone=$telefone;}
        public function setMatricula($matricula){$this->rg=$matricula;}
        public function setAdmissao($admissao){$this->telefone=$admissao;}
       
    
    
}
?>