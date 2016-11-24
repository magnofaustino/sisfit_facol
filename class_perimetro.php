<?php



class perimetro{

public $nome_aluno;    
public $pescoco;
public $ombro_esq;
public $ombro_dir;
public $braco_rilex_esq; 
public $braco_rilex_dir;
public $braco_contra_esq;
public $braco_contra_dir; 
public $ante_braco_esq;
public $ante_braco_dir;
public $torax_rilex;
public $torax_insp;
public $cintura;
public $abdomen;
public $quadril;
public $coxa_esq;
public $coxa_dir;
public $pantu_esq;
public $pantu_dir;
     
    
    function _construct()
	{		
				
	}
            public function getNome_Aluno(){return $this->nome_aluno;}	
            public function getPescoco(){return $this->pescoco;}
            public function getOmbro_Esq(){return $this->ombro_esq;}
            public function getOmbro_Dir(){return $this->ombro_dir;}
            public function getBraco_Rilex_Esq(){return $this->braco_rilex_esq;}
            public function getBraco_Rilex_Dir(){return $this->braco_rilex_dir;}
            public function getBraco_Contra_Esq(){return $this->braco_contra_esq;}
            public function getBraco_Contra_Dir(){return $this->braco_contra_dir;}  
            public function getAnte_Braco_Esq(){return $this->ante_braco_esq;}
            public function getAnte_Braco_Dir(){return $this->ante_braco_dir;}
            public function getTorax_Rilex(){return $this->torax_rilex;}
            public function getTorax_Insp(){return $this->torax_insp;}  
            public function getCintura(){return $this->cintura;}
            public function getAbdomen(){return $this->abdomen;}
            public function getQuadril(){return $this->quadril;}
            public function getCoxa_Esq(){return $this->coxa_esq;}
            public function getCoxa_Dir(){return $this->torax_insp;}  
            public function getPantu_Esq(){return $this->pantu_esq;}
            public function getPantu_Dir(){return $this->pantu_dir;}

            public function setNome_Aluno($nome_aluno){$this->nome_aluno=$nome_aluno;}
            public function setPescoco($pescoco){$this->pescoco=$pescoco;}
            public function setOmbro_Esq($ombro_esq){$this->ombro_esq=$ombro_esq;}
            public function setOmbro_Dir($ombro_dir){$this->ombro_dir=$ombro_dir;}
            public function setBraco_Rilex_Esq($braco_rilex_esq){$this->braco_rilex_esq=$braco_rilex_esq;}
            public function setBraco_Rilex_Dir($braco_rilex_dir){$this->braco_rilex_dir=$braco_rilex_dir;}
            public function setBraco_Contra_Esq($braco_contra_esq){$this->braco_contra_esq=$braco_contra_esq;}
            public function setBraco_Contra_Dir($braco_contra_dir){$this->braco_contra_dir=$braco_contra_dir;}
            public function setAnte_Braco_Esq($ante_braco_esq){$this->ante_braco_esq=$ante_braco_esq;}
            public function setAnte_Braco_Dir($ante_braco_dir){$this->ante_braco_dir=$ante_braco_dir;}
            public function setTorax_Rilex($torax_rilex){$this->torax_rilex=$torax_rilex;}
            public function setTorax_Insp($torax_insp){$this->torax_insp=$torax_insp;}
            public function setCintura ($cintura) {$this->cintura=$cintura;}
            public function setAbdomen ($abdomen) {$this->abdomen=$abdomen;}
            public function setQuadril ($quadril) {$this->quadril=$quadril;}
            public function setCoxa_Esq ($coxa_esq) {$this->coxa_esq=$coxa_esq;}
            public function setCoxa_Dir ($coxa_dir){$this->coxa_dir=$coxa_dir;}
            public function setPantu_Esq ($pantu_esq){$this->pantu_esq=$pantu_esq;}
            public function setPantu_Dir ($pantu_dir) {$this->pantu_dir=$pantu_dir;}
}
?>  