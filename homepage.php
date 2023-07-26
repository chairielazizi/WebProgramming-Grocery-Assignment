<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './component/head.html' ?>
    <link rel="stylesheet" href="./index.css">
    <title>TroliMart</title>
</head>

<body class="min-vh-100">
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
    <main class="container">
        <?php
        printf($msg);
        ?>
        <div class="d-flex flex-wrap justify-content-center">
            <?php
            foreach ($products as $product) {
            ?>
                <div class="card m-1" style="width:15rem">
                    <img src="<?= $product['thumbnail'] ?>" class="card-img-top border-bottom" style="aspect-ratio: 1; object-fit:contain;" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product['title']?></h5>
                        <p class="card-text">RM <?=$product['price']?></p>
                        <p class="card-text"><?=$product['description']?></p>
                    </div>
                </div>
                <br>
            <?php
            }
            ?>
        </div>
    </main>
    <?php include_once './component/footer.html' ?>
</body>

</html>