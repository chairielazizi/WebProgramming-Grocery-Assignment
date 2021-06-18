<?php
include_once 'connection.php';

if (isset($_SESSION['user_name']) && isset($_POST['functionname'])) {
    
    $user_id = $_SESSION['user_id'];
    switch ($_POST['functionname']) {

        case 'addlist':
            $list_name = strval($_POST['list_name']);
            $addlistsql = "INSERT INTO lists ( `user_id`, list_name)
                VALUES ('$user_id', '$list_name')";
            if (mysqli_query($conn, $addlistsql)) {
                echo "Records inserted successfully.";
                ?><?php
            } else {
                echo "ERROR: Could not able to execute $addlistsql. " . mysqli_error($conn);
            }

            unset($_POST['functionname']);
            unset($_POST['list_name']);
            break;

        case 'deletelist':
            //*TODO still cannot delete newly created list because id is unknown
            $list_name = strval($_POST['list_name']);
            $deletelistsql = "DELETE FROM lists WHERE list_name = $list_name";

            if (mysqli_query($conn, $deletelistsql)) {
                echo "Records deleted successfully.";
            } else {
                echo "ERROR: Could not able to execute $deletelistsql. " . mysqli_error($conn);
            }
            unset($_POST['functionname']);
            unset($_POST['list_name']);
            break;

        case 'additem':
            $product_id =   intval($_POST['product_id']);
            $product_price = floatval($_POST['product_price']);
            $list_name = strval($_POST['list_name']);
            $additemsql = "INSERT INTO item ( `product_id`, `list_name`, `user_id`, `total`, `total_item_cost`) VALUES ('$product_id', '$list_name', '$user_id', 1, '$product_price')";
            if (mysqli_query($conn, $additemsql)) {
                echo "Records inserted successfully.";
                ?><?php
            } else {
                echo "ERROR: Could not able to execute $addlitemsql. " . mysqli_error($conn);
            }

            unset($_POST['functionname']);
            unset($_POST['product_id']);
            unset($_POST['product_price']);
            unset($_POST['list_name']);
            break;

        case 'deleteitem':
            # code...
            break;

        case 'increaseitem':
            # code...
            break;

        case 'decreaseitem':
            # code...
            break;

        case 'renamelist':
            # code...
            break;

        case 'currentlist':
            unset($_SESSION['currentlist']);
            $_SESSION['currentlist'] = $_POST['list_name'];
            unset($_POST['functionname']);
            unset($_POST['list_name']);
            break;

        default:
            break;
    }
}
