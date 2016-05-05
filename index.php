<?php

function __autoload( $className ) {
    $className = str_replace( "..", "", $className );
    require_once( "Accessories/$className.php" );
}
// width line, color, body, description, manufacturer
$pen = new Pen("0.7",['red','green','blue','black'], "blue-black", "Color pen", "BRAUBERG");

    $pen->write($pen->getDescription());
    $pen->press('0',true);//color choice with the activate
    $pen->write($pen->getDescription());
    $pen->press('2');//off
    $pen->write($pen->getDescription());
    $pen->press('3',true);//on
    $pen->write($pen->getDescription());
    $pen->press('4',true);//no color
    $pen->write($pen->getDescription());
