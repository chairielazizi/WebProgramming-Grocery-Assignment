<!-- all items and list retrieved from the database -->
<?php
include_once 'connection.php';

if (isset($_SESSION['user_name'])) {
    echo '<script>console.log("' . $_SESSION['user_name'] . '");</script>';

    $user_name = $_SESSION['user_name'];
    $user_id = $_SESSION['user_id'];

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var newtab = 1;
        var currenttab = '<?= $_SESSION['currentlist'] ?>';
        var tablist = document.getElementById("addtab");
        var divreference = document.getElementById("contentd");
        var list = {};
        var totalprice = {};

        function toggleCart() {
            var cart = document.querySelector(".cart");
            cart.classList.toggle("display-cart");
        }

        function currentlist(list_name) {
            console.log(list_name + "before" + '<?= $_SESSION['currentlist'] ?>');
            jQuery.ajax({
                type: "POST",
                url: './dist/php/listdatabase.php',
                dataType: 'json',
                data: {
                    functionname: 'currentlist',
                    list_name: list_name,
                },

                success: function(obj, textstatus) {
                    if (!('error' in obj)) {
                        yourVariable = obj.result;
                    } else {
                        console.log(obj.error);
                    }
                }
            });
            console.log("after" + '<?= $_SESSION['currentlist'] ?>');

        }

        function addlist(user_id) {
            var list_name = "new list(" + newtab + ")";
            var htmltabid = 'T' + user_id + newtab + 'newtab';
            var htmldivid = 'D' + user_id + newtab + 'newdiv';
            var deletebtnid = "delete" + htmltabid + "btn";

            var newlist = '<li class="" id="' + htmltabid + '" ><a id="href_tab' + newtab + '" class="nav-link" data-toggle="tab" aria-current="page" href="#' + htmldivid + '" ><input id="newlistname" type="text" name="listname"><span id=""availablity></span><button id="' + deletebtnid + '" class="delete-list-btn">❌</button></a></li>';

            //insert to the left of "add tab button
            tablist.insertAdjacentHTML("beforebegin", newlist);

            // $(document).ready(function() {
            //     $("#newlistname").keydown(function() {
            //         var newlistname = $(this).val();
            //         if(even.keyCode == 13){
            //             this.form.submit();
            //             jQuery.ajax({
            //             type: "POST",
            //             url: './dist/php/checkexistinglist.php',
            //             dataType: 'json',
            //             data: {
            //                 newlistname: newlistname,
            //                 list_name: list_name
            //             },

            //             success: function(html) {
            //                 $('#availablity').html(html);
            //             }
            //         });
            //         }
                    

            //     });
            // });




            jQuery.ajax({
                type: "POST",
                url: './dist/php/listdatabase.php',
                dataType: 'json',
                data: {
                    functionname: 'addlist',
                    list_name: list_name
                },

                success: function(obj, textstatus) {
                    if (!('error' in obj)) {
                        yourVariable = obj.result;
                    } else {
                        console.log(obj.error);
                    }
                }
            });




            //html for div of list
            var newdiv = '<div id="' + htmldivid + '" class="tab-pane fade ml-15px"><div class="cart-items overflow-auto"><ol id="' + list_name + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="' + list_name + '-total-price-value">0.00</span></div></div></div>';

            //insert html div list
            divreference.insertAdjacentHTML("beforeend", newdiv);
            newtab++;

            document.getElementById(deletebtnid).addEventListener("click", function() {
                deletetab(htmltabid, htmldivid, list_name);
            });

        }


        function deletetab(htmltabid, htmldividid, list_name) {
            document.getElementById(htmltabid).remove();
            document.getElementById(htmldividid).remove();

            jQuery.ajax({
                type: "POST",
                url: './dist/php/listdatabase.php',
                dataType: 'json',
                data: {
                    functionname: 'deletelist',
                    list_name: list_name
                },

                success: function(obj, textstatus) {
                    if (!('error' in obj)) {
                        yourVariable = obj.result;
                    } else {
                        console.log(obj.error);
                    }
                }
            });
        }


        function addtolist(product_id, product_name, productprice) {
            $list_name = '<?= $_SESSION['currentlist'] ?>';
            jQuery.ajax({
                type: "POST",
                url: './dist/php/listdatabase.php',
                dataType: 'json',
                data: {
                    functionname: 'additem',
                    list_name: $list_name,
                    product_id: product_id,
                    product_price: productprice
                },

                success: function(obj, textstatus) {
                    if (!('error' in obj)) {
                        yourVariable = obj.result;
                    } else {
                        console.log(obj.error);
                    }
                }
            });

            // if (list.hasOwnProperty(currenttab + product_name)) {
            //     list[currenttab + product_name].total += 1;
            //     totalprice[currenttab] += productprice;
            //     var temp = totalprice[currenttab];
            //     document.getElementById(
            //         currenttab + "-total-price-value"
            //     ).innerHTML = temp.toFixed(2);
            //     document.getElementById("multiplier" + currenttab + product_name).innerHTML =
            //         list[currenttab + product_name].total;
            // } else {
            list['<?= $_SESSION['currentlist'] ?>' + product_name] = {
                total: 1,
                price: productprice,
            };

            var paper = document.getElementById('<?= $_SESSION['currentlist'] ?>');

            var productAdded =
                '<li class="list-group-item mx-4" id="li' + "<?= $_SESSION['currentlist'] ?>" +
                product_name +
                '"><div class="inlist width-auto"><div class="row"><div class="col px-0 my-auto" id="divinrowname">' +
                product_name +
                '</div><div class="col px-0 float right my-auto mx-2" id="divinrowprice">RM ' +
                productprice.toFixed(2) +
                '</div><div class="col mx-2 px-0 float-right" id="minusbutton"> <a href="#"><img id="Minus' + "<?= $_SESSION['currentlist'] ?>" +
                product_name +
                '" alt="" src="../images/redminus.png" width="28"></div></a><div class="col px-0 m-auto" id="multipliervalue"><span id="multiplier' + "<?= $_SESSION['currentlist'] ?>" + product_name +
                '"> ' +
                list["<?= $_SESSION['currentlist'] ?>" + product_name].total +
                '</span></div><div class="col px-0 mx-2" id="plusbutton"><a href="#"><img id="Add' + "<?= $_SESSION['currentlist'] ?>" +
                product_name +
                '" alt="" src="../images/Green pluss.png" width="28"></a></div><div class="col px-0 ml-2 mr-2 float-right" id="deletebutton"><a href="#"><img id="Bin' + "<?= $_SESSION['currentlist'] ?>" +
                product_name +
                '" alt="" src="../images/delete.png" width="28"></a></div></div></div></li>';

            paper.insertAdjacentHTML("beforeend", productAdded);

            totalprice["<?= $_SESSION['currentlist'] ?>"] += productprice;
            document.getElementById("<?= $_SESSION['currentlist'] ?>" + "-total-price-value").innerHTML = totalprice["<?= $_SESSION['currentlist'] ?>"].toFixed(2);

            var addbutton = document.getElementById("Add" + "<?= $_SESSION['currentlist'] ?>" + product_name);
            addbutton.addEventListener("click", function() {
                additem(product_name);
            });

            var minusbutton = document.getElementById("Minus" + "<?= $_SESSION['currentlist'] ?>" + product_name);
            minusbutton.addEventListener("click", function() {
                minusitem(product_name);
            });
            var deletebutton = document.getElementById("Bin" + "<?= $_SESSION['currentlist'] ?>" + product_name);
            deletebutton.addEventListener("click", function() {
                var result = confirm("Are you sure you want to remove " + product_name + " ?");
                if (result) {
                    delitemlist(product_name);
                }

            });
            // }


        };

        function retrievelist(list_id, list_name, list_cost, active) {
            console.log(list_name);

            var tabstate, divstate;
            var htmltabid = 'T' + "<?= $user_id ?>" + list_name;
            var htmldivid = 'D' + "<?= $user_id ?>" + list_name;
            var deletebtnid = "delete" + htmltabid + "btn";
            if (active == true) {
                tabstate = "active";
                divstate = "in active";

            } else {
                tabstate = "";
                divstate = "fade";
            }
            //html for list
            var newlist = '<li class="" id="' + htmltabid + '" ><a id="href_tab' + list_name + '" class="nav-link ' + tabstate + '" data-toggle="tab" aria-current="page" href="#' + htmldivid + '" onclick ="currentlist(\'' + list_name + '\')" >' + list_name + '<button id="' + deletebtnid + '" class="delete-list-btn">❌</button></a></li>';

            //insert to the left of "add tab button
            tablist.insertAdjacentHTML("beforebegin", newlist);

            //html for div of list
            var newdiv = '<div id="' + htmldivid + '" class="tab-pane ' + divstate + ' ml-15px"><div class="cart-items overflow-auto"><ol id="' + list_name + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="' + list_name + '-total-price-value">' + list_cost.toFixed(2) + '</span></div></div></div>';

            divreference.insertAdjacentHTML("beforeend", newdiv);

            document.getElementById(deletebtnid).addEventListener("click", function() {
                deletetab(htmltabid, htmldivid, list_name);
            });
        }

        function retrieveitems(list_name, product_name, total, total_item_cost, product_price) {
            console.log(product_name);
            console.log(total);
            console.log(total_item_cost);
            console.log(product_price);
            var htmlitemid = "LI" + "<?= $user_id ?>" + list_name + product_name;
            // htmltabid = 'T' + user_id + list_id;
            console.log(list_name);

            var paper = document.getElementById(list_name);

            var productAdded =
                '<li class="list-group-item mx-4" id="' + htmlitemid + '"><div class="inlist width-auto"><div class="row"><div class="col px-0 my-auto" id="divinrowname">' + product_name + '</div><div class="col px-0 float right my-auto mx-2" id="divinrowprice">RM ' + product_price + '</div><div class="col mx-2 px-0 float-right" id="minusbutton"> <a href="#"><img id="Minus' + htmlitemid + '" alt="" src="../../images/redminus.png" width="28"></div></a><div class="col px-0 m-auto" id="multipliervalue"><span id="multiplier' + htmlitemid +
                '"> ' + total +
                '</span></div><div class="col px-0 mx-2" id="plusbutton"><a href="#"><img id="Add' + htmlitemid +
                '" alt="" src="../../images/Green pluss.png" width="28"></a></div><div class="col px-0 ml-2 mr-2 float-right" id="deletebutton"><a href="#"><img id="Bin' + htmlitemid +
                '" alt="" src="../../images/delete.png" width="28"></a></div></div></div></li>';

            paper.insertAdjacentHTML("beforeend", productAdded);

            var addbutton = document.getElementById('Add' + htmlitemid);
            addbutton.addEventListener("click", function() {
                additem(product_name);
            });

            var minusbutton = document.getElementById('Minus' + htmlitemid);
            minusbutton.addEventListener("click", function() {
                minusitem(product_name);
            });
            var deletebutton = document.getElementById('Bin' + htmlitemid);
            deletebutton.addEventListener("click", function() {
                var result = confirm("Are you sure you want to remove " + product_name + " ?");
                if (result) {
                    delitemlist(product_name);
                }

            });
        }
    </script>
    <?php
    $retrievelistsql = "SELECT * FROM lists WHERE `user_id` = '$user_id'";
    $listresult = $conn->query($retrievelistsql);
    $i = 0;
    while ($row = $listresult->fetch_assoc()) {
        $list_name = $row['list_name'];
        $total_cost = $row['total_cost'];
        $list_id = $row['list_id'];

        if ($i == 0) {
            unset($_SESSION['currentlist']);
            $_SESSION['currentlist'] = $list_name;

            echo "<script>console.log('" . $i . " gggg " . $_SESSION['currentlist'] . "');</script>";
        }
    ?>
        <script>
            var list_id = <?= $list_id ?>;
            var list_name = "<?= $list_name ?>";
            var list_cost = <?= $total_cost ?>;

            if (list_name == '<?= $_SESSION["currentlist"] ?>') {
                retrievelist(list_id, list_name, list_cost, true);
            } else {
                retrievelist(list_id, list_name, list_cost, false);
            }
        </script><?php
                    $retrieveitemsql = "SELECT * FROM item WHERE `user_id` = '$user_id' AND `list_name` = '$list_name'";
                    $itemresult = $conn->query($retrieveitemsql);
                    while ($itemrow = $itemresult->fetch_assoc()) {
                        $product_id = $itemrow['product_id'];
                        $total_item_cost = $itemrow['total_item_cost'];
                        $total = $itemrow['total'];
                        $sqlproduct = "SELECT * FROM products WHERE `product_id` = '$product_id'";
                        $productresult = $conn->query($sqlproduct);
                        while ($productrow = $productresult->fetch_assoc()) {
                            $product_name = $productrow['product_name'];
                            $product_price = $productrow['product_price'];
                    ?><script type="text/javascript">
                    retrieveitems(list_name, "<?= $product_name ?>", <?= $total ?>, <?= $total_item_cost ?>, <?= $product_price ?>);
                </script>
<?php   }
                    }
                    $i += 1;
                }
            }
?>