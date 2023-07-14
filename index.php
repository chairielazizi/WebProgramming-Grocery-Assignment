<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './component/head.html' ?>
    <link rel="stylesheet" href="./index.css">
    <title>TroliMart</title>
</head>

<body>
    <div style="background-color: var(--theme-1)">
        <nav class="navbar d-flex justify-content-around align-items-center gap-3 px-3 container">
            <a href="./">
                <img src="./asset/images/logo.svg" alt="logo" height="60px">
            </a>
            <form action="./" method="get" class="flex-grow-1">
                <div class="input-group" style="max-width: 576px;">
                    <input type="search" class="form-control" name="search" autofocus>
                    <button type="submit" class="btn btn-primary">🔍︎</button>
                </div>
            </form>
            <a href="" class="link-warning" style="text-decoration: none;">Log in</a>
            <a href="" class="link-warning" style="text-decoration: none;">Sign up</a>
        </nav>
    </div>
    <main>
        <?php
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            printf('You search for this: ' . $_GET['search']);
        }else {
            printf('You did not search for anything');
        }
        ?>
    </main>
    <?php include_once './component/footer.html' ?>
</body>

</html>