<div class="titulo">Tipo String:</div>

<?php
    echo '<small>';
    echo 'Eu sou uma string <br>';
    echo 'var_dump de string: ', var_dump("Eu também");
    print("<br> Também existe a função print!");
    echo '<br>';

    echo '<p> Concatenação: </p>';
    echo ' echo "Concatenação por" . "ponto"; <br>';
    echo ' echo "Concatenação por" , "virgula" -- somente em ambiente echo <br>';
    echo ' Concatenação com repetição de símbologia (ver cód.): <br>';
    echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ";
    echo '<br>';
    echo ' Para imprimir a barra: \\ <br>'; 
    echo ' Para imprimir porcentagem: %';
    
    print('<p>Algumas funções (ver cód):</p>');
    print('Maiúscula: ' . strtoupper('maximizado.'));
    print('<br>Minúscula: ' . strtolower('MINIMIZADO.'));
    print('<br> Só a primeira maiúcula: '. ucfirst('lucas.'));
    print('<br> Primeira letra de todas as palavras: ' . ucwords('lucas é lindo.'));
    print('<br> Quantas letras?: ' . strlen('Quantas letras?'));
    print('<br> Quantas letras em "Eu também"? (utf-8): ' . mb_strlen("Eu também", "utf-8"));
    print('<br> Selecionando apenas uma parte: ' . substr('Só uma parte mesmo', 7, 6));
    print('<br> Troca de strings: str_replace("nesse", "neste", "nesse ambiente");');
?>

