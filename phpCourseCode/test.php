<?php

$greeting = 'Syed abbas hyder';

echo 'hello, $greeting    '; // '' -> prints everything literally

echo "hello, $greeting     "; // "" -> prints the value of the variable

echo "hello" . $greeting; // . -> for concat of string
echo "  hello {$greeting}"; // {} -> to make it more clear it is variable