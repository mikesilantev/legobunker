<?php mgAddMeta('components/search/search.js'); ?>
<?php mgAddMeta('components/search/search.css'); ?>

<div class="header__search">

    <form action="" class="search" aria-label="<?php echo lang('searchAriaLabel'); ?>" role="search" method="GET"
        action="<?php echo SITE ?>/catalog">
        >
        <input type="search" class="search__input" placeholder="Найти в Lego бункере" autocomplete="off" aria-label="<?php echo lang('searchPh'); ?>" name="search"
            placeholder="<?php echo lang('searchPh'); ?>"
            value="<?php if (isset($_GET['search'])) {
                echo $_GET['search'];
            } ?>">
        <button type="submit" class="search__btn">Найти</button>
    </form>

    <div class="c-search__dropdown wraper-fast-result">
        <div class="fastResult"></div>
    </div>
</div>