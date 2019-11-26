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
 $all_no = GetSearch($database, $param);
?>
<form action="search.php" name="SearchName" method="POST">

<table class="table table-bordered">
<tr>
	<td><strong>Типи операторів</strong></td>
	<td><strong>Оператор</strong></td>
	<td><strong>Назви операторів</strong></td>
	<td><strong>Приклад</strong></td>
	<td><strong>Результат</strong></td>

</tr>
<?php foreach ($all_no as $ano) { ?>
	<tr>
		<td><?php echo $ano['name_type']; ?></td>
		<td><?php echo $ano['operator']; ?></td>
		<td><?php echo $ano['name_operator']; ?></td>
		<td><?php echo $ano['example']; ?></td>
		<td><?php echo $ano['result_work']; ?></td>
		</tr>
<?php } ?>
</table>
</div>
</div>
</body>
</html>