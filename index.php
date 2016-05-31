<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$outp = '[ {"name":"Black Diamond Bandit", "icon":"BlackDiamondBandit600x600.jpeg", "desc":"Лаконічний і легкий рюкзак ідеальний для сходжень в альпійському стилі, що вимагають максимальної свободи рухів.", "price":2250},'.
			'{"name":"The North Face Men`s Ravina Jacket Cosmic Blue","icon":"RavinaJacketCosmicBlue600x600.JPG", "desc":"Чоловіча куртка для зимових видів спорту. Мембрана HyVent гарантує сухість і комфорт під час катання.", "price":7123},'.
			'{"name":"Asolo Enterprise gv MM Coffee", "icon":"EnterpriseMMcoffee600x600.jpg", "desc":"Зимові чоловічі черевики підійдуть як для міста, так і для піших подорожей. Гумова підошва, комбінований верх (нубук і синтетичний матеріал), мембрана GORE-TEX.", "price":4128} ]';
 
echo($outp);
?>