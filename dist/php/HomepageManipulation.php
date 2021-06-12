<?php
include_once("./dist/php/connection.php");

//add new list
$newlist = $conn->prepare("INSERT INTO lists(list_id,, email, list_name, total_cost) VALUES(?,?,?,?)");
//$newlist->bind_param("issd");

$prelist = $conn->prepare("INSERT INTO lists(email, list_name) VALUES(?,?)");
//$prelist->bind_param("ss");


$newtab = 1;
$user_email = $_SESSION['user_email'];
$user_id = $_SESSION['user_id'];
?>

<script>
    var newtab = 1;
    var currenttab = "";
    var tablist = document.getElementById("addtab");
    var divreference = document.getElementById("contentd");

    function toggleCart() {
        var cart = document.querySelector(".cart");
        cart.classList.toggle("display-cart");
    }

    function deletetab(htmltabid, htmldividid) {
        document.getElementById(htmltabid).remove();
        document.getElementById(htmldividid).remove();
    }

    function retrievelist(user_id, list_id, list_name, totalcost, active) {
        var tabstate, divstate;
        var htmltabid = 'T' + user_id + list_id;
        var htmldivid = 'D' + user_id + list_id;
        var deletebtnid = "delete" + htmltabid + "btn";
        if (active == true) {
            tabstate = "active";
            divstate = "in active";

        } else {
            tabstate = "";
            divstate = "fade";
        }
        //html for list
        var newlist = '<li class="" id="' + htmltabid + '" ><a id="href_tab' + list_name + '" class="nav-link ' + tabstate + '" data-toggle="tab" aria-current="page" href="#' + htmldivid + '" >' + list_name + '<button id="' + deletebtnid + '" class="delete-list-btn">❌</button></a></li>';

        //insert to the left of "add tab button
        tablist.insertAdjacentHTML("beforebegin", newlist);

        //html for div of list
        var newdiv = '<div id="' + htmldivid + '" class="tab-pane ' + divstate + ' ml-15px"><div class="cart-items overflow-auto"><ol id="list_itemstab' + list_name + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="list_itemstab' + list_name + '-total-price-value">' + totalcost + '</span></div></div></div>';

        divreference.insertAdjacentHTML("beforeend", newdiv);

        document.getElementById(deletebtnid).addEventListener("click", function() {
            deletetab(htmltabid, htmldivid);
        });
    }

    function retrieveitems($productname, $total, $totalcost) {
        console.log($productname);
    }
    
    function addlist() {

        //*TODO

        <?php
            
                
            
        ?>


        var htmltabid = 'T' + '<?= $_SESSION['user_id'] ?>' + newtab + 'newtab';
        var htmldivid = 'D' + '<?= $_SESSION['user_id'] ?>' + newtab + 'newdiv';
        var defaultname = "new list(" + newtab + ")";
        var deletebtnid = "delete" + htmltabid + "btn";
        var UrlToSend = "HomepageManipulation.php" + "$list_name=" + defaultname;


        var newlist = '<li class="" id="' + htmltabid + '" ><a id="href_tab' + newtab + '" class="nav-link" data-toggle="tab" aria-current="page" href="#' + htmldivid + '">' + defaultname + '<button id="' + deletebtnid + '" class="delete-list-btn">❌</button></a></li>';

        //insert to the left of "add tab button
        tablist.insertAdjacentHTML("beforebegin", newlist);

        //html for div of list
        var newdiv = '<div id="' + htmldivid + '" class="tab-pane fade ml-15px"><div class="cart-items overflow-auto"><ol id="list_itemstab' + newtab + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="list_itemstab' + newtab + '-total-price-value">0.00</span></div></div></div>';

        //insert html div list
        divreference.insertAdjacentHTML("beforeend", newdiv);
        newtab++;

        document.getElementById(deletebtnid).addEventListener("click", function() {
            deletetab(htmltabid, htmldivid);
        });
    }
</script>

<?php

$sql = "SELECT * FROM lists WHERE email = '$user_email'";
$result = $conn->query($sql);
$numberoftab = $result->num_rows;

$i = 0;
while ($row = $result->fetch_assoc()) {
    $list_name = $row['list_name'];
    $total_cost = $row['total_cost'];
    $list_id = $row['list_id'];

    $sqlitem = "SELECT * FROM item WHERE `user_id` = '$user_email' AND `list_id` = '$list_id'";
    $itemresult = $conn->query($sqlitem);

?>
    <script type="text/javascript">
        if (<?= $i ?> == 0)
            retrievelist("<?= $user_id ?>", "<?= $list_id ?>", "<?= $list_name ?>", "<?= $total_cost ?>", true);
        else
            retrievelist("<?= $user_id ?>", "<?= $list_id ?>", "<?= $list_name ?>", "<?= $total_cost ?>", false);

        
    </script>
<?php
    while ($itemrow = $itemresult->fetch_assoc()) {
        $product_id = $itemrow['product_id'];
        $total_item_cost = $itemrow['total_item_cost'];
        $total = $total['total'];

        $sqlproduct = "SELECT * FROM products WHERE `product_id` = '$product_id'";
        $productresult = $conn->query($sqlproduct);
        while ($productrow = $productresult->fetch_assoc()) {
            //*TODO
        ?>
        <script>
            retrieveitems($productname, $total, $totalcost)
        </script>
        <?php
    }
    $i++;
}
?>