//initial angular
var myApp = angular.module('myApp', []);
var objmeses = [];

myApp.controller('calculatorCtrl', function($scope) {	
	
	$scope.objmeses = [];
	$scope.calc = calcTotal;
	$scope.objmeses= objmeses; 
	$scope.reset=reset;
	$scope.download=download;
	$scope.down=down;	
		
	function calcTotal(monto_inicial, porcentaje, meses){
		resetter(objmeses);
		porcentaje=porcentaje*(meses+1);
		var total_monto = monto_inicial;
		var rendimiento = (total_monto*porcentaje/100)/(meses+1);
		var total_rendimiento = rendimiento;
		
		for( var mes = 0; mes <=meses; mes++){
			if(mes === 0){         
			}
			else{
				total_monto+=rendimiento;
				rendimiento=(total_monto*porcentaje/100)/(meses+1);
				total_rendimiento +=rendimiento; 
			}        
			objmeses.push({"mes" : (mes+1), "monto": total_monto, "rendimiento":rendimiento});
        }
		console.log(objmeses);
		return [total_monto+rendimiento,total_rendimiento];
		//return [objmeses];
    }
	
	function reset(){
		resetter(objmeses);
		//document.getElementById("table1").innerHTML = "";
		//document.getElementById("myForm").reset();
		$scope.result =[];
	}
	
	function resetter(arr){
		arr.splice(0,arr.length)
	}	
	
	function download(){
		var data = objmeses;
		data.push({"monto":$scope.result[0],"rendimiento": $scope.result[1]});
		if(data != '')
		  JSONToCSVConvertor(data, true);
		else
		alert("no existe una tabla actual");
	}
	
	function down(){
		var year = (new Date()).getFullYear();
		var month = (new Date()).getMonth()+1;
		var day = (new Date()).getDate();	
		var opts = [{sheetid:'One',header:true},{sheetid:'Two',header:false}];
		var res = alasql('SELECT * INTO XLSX("Simulación_'+day+'_'+month+'_'+year+'.xlsx",?) FROM ?',[opts,[objmeses]]);
	}
	
	function msieversion() {
		var ua = window.navigator.userAgent; 
		var msie = ua.indexOf("MSIE "); 
		// If Internet Explorer, return version number
		if (msie != -1 || !!navigator.userAgent.match(/Trident.*rv\:11\./)){
			return true;
		} else { // If another browser, 
			return false;
		}
		return false; 
	}
	
	function JSONToCSVConvertor(JSONData,ShowLabel) {    
		var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;   
		var CSV = '';     
		if (ShowLabel) {
			var row = "";
			for (var index in arrData[0]) {
				row += index + ',';
			}
			row = row.slice(0, -1);
			CSV += row + '\r\n';
		}
		for (var i = 0; i < arrData.length; i++) {
			var row = "";
			for (var index in arrData[i]) {
				var arrValue = arrData[i][index] == null ? "" : '="' + arrData[i][index] + '"';
				row += arrValue + ',';
			}
			row.slice(0, row.length - 1);
			CSV += row + '\r\n';
		}
		if (CSV == '') {        
			growl.error("Invalid data");
			return;
		}		   
		var fileName = "Result";
		if(msieversion()){
			var IEwindow = window.open();
			IEwindow.document.write('sep=,\r\n' + CSV);
			IEwindow.document.close();
			IEwindow.document.execCommand('SaveAs', true, fileName + ".csv");
			IEwindow.close();
		} else {
		   var uri = 'data:application/csv;charset=utf-8,' + escape(CSV);
		   var link = document.createElement("a");    
		   link.href = uri;
		   link.style = "visibility:hidden";
		   link.download = fileName + ".csv";
		   document.body.appendChild(link);
		   link.click();
		   document.body.removeChild(link);
		}
	}
});  
 

