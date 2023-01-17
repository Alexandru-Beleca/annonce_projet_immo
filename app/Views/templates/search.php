<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= App::getInstance()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="../asset/css/app.css" > 

</head>

<body>
        <a class="navbar-brand" href="index.php">AmaHome</a>

<div class="container">

    <div class="search-template" style="padding-top: 50px;">
        <?= $content; ?>
    </div>

</div>

<div class="container">
</div><!-- /.container -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<footer>
<nav class="navbar ">
    <div class="container">
        <div class="navbar-header ">
            
            <ul class="nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=users.login">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="RGPD">RGPD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="confidentialité">Confidentialité</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</footer>
</html>
</html>