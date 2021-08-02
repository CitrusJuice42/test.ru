 <!doctype html>
 <html lang="ru">
 <?php
     include('connection.php');

     $result = mysqli_query($connection,"SELECT * FROM user");
     $numrows= mysqli_num_rows($result);?>
 <head>
    <script type="javascript/" src="jquery.js"></script>
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
            <button class="button1" id="b1" >Иcпытательный срок</button>
            <button class="button2" id="b2" >Уволенные</button>
            <button class="button3" id="b3" >Начальники</button>
        </div>

<script>
    $(document).ready(function(){
        $('#b1').click(function(){
            $.ajax({
                url:"query.php",
                cache:false,
                succes: function(html){
                    $("table-responsive").html($table1);
                }
            });
        });
    });
</script>


</body>

</html>

