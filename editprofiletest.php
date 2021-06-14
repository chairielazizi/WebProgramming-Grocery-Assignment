<?php
include_once("./dist/php/connection.php");
session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM account where user_id='$id'");
$row=mysqli_fetch_array($query);
  ?>


<!DOCTYPE html>
<html>
    
<head>

<!-- metadata goes in head - Contains information that describes the web page document -->
	<title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/css/editprofiletest.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>

    <!-- content goes in the body - contains text and elements that display in the web page document -->
    <header class="p-2 mb-2 text-light" style="background-color: #0c143c">
      <a href="homepage.php">
        <img src="images/trolimart rect2.png" alt="TroliMart Logo" width="180" class="ml-4">
      </a>
    </header>

    <main>
      <div class="container shadow rounded pt-4 pb-4 mt-4 mb-4">
        <form class="form-container">
          <h2 class='pb-4'>Edit Profile</h2>
          <div class="form-row">
            <div class="form-group col-md-4">
              <!-- <img src="user.png" class="img img-thumbnail rounded mx-auto d-block" alt="..."> -->
              <img src="images/user.png" id="profilePic"></img>
            </div>
            <div class="form-group col-md-8">
              <h4>Mohamad Fairuz</h4>
              <p>@fai</p>
              <small id="emailHelp" class="form-text text-muted pb-2">Joined April 2021</small>
              <div class="profile-pic-div">
                <i class="fa fa-fw fa-camera"></i>
                <input type= "file" name="" id= "file"value="<?php echo $row['Account_picture']; ?>" accept= "image/*">
                <label id="editPic" for= "file"> </label>
            </div>
            </div>
          </div>
          <!-- <div class="form-row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" id='firstName' class='form-control' value="Mohamad Fairuz">
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                First name cannot be empty.
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" id='lastName' class='form-control' value="Abdullah">
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Last name cannot be empty.
              </div>
            </div>
          </div> -->
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" id='firstName' class='form-control' value="<?php echo $row['First name']; ?>">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Name cannot be empty.
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" id='lastName' class='form-control' value="<?php echo $row['Last name']; ?>">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Name cannot be empty.
            </div>
          </div>
          <div class="form-group">
            <label for="birth-date">Birthdate:</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?php echo $row['Birth date']; ?>">
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Birth date is invalid.
            </div>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
              <input type="text" id='username' class='form-control' value="fai">
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                Username cannot be empty.
              </div>
          </div> -->
          <div class="form-group pb-2">
            <label for="emailInput">Email address</label>
            <input type="email" class="form-control" id="emailInput"name="emailInput"  value="<?php echo $row['Email']; ?>">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="valid-feedback">
              Valid e-mail!
            </div>
            <div class="invalid-feedback">
              Please provide a valid email.
            </div>
      
          </div>
          <h4 class="mb-3">Change Password</h4>
          <div class="form-group">
            <label for="exampleInputEmail1">Current Password</label>
            <input type="password" id='password' class='form-control' value="<?php echo $row['Password']; ?>">
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">New Password</label>
            <input type="password" id='passwordInput' class='form-control'>
            <small id="passwordHelpBlock" class="form-text text-muted">
              Password length must be between 8 to 10 characters with atleast one uppercase letter, one lowercase letter and one number.
            </small>
            <div id="validationServer03Feedback" class="invalid-feedback">
              Please provide a valid password.
            </div>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Confirm New Password</label>
            <input type="password" id='confirmPassword' class='form-control'>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Make sure both passwords match.
          </div>
          <button class="btn btn-success"type="submit" id="submitForm" onclick="displayAlert1();">
            Save Changes
          </button>
        </form>
      </div>
      
        <!-- <div class="profile-pic-div">
            <img src="user.png" id="profilePic"></img>
            <input type= "file" name="" id= "file" accept= "image/*">
            <label id="editPic" for= "file"> EDIT PIC </label>
          </div>
         
            <input type="text" name=""placeholder= "User Name">
            <input type="email" name=""placeholder= "Email ID">
            <input type="text" name=""placeholder= "Change password"><br>
            <label for="birth-date">Birth Date:</label><br>
            <input type="datetime-local" name=""placeholder ="birthdate" >
                 
          
            
            <button class="formBtn" style="float: left;" onclick="window.location.href = 'homepage.html';">CANCEL</button>
            <button class="formBtn" style="float: right;" onclick="displayAlert1();">DONE</button>
            <p class="text-right"> <a class="btn mt-0 pt-0" style="color: red;" onclick="displayAlert2();" role="button"> Delete Account? &raquo;</a></p> -->
            
         
           
        
    </main>
                         
    <footer class="text-center font-italic p-3 pb-4 mt-3 text-light" style="background-color: #0c143c;">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <p type="button" data-toggle="collapse" data-target="#collapseContactUs" aria-expanded="false" aria-controls="collapseExample">
                  <u>Contact Us</u>
              </p>
              <div class="collapse" id="collapseContactUs">
                <div class="fs-6 fw-lighter text-left">
                  <ul>
                    <li>Call us at <p style="color:#3385ff;">03-5657 5432</p></li>
                    <li>Email us at <a href="mailto:jcustomerservice@TroliMart.com.my">customerservice@TroliMart.com.my</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm">
              <p type="button" data-toggle="collapse" data-target="#collapseAboutUs" aria-expanded="false" aria-controls="collapseExample">
                <u>About Us</u>
            </p>
            <div class="collapse" id="collapseAboutUs">
              <div class="fs-6 fw-lighter text-left">
                <p>TroliMart system is intended to help the consumers to manage grocery shopping list before going to the shop to purchase the products. 
                </p>
              </div>
            </div>
            </div>
            <div class="col-sm">
              <p type="button" data-toggle="collapse" data-target="#collapseFollowUs" aria-expanded="false" aria-controls="collapseExample">
                <u>Follow Us</u>
            </p>
            <div class="collapse" id="collapseFollowUs">
              <div class="fs-6 fw-lighter text-left">
                <ul>
                  <li>
                    <nav class="navbar navbar-light">
                      <a class="navbar-brand text-primary" href="https://www.facebook.com/">
                        <img src="/images/fb.png" width="30" height="30" alt="" class="d-inline-block align-top">
                          Facebook
                      </a>
                    </nav>
                  </li>
                  <li>
                    <nav class="navbar navbar-light">
                      <a class="navbar-brand text-primary" href="https://www.instagram.com/">
                        <img src="/images/insta.jpg" width="30" height="30" alt="" class="d-inline-block align-top">
                        Instagram
                      </a>
                    </nav>
                  </li>
                </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
          <p>
              Copyright &copy; 2021 TroliMart Co. <br>
          </p>
      </footer>
      <script src="dist/js/editprofiletest.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>
<?php
      if(isset($_POST['submit'])){
        $firstName  = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["emailInput"];
        $password = $_POST["passwordInput"];
        $birthdate = $_POST["birthdate"];
        $birthdate = date("d/m/y");
        // $gender = $_POST["inlineRadioOptions"];
        $photo = 'images/user.png';
      $query = "UPDATE account SET First name = '$firstname',
                      Last name = '$lastname', Email = $email, Password = '$password'
                      Birth date = '$birthdate'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                        ?>
                    <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "homepage.php";
        </script>
        <?php
             }              

             ?>