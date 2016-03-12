<?php
     
    include 'dbconnect.php';
    session_start();
    $lemail = $_POST['lemail'];
    $lpass = $_POST['lpassword'];
    $sql = "SELECT * FROM users WHERE user_email"; 
    $sqli = "SELECT * FROM users WHERE password"; 
    $result = mysqli_query($connect, "SELECT * FROM users WHERE user_email = '$lemail'&& password ='$lpass'" );
echo "<br>";
    $say = mysqli_num_rows($result);
    if($say>0)
    {
        $hamisi = mysqli_fetch_array($result);
        var_dump($hamisi);
        $_SESSION ["login"]==true;
        $_SESSION ["email"] = $lemail;
        $_SESSION ["pass"]=$lpass;
        
        echo $_SESSION["email"]." ".$_SESSION["pass"]." ".$_SESSION["name"];
        echo $_SESSION["name"]=$hamisi["user_name"];
    }

    
?>

