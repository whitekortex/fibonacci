<?php

require_once( 'class-fibonacci/public-fib.php' );

$fib = new Display_Fibonacci;

echo '<pre>';
print_r($fib->fibonacci(10));


?>