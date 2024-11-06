<main>
    <section class="banner">
        <img src="../../techart/public/images/<?= $lastNews["image"] ?>" alt="картинка новости" class="banner__img">
        <div class="banner__text">
        <h2 class="banner__text-title"><?= $lastNews['title'] ?></h2>
        <p class="banner__text-announce"><?= $lastNews['announce'] ?></p>
        </div>
    </section>


        <section class="news">
            <h1>Новости</h1>
            <div class="container">
                <?php foreach ($news as $item) : ?>
                    <div class="news__card">
                        <div class="news__card-date"><?= date("d.m.Y", strtotime($item["date"])) ?></div>
                        <div class="news__card-content">
                            <div class="news__card-title"><?= $item["title"] ?></div>
                            <div class="news__card-announce"><?= $item["announce"] ?></div>
                        </div>
                        <a href="index.php?news=<?= $item['id'] ?>" class="news__card-link">
                            <div>Подробнее</div>
                            <img src="/../../techart/public/images/svg/arrow.svg" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="switches">
                <?php if ($page > 1): ?>
                    <a href="index.php?page=<?= $page - 1 ?>">
                        <button class="switch__prev">
                            <img src="/../../techart/public/images/svg/arrow.svg" alt="">
                        </button>
                    </a>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $count; $i++):
                    if (($page == $i) && ($i != 1) && ($i != $count)): ?>
                        <a href="index.php?page=<?= $i - 1 ?>">
                            <button class="switch"><?= $i - 1 ?></button>
                        </a>
                        <a href="index.php?page=<?= $i ?>" class="active">
                            <button class="switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                        <a href="index.php?page=<?= $i + 1 ?>">
                            <button class="switch"><?= $i + 1 ?></button>
                        </a>
                    <?php elseif (($page == $i) && ($i == 1)): ?>
                        <a href="index.php?page=<?= $i ?>" class="active">
                            <button class="switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                        <a href="index.php?page=<?= $i + 1 ?>">
                            <button class="switch"><?= $i + 1 ?></button>
                        </a>
                        <a href="index.php?page=<?= $i + 2 ?>">
                            <button class="switch"><?= $i + 2 ?></button>
                        </a>
                    <?php elseif (($page == $i) && ($i == $count)): ?>
                        <a href="index.php?page=<?= $i - 2 ?>">
                            <button class="switch"><?= $i - 2 ?></button>
                        </a>
                        <a href="index.php?page=<?= $i - 1?>">
                            <button class="switch"><?= $i - 1 ?></button>
                        </a>
                        <a href="index.php?page=<?= $i ?>" class="active">
                            <button class="switch" disabled style="cursor: default;"><?= $i ?></button>
                        </a>
                    <?php endif;
                endfor ?>
                <?php if ($page < $count): ?>
                    <a href="index.php?page=<?= $page + 1 ?>">
                        <div class="switch__next">
                            <img src="/../../techart/public/images/svg/arrow.svg" alt="">
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </section>
</main>