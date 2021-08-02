 <!doctype html>
 <html lang="ru">
 <?php
     include('connection.php');

    ?>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Испытательный срок</title>
 </head>
<body>

    <div class="container mtb-3">
        <div class="table-responsive">

<?php

	$query1 =mysqli_query($connection,"SELECT * FROM `user`
	     WHERE DATEDIFF(CURRENT_DATE(), created_at) <= 90 "); //запрос отбирающий сотрудников, отработавших менее 90 дней


	$table1 = '<table class="table">';   //создаем переменную и помещаем в неё преобр.в таблицу результ запроса
	$table1.='<tr><th>Имя</th><th>Фамилия</th><th>Дата приема</th></tr> ';
	while ($res1 = mysqli_fetch_assoc($query1)){
		$table1.='<tr><td>'.$res1['first_name'].'</td>

		<td>'.$res1['last_name'].'</td>
		<td>'.$res1['created_at'].'</td></tr>';
	}
	$table1.='</table>';
	echo $table1; ?>
	  </div>
    </div>
</body>

</html>







