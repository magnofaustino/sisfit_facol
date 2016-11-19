<?php
class avaliacao{

public $n_aluno;    
public $obj_atividade;
public $atv_atual;
public $tipo_med;
public $tipo_cirg;
public $tipo_doenca;
public $obs_aval;

     
    
    function _construct()
	{		
				
	}
public function getN_Aluno(){return $this->n_aluno;}    
public function getObj_Atividade(){return $this->obj_atividade;}
public function getAtv_Atual(){return $this->atv_atual;}
public function getTipo_Med(){return $this->tipo_med;}
public function getTipo_Cirg(){return $this->tipo_cirg;}
public function getTipo_Doenca(){return $this->tipo_doenca;}
public function getObs_Aval(){return $this->obs_aval;}


        public function setN_Aluno($n_aluno){$this->n_aluno=$n_aluno	;}
        public function setObj_Atividade($obj_atividade){$this->obj_atividade=$obj_atividade;}
        public function setAtv_Atual($atv_atual){$this->atv_atual=$atv_atual;}
        public function setTipo_Med($tipo_med){$this->tipo_med=$tipo_med;}
    
        public function setTipo_Cirg($tipo_cirg){$this->tipo_cirg=$tipo_cirg;}
        public function setTipo_Doenca($tipo_doenca){$this->tipo_doenca=$tipo_doenca;}
        public function setObs_Aval($obs_aval){$this->obs_aval=$obs_aval;}
    
        
        
}
?>