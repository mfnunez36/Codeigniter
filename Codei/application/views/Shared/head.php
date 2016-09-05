<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$list_styles = array();
    
if(isset($estilo))
{
	$list_styles = $estilo;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="<?= site_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <?php foreach ($list_styles as $style) { ?>
    <link href="<?= site_url("css/".$style);?>" rel="stylesheet">
    <?php } ?>
    <!---->
</head>
<body id="inicio" data-spy="scroll" data-target=".navbar-fixed-top">
    
	