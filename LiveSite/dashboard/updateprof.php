<?php

// php code to Update data from mysql database Table

if(isset($_POST['update-btn']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "smart_homie";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   $old_username = $_POST['old-username'];
   $old_email = $_POST['old-email'];
   $old_password = $_POST['old-password'];
   $username_new = $_POST['username-update'];
   $email_new = $_POST['email-update']; 
   $temppass_new = $_POST['password-update'];
   $username_up = $email_up = $password_up = "";

   if (empty($username_new)){
       $username_up = $old_username;
   }
   else 
   {
        $username_up = $username_new;
   }

   if (empty($email_new)){
       $email_up = $old_email;
   }
   else
   {
       $email_up = $email_new;
   }

   if (empty($temppass_new)){
       $password_up = password_hash($old_password, PASSWORD_DEFAULT);
   }
   else
   {
       $password_up = password_hash($temppass_new, PASSWORD_DEFAULT);
   }
   
           
   // mysql query to Update data
   $query = "UPDATE `users` SET `username`='".$username_up."',`email`='".$email_up."',`password`= '".$password_up."' WHERE `username` = '$old_username' ";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
        echo 'Data Updated';
       // Redirect to login page
       header("location: ../user/logout.php");
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>