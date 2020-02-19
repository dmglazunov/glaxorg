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
//pr($arParams['SECTION_ID']);


?>
<? if ($arResult['PICTURE']) { ?>
    <style>
        .inner-banner {
            background-image: url("<?= $arResult["PICTURE"]["SRC"]; ?>") !important;
        }
    </style>
<? } else { ?>
    <style>
        .inner-banner {
            background-image: url("/regioni/bg.jpg") !important;
        }
    </style>
<? } ?>

<div class="container">
    <div class="sub_regions">
        <? if (count($arResult['ITEMS']) > 0) {
            ?>
            <?
            foreach ($arResult['ITEMS'] as $k => $item) { ?>
                <h3 class="">
                    <a href="/<?= $item['CODE'] ?>/">
                        Поддержка 1С в городе <?= $item['NAME'] ?>
                    </a>
                </h3>
            <? } ?>
        <? } ?>
    </div>
</div>


<?
//pr($arResult);
?>


