<main>
    <div class="container">
    <section class="breadcrumbs">
            <nav >
                <a href="index.php">Главная</a>
                <span class="divider"> / </span>
                <span class="breadcrumbs__title"><?php echo $news['title']; ?></span>
            </nav>
    </section>
    <section>
        <div class="container">
            <div class="article">
                <h1 class="article__title"><?php echo $news['title']; ?></h1>
                <div class="article__row">
                    <div class="article__content">
                        <div class="news-item__date"><?php echo date('d.m.Y', strtotime($news['date'])); ?></div>
                        <div class="article__subtitle">
                            <?php echo $news['announce']; ?>
                        </div>
                        <div class="article__text"><?php echo $news['content']; ?></div>
                        <a href="index.php" class="article__link">
                            <img src="/../../techart/public/images/svg/arrow.svg" alt="">
                            <div>Назад к новостям</div>
                        </a>
                    </div>
                    <div class="article__img">
                        <img src="/../../techart/public/images/<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</main>