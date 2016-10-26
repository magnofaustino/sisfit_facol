<?php



class Produto{

    
public $nome_produto;
public $descricao;
public $valor_custo;
public $valor_venda;
public $unidade_medida;
public $qt_estoque;
public $grupo;
public $tipo;
public $quant_garantia;
public $periodo_garantia;
public $data_compra;
public $fornecedor;
public $liberacao;
    
    function _construct()
	{		
				
	}
    
    	public function getNome_produto(){return $this->nome_produto;}
        public function getDescricao(){return $this->descricao;}
        public function getValor_custo(){return $this->valor_custo;}
        public function getValor_venda(){return $this->valor_venda;}
        public function getUnidade_medida(){return $this->unidade_medida;}
    
        public function getQt_estoque(){return $this->qt_estoque;}
        public function getGrupo(){return $this->grupo;}
        public function getTipo(){return $this->tipo;}
        public function getQuant_garantia(){return $this->quant_garantia;}
    
        public function getPeriodo_garantia(){return $this->periodo_garantia;}
        public function getData_compra(){return $this->data_compra;}
        public function getFornecedor(){return $this->fornecedor;}
        public function getLiberacao(){return $this->liberacao;}
       
    
    
        public function setNome_produto($nome_produto){$this->nome_produto=$nome_produto;}
        public function setDescricao($descricao){$this->descricao=$descricao;}
        public function setValor_custo($valor_custo){$this->valor_custo=$valor_custo;}
        public function setValor_venda($valor_venda){$this->valor_venda=$valor_venda;}
        public function setUnidade_medida($unidade_medida){$this->unidade_medida=$unidade_medida;}
    
        public function setQt_estoque($qt_estoque){$this->qt_estoque=$qt_estoque;}
        public function setGrupo($grupo){$this->grupo=$grupo;}
        public function setTipo($tipo){$this->tipo=$tipo;}
        public function setQuant_garantia($quant_garantia){$this->quant_garantia=$quant_garantia;}
        public function setPeriodo_garantia($periodo_garantia){$this->periodo_garantia=$periodo_garantia;}
        public function setData_compra($data_compra){$this->data_compra=$data_compra;}
    
        public function setFornecedor($fornecedor){$this->fornecedor=$fornecedor;}
        public function setLiberacao($liberacao){$this->liberacao=$liberacao;}
    
    
}
?>