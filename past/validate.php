<?php
// Include config file
require_once "dist/php/connection.php";
 
// Define variables and initialize with empty values
$image = $name = $price = "";
$image_err = $name_err = $price_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

  
        
    //validate image
        $gambar = $_FILES['picture']['tmp_name']; 
        if (empty($_FILES['picture']['tmp_name'])) {
            header("location: error.php");
            exit();
        } else{
            $imgContent = addslashes(file_get_contents($gambar));
        }
     
    // Allow certain file formats $
    //TO-DO!!!!!!!!!
    // $input_image = base64_encode($_POST["image"]);
    // if(empty($input_image)){
    //     $image_err = "Please choose a new image for the product.";
    // } elseif(!filter_var($input_image, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
    //     $image_err = "Please choose the image again.";
    // } else{
    //     $image = $input_image;
    // }

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        header("location: error.php");
        exit();
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        header("location: error.php");
        exit();     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
    
    
    
        // Prepare an update statement
        $sql = "UPDATE products SET product_image='$imgContent', product_name='$name', product_price='$price' WHERE product_id='$id'";
            
            // Attempt to execute the prepared statement
            if(mysqli_query($conn,$sql)){
                // Records updated successfully. Redirect to landing page
                header("location: landing_Adminpage.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later." . mysqli_error($conn);

            }
        
         
        
    
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["product_id"]) && !empty(trim($_GET["product_id"]))){
        // Get URL parameter
        $id =  trim($_GET["product_id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE product_id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $imgContent = $row["product_image"];
                    $name = $row["product_name"];
                    $price = $row["product_price"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
