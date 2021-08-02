 <!doctype html>
 <html lang="ru">
 <?php
     include('connection.php');

     $result = mysqli_query($connection,"SELECT * FROM user");
     $numrows= mysqli_num_rows($result);?>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Моё тестовое заание</title>
 </head>
<body>

    <div class="container mtb-3">
        <div class="table-responsive">
         <?php
           $table ='<table class="table">';
            while ( $res = mysqli_fetch_assoc($result)){
                $table.= '<tr><td>'.$res['first_name'].'</td>
                <td>'.$res['middle_name'].'</td>
                <td>'.$res['last_name'].'</td></tr>';
             }
             $table.='</table>';
             echo $table;
            ?>
        </div>
    </div>

        <div class="buttons">
            <button class="button1" id="b1" onclick="window.location.href='query.php'">Иcпытательный срок</button>
            <button class="button2" id="b2" onclick="window.location.href='query2.php'">Уволенные</button>
            <button class="button3" id="b3" onclick="window.location.href='query3.php'">Начальники</button>
        </div>




</body>

</html>

