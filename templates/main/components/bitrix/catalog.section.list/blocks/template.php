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
if ($arResult['SECTION']['NAME']) {
    $APPLICATION->SetTitle($arResult['SECTION']["NAME"]);
}
?>
<div class="container">
    <ul>
        <? foreach ($arResult['SECTIONS'] as $k => $arSection): ?>
            <li>
                <h2><a href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?></a></h2>
            </li>
        <? endforeach; ?>
    </ul>
</div>
