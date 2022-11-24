<?php

function processarimgjpg($img,$largura,$altura,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefromjpeg($_FILES["$img"]['tmp_name']);
	$largura_original = imagesx($imagem_temporaria);
	$altura_original = imagesy($imagem_temporaria);
	/* Configura a nova largura */
	$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
	/* Configura a nova altura */
	$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
	/* Retorna a nova imagem criada */
	$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
	imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

	/* Copia a nova imagem da imagem antiga com o tamanho correto */

	$nomefinal = md5($_FILES["$img"]['tmp_name'] . round(1,942));
	imagejpeg($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");

}

function processarimgpng($img,$largura,$altura,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefrompng($_FILES["$img"]['tmp_name']);
	$largura_original = imagesx($imagem_temporaria);
	$altura_original = imagesy($imagem_temporaria);
	/* Configura a nova largura */
	$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
	/* Configura a nova altura */
	$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
	/* Retorna a nova imagem criada */
	$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
	imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

	/* Copia a nova imagem da imagem antiga com o tamanho correto */

	$nomefinal = md5($_FILES["$img"]['tmp_name'] . round(1,942));
	imagepng($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");

}

function processarimgwebp($img,$largura,$altura,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefromwebp($_FILES["$img"]['tmp_name']);
	$largura_original = imagesx($imagem_temporaria);
	$altura_original = imagesy($imagem_temporaria);
	/* Configura a nova largura */
	$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
	/* Configura a nova altura */
	$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
	/* Retorna a nova imagem criada */
	$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
	imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);

	/* Copia a nova imagem da imagem antiga com o tamanho correto */

	$nomefinal = md5($_FILES["$img"]['tmp_name'] . round(1,942));
	imagewebp($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");

}
