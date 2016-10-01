<?php
class Pagamento{

    
public $nome_do_resposavel;
public $descricao;
//public $rg;
public $telefone

     
    
    function _construct()
	{		
				
	}
    
    	public function getNome_resposavel(){return $this->nome_do_resposavel;}
        public function getdescricao(){return $this->descricao;}
        public function getTelefone(){return $this->telefone;}
  //      public function getTelefone(){return $this->telefone;}
       
    
    
    
    
        public function setNome($nome_do_resposavel){$this->nome_resposavel = $nome_do_resposavel;}
        public function setCpf($descricao){$this->descricao = $descricao;}
        //public function setRg($rg){$this->rg=$rg;}
       public function setTelefone($telefone){$this->telefone = $telefone;}
       
    
    
}
?>