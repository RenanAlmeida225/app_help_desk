<?php
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', ',', $_POST['descricao']);
$texto  = $titulo . '#' . $categoria . '#' . $descricao."\n";
$arquivo = fopen('arquivo.hd', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
echo $texto;