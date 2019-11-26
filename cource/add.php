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
<style>
body{
	background-color: DarkSlateGray;
	color: MistyRose;
}
.header{
	text-align: center;
}
.newdata-header {
background-color: #5455;
color: white;
/*display: flex;*/
padding: 2px 16px;
}
.newdata-content {
position: relative;
background-color: #fefefe;
margin: auto;
padding: 0;
border: 1px solid #888;
width: 80%;
/*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);*/
}
.newdata-body {
padding: 2px 16px;
background-color: Lavender;
color: black;
}
.newdata-footer{
background-color: #5455;
color: grey;
display: flex;
padding: 2px 16px;
}
.opadd {	
width: 500px;
/*border-radius: 3px;	*/
}
.subadd {
background-color: #4CAF50;
border: 8px;
color: white;
padding: 5px 10px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
.resadd {
background-color: #DC143C;
border: 8px;
color: white;
padding: 5px 10px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
</style>
<header>
<div class = "header">
<h1>PHP Operator</h1>
</div>
</header>
<div class="newdata-content">
	<div class="newdata-header">
	<h2>Додати новий оператор</h2>
	</div>
	<?php include 'database.php'; ?>
			<?php include 'api.php'; ?>
	<form action="index.php" method="POST">
	<div class="newdata-body">
	<div class="group-form">
	<label for = "operatorsel">Тип оператора <sup>*</sup></label>
	<br>
	<select  name = "type_id" id="type" required>
    <option disabled ="disabled" selected="selected" value="">Выберите тип оператора</option>
	<?php
	$type_id = GetAllType($database);
	foreach ($type_id as $key => $value) {
	echo "<option value=".$value['id'].">".$value['name_type']."</option>";
 	}
 	?>
	</select>
	</div>
	<br>	
	<div class="group-form">
	<label for = "operator1">Оператор <sup>*</sup></label>
	<br>
	<input type="text" id = "operator1" name="operator" class="opadd" placeholder="Введіть оператор" required>
	</div>
	<br>		
	<div class="group-form">
	<label for = "operatorname">Назву оператора <sup>*</sup></label>
	<br>
	<input type="text" id = "operatorname" name="name_operator" class="opadd" placeholder="Введіть назву оператора" required>
	</div>
	<br>
	<div class="group-form">
	<label for = "operatorexamp">Приклад <sup>*</sup></label>
	<br>
	<input type="text" id = "operatorexamp" name="example" class="opadd" placeholder="Введіть приклад" required>
	</div>
	<br>
	<div class="group-form">
	<label for = "operatorres">Результат <sup>*</sup></label>
	<br>
	<input type="text" id = "operatorres" name="result_work" class="opadd" placeholder="Введіть Результат" required>
	</div>
	<br>	
	<button type="submit" name= "ADD" class="subadd">Додати</button>
	<button type="reset" name= "reset" class="resadd">Очистити</button>
	<br>
	<a href="index.php">Перейти на головну сторінку</a>
	
		
	</div>	
	</form>
	
	<div class="newdata-footer">
	<p><sup>*</sup> Поля, які необхідно заповнити</p>
	</div>
</div>
<?php
	if (isset($_POST['ADD'])) {
		$type_id = $_POST['type_id'];
		$operator = $_POST['operator'];
		$name_operator = $_POST['name_operator'];
		// $example = $_POST['example'];
		// $result_work = $_POST['result_work'];	
		AddData($database, $type_id, $operator, $name_operator);
	}
	?>
</div>

</body>
</html>


