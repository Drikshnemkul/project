<?php
    SESSION_start();
  $fullname=$_POST['fullname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];

  include('connect.php');
  
  //email unique
    if($email != null && $email != "") 
    {
        $checkEmailUnique =  "SELECT * from users where email ='$email'";
        $finalRe = mysqli_query($conn, $checkEmailUnique);
        $numRows = mysqli_num_rows($finalRe);
        if($numRows >= 1){
            $msg =  "Email is already in use. Please use another email and proceed.";
            header('location:../signup.php?msg='.$msg);
        }
        else 
        {
            if($pass1===$pass2)
            {
                $encryptedPassword = md5($pass1);
                    $query = "INSERT INTO users(fullname,email,address,phoneNo,password) 
                    VALUES ('$fullname','$email','$address','$number','$encryptedPassword')";

                    if(mysqli_query($conn,$query)){
                        $msg ="Signup sauccessfull";
                        header('location:../index.php?msg='.$msg);
                    }else{
                        $msg = "Error:".mysqli_error($conn);
                        header('location:../signup.php?errmsg='.$msg);
                    }
                    
                }else{
                    $msg = "password and confirm password does not match";
                    header('Location:../signup.php?errmsg='.$msg);
            }

        }
    }
    else{
        $msg = "Enter the email";
        header('Location:../signup.php?errmsg='.$msg);
    }
?>