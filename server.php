<?php

//var_dump ($_SERVER);
function momentoCGI(){
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

    /*
     * estamos a acompanhar esta escrita com Git
     * queremos introduzir git branch
     * criar "ramos" / "contextos de dev"
     * git branch <nomeDoRamo>
     * por exemplo, fizémos
     * git branch get
     * mas depois não gostamos do nome "get"
     * e quisemos mudá-lo para "branchGet"
     * git branch -m get branchGet
     *
     * para passar a trabalhar no context do novo
     * ramos
     *
     * git checkout <nomeDoRamo>
     * no nosso caso
     * git checkout branchGet
     *
     * e estou no branch
     */
}

//momento1();

/*
 * exemplo de receber por $_GET
 */
function momentoGet(){
    //receção por GET
    foreach (
        $_GET as
        $nameUsadoNoHtml => $valorFornecido
    ){
        echo "$nameUsadoNoHtml : $valorFornecido<br>";
    }//foreach
}//momentoGet

momentoCGI();
momentoGet();
