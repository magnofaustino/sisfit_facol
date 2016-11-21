<?php
include ("conexao.php");

$id = $_GET['tx'];

$result = "select * from atividades where id = $id";

      $resultadobusca = mysqli_query($conn, $result);
        while($ras = mysqli_fetch_array($resultadobusca)){
    
            $atividade = $ras['atividade'];
            $valor = $ras['valor'];
            $dtini = $ras['dtini'];
            $dtfim = $ras['dtfim'];
            $atvtemp = $ras['atvtemp'];
              

}
?>
<html>
	<head>
		<title>Alterar  Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
                
            <div class="container">
            <div class="row">
            <form action="update_atividades.php" method="GET" >
            <fieldset>
                <div class="panel panel-primary">
                <div class="panel-heading"><h4>Alterar Atividades</h4></div>
                     <input type="text" class="form-control" title="Preencha o campo Nome" required name="id" value="<?php echo $id; ?>" readonly>
                <div class="panel-body">
		<div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Atividade:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="atividade" value="<?php echo $atividade; ?>" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Valor:</span>
                    <input type="text" class="form-control" title="Preencha o campo Nome" required name="valor" value="<?php echo $valor; ?>">
                    <span class="input-group-addon">R$</span>
                </div></div></div><br>
                <div class="form-inline">
                <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">Data de Inicio:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="dtini" value="<?php echo $dtini; ?>" >
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Data de Fim:</span>
                    <input type="date" class="form-control" title="Preencha o campo Nome" required name="dtfim" value="<?php echo $dtfim; ?>">
                    <span class="input-group-addon"><a class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></a></span>
                </div>
                </div>
                </div><br>
                
                <div class="input-group">
                    <div class="well">É uma Atividade Temporaria?:
                        <label class="radio-inline">
                        <input type="radio" name="atvtemp" value="N" <?php if($atvtemp == "N") echo "checked" ?>>Não
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="atvtemp" value="S" <?php if($atvtemp == "S") echo "checked" ?>>Sim
                        </label>
                    </div>
                </div><br><br>
                <button type="submit"  name="sub" class="btn btn-default">Salvar</button>
                <button type="reset" class="btn btn-default">Limpar</button>
                <div class="pull-right">
                <a href="atividades.php" class="btn btn-default btn-sm" role="button">Cancelar</a>  
                </div>
                </div></div>
            </fieldset>
            </form>
        </div></div>
        </body>
</html>