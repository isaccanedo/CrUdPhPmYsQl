<?php
include 'dbconfig.php';

/**
 * @autor Isac Canedo
 */

if(isset($_POST['btn-save']))
{
	// variáveis para dados de entrada
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	
	// consulta sql para inserir dados no banco de dados
	$sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
		
	// função de execução de consulta sql
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Os dados foram inseridos com sucesso ');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('ocorreu um erro ao inserir seus dados');
		</script>
		<?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operações com PHP e MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Operações com PHP e MySql - <a href="https://github.com/isaccanedo/crud-php-mysql" target="_blank">Isac Canedo</a></label>
    </div>
</div>
<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">voltar para a página principal</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="Primeiro nome" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Último nome" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Cidade" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SALVAR</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
