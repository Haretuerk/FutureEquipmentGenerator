<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>STAR TREK Wortgenerator</title>
<style type="text/css">
<!--
.Stil1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a {
	color: #0d6ab9;
	text-decoration: none;
}
a:hover {
	color: #FFFFFF;
	text-decoration: none;
	background-color: #0d6ab9;
}
-->
</style>
</head>

<body>

<? 
 $arrayeins = array('periphär','invers','hydro','sub', 'inter', 'neuro', 'zentral', 'hyper','','',''); 
 $arrayzwei = array('polarer','galaktischer', 'chromatischer', 'energetischer', 'sensorischer', 'mediärer', 'molekularer', 'parametrischer'); 
 $arraydrei = array('Modulations','Quantisierungs','Interpolations', 'Raster','Polarisations', 'Kompressions','Spektral', 'Flex', 'Plex', 'Hyperraum', 'Warp', 'Impuls', 'Partikel', 'Antimaterie', 'Magnet', 'Protonen', 'Neutronen', 'Subraum', 'Lokal', 'Dekompressions','Neuro', 'Assimilations','Photonen', 'Elektronen','Sequenz', 'Struktur', 'Quanten', 'Phasen', 'Amplituden','Plasma','Ionen'); 
 $arrayvier = array('generator', 'reflektor', 'limiter', 'transmitter', 'emmiter', 'phaser', 'sensor','kommunikator','booster','transformator', 'verstärker','scanner','sequenzer','modulator'); 
 

 
 
 

 $erstes = $arrayeins[rand(0,count($arrayeins)-1)];
  $zweites = $arrayzwei[rand(0,count($arrayzwei)-1)];
   $drittes = $arraydrei[rand(0,count($arraydrei)-1)];
    $viertes = $arrayvier[rand(0,count($arrayvier)-1)];
	?>
	<div style="text-align:center; padding:10px; border:solid #CC0000 3px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:16px; font-weight:bold;">
	<?
	echo $erstes."".$zweites." ".$drittes."".$viertes;
	?>
	</div>
    <p class="Stil1"><a href="javascript:location.reload();"> noch ein Wort! </a></p>
</body>
</html>
