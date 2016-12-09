<?php
class Aluno{

    
public $nome;
public $cpf;
public $rg;
public $telefone;
public $matricula;
public $estadocivil;
public $nacionalidade;
public $naturalidade;
public $ufnaturalidade;
public $nascimento;
public $sexo;
public $deficiente;
public $obs_deficiente;
public $email;
public $plano;
public $bolsa;
public $tipo_bolsa;
public $horario;
public $dt_cadastro;
    
public $endereco;
public $numero;
public $bairro;
public $cep;
public $orgao_emissor;
public $limitacao;
public $tipo_lim;
     
    
    function _construct()
	{		
				
	}
    
public function getNome(){return $this->nome;}
public function getCpf(){return $this->cpf;}
public function getRg(){return $this->rg;}
public function getTelefone(){return $this->telefone;}
public function getMatricula(){return $this->matricula;}
public function getEstadocivil(){return $this->estadocivil;}
public function getNacionalidade(){return $this->nacionalidade;}
public function getNaturalidade(){return $this->naturalidade;}  
public function getUfnaturalidade(){return $this->ufnaturalidade;}
public function getNascimento(){return $this->nascimento;}
public function getSexo(){return $this->sexo;}
public function getDeficiente(){return $this->deficiente;}
public function getObs_deficiente(){return $this->obs_deficiente;}
public function getEmail(){return $this->email;}
public function getPlano(){return $this->plano;}
public function getBolsa(){return $this->bolsa;}
public function getTipo_bolsa(){return $this->tipo_bolsa;}    
public function getHorario(){return $this->horario;}
public function getDt_cadastro(){return $this->dt_cadastro;}

public function getEndereco(){return $this->endereco;}
public function getNumero(){return $this->numero;}
public function getBairro(){return $this->bairro;}    
public function getCep(){return $this->cep;}
public function getOrgao_emissor(){return $this->orgao_emissor;}
public function getLimitacao(){return $this->limitacao;}
public function getTipo_Lim(){return $this->tipo_lim;}
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setCpf($cpf){$this->cpf=$cpf;}
        public function setRg($rg){$this->rg=$rg;}
    
        public function setTelefone($telefone){$this->telefone=$telefone;}
        public function setMatricula($matricula){$this->matricula=$matricula;}
        public function setEstadocivil($estadocivil){$this->estadocivil=$estadocivil;}
    
        public function setNacionalidade($nacionalidade){$this->nacionalidade=$nacionalidade;}
        public function setNaturalidade($naturalidade){$this->naturalidade=$naturalidade;}
        public function setUfnaturalidade($ufnaturalidade){$this->ufnaturalidade=$ufnaturalidade;}
    
        public function setNascimento($nascimento){$this->nascimento=$nascimento;}
        public function setSexo($sexo){$this->sexo=$sexo;}
        public function setDeficiente($deficiente){$this->deficiente=$deficiente;}
    
        public function setObs_deficiente($obs_deficiente){$this->obs_deficiente=$obs_deficiente;}
        public function setEmail($email){$this->email=$email;}
        public function setPlano($plano){$this->plano=$plano;}
    
        public function setBolsa($bolsa){$this->bolsa=$bolsa;}
        public function setTipo_bolsa($tipo_bolsa){$this->tipo_bolsa=$tipo_bolsa;}
        public function setHorario($horario){$this->horario=$horario;}
        public function setDt_cadastro($dt_cadastro){$this->dt_cadastro=$dt_cadastro;}
        
        public function setEndereco($endereco){$this->endereco=$endereco;}    
        public function setNumero($numero){$this->numero=$numero;}
        public function setBairro($bairro){$this->bairro=$bairro;}
        public function setCep($cep){$this->cep=$cep;}    
        public function setOrgao_emissor($orgao_emissor){$this->orgao_emissor=$orgao_emissor;}
        public function setLimitacao($limitacao){$this->limitacao=$limitacao;} 
        public function setTipo_Lim($tipo_lim){$this->tipo_lim=$tipo_lim;}
        
}
?>