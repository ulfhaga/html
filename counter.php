<?php

$count_my_page = ('hitcounter.txt');
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");

if( $fp == false ) {
            echo ( "Error in opening file" );
            exit();
         }
         
fputs($fp , "$hits[0]");
fclose( $fp );
echo "Page view counter " . $hits[0];

?>
