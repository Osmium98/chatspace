<?php
session_start();
include "db.php";


$phone =$_SESSION["phone"];

$q="SELECT * FROM `msg`";
if($rq=mysqli_query($db,$q)){
    if(mysqli_num_rows($rq)>0){
        while($data = mysqli_fetch_assoc($rq)){
            if($data["phone"]==$phone){
                ?>

                    <p class="sender">
                        <span><?=$data["phone"] ?></span>
                        <?=$data["msg"] ?>
                    </p>
                
                <?php 
            }else{

            
                ?>

                <p>
                    <span><?=$data["phone"] ?></span>
                    <?=$data["msg"] ?>
                </p>

                <?php
            }
        }

    }else{
        echo "<h3>Chat is empty at this moment !!</h3>";
    }
}


?>
