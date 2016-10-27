<?php
include "menu.php";
?>
<html>
	<head>
		<title>Exemplo de Grid</title>
		<meta charset="UTF-8"></meta>
	</head>
        <body>
<div class="container">
    <div class="row">
        <fieldset>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Grid Sisfit</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Primeiro Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Segundo Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome de Usuario" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sandro</td>
                        <td>Magno</td>
                        <td>Arthur</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dois</td>
                        <td>Dois</td>
                        <td>Dois</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Três</td>
                        <td>Três</td>
                        <td>Três</td>
                    </tr>
                </tbody>
            </table>
           
                </div>
             </fieldset>
    </div>
</div>
            </body>
</html>