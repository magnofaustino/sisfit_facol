<?php
include "menu.php";
?>
<html>
	<head>
		<title>Atividades</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Atividades</h3>
                <div class="pull-right">
                    <a href="cadastro_atividades.php" class="btn btn-warning btn-sm" role="button">Incluir</a>
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtro</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Id" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Primeiro Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Segundo Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome de Usuario" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Alterar / Excluir" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sandro</td>
                        <td>Magno</td>
                        <td>Arthur</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dois</td>
                        <td>Dois</td>
                        <td>Dois</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Três</td>
                        <td>Três</td>
                        <td>Três</td>
                        <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                </tbody>
            </table>
           
                </div>
             </fieldset>
    </div>
</div>
            </body>
</html>