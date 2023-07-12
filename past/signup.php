<!DOCTYPE html>
<html lang="en">
<head>
	<title>TroliMart Signup Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/signup.css">
</head>
<body>
  <header class="p-2 text-light">
    <img src="images/trolimart rect2.png" alt="TroliMart Logo" width="180" class="ml-4">
  </header>

  <main id="container"> 
      <div class="form shadow rounded" id="formcolour">
          <h3 class="text-center pt-2">Sign Up</h3>
          <hr>
          <form class="needs-validation" action="processSignup.php" method="POST" novalidate>
          <?php
                // get action value in url to display message
                $action = isset($_GET['action']) ? $_GET['action'] : "";

                if($action == "signup_failed"){
                    echo "<div class='alert alert-danger margin-top-40' role='alert'> Email already exist! <br /> Please sign up with another email. </div>";
                }
            ?>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name" id="firstName" name="firstName" required>
                <div class="invalid-feedback">
                  Please fill in your first name.
                </div>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name" id="lastName" name="lastName" required>
                <div class="invalid-feedback">
                  Please fill in your last name.
                </div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <input type="email" class="form-control" placeholder="Email" id="emailInput" name="emailInput" required>
                <div class="invalid-feedback">
                  Please fill in valid email.
                </div>
              </div>
              <div class="col">
                <input type="password" class="form-control" placeholder="Password" id="passwordInput" name="passwordInput" required>
                <div class="invalid-feedback">
                  Password length must be between 8 to 10 characters with atleast one uppercase letter, one lowercase letter and one number.
                </div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <div class="form-row">
                  <div class="col-3 pt-1">
                    <label for="birth-date">Birthday:</label>
                  </div>
                  <div class="col-9">
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    <div class="invalid-feedback">
                      Please choose a valid date.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <input type="password" class="form-control" placeholder="Confirm Password" id="confirmPassword" required>
                <div class="invalid-feedback">
                  Make sure both passwords match.
                </div>
              </div>
            </div>
            <br>
            <div class="form-row">
              <div class="col">
                <div class="form-row">
                  <div class="col-3">
                    <label>Gender:</label>
                  </div>
                  <div class="col-9">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male" checked>
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female" value="female">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="invalid-feedback">
                      Please choose your gender.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                
              </div>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="terms" id="terms" checked required>
              <label class="form-check-label" for="flexCheckChecked">
                *By clicking "SIGN UP"; I agree to TroliMart's Terms of Use and Privacy Policy.
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
            <div class="form-group text-center">
              <p id="error"></p>
              <button class="btn btn-secondary btn-block" type="submit" id="submitForm">SIGN UP!</button>
             </div>
          </form>
        </div>
  </main>

  <footer>
      <div class="container bottom-0">
        <div class="row">
          <div class="col-sm">
            <p type="button" data-toggle="collapse" data-target="#collapseContactUs" aria-expanded="false"
              aria-controls="collapseExample">
              <u>Contact Us</u>
            </p>
            <div class="collapse" id="collapseContactUs">
              <div class="fs-6 fw-lighter text-left">
                <ul>
                  <li>Call us at <p style="color:#3385ff; text-align: left;">03-5657 5432</p>
                  </li>
                  <li>Email us at <br><a href="mailto:jcustomerservice@TroliMart.com.my">customerservice@TroliMart.com.my</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <p type="button" data-toggle="collapse" data-target="#collapseAboutUs" aria-expanded="false"
              aria-controls="collapseExample">
              <u>About Us</u>
            </p>
            <div class="collapse" id="collapseAboutUs">
              <div class="fs-6 fw-lighter text-left">
                <p>TroliMart system is intended to help the consumers to manage grocery shopping list before going to the
                  shop to purchase the products.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm">
            <p type="button" data-toggle="collapse" data-target="#collapseFollowUs" aria-expanded="false"
              aria-controls="collapseExample">
              <u>Follow Us</u>
            </p>
            <div class="collapse" id="collapseFollowUs">
              <div class="fs-6 fw-lighter text-left ml-2">
                <ul class="ml-5">
                  <li>
                    <nav class="navbar navbar-light">
                      <a class="navbar-brand text-primary" href="https://www.facebook.com/">
                        <img src="images/fb.png" width="30" height="30" alt="" class="d-inline-block align-top">
                        Facebook
                      </a>
                    </nav>
                  </li>
                  <li>
                    <nav class="navbar navbar-light">
                      <a class="navbar-brand text-primary" href="https://www.instagram.com/">
                        <img src="images/insta.png" width="30" height="30" alt="" class="d-inline-block align-top">
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
</body>
<script type="text/javascript" src="dist/js/signup.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>