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
<?if($arResult["SECTION"]["PATH"][0]['PICTURE']){?>
    <?
    $file = CFile::ResizeImageGet($arResult["SECTION"]["PATH"][0]['PICTURE'], array('width' => 2500, 'height' => 1600), BX_RESIZE_IMAGE_EXACT, true);
    ?>
<?} else {
    $file["src"] = $arParams['IBLOCK_URL'] . 'bg.jpg';
}?>
<style>
    .inner-banner {
        background-image: url("<?= $file["src"]; ?>") !important;
    }


</style>


<!--
<!--
			=============================================
				Our Blog
			==============================================
			-->
<div class="our-blog version-one pt-150 pb-150 md-pt-120 md-pb-120">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-sm-8 blog-sidebar md-mt-100">

                <div class="list-item mb-70">
                    <h4 class="sidebar-title">Разделы</h4>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "right-blog",
                        Array(
                            "ADD_SECTIONS_CHAIN" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COUNT_ELEMENTS" => "Y",
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array("",""),
                            "SECTION_ID" => "",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("",""),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "1",
                            "VIEW_MODE" => "LINE"
                        )
                    );?>
                </div>

            </div> <!-- /.blog-sidebar -->

            <div class="col-lg-8">



                <div class="row">
                    <? foreach ($arResult["ITEMS"] as $k => $arItem): ?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>



                        <div class="blog-post-block-two mb-75 md-mb-40">
                            <div class="img-holder">
                                <?
                                $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => 570, 'height' => 350), BX_RESIZE_IMAGE_EXACT, true);
                                ?>
                                <? if ($file['src']) { ?>
                                    <img src="<?= $file['src'] ?>" alt="<?= $arItem['NAME'] ?>">
                                <? } ?></div>
                            <div class="post">
                                <h4><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></h4>
                                <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                                <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="read-more inline-button-one">Подробнее</a>
                            </div> <!-- /.post -->
                        </div> <!-- /.blog-post-block-two -->

                    <? endforeach; ?>
                </div>
                <? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'){?>
                    <div class="theme-pagination-one pt-15">
                        <?= $arResult["NAV_STRING"] ?>
                    </div>
                <?}?>

            </div> <!-- /.col- -->


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.our-blog -->


<!--
            =============================================
                Our Blog
            ==============================================
            -->
<div class="our-blog version-two md-pb-120">
    <div class="container">

    </div> <!-- /.container -->
</div> <!-- /.our-blog -->

