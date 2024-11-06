<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="../techart/public/css/layout.scss">
    <?php if ($sample === 'NewsPage.php'): ?>
        <link rel="stylesheet" href="../techart/public/css/newsPage.scss">
    <?php else:  ?>
        <link rel="stylesheet" href="../techart/public/css/detailedNews.scss">
    <?php endif ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="index.php" class="nav">
                <img src="../../techart/public/images/svg/logo.svg" alt="" class="header__nav-logo">
                <p>Галактический <br> вестник</p>
            </a>
        </div>
        <hr>
    </header>

    <?= include $sample  ?>

<footer class="footer">
    <div class="container">
        <hr>
        <span class="copy">&copy; 2023 &mdash; 2412  &laquo;Галактический вестник&raquo;</span>
    </div>
</footer>
</body>
</html>