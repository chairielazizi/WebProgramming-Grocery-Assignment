<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TroliMart HomePage</title>

  <link rel="stylesheet" href="./dist/css/homepage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
                <input name='search-query' type="search" class="align-self-center form-control border rounded w-50"
                    placeholder="Search for groceries..." aria-label="Search" aria-describedby="button-addon2">
                <button class="align-items-center btn search-btn" type="submit" id="button-addon2">
                    <a class="navbar-brand m-0" href="#">
                        <img src="./images/search.png" width="35" height="35" alt="">
                    </a>
                </button>
            </form>
        </div>
        
        <!-- <div class="dummy-search-bar">
          <input type="search" class="align-self-center form-control border rounded "
            placeholder="Search for groceries..." aria-label="Search" aria-describedby="button-addon2">
          <button class="a btn search-btn" type="submit" id="button-addon2">
            <a class="navbar-brand m-0" href="searchresults.html">
              <img src="images/search.png" width="35" height="35" alt="">
            </a>
          </button>
        </div> -->

        <ul class="navbar-nav">
          <li class="nav-item text-light dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="images/user.png" width="30" height="30" alt="" class="mr-2">
              Hello WP Boyz
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editprofile.html">Edit Profile</a>
              <a class="dropdown-item" href="index.html">Logout</a>
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
                <!-- <a href="#" data-toggle="modal" data-target="#beveragesModal">Beverages</a> -->
                <!-- <a href="#" onclick="return changeToBeverages()">Beverages</a> -->
                <a href="./categories/beveragespage.php" >Beverages</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#breadbakeryModal">Bread/Bakery</a> -->
                <a href="#" onclick="return changeToBread()">Bread/Bakery</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#cannedModal">Canned/Jarred Goods</a> -->
                <a href="#" onclick="return changeToCanned()">Canned/Jarred Goods</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#dairyModal">Dairy</a> -->
                <a href="#" onclick="return changeToDairy()">Dairy</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#drybakingModal">Dry/Baking Goods</a> -->
                <a href="#" onclick="return changeToBaking()">Dry/Baking Goods</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#frozenModal">Frozen Foods</a> -->
                <a href="#" onclick="return changeToFrozen()">Frozen Foods</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#meatModal">Meat</a> -->
                <a href="#" onclick="return changeToMeat()">Meat</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#fruitModal">Fruits</a> -->
                <a href="#" onclick="return changeToFruits()">Fruits</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#vegeModal">Vegetables</a> -->
                <a href="#" onclick="return changeToVegetables()">Vegetables</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#cleanersModal">Cleaners</a> -->
                <a href="#" onclick="return changeToCleaner()">Cleaners</a>
              </li>
              <li>
                <!-- <a href="#" data-toggle="modal" data-target="#personalCareModal">Personal Care</a> -->
                <a href="#" onclick="return changeToPersonal()">Personal Care</a>
              </li>
              <!-- <li>
                                <a href="#" data-toggle="modal" data-target="#othersModal">Others</a>
                            </li> -->
            </ul>
          </div>
        </div>
        <div class="sidebar-header">
            <form action="searchresults.php" method="POST">
                <h3>Search Filter</h3>
                <div class="price-range">
                    <h5>Price Range</h5>
                    <div class="price-range-selector">
                        <input name='min-price' type="text" class='price-range-input' placeholder="RM MIN">
                        <div class="price-range-line"></div>
                        <input name='max-price' type="text" class='price-range-input' placeholder="RM MAX">
                    </div>
                    <button class="price-range-button btn btn-success">APPLY</button>
                </div>
            </form>
        </div>


      </nav>
    </div>
    <!-- end of sidebar -->

    <!-- MODAL FOR EACH CATEGORY -->
    <!-- beverage -->
    <div class="modal fade" id="beveragesModal" tabindex="-1" role="dialog" aria-labelledby="beveragesLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Beverages</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body beverages-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-beverage d-flex justify-content-center">
            
            
            <!-- <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div> -->
            </div>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- bread/bakery -->
    <div class="modal fade" id="breadbakeryModal" tabindex="-1" role="dialog" aria-labelledby="breadbakeryLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="breadbakeryLabel">Bread/Bakery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body breadbakery-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-breadbakery d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- canned/jar -->
    <div class="modal fade" id="cannedModal" tabindex="-1" role="dialog" aria-labelledby="cannedLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cannedLabel">Canned/Jarred</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body canned-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-canned d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- dry/baking -->
    <div class="modal fade" id="drybakingModal" tabindex="-1" role="dialog" aria-labelledby="drybakingLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="drybakingLabel">Dry/Baking Goods</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body drybaking-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-drybaking d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- dairy -->
    <div class="modal fade" id="dairyModal" tabindex="-1" role="dialog" aria-labelledby="dairyLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="dairyLabel">Dairy</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body dairy-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-dairy d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- frozen -->
    <div class="modal fade" id="frozenModal" tabindex="-1" role="dialog" aria-labelledby="frozenLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="frozenLabel">Frozen Foods</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body frozen-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-frozen d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- meat -->
    <div class="modal fade" id="meatModal" tabindex="-1" role="dialog" aria-labelledby="meatLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="meatLabel">Meat</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body meat-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-meat d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- fruits -->
    <div class="modal fade" id="fruitModal" tabindex="-1" role="dialog" aria-labelledby="fruitLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="fruitLabel">Produce</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body fruit-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-fruit d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- cleaners -->
    <div class="modal fade" id="cleanersModal" tabindex="-1" role="dialog" aria-labelledby="cleanersLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cleanersLabel">Cleaners</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body cleaners-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-cleaners d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- vegetables -->
    <div class="modal fade" id="vegeModal" tabindex="-1" role="dialog" aria-labelledby="vegeLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="vegeLabel">Paper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body vege-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-vege d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- personal care -->
    <div class="modal fade" id="personalCareModal" tabindex="-1" role="dialog" aria-labelledby="personalCareLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="personalCareLabel">Personal Care</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body personalCare-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-personalCare d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- others -->
    <div class="modal fade" id="othersModal" tabindex="-1" role="dialog" aria-labelledby="othersLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="othersLabel">Others</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body others-modal d-flex flex-row flex-nowrap overflow-auto">
            <div class="row row-others d-flex justify-content-center"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- end of modal -->

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
            <img class="d-block align-items-center" src="images/banner5.jpg" alt="Second slide"
              style="object-fit:cover; object-position: 50% 30%;">
          </div>

          <div class="carousel-item">
            <img class="d-block align-items-center" src="images/banner3.jpg" alt="Third slide"
              style="object-fit:cover; object-position: 50% 35%;">
          </div>

          <div class="carousel-item">
            <img class="d-block align-items-center" src="images/banner4.jpg" alt="Third slide"
              style="object-fit:cover; object-position: 50% 35%;">
          </div>

          <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <!-- the categories content -->
      <div class="category-header" style="display: none;">
        <?php
            
            include_once './dist/php/connection.php';

            $sql = "SELECT * FROM products WHERE product_category = 'beverages'";
            $result = $conn->query($sql);
            
            while ($row = $result->fetch_assoc()) {
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
            ?>
            <div class="card card-block mx-2 text-center">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $product_image ).'"/><br>'; ?>
                <h6 class="card-title"><?php echo $product_name ?></h6>
                <p class="card-text">RM<?php echo $product_price ?></p>
                <button class="add-to-cart-button btn btn-success align-self-end">Add to List</button>
            </div>
            <?php
            }
        ?>
      </div> 
      <div class="categories categories-content">
        <h3 class='categories-header'>Frozen Foods</h3>
        <div id='c-frozen-foods' class="d-flex flex-row flex-nowrap overflow-auto flex-fill">

        </div>
        <div>
        <?php
            
            include_once './dist/php/connection.php';

            $sql = "SELECT * FROM products WHERE product_category = 'beverages'";
            $result = $conn->query($sql);
            
            while ($row = $result->fetch_assoc()) {
                $product_name = $row['product_name'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
            ?>
            <div class="card card-block mx-2 text-center">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $product_image ).'"/><br>'; ?>
                <h6 class="card-title"><?php echo $product_name ?></h6>
                <p class="card-text">RM<?php echo $product_price ?></p>
                <button class="add-to-cart-button btn btn-success align-self-end">Add to List</button>
            </div>
            <?php
            }
        ?>
        </div>

        <h3 class='categories-header'>Canned/Jarred Goods</h3>
        <div id='c-canned-goods' class="d-flex flex-row flex-nowrap overflow-auto">

        </div>

        <h3 class='categories-header'>Beverages</h3>
        <div id='c-beverages' class="d-flex flex-row flex-nowrap overflow-auto">

        </div>
        <div id='c-beverages-content' class="d-flex flex-row flex-nowrap overflow-auto" style="display: none;">

        </div>

        <h3 class='categories-header'>Personal Care Products</h3>
        <div id='c-personal-care' class="d-flex flex-row flex-nowrap overflow-auto">

        </div>
      </div>

      <!-- cart -->
      <div class="cart">
        <h3 class='cart-header text-center'>📝 List 📝</h3>
        <div>
          <ul id="testnav" class="nav nav-tabs justify-content-center">
          <li class="" id="initialtab"><a class="nav-link active" data-toggle="tab" aria-current="page" href="#tabdiv1"
              onclick="whatiscurrenttab('list_itemstab1')">List 1 <button class="delete-list-btn"
                onclick="return  deletedefaulttab('tabdiv1','initialtab');">❌</button></a></li>
          
          <li id="addtab"><a class="nav-link px-0px py-0px" href="#"><button class="add-tab-btn"
                onclick="return addlist()"> ➕ </button></a></li>
        </ul>
        </div>
        <!-- inside the list -->

        <div id="contentd" class="tab-content">
          <div id="tabdiv1" class="tab-pane in active ml-15px overflow-block">
            <div class="cart-items">
              <ol id="list_itemstab1" class='list-group list-group-flush '>

              </ol>
            </div>
            <div id="calculatedprice" class="row total-price-container">
              <div class="col">
                Total Price: <span>RM </span> <span class="spantotalprice" id="list_itemstab1-total-price-value">0.00</span>
              </div>
            </div>
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
          <p type="button" data-toggle="collapse" data-target="#collapseContactUs" aria-expanded="false"
            aria-controls="collapseExample">
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

  <script src="dist/js/file.js"></script>
  <script src="dist/js/modal.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>

</html>