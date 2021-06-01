<?php
	include_once 'connection.php';

	$product_name = $_POST['productName'];
	$product_category = $_POST['categories'];
	$product_price = $_POST['price'];
	
	
	
    
    $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
		}
	$product_image = $imgContent;
	
	if(mysqli_query($conn, "INSERT INTO products (product_name, product_category, product_image, product_price) VALUES('$product_name', '$product_category', '$product_image','$product_price')"))
		echo '<script>alert("Product Added !"); window.location.href="../../addp.html";</script>';
		
	else
		echo '<script>alert("fAIL !")</script>';
	
	
?>