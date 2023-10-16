<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

$str = $arResult["NAME"] . ', ' . $arResult["DISPLAY_ACTIVE_FROM"];
$str .= isset($arResult["DISPLAY_PROPERTIES"]['POSITION']['VALUE']) 	? ', ' . $arResult["DISPLAY_PROPERTIES"]['POSITION']['VALUE'] : '';
$str .= isset($arResult["DISPLAY_PROPERTIES"]['COMPANY']['VALUE']) 	? ', ' . $arResult["DISPLAY_PROPERTIES"]['COMPANY']['VALUE'] . '.' : '';
?>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont"><?= $arResult["~DETAIL_TEXT"];?></div>
		<div class="review-autor"><?= $str ?></div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<img src="<?= ($arResult["DETAIL_PICTURE"]["SRC"] ?? SITE_TEMPLATE_PATH . '/img/no_photo.jpg')?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"] ?? 'img'?>">
	</div>
</div>
<?php
if(is_array($arResult['PROPERTIES']['DOCUMENTS']['FILE_VALUE'])) {
	?>
	<div class="exam-review-doc">
		<p>Документы:</p>
	<?php
	foreach($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $file) {
		?>
		<div  class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png">
			<a href="<?= $file['SRC']?>" download><?= $file['ORIGINAL_NAME'] ?></a>
		</div>
		<?php
	}
	?>
	</div>
	<?php
}
?>

<hr>
<a href="<?= $arResult['LIST_PAGE_URL'] ?>" class="review-block_back_link"> &larr; К списку отзывов</a>
