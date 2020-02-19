<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
//pr($arResult['SECTION']['PICTURE']);
?>

<? if ($arResult['DETAIL_PICTURE']) { ?>
    <style>
        .inner-banner {
            background-image: url("<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>") !important;
        }
    </style>
<? } elseif ($arResult['SECTION']['PICTURE']) { ?>
    <?
    $file = CFile::ResizeImageGet($arResult['SECTION']['PICTURE'], array('width' => 1600, 'height' => 800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
    ?>
    <style>
        .inner-banner {
            background-image: url("<?= $file['src'] ?>") !important;
        }
    </style>
<? } else { ?>
    <style>
        .inner-banner {
            background-image: url("/regioni/bg.jpg") !important;
        }
    </style>
<? } ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/regions/main_banner_2.php",
        'CITY' => $arResult['NAME'],
        'REGION' => $arResult['SECTION']['NAME'],
    )
); ?>

<!--
         =============================================
             Our Service One
         ==============================================
         -->
<div  id="services" class="our-service-three pt-100 pos-r md-pt-100 md-pb-20 m0">
    <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/shape-wrapper.php",
        Array(),
        Array("MODE" => "html")); ?>
    <div class="container">
        <div class="theme-title-one text-center pb-50 md-pb-30">
            <h2 class="main-title"><? $APPLICATION->IncludeFile(SITE_DIR . "include/main/services_title.php",
                    Array(),
                    Array("MODE" => "html")); ?></h2>
        </div> <!-- /.theme-title-one -->

        <?$APPLICATION->IncludeComponent("bitrix:news.list", "services", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N", // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
            "DISPLAY_DATE" => "Y",  // Выводить дату элемента
            "DISPLAY_NAME" => "Y",  // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "FIELD_CODE" => array(  // Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "1", // Код информационного блока
            "IBLOCK_TYPE" => "main_page",   // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "8",    // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости", // Название категорий
            "PARENT_SECTION" => "", // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(   // Свойства
                0 => "PRICE",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
            "SHOW_404" => "N",  // Показ специальной страницы
            "SORT_BY1" => "SORT",   // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
        ),
            false
        );?>

    </div> <!-- /.container -->
</div> <!-- /.our-service -->

    <!--  =============================================
                    About Us One
     ==============================================  -->
    <div id="about" class="about-us-block-one pt-130 pb-100 md-pt-130 pos-r">
        <div class="shape-wrapper">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/21.svg" alt="" class="shape-one img-shape">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/23.svg" alt="" class="shape-two img-shape">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/24.svg" alt="" class="shape-three img-shape">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/17.svg" alt="" class="shape-four img-shape">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/9.svg" alt="" class="shape-five img-shape">
            <img src="<?= SITE_TEMPLATE_PATH ?>/images/shape/25.svg" alt="" class="shape-six img-shape">
        </div> <!-- /.shape-wrapper -->
        <div class="inner-wrapper pos-r">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="theme-title-one">
                            <div class="upper-title mb-5"><? $APPLICATION->IncludeFile(SITE_DIR . "include/main/about_title.php", Array(), Array("MODE" => "html")); ?></div>
                            <h2 class="main-title underline"><? $APPLICATION->IncludeFile(SITE_DIR . "include/main/about_title_2.php", Array(), Array("MODE" => "html")); ?></h2>
                        </div> <!-- /.theme-title-one -->
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/about_text.php", Array(), Array("MODE" => "html")); ?>
                    </div>
                    <div class="col-lg-6">
                        <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/main_video.php", Array(), Array("MODE" => "html")); ?>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.inner-wrapper -->
    </div> <!-- /.about-us-block-one -->

    <!--
    =============================================
        Why Choose Us
    ==============================================
    -->
    <div id="advant" class="why-choose-us pos-r pt-130 pb-100">
        <div class="shape-wrapper">
            <span class="big-round-one wow fadeInLeft animated" data-wow-duration="3s"></span>
            <span class="big-round-two wow fadeInLeft animated" data-wow-duration="3s"></span>
            <span class="big-round-three wow fadeInLeft animated" data-wow-duration="3s"></span>
        </div> <!-- /.shape-wrapper -->

        <div class="theme-title-one text-center pb-50 md-pb-30 ">
            <h2 class="main-title white">
                <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/why_title.php", Array(), Array("MODE" => "html")); ?></h2>
        </div> <!-- /.theme-title-one -->

        <?$APPLICATION->IncludeComponent("bitrix:news.list", "why-choose", Array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N", // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
            "DISPLAY_DATE" => "Y",  // Выводить дату элемента
            "DISPLAY_NAME" => "Y",  // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "FIELD_CODE" => array(  // Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "2", // Код информационного блока
            "IBLOCK_TYPE" => "main_page",   // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "20",    // Количество новостей на странице
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
            "PAGER_TITLE" => "Новости", // Название категорий
            "PARENT_SECTION" => "", // ID раздела
            "PARENT_SECTION_CODE" => "",    // Код раздела
            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
            "PROPERTY_CODE" => array(   // Свойства
                0 => "PRICE",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "N", // Устанавливать заголовок страницы
            "SHOW_404" => "N",  // Показ специальной страницы
            "SORT_BY1" => "SORT",   // Поле для первой сортировки новостей
            "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
            "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
        ),
            false
        );?>

    </div> <!-- /.why-choose-us -->

    <!--
    =====================================================
        Our Blog
    =====================================================
    -->
    <div class="home-blog-one pos-r pt-180 pb-350 md-pt-20 md-pb-200">
    <div class="container">
        <div class="theme-title-one text-center pb-80">
            <div class="upper-title mb-5">
                <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/blog_title.php", Array(), Array("MODE" => "html")); ?></div>
            <h2 class="main-title underline">
                <? $APPLICATION->IncludeFile(SITE_DIR . "include/main/blog_title_2.php", Array(), Array("MODE" => "html")); ?>
            </h2>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "blog-main", Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N", // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
                "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",  // Учитывать права доступа
                "CACHE_TIME" => "36000000", // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
                "DISPLAY_DATE" => "Y",  // Выводить дату элемента
                "DISPLAY_NAME" => "Y",  // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
                "FIELD_CODE" => array(  // Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",    // Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "7", // Код информационного блока
                "IBLOCK_TYPE" => "materialy",   // Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "NEWS_COUNT" => "20",    // Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
                "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости", // Название категорий
                "PARENT_SECTION" => "", // ID раздела
                "PARENT_SECTION_CODE" => "",    // Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(   // Свойства
                    0 => "PRICE",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "N", // Устанавливать заголовок страницы
                "SHOW_404" => "N",  // Показ специальной страницы
                "SORT_BY1" => "SORT",   // Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
                "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
            ),
                false
            );?>
            <div class="theme-title-one text-center pt-80 pb-80">
                <a href="/materialy/" class="theme-btn solid-button-one wow animated"
                   data-wow-delay="1.5s">
                    Все статьи
                </a>
            </div>
        </div>
    </div> <!-- /.home-blog-one -->


<? $APPLICATION->IncludeFile(SITE_DIR . "include/main/feedback.php", Array(), Array("MODE" => "html")); ?>