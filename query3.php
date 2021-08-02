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

$query3 = mysqli_query($connection,"SELECT u.last_name,d.description,up.created_at
		FROM department d JOIN user_position up ON
		d.id=up.department_id
		LEFT JOIN user_position up2 ON
		(d.id=up2.department_id AND up2.id>up.id)
		JOIN user u ON up.user_id=u.id
		WHERE up.id IS null");
$table3 = '<table class="table">';
$table3.='<tr><th>Имя</th><th>Отдел</th><th>Дата найма</th></tr> ';
	while ($res3= mysqli_fetch_assoc($query3)){
		$table3.='<tr>
		<td>'.$res3['last_name'].'</td>
		<td>'.$res3['description'].'</td>
		<td>'.$res3['created_at'].'</td>
		</tr>';
	}
	$table3.='</table>';
	echo $table3;?>

	  </div>
    </div>
</body>

</html>