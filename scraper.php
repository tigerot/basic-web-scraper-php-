<?php
require ('simple_html_dom.php');
$array0=array();
$url = 'https://www.hepsiburada.com/sitemaps/sitemap_1.xml';
$xml1 = simplexml_load_file($url);
foreach($xml1->url as $myxml){
foreach($myxml->loc as $search){
echo "<pre>";
print_r($search);
echo "</pre>";
}
}
$dom2 = file_get_html('https://www.hepsiburada.com/brut-oceans-deodorant-sprey-200-ml-pm-sgbrt87171639619');
$array1=array();
$array2=array();
$array3=array();
foreach($dom2->find('span[itemprop=name]') as $kategori){
		$array1[]=$kategori->plaintext . "<br>";
}
foreach($dom2->find('h1[class=product-name best-price-trick]') as $isim){
	$array2[]=$isim->plaintext."<br>";
}
foreach($dom2->find('table[class=data-list tech-spec]') as $aciklama1){
	$arrsplit=explode(" \n",$aciklama1);
}
echo "<pre>";
print_r($array1);
print_r($array2);
print_r($arrsplit);
echo "</pre>";
$dom2->clear(); 
unset($dom2);
?>