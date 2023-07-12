<?php
include_once("./dist/php/connection.php");

if($_SERVER["REQUEST_METHOD"] = "POST"){

    $firstName = $lastName = $email = $password = $birthdate = $gender = "";

    if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["emailInput"]) && 
    isset($_POST["passwordInput"]) && isset($_POST["birthdate"]) && isset($_POST["inlineRadioOptions"])){

        $firstName  = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["emailInput"];
        $password = $_POST["passwordInput"];
        $birthdate = $_POST["birthdate"];
        $birthdate = date("d/m/y");
        $gender = $_POST["inlineRadioOptions"];
        $photo = 'images/user.png';

        $sql = "SELECT Email FROM account WHERE Email = '".$email."'";
        $result = $conn->query($sql);
        if($result->num_rows >= 1){
            header("Location: signup.php?action=signup_failed");
        }else{
            $hashedpassword = sha1($password);
            $stmt = $conn->prepare("INSERT INTO account(Email, `First name`, `Last name`, Password, `Birth date`, 
                    Gender) VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $email, $firstName, $lastName, $hashedpassword, $birthdate, $gender);
            $stmt->execute();

            header("Location: index.php?action=signup_success");
            $stmt->close();
            }
    }
}
$conn->close();  
?>