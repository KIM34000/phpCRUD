<?php

require_once('../model/qUser.php');
//if the button ok is clicked then ($_POST['ok']) will be set and this code executed
if (isset($_POST['ok'])) { 
   // (new Q_User) : creates a new obj from the qUser class 
   //->insertUser() : using the function from the new obj and passing it the variables from the form
   (new Q_User)->insertUser($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['email']);  
   //go back to index.php 
   header("Location:../index.php");
}
//if the button update is clicked then ($_POST['update']) will be set and this code executed
if (isset($_POST['update'])) {  
    //->updateUser() : using the function from the new obj and passing it the variables from the form as well as the id from the url
   (new Q_User)->updateUser($_GET['id'],$_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['email']); 
   //go back to index.php   
   header("Location:../index.php");
}
//if the button delete is clicked then ($_POST['delete']) will be set and this code executed
if (isset($_POST['delete'])) {  
    //->deleteUser() : using the function from the new obj and passing it the id from the url
   (new Q_User)->deleteUser($_GET['id']); 
   //go back to index.php   
   header("Location:../index.php");
}
?>