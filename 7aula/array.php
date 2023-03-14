<h2>Array - Vetor</h2>
<p>
    Vetores são estruturas de dados
    unidimensionais "variáveis compostas", que
    permitem o armazenamento de mais de 1 valor.
    Para acessar os valores armazenados em um vetor
    é necessário informar o índice (key).
</p>

<strong>Aparência de um Vetor</strong>
<pre>
     +-----------+
    0|Maça       |
     +-----------+
    1|Uva        |
     +-----------+
    2|Pera       |
     +-----------+
    3|Laranja    |
     +-----------+
</pre>
<strong>Como criar um vetor</strong>
<pre>
    //opção 1
    $variavel = ["Maça", "Uva", "Pera", "Laranja"];

    //opção 2
    $variavel = array("Maça", "Uva", "Pera", "Laranja");

    //opção 3
    $variavel = [];
    $variavel[0] = "Maça";
    $variavel[1] = "Uva";
    $variavel[2] = "Pera";
    $variavel[3] = "Laranja";
</pre>

<?php   
        $variavel = ["Maça", "Uva", "Pera", "Laranja"];
        var_dump($variavel);
        echo $variavel[0] . "<br>";
        echo $variavel[1] . "<br>";
        echo $variavel[2] . "<br>";
        echo $variavel[3] . "<br>";


        echo"<p>&nbsp;</p>";
        for($i=0;$i <4;$i++){
        echo $variavel[$i] . "<br>";
        }
        //vetor notas
        $notas= array(5, 6, 8);
        //calcular a média de notas do vetor?
       

        //ECHO imprimirá o resultado da média na tela
        echo "A média aritmética dos valores é: " . 
        //ARRAY_SUM calcula a soma dos valores em um array.
        //COUNTfaz a contagem  de quantos elementos tem dentro de uma array ou propriedades do objeto.
        array_sum($notas) / count($notas);


        /*Feito pelo professor IVAN
        $A= array(5, 6, 8);
        $media = ($A[0] + $A[1] + $A[2] / 3;

         array_sum($alunos[1],[2]);
        */
?>



        
