<?php
    //INICIAMOS LOS ARCHIVOS DE LA LIBRERIA HTML2PDF
    require 'vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    //NOS CONECTAMOS A LA BASE DE DATOS Y COMPROBAMOS A LOS USUARIOS
    require_once 'models/connect_database.php';
    if(isset($_GET['user-id']) && $_SESSION['usuario-online'][1] == 'Gerente'){
        //Recoger contenido de otro fichero
        ob_start();
        $id_usuario = $_GET['user-id'];
        require_once 'models/insert_into_pdf.php';
        $html = ob_get_clean();

        $nombre_apellido = utf8_encode($_SESSION['nombre-apellido-usuario']);
        //CREAMOS EL DOCUMENTO PDF
        $html2pdf = new Html2Pdf('P', 'A4', 'es', 'true', 'UTF-8');
        $html2pdf->writeHTML($html);
        $html2pdf->output('ESTADO_DE_CUENTA_'.$nombre_apellido.'.pdf');
    }
?>