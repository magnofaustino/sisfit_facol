<?php



class Plano{

    
public $nome_plano;
public $atividades_plano;
public $observacoes_plano;
public $tipo_plano;
public $duracao_plano;
public $numero_aula;
public $vl_matricula;
public $vl_mensal;
public $data_cadastro;
     
    
    function _construct()
	{		
				
	}
public function getNome_plano(){return $this->nome_plano;}
public function getAtividades_Plano(){return $this->atividades_plano;}
public function getObeservacoes_Plano(){return $this->obeservacoes_plano;}
public function getTipo_Plano(){return $this->tipo_plano;}
public function getDuracao_Plano(){return $this->duracao_plano;}
public function getNumero_Aula(){return $this->numero_aula;}
public function getValor_Matricula(){return $this->vl_matricula;}
public function getValor_Mensalidade(){return $this->vl_mensal;}  
public function getData_Cadastro(){return $this->data_cadastro;}

        public function setNome($nome_plano){$this->nome_plano=$nome_plano;}
        public function setAtividades_Plano($atividades_plano){$this->atividades_plano=$atividades_plano;}
        public function setObservacoes_Plano($observacoes_plano){$this->observacoes_plano=$observacoes_plano;}
    
        public function setTipo_Plano($tipo_plano){$this->tipo_plano=$tipo_plano;}
        public function setDuracao_Plano($duracao_plano){$this->duracao_plano=$d;}
    	public function setNumero_Aula($numero_aula){$this->numero_aula=$d;}
        public function setValor_Matricula($vl_matricula){$this->vl_matricula=$d;}
        public function setValor_Mensalidade($vl_mensalidade){$this->vl_mensalidade=$d;}
        public function setData_Cadastro($data_cadastro){$this->data_cadastro=$d;}
        
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
    //
}
?>