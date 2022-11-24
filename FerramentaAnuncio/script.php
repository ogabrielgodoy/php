<?php
	//dependecias
	session_start();
	require_once('funcaocapa.php');
	require_once('funcaoimgs.php');
	require_once('config.php');

	if(isset($bt_enviar)){
		header('location:form.php');
	}

    //CAPA
		if(isset($_FILES['capa'])){
			$capa = $_FILES['capa']['name'];

		if($_FILES['capa']['type'] == "image/jpeg" && "image/pjpeg"){
			$erro=false;
			processarcapajpg($capa,$largura,$altura,$logo,$diretorio);
		}elseif($_FILES['capa']['type'] == "image/png" && "image/x-png"){
			$erro=false;
			processarcapapng($capa,$largura,$altura,$logo,$diretorio);
		}elseif($_FILES['capa']['type'] == "image/webp"){
			$erro=false;
			processarcapawebp($capa,$largura,$altura,$logo,$diretorio);
		}
	}

	//IMGS
	if(isset($_FILES['img1'])){
		$img1 = 'img1';
		
		if($_FILES['img1']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img1,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img1']['type'] == "image/png" && "image/x-png"){
			processarimgpng($img1,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img1']['type'] == "image/webp"){
			processarimgwebp($img1,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img2'])){
		$img2 = 'img2';
		
		if($_FILES['img2']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img2,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img2']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img2,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img2']['type'] == "image/webp"){
			processarimgwebp($$img2,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img3'])){
		$img3 = 'img3';
		
		if($_FILES['img3']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img3,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img3']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img3,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img3']['type'] == "image/webp"){
			processarimgwebp($$img3,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img4'])){
		$img4 = 'img4';
		
		if($_FILES['img4']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img4,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img4']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img4,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img4']['type'] == "image/webp"){
			processarimgwebp($$img4,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img5'])){
		$img5 = 'img5';
		
		if($_FILES['img5']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img5,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img5']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img5,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img5']['type'] == "image/webp"){
			processarimgwebp($$img5,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img6'])){
		$img6 = 'img6';
		
		if($_FILES['img6']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img6,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img6']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img6,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img6']['type'] == "image/webp"){
			processarimgwebp($$img6,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img7'])){
		$img7 = 'img7';
		
		if($_FILES['img7']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img7,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img7']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img7,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img7']['type'] == "image/webp"){
			processarimgwebp($$img7,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img8'])){
		$img8 = 'img8';
		
		if($_FILES['img8']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img8,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img8']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img8,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img8']['type'] == "image/webp"){
			processarimgwebp($$img8,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if(isset($_FILES['img9'])){
		$img9 = 'img9';
		
		if($_FILES['img9']['type'] == "image/jpeg" && "image/pjpeg"){
			processarimgjpg($img9,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img9']['type'] == "image/png" && "image/x-png"){
			processarimgpng($$img9,$largura,$altura,$diretorio);
			$erro=false;
		}elseif($_FILES['img9']['type'] == "image/webp"){
			processarimgwebp($$img9,$largura,$altura,$diretorio);
			$erro=false;
		}
	}

	if($erro){
		$_SESSION['msg'] = "<b>Extensão da imagem inválida, a extensão deve ser JPG ou PNG</b>";
		header("Location: form.php");
		exit;
	}

	header('location:form.php');
	$_SESSION['msg'] = '<h2>Convertido com sucesso!</h2>';

