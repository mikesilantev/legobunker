<header class="header">
    <div class="header__logo">
        <a class="c-logo" title="<?php echo htmlspecialchars(MG::getSetting('sitename')) ?>" href="<?php echo SITE ?>">
            <?php echo mgLogo(); ?>
        </a>
    </div>

    <div class="header__search">
        <?php
        // Поиск по каталогу
        component('search'); ?>
        <form action="" class="search">
            <input type="search" class="search__input" placeholder="Найти в Lego бункере">
            <button type="submit" class="search__btn">Найти</button>
        </form>
    </div>
</header>