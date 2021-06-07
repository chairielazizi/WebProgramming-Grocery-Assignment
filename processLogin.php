<?php
session_start();
include_once("./dist/php/connection.php");

if($_SERVER["REQUEST_METHOD"] = "POST" && $_GET["action"] == 'login'){

    if(isset($_POST["inputEmail"]) && isset($_POST["inputPassword"]) && isset($_POST["options"])){
        $user_email = $_POST["inputEmail"];
        $password = $_POST["inputPassword"];
        $type = $_POST["options"];
        $hashedpassword = sha1($password);
        
        if($type == "admin"){
            $sql = "SELECT * FROM adminaccount WHERE Email = '$user_email' AND Password = '$hashedpassword'";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
                //if they are in the database, register the user in session
                while($res = $result->fetch_assoc()){
                    $userid = $res["user_id"];
                    $email = $res["Email"];
                }

                //register session variables
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $userid;
                $_SESSION['user_email'] = $email;

                header("Location: adminpage.html?action=login_success");
            }else{
                header("Location: index.php?action=login_failed");
            }
        }else if($type == "customer"){
            $sql = "SELECT * FROM account WHERE Email = '$user_email' AND Password = '$hashedpassword'";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
                //if they are in the database, register the user in session
                while($res = $result->fetch_assoc()){
                    $userid = $res["user_id"];
                    $name = $res["First name"];
                    $email = $res["Email"];
                }

                //register session variables
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $userid;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;

                header("Location: homepage.php?action=login_success");
            }else{
                header("Location: index.php?action=login_failed");
            }
        }
        
        
        
    }
}else if($_SERVER["REQUEST_METHOD"] = "POST" && $_GET["action"] == 'forgotPassword'){
    echo "haha";
}
$conn->close();
?>