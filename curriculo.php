<?php
  include "cabecalho.php";
	$html = '<h1><p class="text-center">' . $_POST['nome'] . '</p></h1>
    <p class="text-start">Email: ' . $_POST['email'] . '</p>
    <p class="text-start">nascimento: ' . $_POST['nascimento'] . '</p>
    <p class="text-start">Profissão: ' . $_POST['profissao'] . '</p>
    <p class="text-start">Cidade: ' . $_POST['cidade'] . '</p>
    <p class="text-start">Estado: ' . $_POST['estado'] . '</p>
    <p class="text-start">Escolaridade: ' . $_POST['escolaridade'] . '</p>
    <p class="text-start">Idade: ' . $_POST['idade'] . '</p>
    <button type="button" class="btn btn-primary btn-sm d-print-none" onclick="imprimir();">imprimir</button>';
  echo $html;
  include "rodape.php";
?>