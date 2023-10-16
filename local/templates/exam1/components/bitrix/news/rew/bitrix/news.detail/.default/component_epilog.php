<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->SetTitle('Отзыв - ' . $arResult['NAME']);
$APPLICATION->SetPageProperty('h1', 'Отзыв - ' . $arResult['NAME'] . ' - ' . $arResult['COMPANY']);
$APPLICATION->SetPageProperty('keywords', 'лучшие, отзывы, ' . $arResult['COMPANY']);
$APPLICATION->SetPageProperty('description', $arResult['PREVIEW_TEXT']);
