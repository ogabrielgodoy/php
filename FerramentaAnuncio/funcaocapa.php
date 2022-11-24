<?php

function processarcapajpg($capa,$largura,$altura,$logo,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefromjpeg($_FILES['capa']['tmp_name']);
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
	// imagejpeg($imagem_redimensionada, "$diretorio" . $_FILES['imagem']['name']);

	//marca d' agua
	//Importar a logo
	$logo = imagecreatefromgif("$logo");
	//Obter a largura da logo
	$largura_logo = imagesx($logo);
	//Obter a altura da logo
	$altura_logo = imagesy($logo);
	//echo "$altura_logo - $largura_logo";
	//Calcular posição x sendo 6px da lateral direita
	$x_logo = imagesx($imagem_redimensionada) - $largura_logo - 900;
	//Calcular posição y sendo 6px do rodape
	$y_logo = imagesy($imagem_redimensionada) - $altura_logo - 900;
	imagecopymerge($imagem_redimensionada, $logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 70);
	

	$nomefinal = md5($_FILES["capa"]['tmp_name'] . round(1,942));
	imagejpeg($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");
}


function processarcapapng($capa,$largura,$altura,$logo,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefrompng($_FILES['capa']['tmp_name']);
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
	// imagepng($imagem_redimensionada, "$diretorio" . $_FILES['imagem']['name']);

	//marca d' agua
	//Importar a logo
	$logo = imagecreatefromgif("$logo");
	//Obter a largura da logo
	$largura_logo = imagesx($logo);
	//Obter a altura da logo
	$altura_logo = imagesy($logo);
	//echo "$altura_logo - $largura_logo";
	//Calcular posição x sendo 6px da lateral direita
	$x_logo = imagesx($imagem_redimensionada) - $largura_logo - 900;
	//Calcular posição y sendo 6px do rodape
	$y_logo = imagesy($imagem_redimensionada) - $altura_logo - 900;
	imagecopymerge($imagem_redimensionada, $logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 70);


	$nomefinal = md5($_FILES["capa"]['tmp_name']);
	imagepng($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");
}

function processarcapawebp($imagem,$largura,$altura,$logo,$diretorio){

	//Criar a imagem temporaria a ser manipulada e por no tamanho 1200x1200
	$imagem_temporaria = imagecreatefromwebp($_FILES['capa']['tmp_name']);
	$largura_original = imagesx($imagem_temporaria);
	$altura_original = imagesy($imagem_temporaria);
	/* Configura a nova largura */
	$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
	/* Configura a nova altura */
	$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
	/* Retorna a nova imagem criada */
	$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
	imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
	
	// /* Copia a nova imagem da imagem antiga com o tamanho correto */
	// imagewebp($imagem_redimensionada, "$diretorio" . $_FILES['imagem']['name']);

	//marca d' agua
	//Importar a logo
	$logo = imagecreatefromgif("$logo");
	//Obter a largura da logo
	$largura_logo = imagesx($logo);
	//Obter a altura da logo
	$altura_logo = imagesy($logo);
	//echo "$altura_logo - $largura_logo";
	//Calcular posição x sendo 6px da lateral direita
	$x_logo = imagesx($imagem_redimensionada) - $largura_logo - 900;
	//Calcular posição y sendo 6px do rodape
	$y_logo = imagesy($imagem_redimensionada) - $altura_logo - 900;
	imagecopymerge($imagem_redimensionada, $logo, $x_logo, $y_logo, 0, 0, $largura_logo, $altura_logo, 70);

	$nomefinal = md5($_FILES["capa"]['tmp_name']);
	imagewebp($imagem_redimensionada, "$diretorio" . "$nomefinal" . ".jpg");

}