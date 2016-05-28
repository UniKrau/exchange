<?php
session_start();

if (!empty($_POST["email"]) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $_SESSION['email'] = $_POST['email'];
        $password = md5($_POST['password']);
        $query = mysqli_query( "SELECT email, password FORM user WHERE  email = '$email' AND password='$password'");
        $numrows = mysqli_num_rows($query);
        
        if ( $numrows !=0 ){
            while ( $row = mysqli_fetch_assoc($query)){
                $dbusername = $row['email'];
                $dbpassword = $row['password'];
            }
            $_SESSION['username'] = $dbusername;

        }
        else{
            header('Location: account.php');
            echo $password;
            mail($sql, $sql, $sql);

        }
        
        
    }else{
        echo "";
    }

