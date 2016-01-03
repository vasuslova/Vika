<?php
namespace MIET\VIKA;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class CinemaTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'cinema';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('CINEMA_ID_FIELD')
            ),
            'UF_NAME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('CINEMA_UF_NAME_FIELD')
            ),
        );
    }
}
