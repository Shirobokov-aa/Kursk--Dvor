<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? /*echo "<pre>";
print_r($arParams);
echo "</pre>"; ?>

<? echo "<pre>";
print_r($arResult);
echo "</pre>"; */ ?>

<? if (!empty($arResult)) : ?>
  <ul class="menu-footer__list">

    <?
    foreach ($arResult as $arItem) :
      if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
        continue;
    ?>
      <? if ($arItem["SELECTED"]) : ?>
        <li><a href=" <?= $arItem["LINK"] ?>" class="active"><?= $arItem["TEXT"] ?></a></li>
      <? else : ?>
        <li class="menu-footer__item"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
      <? endif ?>

    <? endforeach ?>

  </ul>
<? endif ?>