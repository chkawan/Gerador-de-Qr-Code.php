<?php
session_start();
ob_start();
//RECBENDO DADOS DO FORMULARIO
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);

    // USAR O USE PARA CARREGAR AS CLASSES ATRAVÉS DO COMPOSER
    use chillerlan\QRCode\{QRCode, QROptions};
    // use chillerlan\QRCode\Output\QROutputInterface;
    // use chillerlan\QRCode\Common\EccLevel;
    // INCLUIR COMPOSER
    include_once('./vendor/autoload.php');

   
    // CRIAR A VARIÁVEL COM A URL PARA O QRCODE
    $data = "https://www.youtube.com/watch?v=xAVfDd2tyP8";
    
    // IMPORIMIR O TITULO
    // echo "<h2>Gerar QRCode da URl: $data</h2>";

    
    // INSTANCIAR A CLASSE PARA ENVIAR OS PARÂMENTROS
    $options = new QROptions([
        //VERSION
        'version'             => 7,
        //OUTPUT
        //'outputType'          =>QRCode::OUTPUT_FPDF, //QROutputInterface::FPDF, // QROutputInterface::MARKUP_SVG, //QRCode::OUTPUT_MARKUP_SVG,
        //ERROR LEVEL
        //'eccLevel'         => EccLevel::L,
        //IMG IS FALSE
        'imageBase64'         => false,
        //SIZE
        // 'svgViewBoxSize'      => 230,
        'scale'            => 5,
        // connect paths
	    //'connectPaths'        => true,
        
    ]);

    // condetudo PDF
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();

    //FUNÇÃO HEADER() E USADA PARA ENVIAR UM CABEÇALHO HTTP
    // if(php_sapi_name() !== 'cli'){
        // header('Content-type: application/pdf');
    // }

    // GERAR QRCode: INSTANCIAR A CLASS E ENVIAR OS DADOS PARA O RENDER GERAR O QRCODE
    // $qrcode = (new QRCode($options))->render($data);
    //var_dump($qrcode);

    //IMPRIMIR O QR CODE
    // echo $qrcode;
 
?>