<head>
    <script data-require="angular.js@1.4.0-beta.6" data-semver="1.4.0-beta.6" src="https://code.angularjs.org/1.4.0-beta.6/angular.js"></script>
    <script src="./js/CalculadoraInversion.js"></script>
	<script src="https://cdn.jsdelivr.net/alasql/0.3/alasql.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.12/xlsx.core.min.js"></script>
</head>

<?php
  $page_title = 'Admin página de inicio';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>

<?php include_once('layouts/header.php'); ?>
<html>

    
<body>
    
<div  ng-app="myApp" ng-controller="calculatorCtrl" ng-init='cal=true' >
        <form id="myForm">
            <h3>Monto Inicial</h3>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input ng-model="montoInicial" type="number" step="any" min=”0″ class="form-control" placeholder="monto">
            </div>                         
           <h3>Rendimiento Mensual <span style=" font-style: italic; ">aprox</span> (Entre en 2 y el 4%)</h3>
            <div class="input-group">
                <span class="input-group-addon">%</span>
                <input ng-model="rendimiento" type="text" class="form-control" placeholder="Rendimiento">
            </div>
            <h3>Tiempo Proyectado</h3>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                <input ng-model="dias" type="text" class="form-control" placeholder="meses">
            </div>
            <br>
            
                <button type="submit" class="btn btn-primary btn-lg"  ng-click="result= calc(montoInicial ,rendimiento,dias-1)">Calcular</button>
                <button type="submit" class="btn btn-primary btn-lg" ng-click="reset()">Reiniciar</button>
                <button type="submit" class="btn btn-primary btn-lg" ng-click="down()">Descargar</button>
                <h3>Monto Total: {{result[0] | number : 2 }}</h3>
                <h3>Rendimiento Total: {{result[1]| number : 2}}</h3>        
                 
        </form>
        <table class="table table-bordered" id="table1">
            <thead>
              <tr>
                <th>Mes</th>
                <th>Monto</th>
                <th>Rendimiento</th>
              </tr>
            </thead>
            <tbody ng-model="objmeses" >
                <tr ng-repeat="x in objmeses">
                    <td>{{ x.mes }}</td>
                    <td>{{ x.monto | number : 2 }}</td>
                    <td>{{ x.rendimiento| number : 2}}</td>
                </tr>
            </tbody>
		</table>
</div>    
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function(event) { 
        document.getElementById('foo').value = '10000000';
document.getElementById('fou').value = '4';
document.getElementById('foi').value = '12';
    });
</script>

<?php include_once('layouts/footer.php'); ?>
