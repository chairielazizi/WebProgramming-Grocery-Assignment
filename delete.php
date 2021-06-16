<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product</title>
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


    
?>
<body>
    <div class="wrapper">
        <div class="container fluid shadow rounded pt-4 pb-4 mt-4 mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Delete Product</h2>
                    <form action="delete_function.php" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <p>Are you sure you want to delete this product?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="landing_Adminpage.php" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>