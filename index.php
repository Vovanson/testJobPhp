<?php

function __autoload( $className ) {
    $className = str_replace( "..", "", $className );
    require_once( "Accessories/$className.php" );
}
//width line, body, description, manufacturer
$pen = new Pen("0.7", "blue-black", "Special protection against breakage of the lead.", "BRAUBERG");

$pen->write($pen->getDescription());
$pen->press();//push
$pen->write($pen->getDescription());
$pen->write($pen->getDescription());
$pen->press();//push
$pen->write($pen->getDescription());
