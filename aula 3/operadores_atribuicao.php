<h2> operadores de atribuição</h2>
<p>
    São utilizados para armazenar
    "atribuir valores a uma variável"
</p>

<ol>
    <li>= | atribuição simples</li>
    <li>+=| acumula o novo valor</li>
    <li>-=| subtrai o valor da variável</li>
    <li>++| incrementa 1 ao valor da variável</li>
    <li>--| subtrai 1 do valor da variável</li>
    <li>.=| concatena o texto ao valor da variável</li>
</ol>

<br> <strong > Exemplos </strong></br>
<?php
    $nota = 5;
    echo $nota."<br>";

    $nota+=5;//soma + 5 na variavel nota
    echo $nota."<br>";//impre o número 10 (5 de antes + 5 de agora)

    $nota -=2;//equivalente a $nota = $nota -2;
    echo $nota."<br>";//impreme o valor 8

    $nota++;//soma 1 ao valor da variável = $nota = $nota +1;
    echo $nota."<br>";//imprime o valor 9

    $nota--;//subtrai 1 do valor da variável = $nota =  $nota -1
    echo $nota."<br>";

    $nome = "David";
    $nome.="Santos "; //concatena o valor anterior "David, com;
                    // o novo valor "Santos" e armazena na ;
                    //variável nome;
    echo $nome; //imprime David Santos;




?>