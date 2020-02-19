<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//pr($arResult);

?>
<?if($arResult["DETAIL_PICTURE"]["SRC"]){?>
<style>
    .inner-banner {
        background-image: url("<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>") !important;
    }
</style>
<?}?>
<!--
=============================================
    Blog Details
==============================================
-->
<div class="our-blog blog-details blog-details-fg pb-50 md-pb-120">
    <div class="blog-fg-data">
        <div class="post-data">
            <div class="blog-custom-container">
                <div class="custom-container-bg pt-50 pb-50">
                    <?= $arResult["DETAIL_TEXT"]; ?>
                </div> <!-- /.custom-container-bg -->
                <div>
                    <a href="/materialy/" class="theme-btn line-button-one button-rose mt-35">Назад в список</a>
                </div>
            </div> <!-- /.blog-custom-container -->

        </div> <!-- /.post-data -->
    </div> <!-- /.blog-fg-data -->
</div> <!-- /.our-blog -->


<div class="container">
    <div class="theme-title-one text-center pb-80">
        <h2 class="main-title underline">
            Другие статьи
        </h2>
        <?
        $GLOBALS['filter'] = array("!ID" => $arResult['ID']);
        $APPLICATION->IncludeComponent("bitrix:news.list", "blog-main", Array(
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
            "DISPLAY_BOTTOM_PAGER" => "N",  // Выводить под списком
            "DISPLAY_DATE" => "Y",  // Выводить дату элемента
            "DISPLAY_NAME" => "Y",  // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
            "FIELD_CODE" => array(  // Поля
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "filter",    // Фильтр
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
            "IBLOCK_ID" => "7", // Код информационного блока
            "IBLOCK_TYPE" => "materialy",   // Тип информационного блока (используется только для проверки)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
            "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "NEWS_COUNT" => "2",    // Количество новостей на странице
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
        ); ?>
    </div>
</div> <!-- /.home-blog-one -->

