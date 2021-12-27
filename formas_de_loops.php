<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Meu primeiro exercicio</title>

    <style media="screen">
      .cor{
        color: red;
      }
    </style>

</head>

<body>

    <?php for($i = 0; $i<10; $i++){
      echo "<p class=\"cor\">$i</p>";//Diferença de atribuição de cor deste exemplo para o exemplo abaixo
    } ?>

    <hr>

    <?php for($i =0; $i<10; $i++): ?>
      <p class="cor"><?=$i?></p><!-- //Diferença de atribuição de cor deste exemplo para o exemplo acima -->
    <?php endfor; ?>

    <?php

      $nomes = ["Hugo","João","Renan","Bruno","Regina","Nasmin","Alana","Bianca","Wesley"];

      echo "<ul>";
      foreach ($nomes as $nome) {
        echo "<li>$nome<\li>";
      }
      echo "</ul>"

     ?>


</body>

</html>
