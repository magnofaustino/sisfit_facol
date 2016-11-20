<?php
class Aluno{

    
public $nome;
public $descricao;
public $telefone;

     
    
    function _construct()
	{		
				
	}
    
    	public function getNome(){return $this->nome;}
        public function getDescricao(){return $this->descricao;}
        public function getTelefone(){return $this->telefone;}
       
    
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setDescricao($descricao){$this->descricao=$descricao;}
        public function setTelefone($telefone){$this->telefone=$telefone;}
       
    
    
}
?>