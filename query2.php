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

$query2 = mysqli_query($connection,"SELECT user.first_name,
		  user.last_name,dismission_reason.description,user_dismission.created_at
	 	  FROM `user`,`user_dismission`,`dismission_reason` WHERE user.id = user_dismission.user_id AND user_dismission.reason_id= dismission_reason.id"); //Запрос возвращающий уволенных сотрудников на сегодняшний день, дату  и причину их увольнения.
$table2 = '<table class="table">';
$table2.='<tr><th>Имя</th><th>Фамилия</th><th>Дата увольнения</th><th>причина увольнения</th></tr> ';
	while ($res2= mysqli_fetch_assoc($query2)){
		$table2.='<tr><td>'.$res2['first_name'].'</td>
		<td>'.$res2['last_name'].'</td>
		<td>'.$res2['created_at'].'</td>
		<td>'.$res2['description'].'</td></tr>';
	}
	$table2.='</table>';
	echo $table2;?>

	  </div>
    </div>
</body>

</html>

