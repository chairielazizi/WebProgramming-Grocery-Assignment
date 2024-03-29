<?php
session_start();

include_once './dist/php/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TroliMart HomePage</title>

  <link rel="stylesheet" href="./dist/css/homepage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script type="text/javascript">
    window.history.forward();
  </script>
</head>


<body class="text-dark">
  <!-- upper navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg m-0">
      <div class="container-fluid">
        <!-- upperleft logo -->
        <div class="navbar-brand p-0 me-2">
          <a href="homepage.php">
            <img class='trolimart-logo' src="images/trolimart rect2.png" width="180" alt="">
          </a>
        </div>

        <div class="align-items-center w-50">
          <form class="input-group align-items-center w-auto" action="searchresults.php" method="POST">
            <input name='search-query' type="search" class="align-self-center form-control border rounded w-50" placeholder="Search for groceries..." aria-label="Search" aria-describedby="button-addon2">
            <button class="align-items-center btn search-btn" type="submit" id="button-addon2">
              <a class="navbar-brand m-0" href="#">
                <img src="./images/search.png" width="35" height="35" alt="">
              </a>
            </button>
          </form>
        </div>

        <ul class="navbar-nav">
          <li class="nav-item text-light">
            <?php
              $uname = $_SESSION['user_name'];
              $uid = $_SESSION['user_id'];
              $sql = "SELECT * FROM account WHERE (user_id='$uid')";
              $result = $conn->query($sql);
              while ($row = $result->fetch_assoc()) {
                  if ($uname == $row['First name']) {
                  $firstName  = $row["First name"];
                  $lastName = $row["Last name"];
                  $email = $row["Email"];
                  $password = $row["Password"];
                  $birthdate = $row["Birth date"];
                  $gender = $row["Gender"];
                  $photo = $row["Account_picture"];
                  }
              }
              echo '<img src="data:image/jpeg;base64,' . base64_encode($photo) . '" width="30" height="30" alt="" class="mr-2" data-toggle="modal" data-target="#profile" style="cursor: pointer;">';
              ?>
            <!-- <img src="./images/user.png" width="30" height="30" alt="" class="mr-2" data-toggle="modal" data-target="#profile" style="cursor: pointer;"> -->
          </li>
          <!-- Modal -->
          <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="userprofile" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="userprofile">User Profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php
                  $uname = $_SESSION['user_name'];
                  $uid = $_SESSION['user_id'];
                  $sql = "SELECT * FROM account WHERE (user_id='$uid')";
                  $result = $conn->query($sql);
                  while ($row = $result->fetch_assoc()) {
                    if ($uname == $row['First name']) {
                      $firstName  = $row["First name"];
                      $lastName = $row["Last name"];
                      $email = $row["Email"];
                      $password = $row["Password"];
                      $birthdate = $row["Birth date"];
                      $gender = $row["Gender"];
                      $photo = $row["Account_picture"];
                    }
                  }
                  ?>
                  <div class="row">
                    <div class="col-md-6">
                      <?php echo '<img style=\'height: 9em;\' src="data:image/jpeg;base64,' . base64_encode($photo) . '"/><br>'; ?>
                    </div>
                    <div class="col-md-6 user-mod">
                      <h5>First Name: <?php echo $firstName ?></h5>
                      <h5>Last Name: <?php echo $lastName ?></h5>
                      <h5>Email: <?php echo $email ?></h5>
                      <h5>Birth date: <?php echo $birthdate ?></h5>
                      <h5>Gender: <?php echo $gender ?></h5>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
              </div>
            </div>
          </div>

          <li class="nav-item text-light dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <img src="images/user.png" width="30" height="30" alt="" class="mr-2"> -->
              <!-- if dont use isset, if there are no session then this line will return error bcs no value -->
              Hello <?php if (isset($_SESSION['user_name'])) {
                      print_r($_SESSION['user_name']);
                    } ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editprofiletest.php">Edit Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          <li class="nav-item text-light ml-5">
            <div class="view-list-nav">
              <a class="view-cart navbar-brand" href="#" onclick="return toggleCart()">
                <img src="images/shopping-cart.png" width="30" height="30" alt="">
                <!-- View List -->
                <p class="view-cart-text">View List</p>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <?php if (isset($_SESSION['logged_in'])) { ?>
    <div class="main-content">

      <!-- sidebar -->
      <div class="wrapper">
        <nav id="sidebar" class="category-bg display-sidebar">
          <div class="sidebar-header">
            <br>
            <h3>All Categories</h3>

            <div class="categories overflow-auto">
              <ul class="list-unstyled components">
                <li>
                  <?php $product = 'beverages';
                  echo "<a href='content.php?category=$product' >Beverages</a>"; ?>
                </li>
                <li>
                  <?php $product = 'bread';
                  echo "<a href='content.php?category=$product' >Bread/Bakery</a>"; ?>
                </li>
                <li>
                  <?php $product = 'canned';
                  echo "<a href='content.php?category=$product' >Canned/Jarred Goods</a>"; ?>
                </li>
                <li>
                  <?php $product = 'dairy';
                  echo "<a href='content.php?category=$product' >Dairy</a>"; ?>
                </li>
                <li>
                  <?php $product = 'baking';
                  echo "<a href='content.php?category=$product' >Dry/Baking Goods</a>"; ?>
                </li>
                <li>
                  <?php $product = 'frozen';
                  echo "<a href='content.php?category=$product' >Frozen Foods</a>"; ?>
                </li>
                <li>
                  <?php $product = 'meat';
                  echo "<a href='content.php?category=$product' >Meats</a>"; ?>
                </li>
                <li>
                  <?php $product = 'fruit';
                  echo "<a href='content.php?category=$product' >Fruits</a>"; ?>
                </li>
                <li>
                  <?php $product = 'vegetable';
                  echo "<a href='content.php?category=$product' >Vegetables</a>"; ?>
                </li>
                <li>
                  <?php $product = 'cleaner';
                  echo "<a href='content.php?category=$product' >Cleaners</a>"; ?>
                </li>
                <li>
                  <?php $product = 'personalcare';
                  echo "<a href='content.php?category=$product' >Personal Cares</a>"; ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="sidebar-header">
            <form action="searchresults.php" method="POST">
              <h3>Search Filter</h3>
              <div class="price-range">
                <h5>Price Range</h5>
                <div class="price-range-selector">
                  <input name='min-price' type="text" class='price-range-input' placeholder="RM MIN" required>
                  <div class="price-range-line"></div>
                  <input name='max-price' type="text" class='price-range-input' placeholder="RM MAX" required>
                </div>
                <button class="price-range-button btn btn-success">APPLY</button>
              </div>
            </form>
          </div>


        </nav>
      </div>
      <!-- end of sidebar -->

      <!-- items -->
      <div class='content'>
        <div id="carouselIndicators" class="carousel slide mt-3" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
            <li data-target="#carouselIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" id="carouselinnerhomepage">

            <div class="carousel-item active">
              <img class="d-block align-items-center" src="images/trolimart rectangle.png" alt="First slide">
            </div>

            <div class="carousel-item">
              <img class="d-block align-items-center" src="images/banner5.jpg" alt="Second slide" style="object-fit:cover; object-position: 50% 30%;">
            </div>

            <div class="carousel-item">
              <img class="d-block align-items-center" src="images/banner3.jpg" alt="Third slide" style="object-fit:cover; object-position: 50% 35%;">
            </div>

            <div class="carousel-item">
              <img class="d-block align-items-center" src="images/banner4.jpg" alt="Third slide" style="object-fit:cover; object-position: 50% 35%;">
            </div>

            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <!-- the categories content -->

        <div class="categories categories-content">
          <h3 class='categories-header'>Frozen Foods</h3>
          <!-- <div id='c-frozen-foods' class="d-flex flex-row flex-nowrap overflow-auto flex-fill" style="display:none;">

        </div> -->
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            <?php
            if (isset($_SESSION['logged_in'])) {


              $sql = "SELECT * FROM products WHERE product_category = 'frozen'";
              $result = $conn->query($sql);

              $i = 0;
              while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $i++;
                if ($i > 5) {
                  break;
                }
            ?>
                <div class="card card-block mx-2 text-center">
                  <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product_image) . '" style=height:9em;/><br>'; ?>
                  <h6 class="card-title"><?php echo $product_name ?></h6>
                  <p class="card-text">RM<?php echo $product_price ?></p>
                  <button class="add-to-cart-button btn btn-success align-self-end" onclick ="addtolist('<?php echo $product_id ?>','<?php echo $product_name ?>',<?php echo $product_price ?>)" >Add to List</button>
                  <!-- <script>
                
              </script> -->
                </div>
              <?php
              }
              ?>
          </div>

          <h3 class='categories-header'>Canned/Jarred Goods</h3>
          <!-- <div id='c-canned-goods' class="d-flex flex-row flex-nowrap overflow-auto" style="display:none;">

        </div> -->
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            <?php

              $sql = "SELECT * FROM products WHERE product_category = 'canned'";
              $result = $conn->query($sql);

              $i = 0;
              while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $i++;
                if ($i > 5) {
                  break;
                }
            ?>
              <div class="card card-block mx-2 text-center">
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product_image) . '" style=height:9em;/><br>'; ?>
                <h6 class="card-title"><?php echo $product_name ?></h6>
                <p class="card-text">RM<?php echo $product_price ?></p>
                <button class="add-to-cart-button btn btn-success align-self-end" onclick ="addtolist('<?php echo $product_id ?>','<?php echo $product_name ?>',<?php echo $product_price ?>)" >Add to List</button>
              </div>
            <?php
              }
            ?>
          </div>

          <h3 class='categories-header'>Beverages</h3>
          <!-- <div id='c-beverages' class="d-flex flex-row flex-nowrap overflow-auto" style="display:none;">

        </div> -->
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            <?php

              $sql = "SELECT * FROM products WHERE product_category = 'beverages'";
              $result = $conn->query($sql);

              $i = 0;
              while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $i++;
                if ($i > 5) {
                  break;
                }
            ?>
              <div class="card card-block mx-2 text-center">
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product_image) . '" style=height:9em;/><br>'; ?>
                <h6 class="card-title"><?php echo $product_name ?></h6>
                <p class="card-text">RM<?php echo $product_price ?></p>
                <button class="add-to-cart-button btn btn-success align-self-end" onclick ="addtolist('<?php echo $product_id ?>','<?php echo $product_name ?>',<?php echo $product_price ?>)" >Add to List</button>

              </div>
              <?php echo '<script> function name() {
  console.log("jadi");

};</script>'; ?>
            <?php
              }
            ?>
          </div>

          <h3 class='categories-header'>Personal Care Products</h3>
          <!-- <div id='c-personal-care' class="d-flex flex-row flex-nowrap overflow-auto">

        </div> -->
          <div class="d-flex flex-row flex-nowrap overflow-auto">
            <?php



              $sql = "SELECT * FROM products WHERE product_category = 'personalcare'";
              $result = $conn->query($sql);

              $i = 0;
              while ($row = $result->fetch_assoc()) {
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $i++;
                if ($i > 5) {
                  break;
                }
            ?>
              <div class="card card-block mx-2 text-center">
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($product_image) . '" style=height:9em;/><br>'; ?>
                <h6 class="card-title"><?php echo $product_name ?></h6>
                <p class="card-text">RM<?php echo $product_price ?></p>
                <button class="add-to-cart-button btn btn-success align-self-end" onclick ="addtolist('<?php echo $product_id ?>','<?php echo $product_name ?>',<?php echo $product_price ?>)" >Add to List</button>
              </div>
          <?php
              }
            } else {
              echo "<h1 style='color:red; font-size:200px;'>Session is destroyed</h1>.<br>";
            }
          ?>
          </div>
        </div>

        <!-- cart -->
        <div class="cart">
          <h3 class='cart-header text-center'>📝 List 📝</h3>
          <div>
            <ul id="testnav" class="nav nav-tabs justify-content-center">
              <li id="addtab"><a class="nav-link px-0px py-0px" href="#"><button class="add-tab-btn" onclick="return addlist('<?= $_SESSION['user_id'] ?>')"> ➕ </button></a></li>


            </ul>
          </div>
          <!-- inside the list -->

          <div id="contentd" class="tab-content">
            <!-- <div id="tabdiv1" class="tab-pane in active ml-15px overflow-block">
            <div class="cart-items">
              <ol id="list_itemstab1" class='list-group list-group-flush '>

              </ol>
            </div>
            <div id="calculatedprice" class="row total-price-container">
              <div class="col">
                Total Price: <span>RM </span> <span class="spantotalprice" id="list_itemstab1-total-price-value">0.00</span>
              </div>
            </div> -->
          </div>
          <!-- NEW DIV HERE -->
        </div>
      </div>

    </div>
    </div>
    <!-- class="text-center font-italic p-3 pb-4 mt-3 text-light bottom-0"  -->
    <footer style="background-color: #0c143c;">
      <div class="container bottom-0">
        <div class="row">
          <div class="col-sm">
            <p type="button" data-toggle="collapse" data-target="#collapseContactUs" aria-expanded="false" aria-controls="collapseExample">
              <u>Contact Us</u>
            </p>
            <div class="collapse" id="collapseContactUs">
              <div class="fs-6 fw-lighter text-left">
                <ul>
                  <li>Call us at <p style="color:#3385ff;">03-5657 5432</p>
                  </li>
                  <li>Email us at <a href="mailto:jcustomerservice@TroliMart.com.my">customerservice@TroliMart.com.my</a>
                  </li>
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
                <p>TroliMart system is intended to help the consumers to manage grocery shopping list before going to the
                  shop to purchase the products.
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

    <?php 
    // include_once './dist/php/retrievelist.php'; 
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
<?php } else {
    echo "<h1 style='color:red; font-size:300px;'>Session is destroyed</h1>";
    echo "<a href='index.php' style='font-size:100px;'>Click here to login back!</a>";
  }
?>