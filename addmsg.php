<?php
include "db.php";
session_start();

$msg=$_GET["msg"];
$phone =$_SESSION["phone"];

$q = "SELECT * from `users` WHERE phone='$phone'";
            if($rq = mysqli_query($db,$q)){
                if(mysqli_num_rows($rq)==1){
                    $q="INSERT INTO `msg`(`phone`, `msg`) VALUES ('$phone','$msg')";
                    $q=mysqli_query($db,$q);

                    
                    }
                }



?>
