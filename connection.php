<?php
$connection = mysqli_connect('127.0.0.1','root','','sotrudniki');

  if( $connection == false ){

    echo 'Не удалось подключиться к БД';
    echo mysqli_connect_error();
    exit();}

