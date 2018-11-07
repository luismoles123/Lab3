<?php
$xml = simplexml_load_file("../xml/preguntas.xml");
echo '<table border=1> <tr> <th> Correo </th> <th> Enunciado </th> <th> Respuesta Correcta</th>';

foreach($xml->xpath('//assessmentItem') as $assessmentItem){
    echo '<tr><td>'.$assessmentItem->attributes()->author.'</td><td>'.$assessmentItem->itemBody->p.'</td><td>'.$assessmentItem->correctResponse->value.'</td><td>';
}
echo '<table>';
?>