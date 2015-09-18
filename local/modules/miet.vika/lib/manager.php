<?php
namespace MIET\VIKA;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
use MIET\VIKA\FilmTable;
use MIET\VIKA\CinemaTable;
use MIET\VIKA\ProviderTable;

Loc::loadMessages(__FILE__);
class FilmManager
{
    public static function SaveFilm($arData)
    {
        $db = Application::getConnection();
        $db->startTransaction();
        $result = FilmTable::add(array(
            "UF_NAME" => $arData["NAME"],
            "UF_CINEMA" => $arData["UF_CINEMA"],
            "UF_PROVIDER" => $arData["UF_PROVIDER"],
        ));

        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        } else {
            $db->rollbackTransaction();
            return false;
        }
    }
}