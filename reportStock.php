<?php
$symbol=$_GET["symbol"];
$s=file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$symbol&f=sl1d1t1ohgv&e=.csv");
echo $s;
?>