<?php

$dados = [
        ["Hugo","19","Macho"],
        ["Regina","48","Femea"],
        ["Bruno","24","Macho"],
        ["Hugo","19","Macho"],
        ["Regina","48","Femea"],
        ["Bruno","24","Macho"],
        ["Hugo","19","Macho"],
        ["Regina","48","Femea"],
        ["Bruno","24","Macho"]
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Meu primeiro exercicio</title>

</head>

<body>

    <h3>Tabela</h3>
    <hr>

    <table border="5">
      <thead>
        <tr>
          <td>Nome</td>
          <td>Idade</td>
          <td>Sexo</td>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($dados as $values): ?>

          <tr>

            <?php foreach ($values as $value): ?>

              <td><?=$value?></td>

            <?php endforeach; ?>

          </tr>

        <?php endforeach; ?>
      </tbody>

    </table>




</body>

</html>
