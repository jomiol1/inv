<?php

  function sumatoria($num=NULL){
    static $sum=0;
    if($num)
      $sum=$sum+$num;
    return $sum;
  }

  function sumatoria_add($num=NULL){
    static $sum=0;
    if($num)
      $sum=$sum+$num;
    return $sum;
  }

  function sumatoria_inv_ini($num=NULL){
    static $sum=0;
    if($num)
      $sum=$sum+$num;
    return $sum;
  }

  function getPlantillas($inv_ini,$add_inv,$inv_rendi,$inv_cap_reti,$investor,$reinversion){
   
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
          <div id="client">
            <div class="to">Para:</div>';
            foreach($investor as $investor_p){
              $plantilla.='
              <h2 class="name">'.$investor_p["inv_name"]." ".$investor_p["inv_last_name"].'</h2>
              <div class="email"><a href="mailto:john@example.com">'.$investor_p["inv_email"].'</a></div>
            ';
            }
          $date    = make_date();
          $plantilla.='
          </div>
          <div id="invoice">
            <h1>Reporte Rendimientos</h1>
            <div class="date">Fecha: 30/09/2022</div>
          </div>
        </div>

        <!-- Cuadro para inversión inicial -->
        <div class="date">Inversión inicial</div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">DESRIPCIÓN</th>
              <th class="unit">FECHA</th>
              <th class="total" colspan="2">TOTAL</th>
            </tr>
          </thead>
          <tbody>';
          foreach($inv_ini as $inv_ini_p){
            $totalRendi_inv_ini=sumatoria_inv_ini(floatval($inv_ini_p["inv_ini_value"]));
          $plantilla.='
            <tr >
              <td class="no" style="width:15px" >*</td>
              <td class="desc" style="width:300px">Inversión Inicial</td>
              <td class="unit" style="width:300px">'.$inv_ini_p["inv_ini_date"].'</td>
              <td class="total" colspan="2" style="width:300px">$'.number_format($inv_ini_p["inv_ini_value"],2).'</td>
            </tr>';
          }

          foreach($inv_cap_reti as $inv_cap_reti_p){
            $totalRendi_inv_ini=sumatoria_inv_ini(floatval($inv_cap_reti_p["ret_cap_inv"]*(-1)));
            $plantilla.='
              <tr >
                <td class="no" style="width:15px" >*</td>
                <td class="desc" style="width:300px">Retiro de capital</td>
                <td class="unit" style="width:300px">'.$inv_cap_reti_p["ret_cap_date"].'</td>
                <td class="total" colspan="2" style="width:300px">$'.number_format($inv_cap_reti_p["ret_cap_inv"]*(-1),2).'</td>
              </tr>';
          }

          $plantilla.='</tbody>
          <tfoot>
            <!--<tr>
              <td colspan="2"></td>
              <td colspan="2">SUBTOTAL</td>
              <td>$5,200.00</td>
            </tr>-->
            <tr>
              <td colspan="2"></td>
              <td colspan="2"></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TOTAL</td>
              <td>$'.number_format($totalRendi_inv_ini,2).'</td>
            </tr>
          </tfoot>
        </table>';

        if($add_inv){
          $plantilla.='
            <!-- Cuadro para adición de inversión -->
            <div class="date">Adición de Inversión</div>
            <table border="0" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th class="no">#</th>
                  <th class="desc">DESRIPCIÓN</th>
                  <th class="unit">FECHA</th>
                  <th class="total" colspan="2">TOTAL</th>
                </tr>
              </thead>
            <tbody>';

            foreach($add_inv as $add_inv_p){
              $totalRendi_add=sumatoria_add(floatval($add_inv_p["add_inv_val"]));
              $plantilla.='
                <tr>
                  <td class="no" style="width:15px" >'.$add_inv_p["id"].'</td>
                  <td class="desc" style="width:300px">Adición de capital</td>
                  <td class="unit" style="width:300px">'.$add_inv_p["add_inv_date"].'</td>
                  <td class="total" colspan="2" style="width:300px">$'.number_format($add_inv_p["add_inv_val"],2).'</td>
                </tr>';
              }

              $plantilla.='</tbody>
              <tfoot>
                <!--<tr>
                  <td colspan="2"></td>
                  <td colspan="2">SUBTOTAL</td>
                  <td>$5,200.00</td>
                </tr>-->
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2"></td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2">TOTAL</td>
                  <td>$'.number_format($totalRendi_add,2).'</td>
                </tr>
              </tfoot>
            </table>';
        }

        $plantilla.='
        <!-- Cuadro rendimientos del mes-->
        <div class="date">Rendimientos del mes</div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">DESRIPCIÓN</th>
              <th class="unit">FECHA</th>
              <th class="total" colspan="2">TOTAL</th>
            </tr>
          </thead>
          <tbody>';
          
          foreach($inv_rendi as $inv_rendi_p){
            if($inv_rendi_p["inv_rendi_value"]<0){
              $totalRendi_p=$inv_rendi_p["inv_rendi_value"]*-1;
            }else{
              $totalRendi_p=$inv_rendi_p["inv_rendi_value"];
            }
            $totalRendi=sumatoria(floatval($totalRendi_p));
            /*Sacar el nombe del mes con el id de la tabla perc_mes*/
            $name_mes = find_by_id('perc_mes',remove_junk($inv_rendi_p['per_mes_id']));
            $mes_value=$name_mes['perc_mes_value']*100;
            $plantilla.='
              <tr>
                <td class="no" style="width:15px" >'.$inv_rendi_p["id"].'</td>
              ';
              if($investor_p["inv_perc_perm"]==0){
                $plantilla.='
                <td class="desc" style="width:300px">Rendimientos del mes de '.$name_mes['perc_mes_name'].' -> '.$mes_value.'%</td>
                  ';
                }else{
                  $plantilla.='
                  <td class="desc" style="width:300px">Rendimientos del mes de '.$name_mes['perc_mes_name'].' -> '.$investor_p["inv_perc_perm"].'%</td>
                  ';
                }  
            $plantilla.='
                <td class="unit" style="width:300px">'.$inv_rendi_p['inv_rendi_date'].'</td>                
                <td class="total" colspan="2" style="width:300px">$'.number_format($inv_rendi_p["inv_rendi_value"],2).'</td>
              </tr>';
          }
          $plantilla.='</tbody>
          <tfoot>
            <!--<tr>
              <td colspan="2"></td>
              <td colspan="2">SUBTOTAL</td>
              <td>$5,200.00</td>
            </tr>-->
            <tr>
              <td colspan="2"></td>
              <td colspan="2"></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="2"></td>
              <td colspan="2">TOTAL</td>
              <td>$'.number_format($totalRendi,2).'</td>
            </tr>
          </tfoot>
        </table>';

        foreach($reinversion as $reinverst_p){
          //if($reinverst_p['reinvest']!=0){
            $plantilla.='
              <!-- Cuadro rendimientos del mes-->
              <div class="date">Capital Total</div>
              <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                  <tr>
                    <th class="no">#</th>
                    <th class="desc">DESRIPCIÓN</th>
                    <th class="unit">---------------------</th>
                    <th class="total" colspan="2">TOTAL</th>
                  </tr>
                </thead>
                <tbody>';

                foreach($reinversion as $reinversion_p){
                  $total_porc_mes=$reinversion_p['total'];
                  $plantilla.='
                    <tr>
                      <td class="no" style="width:15px" >-></td>
                      <td class="desc" style="width:300px">Total</td>
                      <td class="unit" style="width:300px">---------------------</td>
                      <td class="total" colspan="2" style="width:300px">$'.number_format($total_porc_mes,2).'</td>
                    </tr>';
                }
                $plantilla.='</tbody>
              </table>';
          //}
        }



        $plantilla.='
        <div id="thanks">Gracias!</div>
        <div id="notices">
          <div>NOTA:</div>';
        if($investor_p["inv_perc_perm"]==0){
        $plantilla.='
          <div class="notice">Los rendimientos del mes de '.$name_mes['perc_mes_name'].' fueron del '.$mes_value.'%</div>
          ';
        }else{
          $plantilla.='
          <div class="notice">Los rendimientos del mes de '.$name_mes['perc_mes_name'].' fueron del '.$investor_p["inv_perc_perm"].'%</div>
          ';
        }  
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
