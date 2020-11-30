<?php
  $connect = mysqli_connect("127.0.0.1","root","","dodo");
      
  $text_query = "DELETE FROM busket WHERE id = '{$_GET["id"]}' ";

  mysqli_query($connect, $text_query);
 

  header('Location: index.php?user=');
?>