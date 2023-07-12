<?php
include_once 'connection.php';
session_start();
if (isset($_SESSION['user_name']) && isset($_POST['functionname'])) {

    $user_id = $_SESSION['user_id'];

    switch ($_POST['functionname']) {

        case 'addlist':
            $list_name = strval($_POST['list_name']);
            $addlistsql = "INSERT INTO lists ( `user_id`, list_name)
                VALUES ('$user_id', '$list_name')";
            if (mysqli_query($conn, $addlistsql)) {
                echo "Records inserted successfully.";
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
                $updatetotalcost = "UPDATE lists SET total_cost = total_cost + $product_price WHERE list_name = '$list_name'";
                if (mysqli_query($conn, $updatetotalcost)) {
                    echo "Update total cost successfully.";
                } else {
                    echo "ERROR: Could no update total cost $updatetotalcost. " . mysqli_error($conn);
                }
            } else {
                echo "ERROR: Could not able to execute $addlitemsql. " . mysqli_error($conn);
            }

            unset($_POST['functionname']);
            unset($_POST['product_id']);
            unset($_POST['product_price']);
            unset($_POST['list_name']);
            break;

        case 'increaseitem':
            $list_name = $_POST['list_name'];
            $product_id = $_POST['product_id'];
            $product_price = $_POST['product_price'];

            $updatetotalitem = "UPDATE item SET total = total + 1 WHERE list_name = '$list_name' and `user_id` = '$user_id' and list_name = '$list_name'";
            if (mysqli_query($conn, $updatetotalitem)) {
                echo "Update total cost successfully.";
            } else {
                echo "ERROR: Could no update total cost $updatetotalitem. " . mysqli_error($conn);
            }

            $updatetotalitemcost = "UPDATE item SET total_item_cost = total_item_cost + $product_price WHERE list_name = '$list_name' and `user_id` = '$user_id' and product_id = '$product_id'";
            if (mysqli_query($conn, $updatetotalitemcost)) {
                echo "Update total cost successfully.";
            } else {
                echo "ERROR: Could no update total cost $updatetotalitemcost. " . mysqli_error($conn);
            }

            $updatetotalcost = "UPDATE lists SET total_cost = total_cost + $product_price WHERE list_name = '$list_name' AND `user_id` = '$user_id'";
            if (mysqli_query($conn, $updatetotalcost)) {
                echo "Update total cost successfully.";
            } else {
                echo "ERROR: Could no update total cost $updatetotalcost. " . mysqli_error($conn);
            }

            unset($_POST['product_price']);
            unset($_POST['product_id']);
            unset($_POST['list_name']);
            unset($_POST['functionname']);
            break;

        case 'decreaseitem':
            # code...
            break;

        case 'renamelist':
            # code...
            break;

        case 'deleteitem':
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