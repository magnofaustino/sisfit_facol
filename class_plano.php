<?php



class Plano{

    
public $nome_plano;
public $atividades_plano;
public $observacoes_plano;
public $tipo_plano;


     
    
    function _construct()
	{		
				
	}
    
    	public function getNome_plano(){return $this->nome_plano;}
    
    //falta o select para definir as atividades.
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