<?php

/**
 * @file
 * Pruebas.
 */

require('include/simple_html_dom.php');

echo "pruebas";
echo "prueba2";
echo "Prueba4";
echo "prueba5";
echo "Después del commit";
echo "Después del commit P7";
echo "Después del commit P8";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/search?q=aplicaciones+php+gratis');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;

$domResult = new simple_html_dom();
$domResult->load($result);

foreach($domResult->find('a[href^=/url?]') as $link)
echo '<h1>' . $link->plaintext . ' </h1><br>';
if($a){
    echo "okk";;
}
echo "nuevo";
echo "nuevo2";
