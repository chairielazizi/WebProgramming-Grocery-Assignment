<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
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
            width: 600px;
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

</head>

<body class="text-dark">
  
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
          <li class="nav-item text-light dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="images/user.png" width="30" height="30" alt="" class="mr-2">
              Hello Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="editprofiletest.html">Edit Profile</a>
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

  <!--Products table-->
  <div class="wrapper afageh">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Canned Food</h2>
                    <a href="dist/php/addproduct.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Product</a>
                </div>
                <?php
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products";
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo '<table class="table table-bordered">';
                            echo "<thead>";
                                echo "<tr>";
                                    echo "<th>#</th>";
                                    echo "<th>Product Image</th>";
                                    echo "<th>Name of Product</th>";
                                    echo "<th>Price</th>";
                                    echo "<th>Action</th>";
                                echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $row['product_id'] . "</td>";
                                    echo "<td>  <img class='geh' src='data:image/jpeg;base64,". base64_encode($row['product_image']) . "'></td>";
                                    echo "<td>" . $row['product_name'] . "</td>";
                                    echo "<td>" . $row['product_price'] . "</td>";
                                    echo "<td>";
                                        echo '<a href="read.php?id='. $row['product_id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                        echo '<a href="edit_admin.php?id='. $row['product_id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
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
  

    
        
        
  

  

  <script src="dist/js/fileadmin.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
</body>

</html>