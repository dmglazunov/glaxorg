<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? if (!empty($arResult)): ?>

        <ul>

            <?
            $previousLevel = 0;
            foreach ($arResult

            as $arItem): ?>

            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
            <? endif ?>

            <? if ($arItem["IS_PARENT"]): ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
            <li><a href="<?= $arItem["LINK"] ?>"
                   class="<? if ($arItem["SELECTED"]): ?>selected<? endif ?>"><?= $arItem["TEXT"] ?> <span
                            class="lnr lnr-chevron-down"></span></a>
                <ul class="sub-menu">
                    <? else: ?>
                    <li><a href="<?= $arItem["LINK"] ?>"
                           class="parent<? if ($arItem["SELECTED"]): ?> selected<? endif ?>"><?= $arItem["TEXT"] ?> </a>
                        <ul>
                            <? endif ?>

                            <? else: ?>
                                <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"
                                           class="<? if ($arItem["SELECTED"]): ?>selected<? endif ?>"><?= $arItem["TEXT"] ?></a>
                                    </li>
                                <? else: ?>
                                    <li>
                                        <a href="<?= $arItem["LINK"] ?>" <? if ($arItem["SELECTED"]): ?> class="selected"<? endif ?>><?= $arItem["TEXT"] ?></a>
                                    </li>
                                <? endif ?>

                            <? endif ?>

                            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                            <? endforeach ?>

                            <? if ($previousLevel > 1)://close last item tags?>
                                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                            <? endif ?>

                        </ul>

<? endif ?>