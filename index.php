<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra o seu Signo</title>
  </head>
  <body>
    <forms method="post" action="/signos.xml">
      <h1>Descubra o seu signo</h1>
      <input type="date" name="birth" id="birth">
      <button type="submit">Saiba seu Signo</button>
    </forms>
    <?php
      $data = $_POST["birth"];
      $xml = simplexml_load_file('signos.xml');
      if($data > $xml->signo->dataInicio || $data < $xml->signo->dataFim) {
        foreach($xml->signo as $resposta):
          echo 'Seu signo é: ' . $resposta->signoNome . '<br>';
          echo 'A descrição é: ' . $resposta->descricao . '<br>';
      }
    ?>
  </body>
</html>