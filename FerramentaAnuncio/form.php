<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ferramenta Anúncio</title>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
		<div class="grid text-center">
		<h1><b>Criador de anúncios de alta performace</b></h1>
		<p>Ferramenta para arrumar suas fotos de anúncio com alta velocidade, desempenho e praticidade.</p>

		<?php if(isset($_SESSION['msg'])){ ?>
			<div class="alert alert-success" role="alert">
		<?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']);} ?>
			</div>
		<?php } ?>

		<table class="table">
			<form method="POST" action="script.php" enctype="multipart/form-data">
		<thead>
				<th scope="col">O que é:</th>
				<th scope="col"></th>
		</thead>
			<tbody>
			<tr>
				<th scope="row">Capa</th>
				<td><input type="file" class="form-control" name="capa"></td>
			</tr>
			<tr>
				<th scope="row">Img1:</th>
				<td><input type="file" class="form-control" name="img1"></td>
			</tr>
			<tr>
				<th scope="row">Img2:</th>
				<td><input type="file" class="form-control" name="img2"></td>
			</tr>

			<tr>
				<th scope="row">Img3:</th>
				<td><input type="file" class="form-control" name="img3"></td>
			</tr>

			<tr>
				<th scope="row">Img4:</th>
				<td><input type="file" class="form-control" name="img4"></td>
			</tr>

			<tr>
				<th scope="row">Img5:</th>
				<td><input type="file" class="form-control" name="img5"></td>
			</tr>

			<tr>
				<th scope="row">Img6:</th>
				<td><input type="file" class="form-control" name="img6"></td>
			</tr>

			<tr>
				<th scope="row">Img7:</th>
				<td><input type="file" class="form-control" name="img7"></td>
			</tr>

			<tr>
				<th scope="row">Img8:</th>
				<td><input type="file" class="form-control" name="img8"></td>
			</tr>

			<tr>
				<th scope="row">Img9:</th>
				<td><input type="file" class="form-control" name="img9"></td>
			</tr>
				</tbody>
					</div>
			</table>

			<th><input type="submit" class="btn btn-primary" value="Processar" name="bt_enviar"></th>
		</form>



		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
				<div class="col-md-4 d-flex align-items-center">
				<span class="mb-3 mb-md-0 text-muted">&copy; 2022 Desenvolvido por Gabriel Godoy da Silva</span>
				</div>
			</footer>
		</div>

	</body>
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>