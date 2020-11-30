<?php
  $connect = mysqli_connect("127.0.0.1","root","","dodo");
      
  $text_query = "SELECT * FROM busket ";
  $query = mysqli_query($connect, $text_query);
  $text_zaprosa_vstavit = "INSERT INTO busket (title, description, price, img)
            VALUES( '{$_GET["tit"]}', '{$_GET["des"]}', '{$_GET["pri"]}', '{$_GET["img"]}')";
  $query_insert = mysqli_query($connect, $text_zaprosa_vstavit);
  header('Location: index.php?user=');


?>