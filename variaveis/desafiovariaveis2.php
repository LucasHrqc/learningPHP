<div class="titulo">Desafio:</div>

<?php
  echo '<small>';
  echo "Fazer a seguinte frase com apenas uma variável da lista: 'Nossa!
  Eu consegui responder esse desafio!'";

  $a = 'Nossa';
  $Nossa = 'Eu';
  $Eu = 'consegui';
  $consegui = 'responder';
  $responder = 'esse';
  $esse = 'desafio';

  echo "<br>";
  echo "$a! {$$a} ${$$a} ${$$$a} ${$$$$a} ${$$$$$a}!";

?>