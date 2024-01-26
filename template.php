<?php /*
Template Name: legobunker
Author: Mikikii
Version: 1.1.000
Edition: enteprice
*/ ?>
<!DOCTYPE html>
<html <?php getHtmlAttributes() ?>>
<head>
    <?php
    // Выводим метатеги страницы, стили шаблона и плагинов, подключенные через mgAddMeta,
    // а также jquery из mg-core/scripts
    mgMeta("meta", "css", "jquery");
	?>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <?php
    // Добавляем предзагрузку файла стилей
    $mainStyleUrl = getMainStyleLink();
    if (!empty($mainStyleUrl) && $mainStyleUrl !== null) { ?><link rel="preload" href="<?php echo $mainStyleUrl ?>" as="style"><?php } ?>
    <?php mgAddMeta('css/style.css'); ?>
</head>

<body class="l-body <?php MG::addBodyClass('l-'); ?>">

<?php
// Шапка сайта
// layout/layout_header.php
layout('header', $data);
?>


<?php mgAddMeta('js/script.js'); ?>

<?php
// Подключение всех js-скриптов движка, плагинов, компонентов
// а также всех скриптов, подключенных через функции addScript и mgAddMeta
mgMeta('js'); ?>

</body>
</html>
