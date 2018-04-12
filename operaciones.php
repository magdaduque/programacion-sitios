<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Operaciones</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<br>
	<br>
	<form method="POST" action="resultado.php">
		<center><label>Ingresar Número 1</label>
		<br>
		<input type="number" name="numero1">
		<br>
		<label>Ingresar Número 2</label>
		<br>
		<input type="number" name="numero2">
		<br>
		<br>
		<select name="operacion">
			<option value="sumar">sumar</option>
			<option value="restar">restar</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">dividir</option>
		</select>
		<br>
		<br>
		<button type="submit">Ver resultado</button>
		<p>&nbsp;</p>
		</center><a href="index.html"><input type="button" value="INICIO" name="submit" /></a>
	</form>
</body>
</html>