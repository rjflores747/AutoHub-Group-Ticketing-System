<?php
    //index.php
    //include autoloader
    use Dompdf\Dompdf;
    use Dompdf\Options;

    require_once '../dompdf/vendor/autoload.php';
    // reference the Dompdf namespace

    $options = new Options();
    $options->set('chroot', realpath(''));
    $document = new Dompdf($options);


    $document->loadHtml('<img src="../img/autohub-logo.png"/>');
    // $document = new

    $document->setPaper('Letter', 'landscape');

    //Render the HTML as PDF
    
    $document->render();
    
    //Get output of generated pdf in Browser
    
    $document->stream("Webslesson", array("Attachment"=>0));
    //1  = Download
    //0 = Preview
    
?>