<?php
include 'dbconfig.php';
if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variáveis para dados de entrada
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	
	
	// consulta sql para atualização de dados no banco de dados
	$sql_query = "UPDATE users SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
	
	
	// função de execução de consulta sql
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Os dados foram atualizados com sucesso!');
		window.location.href='index.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('ocorreu um erro ao atualizar os dados');
		</script>
		<?php
	}
	
}
if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operações com PHP e MySql - By Isac Canedo</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>Operações com PHP e MySql - <a href="https://github.com/isaccanedo" target="_blank">Isac Canedo</a></label>
    </div>
</div>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="first_name" placeholder="Primeiro nome" value="<?php echo $fetched_row['first_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="Segundo nome" value="<?php echo $fetched_row['last_name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="Cidade" value="<?php echo $fetched_row['user_city']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>ATUALIZAR</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancelar</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>