<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<?php
                
                $id=$_GET["id"];
                // Include config file
                require_once "dist/php/connection.php";
                
                // Attempt select query execution
                $sql = "SELECT * FROM products where product_id=$id";


                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                $image= $row['product_image'];
                $name=$row['product_name'];
                $price=$row['product_price']

                ?>


<body>
    <div class="wrapper">
        <div class="container fluid shadow rounded pt-4 pb-4 mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Products</h2>
                    <p>Please edit the input values and submit to update the products record.</p>
                    <form action="validate.php" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="picture" class="form-control <?php echo (!empty($image_err)) ? 'is-invalid' : ''; ?>" value="<?php echo base64_encode($row['product_image']); ?>">
                            <span class="invalid-feedback"><?php echo $image_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>"></input>
                            
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="price" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>">
                            <span class="invalid-feedback"><?php echo $price_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="landing_Adminpage.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>