<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <script src="./asset/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script>
    <title>TroliMart</title>
</head>

<body>
    <div style="background-color: #0b173d;">
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
    <div style="background-color: #0b173d;" class="fixed-bottom">
        <footer class="container d-flex text-light">
            <details class="flex-grow-1 text-center" >
                <summary style="list-style: none;">
                    contact us
                </summary>
                <ul style="list-style: none;">
                    <li>0x-xxxx xxxx</li>
                    <li>test@test.com</li>
                </ul>
            </details>
            <details class="flex-grow-1">test</details>
            <details class="flex-grow-1">test</details>
        </footer>
    </div>
</body>

</html>