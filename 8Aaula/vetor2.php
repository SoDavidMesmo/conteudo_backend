<h2> Vetor indexado por texto </h2>
<p>
    Os vetores podem usar textos para
    indexar (identificar) os valores armazenados.
    exemplo:
        <pre>
        +--------------------+
    nome | David             |
        +--------------------+ 
    nota1 | 9                |
        +--------------------+ 
    nota1 | 7                |
        +--------------------+ 

        </pre>

</p>



<?php 
    $alunos = [ 
        "nome" => "David",
        "nota1" => 9,
        "nota2" => 7
];  
            //NOTATOTAL foi uma nova "variável" que armazenara o resultado de "nota1 + nota2"
     $alunos["notatotal"]= ($alunos["nota1"] + $alunos["nota2"]."<br>" );
        //exibe informações detalhadas sobre uma ou mais variáveis, incluindo seu tipo, tamanho e conteúdo. 
        var_dump ($alunos); 

      //o foreach é uma estrutura de controle de fluxo útil para iterar sobre um array ou 
    // permite executar uma ação para cada elemento do array ou objeto de forma eficiente.
    foreach($alunos as $key=> $value){
        echo "$key |$value |\n";

    }
?>
