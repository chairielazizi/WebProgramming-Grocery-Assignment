<?php
session_start();
include_once("dist\php\connection.php");

if($_SERVER["REQUEST_METHOD"] = "POST"){

    if(isset($_POST["inputEmail"]) && isset($_POST["inputPassword"]) && isset($_POST["options"])){
        $email = $_POST["inputEmail"];
        $password = $_POST["inputPassword"];
        $type = $_POST["options"];
        $hashedpassword = sha1($password);
        
        if($type == "admin"){

        }else if($type == "customer"){
            $sql = "SELECT * FROM account WHERE Email = '$email' AND Password = '$hashedpassword'";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0){
                //if they are in the database, register the user in session
                while($res = $result->fetch_assoc()){
                    $userid = $res["user_id"];
                    $name = $res["First name"];
                    $email = $res["Email"];
                    echo "userid: " .$res['user_id']. " - Name: " .$res['First name']. " ". " - Email: ".$res['Email']. " - Type: ".$type. "<br>";
                }

                //register session variables
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $userid;
                $_SESSION['user_name'] = $name;
                $_SESSION['user_email'] = $email;

                header("Location: homepage.php?action=login_success");
            }else{
                echo "no";
                //invalid username or password
                // header("Location: index.php?action=login_failed");
            }
        }
        
        
        
    }
}
$conn->close();
?>