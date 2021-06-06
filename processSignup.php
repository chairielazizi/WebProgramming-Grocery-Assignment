<?php
include_once("dist\php\connection.php");

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
            echo "<h2>Email already exist!</h2>";
            echo "<a class=\"nav-link\" a href=\"signup.html\">Sign Up</a>";
            echo "<a class=\"nav-link\" a href=\"index.html\">Log In</a>";
        }else{
            $stmt = $conn->prepare("INSERT INTO account(Email, First name, Last name, Password, Birth date, 
                    Gender) VALUES(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $email, $firstName, $lastName, $password, $birthdate, $gender);
            $stmt->execute();

            echo "<h2>Registration successful</h2>";
            echo "<a class=\"nav-link\" a href=\"index.html\">Log In</a>";
            $stmt->close();
            }
    }
}
$conn->close();  
?>