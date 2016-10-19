<?php
class Aluno{

    
public $nome;
public $cpf;
public $curso;

     
    
    function _construct()
	{		
				
	}
    
    	public function getNome(){return $this->nome;}
        public function getCpf(){return $this->cpf;}
        public function getCurso(){return $this->curso;}
       
    
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setCpf($cpf){$this->cpf=$cpf;}
        public function setCurso($curso){$this->curso=$curso;}
       
    
    
}
?>