<?php

    include 'dbconnect.php';

    $uname = $_POST['name'];
    $ulname = $_POST['lastname'];
    $uemail = $_POST['email'];
    $upass = $_POST['password'];
    $sqli = 'SELECT user_email FROM users';
                $check = mysqli_query($connect,$sqli);
    
    $sql = "INSERT INTO users(user_name,user_surname,user_email,password) VALUES ('$uname','$ulname','$uemail','$upass')";


                $row = mysqli_fetch_assoc($check);
                    foreach($row as $value){
                        
                    }
                        if($uemail == $value){
                            header('Location: congrat.php');
                               mysqli_query($connect,$sql);
                        }else{
                            

    
                           header('Location: index.php');
                        }
                    
                


    
   
?>
