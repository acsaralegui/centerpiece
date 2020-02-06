<?php 
 
    if(isset($_POST['btn-send']))
    {
       $FullName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Company = $_POST['Subject'];
       $Msg = $_POST['msg'];
 
       if(empty($FullName) || empty($Email) || empty($Company) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "easilysmart@gmail.com";
 
           if(mail($to,$Company,$FullName,$Msg,$Email))
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