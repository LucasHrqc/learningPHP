<div class="titulo">Conversões:</div>

<?php
    echo '<small>';
    echo '<p> Int para Float';
    echo "<br>";
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    echo '<br>';

    echo '<p> Float para Int </p>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump((intval(2.99)));
    echo '<br>';
    var_dump((round(2.8)));
    var_dump((int) round(2.8));
    
    echo '<p> Strings </p>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>', is_string("3" . 2);
    echo '<br>', is_string("3" + 2);
    var_dump(1 + "cinco"); // ignora a segunda parte.
    echo '<br>';
    var_dump(1 + "5 cinco"); // pega somente o 5 e soma.
    echo '<br>';
    var_dump(1 + "5+2"); // pega somente o 5 e soma.

?>