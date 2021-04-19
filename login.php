<?php

    $user=$_POST['txtUser'];
    $pass=$_POST['txtPass'];

   if($user=="admin" && $pass=="123"){
        header("Location:panelConrol.php");
   }else{
        
        header("Location:index.php");
   }

?>