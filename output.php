
<?php

require_once 'libs/ExcelLibrary/Classes/PHPExcel.php';
include 'ChromePhp.php';
ChromePhp::log('Consola ChromePhp!');
$tipo = isset($_REQUEST['t']) ? $_REQUEST['t'] : 'excel';
ChromePhp::log($_REQUEST['id']);
//$id = isset($_REQUEST['id']) ? $_REQUEST['id'];
$extension = '.xls';

if($tipo == 'word') $extension = '.doc';

// Si queremos exportar a PDF
if($tipo == 'pdf'){
    require_once 'libs/dompdf/dompdf_config.inc.php';
    
    $dompdf = new DOMPDF();
    $dompdf->load_html( file_get_contents( 'http://localhost/report.php' ) );
    $dompdf->render();
    $dompdf->stream("mi_archivo.pdf");
} else{
    
    require_once 'report.php';
    
    header('Content-type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename=reporte.xls');

    /*$excel=new PHPExcel();

    $excel->getProperties()
    ->setCreator("Cattivo")
    ->setLastModifiedBy("Cattivo")
    ->setTitle("Documento Excel de Prueba")
    ->setSubject("Documento Excel de Prueba")
    ->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
    ->setKeywords("Excel Office 2007 openxml php")
    ->setCategory("Pruebas de Excel");

    $excel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Valor 1')
    ->setCellValue('B1', 'Valor 2')
    ->setCellValue('C1', 'Total')
    ->setCellValue('A2', '10')
    ->setCellValue('C2', '=sum(A2:B2)');

    $pagina=$excel->getActiveSheet();

    $pagina->setTitle('Products');

    $objWriter=PHPExcel_IOFactory::createWriter($excel, 'Excel5');

    $objWriter->save('php://output');*/

}

?>