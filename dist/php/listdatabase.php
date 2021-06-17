<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
session_start();
include_once 'connection.php';


if (isset($_SESSION['user_name'])) {

    $user_id = $_SESSION['user_id'];

    switch (isset($_POST['functionname'])) {

        case 'addlist':

            $defaultname = strval($_POST['defaultname']);
            $addlistsql = "INSERT INTO lists ( `user_id`, list_name)
                VALUES ($user_id, '$defaultname')";
            if (mysqli_query($conn, $addlistsql)) {
                $last_id = $conn->insert_id;
                echo "Records inserted successfully." . $last_id;
                ?><?php
            } else {
                echo "ERROR: Could not able to execute $addlistsql. " . mysqli_error($conn);
            }
            break;

        case 'deletelist':
            //*TODO still cannot delete newly created list because id is unknown
            $list_id = intval($_POST['list_id']);
            $deletelistsql = "DELETE FROM lists WHERE list_id = $list_id";

            if (mysqli_query($conn, $deletelistsql)) {
                echo "Records deleted successfully.";
            } else {
                echo "ERROR: Could not able to execute $deletelistsql. " . mysqli_error($conn);
            }
            break;

            break;
        case 'additem':
            # code...
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

        default:
            # code...
            break;
    }
}
