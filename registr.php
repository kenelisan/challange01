<?php

    include 'dbconnect.php';

    $uname = $_POST['name'];
    $ulname = $_POST['lastname'];
    $uemail = $_POST['email'];
    $upass = $_POST['password'];
    


    $sqli = "SELECT * FROM users WHERE user_email LIKE '%{$uemail}%'";
                $check = mysqli_query($connect,$sqli);

                $row=mysqli_fetch_array($check);
                    
                        if(empty($row)){
                           
                            header('Location:index.php');
                        }else{
                            
            $sql = "INSERT INTO users(user_name,user_surname,user_email,password) VALUES ('$uname','$ulname','$uemail','$upass')";
            
            header('Location:congrat.php');
                            
                            
                        }
                    
                


            $query = mysqli_query($connect,$sql);
    


   
?>
