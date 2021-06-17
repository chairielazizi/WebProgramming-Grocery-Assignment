<?php
	include_once 'connection.php';

	$product_name = $_POST['productName'];
	$product_category = $_POST['categories'];
	$product_price = $_POST['price'];
	$product_quantity = $_POST['quantity'];
	
	$sql="select * from products where (product_name='$product_name');";
            $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) {
         echo '<script>alert("Cannot add, product is already available!"); window.location.href="../../addp.php";</script>';
    }

	else{
	
		$fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
		}
	$product_image = $imgContent;
	
	if(mysqli_query($conn, "INSERT INTO products (product_name, product_category, product_image, product_price, product_quantity) VALUES('$product_name', '$product_category', '$product_image','$product_price','$product_quantity')"))
		echo '<script>alert("Product Added !"); window.location.href="../../addp.php";</script>';
		
	else
		echo '<script>alert("fail !"); window.location.href="../../addp.php";</script>';
	
	}
	
?>