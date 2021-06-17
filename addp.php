<!DOCTYPE html>
<html>
    
<head>

<!-- metadata goes in head - Contains information that describes the web page document -->
	<title>Add Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/css/addp.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script type="text/javascript"src="profile.js"></script>
</head>

<body>

    <!-- content goes in the body - contains text and elements that display in the web page document -->
    <header class="p-2 mb-2 text-light" style="background-color: #0c143c">
      <a href="landing_Adminpage.php">
        <img src="images/trolimart rect2.png" alt="TroliMart Logo" width="180" class="ml-4">
      </a>
    </header>

    <main>
      <div class="container shadow rounded pt-4 pb-4 mt-4 mb-4">
        <form class="form-container" name="myform" action="dist/php/addproduct.php" method="POST" enctype="multipart/form-data">
          <h2 class='pb-4'>Add Product</h2>
          <div class="form-row">
            <div class="form-group col center">
              <img src="images/user.png" id="productImage" name="productImage" class="img img-thumbnail rounded mx-auto d-block " alt="...">
            </div>
            
          </div>
		  <div class="form-row">
		  <div class="form-group col-md-12 text-center">
              <label class="btn btn-primary" type="button" id="editPic" onclick= "file">
			  <input type= "file" name="image" id="file" accept= "image/*" enctype="multipart/form-data" value="image" required>
                <i class="fa fa-fw fa-camera" for= "file"></i>
                <span>Change Photo</span>
              </label>
            </div>
			</div>
         
          <div class="form-group">
            <label for="exampleInputEmail1">Product Name :</label>
            <input type="text" name="productName" id='productName' class='form-control' required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Field cannot be empty.
            </div>
          </div>
          <div class="form-group">
            <label ">Categories :</label>
              <input list="browsers" name="categories" id="browser" class="form-control" id="categories" required>
					<datalist id="browsers">
						<option value="Beverages">
						<option value="Bread/Bakery">
						<option value="Canned/Jarred Goods">
						<option value="Dairy">
						<option value="Dry/Baking Goods">
						<option value="Frozen Foods">
						<option value="Meat">
						<option value="Produce">
						<option value="Cleaners">
						<option value="Paper Goods">
						<option value="Personal Care">
						<option value="Others">
					</datalist>
              <div class="valid-feedback">
                Looks good!
              </div>
              <div class="invalid-feedback">
                 Field cannot be empty. 
              </div>
          </div>
          <div class="form-group pb-2">
            <label for="exampleInputEmail1">Price :</label>
            <input type="number" class="form-control" name="price"  id="price" min="1" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Field cannot be empty.
            </div>
          </div>
		  <div class="form-group pb-2">
            <label for="exampleInputEmail1">Quantity :</label>
            <input type="number" class="form-control" name="quantity"  id="quantity" min="1" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Field cannot be empty.
            </div>
          </div>
           <div class="form-group pb-2">
		  
          <button class="submit" id="submit" type="submit" onsubmit="return validateForm()" method="post">
            Add Product
          </button>
		  
		  <button id="cancel1" class="cancel" type="button" style="float: right;">
            Cancel
          </button>
		  </div>
		  <div >
		  
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

<script type="text/javascript">
    document.getElementById("submit").onclick = function () {
        //alert("Product Added Successfully !");
		//location.href = "adminpage.html";
    };
	
	document.getElementById("cancel1").onclick = function () {
	

        alert("Cancel Adding Product!");
		location.href = "landing_Adminpage.php";
    
         
    };
</script>

	<script type="text/javascript" src="dist\js\addproduct.js"></script>
    <script type="text/javascript" src="dist\js\signup.js"></script>
      <script src="dist/js/editprofiletest.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>