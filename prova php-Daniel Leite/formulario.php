<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
	
</head>
<body>
	<main>
		<div class="container">
			<form action="envia.php" method="POST">
				<h1>Inserir</h1>
				<div>
					<label for="title">Título:</label>
					<input type="text" name="title" required>
				</div>
	
				<div>
					<label for="description">Descrição:</label>
					<textarea id="description" name="description" cols="30" rows="10" class="input-padrao" required></textarea>
				</div>
				<div>
					<input type="submit" name="Enviar">
				</div>
			</form>
		</div>
	</main>
</body>
</html>