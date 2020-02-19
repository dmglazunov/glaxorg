<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? if (!empty($arResult)) { ?>
    <nav id="mega-menu-holder" class="navbar navbar-expand-lg order-lg-2">
        <div class="container nav-container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="flaticon-setup"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <?
                    $previousLevel = 0;
                    foreach ($arResult

                    as $arItem) { ?>

                    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
                        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                    <? } ?>

                    <? if ($arItem["IS_PARENT"]) { ?>

                    <? if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                    <li class="nav-item dropdown">
                        <a href="<?= $arItem["LINK"] ?>"
                           class="nav-link dropdown-toggle<? if ($arItem["SELECTED"]) { ?> active<? } ?>"><?= $arItem["TEXT"] ?>.
                        </a>
                        <ul class="dropdown-menu">
                            <? } else { ?>
                            <li class="nav-item">
                                <a href="<?= $arItem["LINK"] ?>"
                                   class="nav-link dropdown-toggle<? if ($arItem["SELECTED"]) { ?> active<? } ?>"><?= $arItem["TEXT"] ?> </a>
                                <ul class="dropdown-menu">
                                <? } ?>

                                    <? } else { ?>

                                        <? if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                                            <li class="nav-item"><a href="<?= $arItem["LINK"] ?>"
                                                   class="nav-link ropdown-toggle <? if ($arItem["SELECTED"]) { ?>active<? } ?>"><?= $arItem["TEXT"] ?></a>
                                            </li>
                                        <? } else { ?>
                                            <li>
                                                <a href="<?= $arItem["LINK"] ?>"
                                                   class="dropdown-item <? if ($arItem["SELECTED"]) { ?>active<? } ?>"><?= $arItem["TEXT"] ?></a>
                                            </li>
                                        <? } ?>

                                    <? } ?>

                                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                                    <? } ?>

                                    <? if ($previousLevel > 1) {//close last item tags?>
                                        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                                    <? } ?>

                                </ul>

            </div>
        </div>
    </nav>
<? } ?>