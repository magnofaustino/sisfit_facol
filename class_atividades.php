<?php

/* 
 * Cadastro de Atividades - Sandro Braz
 */

class Atividades{

    
public $atividade;
public $valor;
public $atvtemp;
public $dtini;
public $dtfim;

     
    
    function _construct()
	{		
				
	}
    
    	public function getAtividade(){return $this->atividade;}
        public function getValor(){return $this->valor;}
        public function getAtvtemp(){return $this->atvtemp;}
        public function getDtini(){return $this->dtini;}
        public function getDtfim(){return $this->dtfim;}
       
    
    
        public function setAtividade($atividade){$this->atividade=$atividade;}
        public function setValor($valor){$this->valor=$valor;}
        public function setAtvtemp($atvtemp){$this->atvtemp=$atvtemp;}
        public function setDtini($dtini){$this->dtini=$dtini;}
        public function setDtfim($dtfim){$this->dtfim=$dtfim;}
    
}
?>