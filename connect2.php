<?php
$email_ID= $_POST['E-mail'];
$PASS= $_POST['password'];
#connection
$connection = mysqli_connect('localhost','root','','rah');
if(!$connection){
    die("Problem in connection".conect_error());
}
#data retrieval
if(isset($_POST['Submit']))
{
   $retrieval = mysqli_query($connection,"SELECT * FROM userdata WHERE E_mail = '$email_ID'");
   $row = mysqli_fetch_assoc($retrieval); 
   if(mysqli_num_rows($retrieval) > 0){
     if($PASS == $row['Password_']){
         header("Location: user_dtls.php");
     }
     else
     {
      echo "Wrong Password";
     }
    }
}
?>