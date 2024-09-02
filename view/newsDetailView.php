<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news['title']); ?></title>
    <link rel="stylesheet" href="css/news.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <img src="/images/logo.svg" alt="logo">
        </div>
        <div class="header__border"></div>
    </header>
    <main class="main">
        <section class="news">
            <div class="container">
                <div class="news__navigation">Главная  /  <span class="news__nav"><?php echo htmlspecialchars($news['title']); ?></span></div>
                <h1 class="news__title"><?php echo htmlspecialchars($news['title']); ?></h1>

                <div class="news__block">
                    <div class="news__left">
                        <div class="news__date">11.06.2412</div>
                        <h2 class="news__subtitle">Cегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</h2>
                        <div class="news__content">
                            <?php echo ($news['content']); ?>
                        </div>
                        <a href="index.php" class="news__btn">НАЗАД К НОВОСТЯМ</a>
                    </div>
                    <div class="news__right">
                        <img src="/images/<?php echo htmlspecialchars($news['image']); ?>" alt="<?php echo htmlspecialchars($news['title']); ?>">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__border"></div>
            <p class="footer__text">© 2023 — 2412 «Галактический вестник»</p>
        </div>
    </footer>

</body>
</html>