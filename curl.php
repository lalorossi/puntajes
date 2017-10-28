<?php 
echo "hola";
function get_data($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

// se usa fopen para abrir y crear archivos para meter los datos de la pagina html
// para escribir, se trata como una varianle normal


$returned_content = get_data('http://www.planetagrandt.com.ar/2017/09/puntajes-gran-dt-viernes-29-09-fecha-5-primera-division-2017-2018.html');

/*echo $returned_content;*/

 ?>