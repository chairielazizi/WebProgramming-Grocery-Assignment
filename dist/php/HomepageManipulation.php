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
//new session for current tab


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var newtab = 1;
    var currenttab = "";
    var tablist = document.getElementById("addtab");
    var divreference = document.getElementById("contentd");

    function retrievelist(list_id, list_name, totalcost, active) {

        var tabstate, divstate;
        var htmltabid = 'T' + "<?= $user_id ?>" + list_id;
        var htmldivid = 'D' + "<?= $user_id ?>" + list_id;
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
        var newdiv = '<div id="' + htmldivid + '" class="tab-pane ' + divstate + ' ml-15px"><div class="cart-items overflow-auto"><ol id="list_itemstab' + list_id + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="list_itemstab' + list_name + '-total-price-value">' + totalcost + '</span></div></div></div>';

        divreference.insertAdjacentHTML("beforeend", newdiv);

        document.getElementById(deletebtnid).addEventListener("click", function() {
            deletetab(htmltabid, htmldivid);
        });
    }

    function retrieveitems(list_id, product_name, total, total_item_cost, product_price) {
        console.log(product_name);
        console.log(total);
        console.log(total_item_cost);
        console.log(product_price);
        var htmlitemid = "LI" + "<?= $user_id ?>" + list_id + product_name;
        // htmltabid = 'T' + user_id + list_id;
        var olid = "list_itemstab" + list_id;
        var paper = document.getElementById(olid);

        var productAdded =
            '<li class="list-group-item mx-4" id="' + htmlitemid + '"><div class="inlist width-auto"><div class="row"><div class="col px-0 my-auto" id="divinrowname">' + product_name + '</div><div class="col px-0 float right my-auto mx-2" id="divinrowprice">RM ' + product_price + '</div><div class="col mx-2 px-0 float-right" id="minusbutton"> <a href="#"><img id="Minus' + htmlitemid + '" alt="" src="../../images/redminus.png" width="28"></div></a><div class="col px-0 m-auto" id="multipliervalue"><span id="multiplier' + htmlitemid +
            '"> ' + total +
            '</span></div><div class="col px-0 mx-2" id="plusbutton"><a href="#"><img id="Add' + htmlitemid +
            '" alt="" src="../../images/Green pluss.png" width="28"></a></div><div class="col px-0 ml-2 mr-2 float-right" id="deletebutton"><a href="#"><img id="Bin' + htmlitemid +
            '" alt="" src="../../images/delete.png" width="28"></a></div></div></div></li>';

        paper.insertAdjacentHTML("beforeend", productAdded);

        var addbutton = document.getElementById('Add' + htmlitemid);
        addbutton.addEventListener("click", function() {
            additem(productname);
        });

        var minusbutton = document.getElementById('Minus' + htmlitemid);
        minusbutton.addEventListener("click", function() {
            minusitem(productname);
        });
        var deletebutton = document.getElementById('Bin' + htmlitemid);
        deletebutton.addEventListener("click", function() {
            var result = confirm("Are you sure you want to remove " + productname + " ?");
            if (result) {
                delitemlist(productname);
            }

        });
    }

    

    function additem(productname) {
        totalprice[currenttab] += list[currenttab + productname].price;
        list[currenttab + productname].total += 1;
        document.getElementById(currenttab + "-total-price-value").innerHTML = totalprice[currenttab].toFixed(2);
        document.getElementById("multiplier" + currenttab + productname).innerHTML =
            list[currenttab + productname].total;
    }
</script>

<?php

$sql = "SELECT * FROM lists WHERE `user_id` = '$user_id'";
$result = $conn->query($sql);
$numberoftab = $result->num_rows;

$i = 0;
while ($row = $result->fetch_assoc()) {
    $list_name = $row['list_name'];
    $total_cost = $row['total_cost'];
    $list_id = $row['list_id'];


?>
    <script type="text/javascript">
        if (<?= $i ?> == 0)
            retrievelist("<?= $list_id ?>", "<?= $list_name ?>", "<?= $total_cost ?>", true);
        else
            retrievelist("<?= $list_id ?>", "<?= $list_name ?>", "<?= $total_cost ?>", false);
    </script>
    <?php
    $sqlitem = "SELECT * FROM item WHERE `user_id` = '$user_id' AND `list_id` = '$list_id'";
    $itemresult = $conn->query($sqlitem);
    while ($itemrow = $itemresult->fetch_assoc()) {
        $product_id = $itemrow['product_id'];
        $total_item_cost = $itemrow['total_item_cost'];
        $total = $itemrow['total'];
        $sqlproduct = "SELECT * FROM products WHERE `product_id` = '$product_id'";
        $productresult = $conn->query($sqlproduct);
        while ($productrow = $productresult->fetch_assoc()) {
            $product_name = $productrow['product_name'];
            $product_price = $productrow['product_price'];

    ?>
            <script type="text/javascript">
                retrieveitems("<?= $list_id ?>", "<?= $product_name ?>", "<?= $total ?>", "<?= $total_item_cost ?>", "<?= $product_price ?>");
            </script>
<?php
        }
    }
    $i++;
}
?>