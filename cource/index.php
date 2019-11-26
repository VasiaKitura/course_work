<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
<link href="index.css"  rel="stylesheet">
<header>
<div class = "header">
<h1>PHP Operator</h1>
</div>
</header>
<div id="content">
<div class="container-fluid">
<?php include 'database.php' ?>
<?php include 'api.php' ?>
<?php 
$all_db = GetAllDataBase($database);
?>

		<a class="btnadd" href="add.php">+ Add</a>

<table class="table table-bordered">
<tr>
	<td><strong>Типи операторів</strong></td>
	<td><strong>Оператор</strong></td>
	<td><strong>Назви операторів</strong></td>
	<td><strong>Приклад</strong></td>
	<td><strong>Результат</strong></td>
	<td><strong>Редагувати</strong></td>
	<td><strong>Видалити</strong></td>	
</tr>
<?php foreach ($all_db as $adb) { ?>
	<tr>
		<td><?php echo $adb['name_type']; ?></td>
		<td><?php echo $adb['operator']; ?></td>
		<td><?php echo $adb['name_operator']; ?></td>
		<td><?php echo $adb['example']; ?></td>
		<td><?php echo $adb['result_work']; ?></td>
		<td>
<!-- 			<button class="editd" href="editor.php?id=<?php echo $adb['id'];?>">Editor</button> -->			
            <a class="btn btn-success btn-sm" href="editor.php?id=<?php echo $adb['id'];?>">Editor</a>  
		</td>
		<td>
			<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $adb['id'];?>">Delete</a>
		</td>
		</tr>
<?php } ?>
</table>
</div>
</div>
</body>
</html>


