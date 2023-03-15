<h2>Matriz</h2>
<p> 
    São estruturas de dados bidimensional,
    onde é necessário informar 2 indeces para
    realizar o acesso de um valor.
</p>
<p>
    Na prática consiste de um valor que armazena
    outros vetores.
</p>

<?php

$produto1= [
            "nome" => "Câmera",
            "marca" => "LG",
            "preco" => "2500",
];

$produto2= [
    "nome" => "Notebook",
    "marca" => "dell",
    "preco" => "7500",
];

$produto3= [
    "nome" => "Smartphone",
    "marca" => "Samsung",
    "preco" => "3500",
];

$produtos = [$produto1,$produto2,$produto3];


    //imprimir todos o valores da matriz, utilizando
    //duas estruturas de repetição, 1 para as linhas outra
    //para as colunas
    for($i=0; $i<=2; $i++){
    foreach($produtos[$i] as $key => $value){
    echo $value. "<br>";
    }
    
}
    echo "<table border='>";
    //outra forma mais facil
    foreach($produtos as $produto){
        echo "<tr>";
        echo "<td>".$produto ["nome"]."</td>";
        echo "<td>".$produto ["marca"]."</td>";
        echo "<td>".$produto ["preco"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    

?>
