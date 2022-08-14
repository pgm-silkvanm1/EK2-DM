<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <div class="wrapper">
            <nav>
                <?php
                    include BASE_DIR . '/views/_templates/_partials/nav.php'
                ?>
            </nav>
        </div>
    </header>
    <main class="wrapper">
        <?= $content; ?>
    </main>
    <footer>
        <div class="wrapper">
            <?php
                include BASE_DIR . '/views/_templates/_partials/footer.php'
            ?>
        </div>
    </footer>
</body>
</html>