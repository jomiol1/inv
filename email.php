<?php
require_once('includes/load.php');
// Mostrar errores PHP (Desactivar en producción)
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Incluir la libreria PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';

// Inicio
$mail = new PHPMailer(true);

try {
    // Configuracion SMTP
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                         // Mostrar salida (Desactivar en producción)
    $mail->isSMTP();                                               // Activar envio SMTP
    $mail->Host  = 'smtp.gmail.com';                     // Servidor SMTP
    $mail->SMTPAuth  = true;                                       // Identificacion SMTP
    $mail->Username  = 'tecnofenixinversiones@gmail.com';                  // Usuario SMTP
    $mail->Password  = 'naju4422';	          // Contraseña SMTP
    $mail->SMTPSecure = 'tls';
    $mail->Port  = 587;
    $mail->setFrom('tecnofenixinversiones@gmail.com', 'Tecnologia Fenix Inversiones');                // Remitente del correo

    // Destinatarios
    $mail->addAddress('contabilidad@fenixinversiones.com', 'Paola Vinasco');  // Email y nombre del destinatario
    $mail->addAddress('nancyramirez@fenixinversiones.com', 'Nancy Ramirez');  // Email y nombre del destinatario
    $mail->addAddress('carolinaestrada@fenixinversiones.com', 'Caro Estrada');  // Email y nombre del destinatario
    $mail->addAddress('juangutierrez@fenixinversiones.com', 'Juan Gutierrez');  // Email y nombre del destinatario

    // Contenido del correo
    $mail->isHTML(true);

    if($_GET['flag']=='0'){
        $reinvest='';

        if($_GET['reinvest']=="1"){$reinvest='Reinvierte';}else{$reinvest='Retira';}

        $mail->Subject = 'Ingreso Nuevo Inversionista';
        $mail->Body  = 'Se acaba de ingresar un nuevo inversionista en el software  <br>
        <b>Los datos son los siguientes:</b> <br>
        <b>Nombre: </b>'.$_GET['name'].' <br>'.'
        <b>Apellido: </b>'.$_GET['last_name'].' <br>'.'
        <b>Direccion: </b>'.$_GET['dir'].' <br>'.'
        <b>Telefono: </b>'.$_GET['phone'].' <br>'.'
        <b>Reinvierte: </b>'.$reinvest.' <br>'.'
        <b>Fecha de Ingreso: </b>'.$_GET['date'].' <br>'.'
        <b>Cedula: </b>'.$_GET['cedula'].' <br>'.'
        <b>Valor Inversion: </b>'.$_GET['value'].' <br>'.'
        <b>Dias por pagar: </b>'.$_GET['days'].' <br>'.'
        <b>Id: </b>'.$_GET['id'].' <br>';
        //redirect('email.php?name='.$p_name.'&last_name='.$p_last_name.'&dir='.$p_dir.'&phone='.$p_phone.'&reinvest='.$p_reinvest.'&date='.$date_start.'&cedula='.$p_cedula.'&value='.$p_inv_ini.'&days='.$business_days.'&id='.$latest_id,true);
    }else{
        $name_mes = find_by_id('perc_mes',remove_junk($_GET['mes']));
        $name = find_by_id('investors',remove_junk($_GET['id_inv']));        
        

        $mail->Subject = 'Adicion de capital';
        $mail->Body  = 'Se registro una adicion de capital en el software  <br>
        <b>Los datos son los siguientes:</b> <br>
        <b>Fecha: </b>'.$_GET['date'].' <br>'.'
        <b>Nombre: </b>'.remove_junk($name['inv_name']).' '.remove_junk($name['inv_last_name']).' <br>'.'
        <b>Valor de la adicion: </b>'.$_GET['value'].' <br>'.'
        <b>Dias Por pagar: </b>'.$_GET['days'].' <br>'.'
        <b>Mes de adicion: </b>'.remove_junk($name_mes['perc_mes_name']).' <br>';
        //redirect('email.php?flag=1&date='.$date.'&value='.$p_val.'&days='.$business_days.'&mes='.$p_mes_id,true);
    }

    
    $mail->AltBody = 'Se acaba de ingresar un nuevo inversionista en el software';
    $mail->send();
    //echo 'El mensaje se ha enviado';
    //redirect('add_product.php', false);
    if($_GET['flag']=='0'){
        header('Location: add_product.php');
    }else{
        $session->msg('s',"Adición agregada exitosamente. ");
        header('Location: add_inv.php');
    }
} catch (Exception $e) {
    echo "El mensaje no se ha enviado. Mailer Error: {$mail->ErrorInfo}";
    redirect('add_product.php', false);
}