<?php

include_once 'listdatabase.php';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var currenttab
    var newtab = 1;

    function toggleCart() {
        var cart = document.querySelector(".cart");
        cart.classList.toggle("display-cart");
    }

    function whatiscurrenttab(olid) {
        currenttab = olid;
        console.log(currenttab + "sini");
    }

    function addlist(user_id) {
        var defaultname = "new list(" + newtab + ")";
        var htmltabid = 'T' + user_id + newtab + 'newtab';
        var htmldivid = 'D' + user_id + newtab + 'newdiv';
        var deletebtnid = "delete" + htmltabid + "btn";
        var olid = "tab_div" + newtab;
        jQuery.ajax({
            type: "POST",
            url: './dist/php/listdatabase.php',
            dataType: 'json',
            data: {
                functionname: 'addlist',
                defaultname: defaultname,
                deletebtnid: deletebtnid,
                htmltabid: htmltabid,
                htmldivid: htmldivid
            },

            success: function(obj, textstatus) {
                if (!('error' in obj)) {
                    yourVariable = obj.result;
                } else {
                    console.log(obj.error);
                }
            }
        });


        var newlist = '<li class="" id="' + htmltabid + '" ><a id="href_tab' + newtab + '" class="nav-link" data-toggle="tab" aria-current="page" href="#' + htmldivid + '" onclick= "return whatiscurrenttab(' + olid + ')>' + defaultname + '<button id="' + deletebtnid + '" class="delete-list-btn">❌</button></a></li>';

       
        //insert to the left of "add tab button
        tablist.insertAdjacentHTML("beforebegin", newlist);

        //html for div of list
        var newdiv = '<div id="' + htmldivid + '" class="tab-pane fade ml-15px"><div class="cart-items overflow-auto"><ol id="' + olid + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="' + olid + '-total-price-value">0.00</span></div></div></div>';

        //insert html div list
        divreference.insertAdjacentHTML("beforeend", newdiv);
        newtab++;

        document.getElementById(deletebtnid).addEventListener("click", function() {
            deletetab(htmltabid, htmldivid, list_id);
        });

    }

    function deletetab(htmltabid, htmldividid, list_id) {
        document.getElementById(htmltabid).remove();
        document.getElementById(htmldividid).remove();

        jQuery.ajax({
            type: "POST",
            url: './dist/php/listdatabase.php',
            dataType: 'json',
            data: {
                functionname: 'deletelist',
                list_id: list_id,
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

    function addtolist(productname, productprice) {

        console.log(productname + "   " + productprice);
        console.log(productprice + productprice)
        if (list.hasOwnProperty(currenttab + productname)) {
            list[currenttab + productname].total += 1;
            totalprice[currenttab] += productprice;
            var temp = totalprice[currenttab];
            document.getElementById(
                currenttab + "-total-price-value"
            ).innerHTML = temp.toFixed(2);
            document.getElementById("multiplier" + currenttab + productname).innerHTML =
                list[currenttab + productname].total;
        } else {
            list[currenttab + productname] = {
                total: 1,
                price: productprice,
            };

            var paper = document.getElementById(currenttab);

            var productAdded =
                '<li class="list-group-item mx-4" id="li' + currenttab +
                productname +
                '"><div class="inlist width-auto"><div class="row"><div class="col px-0 my-auto" id="divinrowname">' +
                productname +
                '</div><div class="col px-0 float right my-auto mx-2" id="divinrowprice">RM ' +
                productprice.toFixed(2) +
                '</div><div class="col mx-2 px-0 float-right" id="minusbutton"> <a href="#"><img id="Minus' + currenttab +
                productname +
                '" alt="" src="../images/redminus.png" width="28"></div></a><div class="col px-0 m-auto" id="multipliervalue"><span id="multiplier' + currenttab + productname +
                '"> ' +
                list[currenttab + productname].total +
                '</span></div><div class="col px-0 mx-2" id="plusbutton"><a href="#"><img id="Add' + currenttab +
                productname +
                '" alt="" src="../images/Green pluss.png" width="28"></a></div><div class="col px-0 ml-2 mr-2 float-right" id="deletebutton"><a href="#"><img id="Bin' + currenttab +
                productname +
                '" alt="" src="../images/delete.png" width="28"></a></div></div></div></li>';

            paper.insertAdjacentHTML("beforeend", productAdded);

            totalprice[currenttab] += productprice;
            console.log(totalprice[currenttab] + "  " + currenttab);
            document.getElementById(currenttab + "-total-price-value").innerHTML = totalprice[currenttab].toFixed(2);

            var addbutton = document.getElementById("Add" + currenttab + productname);
            addbutton.addEventListener("click", function() {
                additem(productname);
            });

            var minusbutton = document.getElementById("Minus" + currenttab + productname);
            minusbutton.addEventListener("click", function() {
                minusitem(productname);
            });
            var deletebutton = document.getElementById("Bin" + currenttab + productname);
            deletebutton.addEventListener("click", function() {
                var result = confirm("Are you sure you want to remove " + productname + " ?");
                if (result) {
                    delitemlist(productname);
                }

            });
        }


    };
</script>
