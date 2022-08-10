<div class="titulo">Tipo Booleano:</div>


<?php 
    echo '<small>';
    echo 'Valor boolean true no browser: ' . true;
    echo '<br> Valor boolean false no browser: ' . false;

    echo '<p> Regras para conversão para boolean: </p>';
    echo "O var_dump((bool) 0): ";
    echo var_dump((bool) 0);
    echo '<br> O var_dump((bool) 20): ';
    echo var_dump((bool) 20);
    echo '<br> O var_dump((bool) -1): ';
    echo var_dump((bool) -1);
    echo '<br> O var_dump((bool) 0.0): ';
    echo var_dump((bool) 0.0);
    echo '<br> O var_dump((bool) "00"): ';
    echo var_dump((bool) "00");
    echo '<br> O var_dump((bool) 0.0000001): ';
    echo var_dump((bool) 0.0000001);
    echo '<br> O var_dump((bool) ""): ';
    echo var_dump((bool) "");
    echo '<br> O var_dump((bool) " "): ';
    echo var_dump((bool) " ");
 ?>
