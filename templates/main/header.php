<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION, $isMain;
if ($APPLICATION->getCurDir() == '/') {
    $isMain = true;
} else {
    $isMain = false;
}

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");

?>

    <!doctype html>
    <html lang="ru">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="icon" href="<?= SITE_DIR ?>favicon.png">


        <title><? $APPLICATION->ShowTitle() ?></title>

        <? $APPLICATION->ShowHead(); ?>


    </head>

<body>
<? $APPLICATION->ShowPanel() ?>

<?

/* Приммеры кода ненужное удалить
 *
// Включаемая область

$APPLICATION->IncludeFile(SITE_DIR . "include/main/contact_phone.php", Array(), Array("MODE" => "html")); ?>

// Меню

$APPLICATION->IncludeComponent("bitrix:menu", "top-2", Array(
                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left2",    // Тип меню для остальных уровней
                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "2",    // Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );

// Заголовок

<h1><? $APPLICATION->ShowTitle(false); ?></h1>

// Хлебные крошки

 $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        "",
                        array(
                            "COMPONENT_TEMPLATE" => "",
                            "PATH" => "",
                            "SITE_ID" => "s1",
                            "START_FROM" => ""
                        ),
                        false
                    );

// Проверка главной

if ($isMain) { }

  */


?>




