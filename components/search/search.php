<?php mgAddMeta('components/search/search.js'); ?>
<?php mgAddMeta('components/search/search.css'); ?>

<?php mgAddMeta('components/search/search.js'); ?>
<?php mgAddMeta('components/search/search.css'); ?>

<div class="c-search">

    <form class="c-search__form c-form"
          aria-label="<?php echo lang('searchAriaLabel'); ?>"
          role="search"
          method="GET"
          action="<?php echo SITE ?>/catalog">

        <input type="search"
               autocomplete="off"
               aria-label="<?php echo lang('searchPh'); ?>"
               name="search"
               placeholder="<?php echo lang('searchPh'); ?>"
               value="<?php if (isset($_GET['search'])) {echo $_GET['search'];} ?>">

        <button type="submit"
                class="c-button c-search__button">
            <svg class="icon icon--search">
                <use xlink:href="#icon--search"></use>
            </svg>
            <?php echo lang('search'); ?>
        </button>

    </form>

    <div class="c-search__dropdown wraper-fast-result">
        <div class="fastResult"></div>
    </div>
</div>