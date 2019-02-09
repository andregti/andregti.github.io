<?php

$email = $_POST['email'];

$conteudo = "$email\r\n";

$arquivo = "dados.txt";

$criar = fopen($arquivo, "a");

$escrever = fwrite($criar, $conteudo);

echo "Arquivo gravado com Sucesso!";

// if($escrever == true){ echo "Dados armazenados em $arquivo"; } else { echo "Erro ao salvar dados em $arquivo"; 

fclose($abrir);

?>


 
