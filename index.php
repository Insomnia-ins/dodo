<!doctype html>
<html lang="en">
  <head>
    <?php
        $connect = mysqli_connect("127.0.0.1","root","","dodo");
        $text_query = "SELECT * FROM products WHERE category = 'pizza' ";
        $text_query2 = "SELECT * FROM busket ";
        $text_query3 = "SELECT * FROM busket ";
        $text_query4 = "SELECT SUM(price) FROM busket ";
        $res = "SELECT SUM(price) FROM busket"; 
        $summa = mysqli_query($connect, $res);
        $sum = mysqli_fetch_row($summa);
        
        $text_query_combo = "SELECT * FROM products WHERE category='combo' ";
        $text_query_snacks = "SELECT * FROM products WHERE category='snacks' ";
        $con = mysqli_query($connect, $text_query);
        $combo_con = mysqli_query($connect, $text_query_combo);
        $snacks_con = mysqli_query($connect, $text_query_snacks);
        $con2 = mysqli_query($connect, $text_query2);
        $con3 = mysqli_query($connect, $text_query3);
       
    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="text/css" href="213.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>DODO</title>
  </head>
  <body>
    <div class="col-10 mx-auto">     
        <div class="row">   <!-- header -->
            <div class="col-2">
                <img src="img/logo.jpg" class="w-100">
            </div>
            <div class="col-7">
                
            </div>
            <div class="col-3 text-right">
                <button class="btn bg-btn-dodo mt-5 basket">Корзина</button>
            </div>

            <div class="bsk-box bg-white border rounded col-3 pt-3"> <!-- Корзина -->
                <?php 
            
                    for($i=0;$i<$con2->num_rows;$i++){
                    $result2 = $con2->fetch_assoc(); 
            
                ?>  
                <div class="row mt-4">
                    
                    <div class="col-3">
                        <img <?php echo "src='".$result2["img"]."'";?> class="w-100">
                    </div>
                    <div class="col-4 mt-2">
                        <?php
                            echo "<h5 >".$result2["title"]."</h5>";
                        ?>                        
                    </div>
                    <div class="col-2 mt-2 px-0 text-center">
                        <?php
                            echo "<h5 >".$result2["price"]."</h5>";
                        ?>                        
                    </div>
                    <div class="col-2 mt-2">
                   
                    <form action="delete.php" method="GET">
                        <input type="hidden"  name="id" <?php echo "value='".$result2["id"]."'"?>>
                        <button style='border: none; background: none'> <img src="img/trash.png" class="w-100"></button>
                    </form>
                        
                    </div>
                    
                </div>
                <?php } ?>
              
            
                    
           
                 
                <?php
                    
                    
                  
                    echo "<h4 class='mt-4' >Общая сумма:   ".$sum[0]."Р</h4>";
                    
                    
                ?>          
                <form action="deleteal.php" method="GET" class="mt-2">
                        
                        <button  class="btn bg-btn-dodo  my-3 mt-2" >Очистить корзину</button>
                </form> 
                <button class="btn bg-btn-dodo cls my-3">Закрыть</button>
            </div>
        </div>     

        <div class="col-12 rounded banner "> <!-- banner -->            
        </div>

        <h1 class="my-5">Пицца</h1>
        <div class="row  pb-5 ">
            <?php 
            
                for($i=0;$i<$con->num_rows;$i++){
                $result = $con->fetch_assoc(); 
            
            ?>  
            <div class="col-3 mt-5">

                <img <?php echo "src='".$result["img"]."'";?> class="w-100">
                <div class="pizz"> 
                    <?php
                        echo "<h3 >".$result["title"]."</h3>";
                    ?>
                    <?php
                        echo "<p>".$result["description"]."</p>";
                    ?>
                </div>  
                <div class="row">
                    <div class="col-6">
                    <?php
                        echo "<h3 >".$result["price"]."<span>₽</span></h3>";
                    ?>                       
                    </div>
                    <div class="col-6">
                 
                        <form action="busket.php" method="GET">

                        <input type="hidden"  name="tit" <?php echo "value='".$result["title"]."'"?>>
                        <input type="hidden"  name="des" <?php echo "value='".$result["description"]."'"?>>
                        <input type="hidden"  name="pri" <?php echo "value='".$result["price"]."'"?>>
                        <input type="hidden"  name="img" <?php echo "value='".$result["img"]."'"?>>

                        <button class="btn bg-btn-dodo" type="submit">Выбрать</button>  
                        </form>
                                              
                    </div>
                </div>       
            </div>
            <?php  } ?>

                                
        </div>

        <h1 class="my-5">Комбо</h1>
        <div class="row  pb-5 ">
            <?php 
            
                for($i=0;$i<$combo_con->num_rows;$i++){
                $combo = $combo_con->fetch_assoc(); 
            
            ?>  
            <div class="col-3 mt-5">

                <img <?php echo "src='".$combo["img"]."'";?> class="w-100">
                <div class="pizz"> 
                    <?php
                        echo "<h3 >".$combo["title"]."</h3>";
                    ?>
                    <?php
                        echo "<p>".$combo["description"]."</p>";
                    ?>
                </div>  
                <div class="row">
                    <div class="col-6">
                    <?php
                        echo "<h3 >".$combo["price"]."<span>₽</span></h3>";
                    ?>                       
                    </div>
                    <div class="col-6">
                 
                        <form action="busket.php" method="GET">

                        <input type="hidden"  name="tit" <?php echo "value='".$combo["title"]."'"?>>
                        <input type="hidden"  name="des" <?php echo "value='".$combo["description"]."'"?>>
                        <input type="hidden"  name="pri" <?php echo "value='".$combo["price"]."'"?>>
                        <input type="hidden"  name="img" <?php echo "value='".$combo["img"]."'"?>>

                        <button class="btn bg-btn-dodo" type="submit">Выбрать</button>  
                        </form>
                                              
                    </div>
                </div>       
            </div>
            <?php  } ?>

                                
        </div>
                <h1 class="my-5">Комбо</h1>
        <div class="row  pb-5 ">
            <?php 
            
                for($i=0;$i<$snacks_con->num_rows;$i++){
                $snacks = $snacks_con->fetch_assoc(); 
            
            ?>  
            <div class="col-3 mt-5">

                <img <?php echo "src='".$snacks["img"]."'";?> class="w-100">
                <div class="pizz"> 
                    <?php
                        echo "<h3 >".$snacks["title"]."</h3>";
                    ?>
                    <?php
                        echo "<p>".$snacks["description"]."</p>";
                    ?>
                </div>  
                <div class="row">
                    <div class="col-6">
                    <?php
                        echo "<h3 >".$snacks["price"]."<span>₽</span></h3>";
                    ?>                       
                    </div>
                    <div class="col-6">
                 
                        <form action="busket.php" method="GET">

                        <input type="hidden"  name="tit" <?php echo "value='".$snacks["title"]."'"?>>
                        <input type="hidden"  name="des" <?php echo "value='".$snacks["description"]."'"?>>
                        <input type="hidden"  name="pri" <?php echo "value='".$snacks["price"]."'"?>>
                        <input type="hidden"  name="img" <?php echo "value='".$snacks["img"]."'"?>>

                        <button class="btn bg-btn-dodo" type="submit">Выбрать</button>  
                        </form>
                                              
                    </div>
                </div>       
            </div>
            <?php  } ?>

                                
        </div>
    </div>

    <script type="text/javascript">
        let bsk = document.querySelector('.basket');
        let bsk_box = document.querySelector('.bsk-box');
        let close = document.querySelector('.cls');
        <?php 
            
            for($i=0;$i<$con3->num_rows;$i++){
            $result3 = $con3->fetch_assoc(); 
            
        ?>  
        <?php
        if ($result3["title"] != '') {

          echo "bsk.onclick = function() {
            bsk_box.style.display = 'block';
        }"; 

        }
        ?>

        <?php
        if ($result3["description"] != '') {

          echo "close.onclick = function() {
            
            bsk_box.style.display = 'none';
        }"; 

        }
        ?>

        <?php } ?>
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>