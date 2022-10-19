<?php

//Ver salteo de renglón cuando se usa bold
//Ver cómo agregar margenes
//Ver cómo agregar sangrías
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->falseBoldWeight = 8;
$mpdf->WriteHTML('<h1 style="text-align: center; font-size: 17px;padding-top:2.5%;"><b>Formato general de presentación de Evaluación de Impacto en la Protección de Datos Personales </b></h1>');
$mpdf->falseBoldWeight = 3;
$mpdf->WriteHTML('<p style="text-align: right"><b>No. oficio:</b> COTAI-PR-287/2022<br>Monterrey, Nuevo León, a 22 de enero de 2019<br><b>Asunto:</b> Se presenta EIPDP</p><br>'); 
$mpdf->falseBoldWeight = 3;
$mpdf->WriteHTML('<p style="text-align: left;text-indent: 0em"><b>TITULAR DE LA DIRECCIÓN DE DATOS PERSONALES DE LA</b><br><b>H. COMISIÓN DE TRANSPARENCIA Y ACCESO A LA</b><br><b>INFORMACIÓN DEL ESTADO DE NUEVO LEÓN. </b><br><b>P r e s e n t e.- </b></p>');
$mpdf->falseBoldWeight = 3;
$mpdf->WriteHTML('<p>Por medio del presente, le envío un cordial saludo, asimismo, 
aprovecho la presente misiva para hacer de su conocimiento que la/el
<b>( Municipio de Santa Catarina, Nuevo León )</b> con motivo de la <b>( implementación de 
un software para brindar atención ciudadana mediante el uso de las tecnologías de la información)</b>, 
se advierte que el la ejecución de esta implica<b> ( un tratamiento intensivo o relevante de 
datos personales de carácter particular por las funciones que dicho software realiza).</b><p>');
$mpdf->WriteHTML('<p>Al efecto, este sujeto obligado en cumplimiento a lo dispuesto en los artículos 3 
fracción XVII, 35 fracción VIII, 88, 89 y 91 de la Ley de Protección de Datos Personales en Posesión 
de los Sujetos Obligados del Estado de Nuevo León, así como los diversos 3, 10 y 23 de las 
Disposiciones Administrativas de Carácter General para la elaboración, presentación y 
valoración de evaluaciones de impacto, realizó el documento relativo a la evaluación de 
impacto en la protección de datos personales. </p>', \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('<p>En esas circunstancias, dicha evaluación se adjunta al presente para los efectos legales que hubiera lugar. ', \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('<p>Sin otro particular por el momento, le reitero mi más atenta y distinguida consideración, quedando a sus apreciables órdenes. </p>', \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->WriteHTML('<br><br><br><br><br><br><br><br><br><br><br><br><br><br><p style="text-align: center">Atentamente </p>', \Mpdf\HTMLParserMode::HTML_BODY);
// Buscar versión mpdf para agregar el siguiente footer: (Nombre y cargo del servidor público facultado para presentar la EIPDP) 
$mpdf->AddPage();
$mpdf->WriteHTML('<p style="text-align: center">Portada </p>', \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->AddPage();
$mpdf->falseBoldWeight = 3;
$mpdf->WriteHTML('<p><b>EVALUACIÓN DE IMPACTO EN LA PROTECCIÓN DE DATOS PERSONALES.</b><p>');
$mpdf->WriteHTML('<p><b>APARTADO 1. DESCRIPCIÓN DE LA POLÍTICA PÚBLICA, PROGRAMA, 
SISTEMA O PLATAFORMA INFORMÁTICA, APLICACIÓN ELECTRÓNICA O CUALQUIER OTRA TECNOLOGÍA 
QUE IMPLIQUE UN TRATAMIENTO INTENSIVO O RELEVANTE DE DATOS PERSONALES QUE PRETENDA 
PONER EN OPERACIÓN O MODIFICAR. </b><p>');
$mpdf->WriteHTML('<p>De conformidad con lo dispuesto en los artículos 89 de la Ley de
Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Nuevo León, 
así como los diversos 14, fracción I y 15 de las Disposiciones administrativas de carácter
general para la elaboración, presentación y valoración de evaluaciones de impacto en la 
protección de datos personales, se proporciona la siguiente información:  </p>', \Mpdf\HTMLParserMode::HTML_BODY);
//$mpdf->Output('filename.pdf', \Mpdf\Output\Destination::FILE);

//Texto de prueba 
$mpdf->WriteHTML('<br><br><br><br>');
$mpdf->WriteHTML('<p>De conformidad con lo dispuesto en los artículos 89 de la Ley de
Protección de Datos Personales en Posesión de Sujetos Obligados del Estado de Nuevo León, 
así como los diversos 14, fracción I y 15 de las Disposiciones administrativas de carácter
general para la elaboración, presentación y valoración de evaluaciones de impacto en la 
protección de datos personales, se proporciona la siguiente información:  </p>', \Mpdf\HTMLParserMode::HTML_BODY);
//$mpdf->Output('filename.pdf', \Mpdf\Output\Destination::FILE);

$mpdf->Output();