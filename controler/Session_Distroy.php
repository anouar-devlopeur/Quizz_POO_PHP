<?php 


   if(isset($_POST['LogOut'])){
  
   session_start();
    session_destroy();
    $_SESSION['player']="";
    echo  "<script>window.location.replace('/quizz/index.php');</script>";      
}