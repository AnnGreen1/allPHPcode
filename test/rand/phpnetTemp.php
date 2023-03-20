<?php
// An example how to fetch multiple values from array_rand
//$a = [ 'a', 'b', 'c', 'd', 'e', 'f', 'g' ];
$a = [ '1'=>'a', '2'=>'b', '3'=>'c', '4'=>'d', '5'=>'e', '6'=>'f', '7'=>'g' ];
$n = 3;

// If you want to fetch multiple values you can try this:
print_r( array_intersect_key( $a, array_flip( array_rand( $a, $n ) ) ) );

// If you want to re-index keys wrap the call in 'array_values':
print_r( array_values( array_intersect_key( $a, array_flip( array_rand( $a, $n ) ) ) ) );