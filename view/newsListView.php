<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галактический вестник</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <img src="/images/logo.svg" alt="logo">
        </div>
    </header>
    <main class="main">
        <section class="hero">
            <div class="hero__block">
                <div class="container hero__content">
                    <h1 class="hero__title">Возвращение этнографа</h1>
                    <p class="hero__description">Сегодня с Проксимы вернулась этнографическая экспедиция Джона Голдрама.</p>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <h1 class="news__title">Новости</h1>

                <div class="news__container">
                    <?php foreach ($news as $item): ?>
                        <div class="news__block" data-id="<?php echo $item['id']; ?>">
                            <div class="news__content">
                                <div class="news__date"><?php echo date('d.m.Y', strtotime($item['date'])); ?></div>
                                <h1 class="news__subtitle"><?php echo htmlspecialchars($item['title']); ?></h1>
                                <p class="news__text"><?php echo strip_tags($item['announce']); ?></p>
                            </div>
                            <a href="#" class="news__button">Подробнее</a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="pagination">
                    <?php if ($page > 1): ?>
                        <a href="index.php?page=<?php echo $page - 1; ?>" class="pagination__btn">Предыдущая</a>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <a href="index.php?page=<?php echo $i; ?>" class="pagination__btn <?php echo ($i == $page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <a href="index.php?page=<?php echo $page + 1; ?>" class="pagination__next"><img src="/images/next.svg" alt="next"></a>
                    <?php endif; ?>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.news__block').forEach(function(block) {
                block.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    window.location.href = 'index.php?action=show&id=' + id;
                });
            });
        });
    </script>
</body>
</html>
