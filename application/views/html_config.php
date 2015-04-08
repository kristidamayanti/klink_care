<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo doctype('html5')."\n";
echo '<head>'."\n";
$meta = array(
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'description', 'content' => 'K-Link Care'),
    array('name' => 'keywords', 'content' => 'k-link care'),
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
);

echo meta($meta);

$css_boostrap_res = array(
    'href' => 'bootstrap/css/bootstrap-responsive.min.css',
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'charset' => 'utf-8'
);

echo link_tag($css_boostrap_res);

$css_boostrap = array(
    'href' => 'bootstrap/css/bootstrap.min.css',
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'charset' => 'utf-8'
);

echo link_tag($css_boostrap)."\n";

$css_style = array(
    'href' => 'bootstrap/css/style.css',
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'charset' => 'utf-8'
);

echo link_tag($css_style)."\n";

$css_amazingslider = array(
    'href' => 'bootstrap/css/amazingslider-1.css',
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'charset' => 'utf-8'
);

echo link_tag($css_amazingslider)."\n";
echo '<title>'.$titlepage.'</title>'."\n";
?>
<!-- Le styles -->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
</head>
