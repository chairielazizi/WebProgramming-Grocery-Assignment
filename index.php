<!DOCTYPE html>
<html>
    <head>
        <title>TroliMart Login Page</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" type="text/css" href="dist\css\index.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <body>
        <header class="p-2 text-light">
          <img src="images/trolimart rect2.png" alt="TroliMart Logo" width="180" class="ml-4">
        </header>

        <main id="container">
          <div class="form shadow rounded">
            <form>
            <?php
                // get action value in url to display message
                $action = isset($_GET['action']) ? $_GET['action'] : "";

                if($action == "signup_success"){
                    echo "<div class='alert alert-success margin-top-40' role='alert'> Signed up successfully <br /> Please sign in with username and password. </div>";
                }
            ?>

              <h4 class="font-weight-bold text-center pt-3">Please Sign In</h4><hr>
              <div class="form-group mx-5">
                <label for="inputEmail">Email: </label>
                <input type="email" id="inputEmail" class="form-control col-sm-12" placeholder="name@example.com" autofocus> 
                <div class="invalid-feedback">
                  Please fill in valid email.
                </div>
              </div> 
              <div class="form-group mx-5">
                <label for="inputPassword">Password:</label>
                <input type="password" id="inputPassword" class="form-control col-sm-12" placeholder="Password">
                <div class="invalid-feedback">
                  Please fill in correct password.
                </div>
              </div>
              <a class="ml-4 pl-4 mb-1 btn text-primary" data-toggle="modal" data-target="#passwordModal" role="button">Forgot Password? &raquo;</a><br>
              <div class="btn-group btn-group-toggle mx-5" data-toggle="buttons">
                <label class="btn btn-secondary btn-sm p-1 active">
                  <input type="radio" name="options" id="option1" value="customer" autocomplete="off" checked> Customer
                </label>
                <label class="btn btn-secondary btn-sm p-1 px-3">
                  <input type="radio" name="options" id="option2" value="admin" autocomplete="off"> Admin
                </label>
              </div><br>
              <div class="text-center">
                <button class="btn btn-primary text-center mt-1" id="submitForm">SIGN IN</button>
              </div>
              <p class="text-dark text-right mt-2 mb-0">New to TroliMart?   <a class="btn pt-0" id="newToTroliMart" href="signup.php" role="button">Sign Up &raquo;</a></p>
            </form>
          </div>

          <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body shadow rounded">
                  <form>
                    <div class="form-group mx-5">
                      <input type="text" class="form-control mb-1 validate" placeholder="Email" id="fInputEmail"> 
                      <div class="invalid-feedback">
                        Please fill in valid email.
                      </div>
                    </div>
                    <div class="form-group mx-5">
                      <input type="password" class="form-control mb-1 validate" placeholder="New Password" id="fInputPassword">
                      <div class="invalid-feedback">
                        Password length must be between 8 to 10 characters with atleast one uppercase letter, one lowercase letter and one number.
                      </div>
                    </div>
                    <div class="form-group mx-5">
                      <input type="password" class="form-control validate" placeholder="Confirm New Password" id="fConfirmPassword">
                      <div class="invalid-feedback">
                        Make sure both passwords match.
                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="updatePassword">Update Password</button>
                </div>
              </div>
            </div>
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
    <script type="text/javascript" src="dist/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>