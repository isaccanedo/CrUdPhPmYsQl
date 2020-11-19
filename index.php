<?php
include 'dbconfig.php';

/**
 * @autor Isac Canedo
 */

//excluir condição
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operações CRUD com PHP e MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
	if(confirm('Deseja realmente editar ?'))
	{
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Deseja realmente excluir ?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
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
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">Adicionar novos dados</a></th>
    </tr>
    <th>Primeiro nome</th>
    <th>Segundo nome</th>
    <th>Cidade</th>
    <th colspan="2">Operações</th>
    </tr>
    <?php
	$sql_query='SELECT * FROM users';
	$result_set=mysql_query($sql_query);
	if(mysql_num_rows($result_set)>0)
	{
        while($row=mysql_fetch_row($result_set))
		{
		?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDITAR" /></a></td>
            <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETAR" /></a></td>
            </tr>
        <?php
		}
	}
	else
	{
		?>
        <tr>
        <td colspan="5">Dados não encontrados!</td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
</div>

</center>
</body>
</html>
