<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./asset/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
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
    <?php include_once './component/footer.html' ?>
</body>

</html>