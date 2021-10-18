<!DOCTYPE html>
<?php
include("classe/conexao.php")

$consulta = "SELECT * FROM aluno";
$con = $mysqli->query($consulta) or die(mysqli->error);
?>

<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>Código</td>
			<td>Nome</td>
			<td>Email</td>
			<td>Data</td>
		</tr>
		<?php while($dado = $con->fetch_array()){
		?>
		<tr>
			<td><?php echo $dado["usu_codigo"]; ?></td>
			<td><?php echo $dado["usu_nome"]; ?></td>
			<td><?php echo $dado["usu_email"]; ?></td>
			<td><?php echo $dado["usu_data"]; ?></td>
		</tr>
	<?php }?>
	</table>

</body>
</html>