<header class="header">
    <div class="header__logo">
        <a class="c-logo" title="<?php echo htmlspecialchars(MG::getSetting('sitename')) ?>" href="<?php echo SITE ?>">
            <?php echo mgLogo(); ?>
        </a>
    </div>
    <?php
        // Поиск по каталогу
        component('search'); ?>

</header>