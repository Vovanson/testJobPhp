<?php

function __autoload( $className ) {
    $className = str_replace( "..", "", $className );
    require_once( "Accessories/$className.php" );
}
//color, width line, body, description, manufacturer
$pen = new Pen("blue", "0.7", "blue-black", "Useful series of pens with cap", "BRAUBERG");

$pen->write($pen->getDescription());
$pen->press();//on
$pen->write($pen->getDescription());
$pen->press();//off
