<?php

//var_dump ($_SERVER);

echo "<h1>Ambiente CGI</h1>".PHP_EOL;

$ul = "<ul>";
foreach ($_SERVER as $chave=>$valor){
    $li = "<li><mark>$chave</mark>".PHP_EOL;
    //.= concatenação cumulativa
    $li.=": $valor</li>";

    $ul.=$li;
}//foreach
$ul."</ul>";

echo $ul;
