<h2>Estrutura de decisão  </h2>
<p> 
    as Estruturas de condição permitem 
    executar blocos distintos de código dado uma condição.
    <strong> Exemplo</strong>
    <pre>
        if(condicao){
            //instruções executadas
            //caso a condição seja verdadeira
        }else{
            //instruções executadas,caso
        }//a condição seja falsa.
</p>


      
<?php
    $media = 7;

    if($media >=6){
        echo "O aluno foi aprovado";
    }else{
        echo "O aluno foi reprovado";
    }
?>
----------------------------------------------------
</p>


<!-- Se a média for maior ou igual a 6 o aluno sera aprovado, caso a média maior ou igual a 3 o aluno está de recuperação,
    caso a nota seja menor do que 3 o aluno está reprovado-->
<?php
    $media = 3;

    if($media >=6){
        echo "O aluno foi aprovado";
    }else   if($media>=3){
            echo "Refazer Exame";
    }else{
        echo "O aluno foi reprovado";
    }
        
?>

----------------------------------------
<!-- PHP Converte automáticamente 0=falso 1=verdadeiro-->
<?php
    if(0){
        echo "verdadeiro";
    }else{
        echo "falso";
    }   
?>
<p>O PHP faz a converção de alguns tipo para verdadeiro ou falso.

    <strong>True</strong>
    <ul>
    <li>String com texto</li>
    <li>Número maior que 0</li>
    <li>Vetor com elementos</li>
    </ul>
    

    <strong>False</strong>
    <ul> 
    <li>String vazia</li>
    <li>Número igual a 0</li>
    <li>Vetor vazio</li>
    </ul>
    

<?php
    $media = 3;
    if($media>=6 && "quero passar"){
        echo "passei krl";
    }else{
        echo "fudeu";
    }
?>










   