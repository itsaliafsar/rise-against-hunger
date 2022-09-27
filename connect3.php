<?php
$F_name= $_POST['firstname'];
$L_name= $_POST['lastname'];
//$Gen= $_POST['gender'];
$e_mail= $_POST['email'];
$Pass= $_POST['password'];
$C_num= $_POST['phonenumber']; 

#Connection
$connection = mysqli_connect('localhost','root','','rah');
if(!$connection){
    die("Problem in connectio".connect_error());
}

#Insert
if(isset($_POST['Submit']))
{
    if($F_name==NULL || $L_name == NULL || $e_mail==NULL ||  $Pass==NULL || $C_num==NULL)
    {
       echo "Kindly fill all the details to carry onn";
    }
    else 
    { 
        $insert = "INSERT INTO userdata(`First_name`,`Last_name`,`E_mail`,`Password_`,`Ph_num`)VALUES('$F_name','$L_name','$e_mail','$Pass','$C_num')";
        if(mysqli_query($connection,$insert))
        { 
           echo "Thankyou to sign up on our website";   
        //    header("Location: logIN.html");
        }
    }
}