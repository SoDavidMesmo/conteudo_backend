<style>
    /*Define uma classe CSS chamada "grid". */
  .grid{
    /*Define que os elementos com a classe "grid" serão exibidos como uma grade. */
     display: grid;
     /* Define o tamanho das linhas da grade como "auto" */
     grid-template-rows: auto auto;
     /* Define o tamanho das colunas da grade como "auto" e cria 5 colunas.*/
     grid-template-columns: auto auto auto auto auto;
     /* Define o espaçamento entre as células da grade como 10 pixels. */
     gap: 10px;
  }
</style>

<h2>Estrutura de repetição - for</h2>
<p>
    Utilizada para repetir um conjunto de instruções por um
    número determinado de vezes.
</p>
<strong>Exemplo</strong>
<pre>
    for(inicio, condição, passo){
        //comandos a serem repetidos.
    }
</pre>



<div class="grid">
    <?php
        /*Início de um loop "for" que será executado 10 vezes, uma vez para cada tabuada que queremos gerar.
        A variável "$tabuada" é inicializada com o valor 1. A condição de execução do loop é 
        "$tabuada <= 10", ou seja, o loop continuará a ser executado enquanto "$tabuada" for
        menor ou igual a 10. A cada iteração do loop, o valor de "$tabuada" será incrementado em 1.
        */
        for($tabuada = 1; $tabuada <= 10; $tabuada++){
           
            /*Aqui, estamos imprimindo na tela um elemento div com a classe "tabuada". Isso criará uma 
            nova seção na grade (definida anteriormente no código CSS) para a tabuada atual que está 
            sendo gerada. */
            echo "<div class='tabuada'>";
            
            /*Início de um segundo loop "for", que será executado 11 vezes para gerar cada linha da tabuada.
            A variável "$contador" é inicializada com o valor 0. A condição de execução do loop é
            "$contador <= 10", ou seja, o loop continuará a ser executado enquanto "$contador" for 
            menor ou igual a 10. A cada iteração do loop, o valor de "$contador" será incrementado em 1  */
                for($contador = 0; $contador <= 10; $contador++){
                   
                    /*Aqui, estamos calculando o resultado da multiplicação da tabuada atual ("$tabuada") pelo 
                    contador atual ("$contador"). O resultado será armazenado na variável "$resultado". */
                    $resultado = $tabuada * $contador;
                   
                    /*Aqui, estamos imprimindo na tela a equação da multiplicação, seguida pelo resultado. O 
                    elemento "br" será usado para pular para a próxima linha, permitindo que cada linha da 
                    tabuada seja exibida em uma linha separada. */
                    echo "$tabuada x $contador = $resultado<br>";
                }
            echo "</div>";
        }
    ?>
</div>