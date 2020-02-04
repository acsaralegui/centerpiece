<?php 
 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Company =$_POST['Company']
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];
 
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "easilysmart@gmail.com";
 
           if(mail($to,$Subject,$UName,$Company,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>