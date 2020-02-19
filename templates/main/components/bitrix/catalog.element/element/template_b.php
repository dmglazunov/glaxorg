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
        "PATH" => "/include/regions/regions_h1_h3.php",
        'CITY' => $arResult['NAME'],
        'REGION' => $arResult['SECTION']['NAME'],
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/s1_advantages.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/s1_big_img.php"
    )
); ?>

<?
if (count($arResult['PROPERTIES']['SERVICES']['VALUE']) > 0) {
    global $arrFilter;
    $arrFilter = array('ID' => $arResult['PROPERTIES']['SERVICES']['VALUE']);
}
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "services",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array(0 => "", 1 => "",),
        "FILTER_NAME" => "arrFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "main_page",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "8",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(0 => "", 1 => "",),
        "SET_BROWSER_TITLE" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
); ?>


<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/we_work_with_h2.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/we_work_with_ul_1.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/we_work_with_ul_2.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/include/regions/region_seo_1.php",
        'CITY' => $arResult['NAME'],
        'REGION' => $arResult['SECTION']['NAME'],
    )
); ?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/regions/region_contact_title.php"
    )
); ?>

<?
if (strlen($arResult['PROPERTIES']['ADDRESS']['VALUE']) > 0) { ?>

    <?= $arResult['PROPERTIES']['ADDRESS']['VALUE'] ?>

<? } ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/contact_phone.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/contact_email.php"
    )
); ?>

<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/contact_skype.php"
    )
); ?>

<?
if (strlen($arResult['PROPERTIES']['YA_MAP']['~VALUE']) > 0) { ?>
    <h2>Схема проезда:</h2>
    <div>
        <div>
            <?= $arResult['PROPERTIES']['YA_MAP']['~VALUE'] ?>
        </div>
    </div>
<? } ?>

