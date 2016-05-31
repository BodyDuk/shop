<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$outp = '[ {"name":"Тариф 1", "icon":"T1.png", "desc":"Це найдешевший тариф", "price":60},'.
			'{"name":"Тариф 2","icon":"T2.png", "desc":"Це оптимальний тариф", "price":99},'.
			'{"name":"Тариф 3", "icon":"T3.png", "desc":"Це найдорощий тариф", "price":150} ]';
 
echo($outp);
?>
