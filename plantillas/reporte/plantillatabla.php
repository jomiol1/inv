<?php
  date_default_timezone_set('America/Bogota');
  function getPlantillas($products){
   
    $plantilla ='<body>
      <header class="clearfix">
        <div id="logo">
          <img src="plantillas\reporte\logo_500.png" width="100" height="66">
        </div>
        <div id="company">
          <h2 class="name">Fenix Inversiones</h2>
          <div>Carrera 16 Bis #8-97
          Pinares de San Martin</div>
          <div>(+57) 314-8076497</div>
          <div><a href="mailto:fenix@fenixinversionesacademia.com">fenix@fenixinversiones.com</a></div>
        </div>
        </div>
      </header>
      <main>
        <div id="details" class="clearfix">
          <div id="invoice">
            <h1>Reporte Inversionistas</h1>
            <div class="date">Fecha:'.date("d/m/Y  g:i a").'</div>            
          </div>
        </div>

        <!-- Cuadro para inversión inicial -->
        <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="unit">Id Inv</th>
            <th class="unit">Nombre</th>
            <th class="unit">Apellido</th>
            <th class="unit">Email</th>
            <th class="unit">Telefóno</th>
            <th class="unit">Rendimiento mes</th>
            <th class="unit">Reinvierte</th>
          </tr>
        </thead>
        <tbody>';
        foreach($products as $product){
          $re='';
          if($product['inv_reinvest']){ $re='SI';} else {$re='NO';}
        $plantilla.='
          <tr >
            <td class="no" style="width:15px" >'.count_id().'</td>
            <td class="unit" style="width:15px" >'.$product["id"].'</td>
            <td class="desc" style="width:200px">'.$product["inv_name"].'</td>
            <td class="unit" style="width:200px">'.$product["inv_last_name"].'</td>
            <td class="desc" style="width:100px">'.$product["inv_email"].'</td>
            <td class="desc" style="width:100px">'.$product["inv_phone"].'</td>
            <td class="desc" style="width:20px">$'.number_format($product["value"],2).'</td>
            <td class="desc" style="width:15px">'.$re.'</td>
          </tr>';
        }

        $plantilla.='</tbody>
      </table>';

        $plantilla.='
        <div id="thanks">Gracias!</div>
        <div id="notices">
          <div>NOTA:</div>';
        $plantilla.='
        </div>
      </main>
      <footer>
        Reporte creado en una computadora y es válida sin la firma y el sello.
      </footer>
    </body>';

  return $plantilla;

}

?>