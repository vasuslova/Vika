<?php
namespace MIET\NEON;
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
            "UF_CINEMA" => $arData["CINEMA"],
            "UF_PROVIDER" => $arData["PROVIDER"],
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        //$idFilm = $result->getId();

        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        } else {
            $db->rollbackTransaction();
            return false;
        }
    }
}