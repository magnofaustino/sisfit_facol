<?php
class Funcionario{

    
public $nome;
public $cpf;
public $rg;
public $email;
public $telefone;
public $matricula;
public $admissao;
public $nascimento;
public $sexo;
public $estadocivil;
public $nacionalidade;
public $ufnaturalidade;
public $naturalidade;
public $deficiente;
public $obsdeficiente;
public $nomepai;
public $nomemae;
public $apelido;
public $funcao;
public $numcarteira;
public $seriecarteira;
public $ufcarteira;
public $turnotrab;
public $tipotrab;

    function _construct()
	{		
				
	}
    
    	public function getNome(){return $this->nome;}
        public function getCpf(){return $this->cpf;}
        public function getRg(){return $this->rg;}
        public function getTelefone(){return $this->telefone;}
        public function getMatricula(){return $this->matricula;}
        public function getAdmissao(){return $this->admissao;}
        public function getNascimento(){return $this->nascimento;}
        public function getSexo(){return $this->sexo;}
        public function getEstadocivil(){return $this->estadocivil;}
        public function getNacionalidade(){return $this->nacionalidade;}
        public function getUfnaturalidade(){return $this->ufnaturalidade;}
        public function getNaturalidade(){return $this->naturalidade;}
        public function getDeficiente(){return $this->deficiente;}
        public function getObsdeficiente(){return $this->obsdeficiente;}
        public function getNomepai(){return $this->nomepai;}
        public function getNomemae(){return $this->nomemae;}
        public function getApelido(){return $this->apelido;}
        public function getFuncao(){return $this->funcao;}
        public function getNumcarteira(){return $this->numcarteira;}
        public function getSeriecarteira(){return $this->seriecarteira;}
        public function getUfcarteira(){return $this->ufcarteira;}
        public function getTurnotrab(){return $this->turnotrab;}
        public function getTipotrab(){return $this->tipotrab;}
    
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setCpf($cpf){$this->cpf=$cpf;}
        public function setRg($rg){$this->rg=$rg;}
        public function setTelefone($telefone){$this->telefone=$telefone;}
        public function setMatricula($matricula){$this->rg=$matricula;}
        public function setAdmissao($admissao){$this->telefone=$admissao;}
        public function setNascimento(){return $this->nascimento;}
        public function setSexo(){return $this->sexo;}
        public function setEstadocivil(){return $this->estadocivil;}
        public function setNacionalidade(){return $this->nacionalidade;}
        public function setUfnaturalidade(){return $this->ufnaturalidade;}
        public function setNaturalidade(){return $this->naturalidade;}
        public function setDeficiente(){return $this->deficiente;}
        public function setObsdeficiente(){return $this->obsdeficiente;}
        public function setNomepai(){return $this->nomepai;}
        public function setNomemae(){return $this->nomemae;}
        public function setApelido(){return $this->apelido;}
        public function setFuncao(){return $this->funcao;}
        public function setNumcarteira(){return $this->numcarteira;}
        public function setSeriecarteira(){return $this->seriecarteira;}
        public function setUfcarteira(){return $this->ufcarteira;}
        public function setTurnotrab(){return $this->turnotrab;}
        public function setTipotrab(){return $this->tipotrab;}
    
    
}
?>