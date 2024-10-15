<?php

 if(isset($_POST['submit'])){


    $email1=$_POST['email'];

    $text1=$_POST['text'];

    $msg=$_POST['message'];

    if(mail($email1,$text1,$msg)){

        echo  "msg sent";
    }

    




 }   


?>