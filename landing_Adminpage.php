<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TroliMart Admin Page</title>

  <link rel="stylesheet" href="dist/css/homepage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/d4305da033.js" crossorigin="anonymous"></script>
    <style>
        .wrapper{
            width: 400px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    <script type="text/javascript">
        window.history.forward();
    </script>
</head>

<body class="text-dark">
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark nav-bg m-0">
      <div class="container-fluid">
        <!-- upperleft logo -->
        <div class="navbar-brand p-0 me-2">
          <a href="landing_Adminpage.php">
            <img class='trolimart-logo' src="images/trolimart rect2.png" width="180" alt="">
          </a>
        </div>

        <div class="align-items-center w-50">
          <form class="input-group align-items-center w-auto" action="searchresults_admin.php" method="POST">
            <input name='search-query' type="search" class="align-self-center form-control border rounded w-50" placeholder="Search for groceries..." aria-label="Search" aria-describedby="button-addon2">
            <button class="align-items-center btn search-btn" type="submit" id="button-addon2">
              <a class="navbar-brand m-0" href="#">
                <img src="./images/search.png" width="35" height="35" alt="">
              </a>
            </button>
          </form>
        </div>

        <ul class="navbar-nav">
          <li class="nav-item text-light dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="images/user.png" width="30" height="30" alt="" class="mr-2">
              Hello Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editprofiletest.html">Edit Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!--Products table-->
  <!--Beverages 1-->
  <?php if(isset($_SESSION['logged_in'])){ ?>
  <div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Beverages</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'beverages'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>
  
<!--Bread 2-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Bread</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'bread'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>
  
<!--Canned 3-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Canned Products</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'canned'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>
  
<!--Dairy 4-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Dairy</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'dairy'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

               
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Baking 5-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Products for Baking</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'baking'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

               
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Frozen 6-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Frozen Food</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'frozen'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Meat 7-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Meat</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'meat'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Fruit 8-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Fruits</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'fruit'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Cleaner 9-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Cleaning Products</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'cleaner'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Vegetable 10-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Vegetables</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'vegetable'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                
                ?>
            </div>
        </div>        
    </div>
</div>

<!--Personal Care 11-->
<div class="wrapper center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Personal Care Products</h2>
                    <a href="addp.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products WHERE product_category = 'personalcare'";
                
                // $result = mysqli_query($conn, $sql
                if($result = $conn->query($sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price (RM)</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='picture' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        //echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                        echo '<a href="delete.php?id='. $row['product_id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                    echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";                            
                        echo "</table>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                mysqli_close($conn);
                ?>
            </div>
        </div>        
    </div>
</div>


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
  

    
        
        
  

  

  <script src="dist/js/fileadmin.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>

</html>
<?php }
    else{
        echo "<h1 style='color:red; font-size:300px;'>Session is destroyed</h1>";
        echo "<a href='index.php' style='font-size:100px;'>Click here to login back!</a>";
    }
?>