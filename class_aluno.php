<?php
class Aluno{

    
public $nome;
public $cpf;
public $rg;
public $sexo;
public $profissao;
public $orgao_emissor;
public $dt_nascimento;
public $endereco;
public $bairro;
public $estado;
public $numero;
public $cep;
public $uf_naturalidade;
public $naturalidade;
public $nacionalidade;
public $deficiente;
public $obs_deficiente;
public $email;
public $telefone;
public $plano;
public $bolsa;
public $horaio;
public $dt_cadastro;

     
    
    function _construct()
	{		
				
	}
    
public function getNome(){return $this->nome;}
public function getCpf(){return $this->cpf;}
public function getRg(){return $this->rg;}
public function getSexo(){return $this->sexo;}
public function getProfissao(){return $this->profissao;}
public function getOrgao_emissor(){return $this->orgao_emissor;}
public function getDt_nascimento(){return $this->dt_nascimento;}
public function getEndereco(){return $this->endereco;}  
public function getBairro(){return $this->bairro;}
public function getEstado(){return $this->estado;}
public function getNumero(){return $this->numero;}
public function getCep(){return $this->cep;}
public function getUf_naturalidade(){return $this->uf_naturalidade;}
public function getNaturalidade(){return $this->naturalidade;}
public function getNacionalidade(){return $this->nacionalidade;}
public function getDeficiente(){return $this->deficiente;}
public function getObs_deficiente(){return $this->obs_deficiente;}    
public function getEmail(){return $this->email;}
public function getTelefone(){return $this->telefone;}
public function getPlano(){return $this->plano;}
public function getBolsa(){return $this->bolsa;}
public function getTipo_bolsa(){return $this->tipo_bolsa;}
public function getHorario(){return $this->horario;}
public function getDt_cadastro(){return $this->dt_cadastro;}
    
    
    
    
        public function setNome($nome){$this->nome=$nome;}
        public function setCpf($cpf){$this->cpf=$cpf;}
        public function setRg($rg){$this->rg=$rg;}
    
        public function setSexo($sexo){$this->sexo=$sexo;}
        public function setProfissao($profissao){$this->profissao=$profissao;}
        public function setOrgao_emissor($orgao_emissor){$this->orgao_emissor=$orgao_emissor;}
    
        public function setDt_nascimento($dt_nascimento){$this->dt_nascimento=$dt_nascimento;}
        public function setEndereco($endereco){$this->endereco=$endereco;}
        public function setBairro($bairro){$this->bairro=$bairro;}
    
        public function setEstado($estado){$this->estado=$estado;}
        public function setNumero($numero){$this->numero=$numero;}
        public function setCep($cep){$this->cep=$cep;}
    
        public function setUf_naturalidade($uf_naturalidade){$this->uf_naturalidade=$uf_naturalidade;}
        public function setNaturalidade($naturalidade){$this->naturalidade=$naturalidade;}
        public function setNacionalidade($nacionalidade){$this->nacionalidade=$nacionalidade;}
    
        public function setDeficiente($deficiente){$this->deficiente=$deficiente;}
        public function setObs_deficiente($obs_deficiente){$this->obs_deficiente=$obs_deficiente;}
        public function setEmail($email){$this->email=$email;}
    
        public function setTelefone($telefone){$this->telefone=$telefone;}
        public function setPlano($plano){$this->plano=$plano;}
        public function setBolsa($bolsa){$this->bolsa=$bolsa;}
        
        public function setTipo_bolsa($tipo_bolsa){$this->tipo_bolsa=$tipo_bolsa;}
        public function setHorario($horario){$this->horario=$horario;}
        public function setDt_cadastro($dt_cadastro){$this->dt_cadastro=$dt_cadastro;}
   
    
}
?>