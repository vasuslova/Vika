<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;

\Bitrix\Main\Loader::includeModule('miet.vika');

use MIET\VIKA;

if($_REQUEST['saveFilm']) {
    if(VIKA\FilmManager::SaveFilm($_REQUEST)) {
        $arResult['OK'] = 'Изменения успешно сохранены';
    } else {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}

$arResult['UF_PROVIDER'] = VIKA\ProviderTable::getList(array(
    'select' => array ('ID', 'UF_NAME', 'UF_VIEW')))->fetchAll();

$arResult['UF_CINEMA'] = VIKA\CinemaTable::getList(array(
    'select' => array ('ID', 'UF_NAME')))->fetchAll();

$this->IncludeComponentTemplate();

?>