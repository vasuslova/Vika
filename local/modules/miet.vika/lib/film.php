<?php
namespace MIET\VIKA;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class FilmTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'film';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('FILM_ID_FIELD')
            ),
            'UF_NAME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('FILM_UF_NAME_FIELD')
            ),
            'UF_CINEMA' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('FILM_UF_CINEMA_FIELD')
            ),
            'UF_PROVIDER' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('FILM_UF_PROVIDER_FIELD')
            ),
            //Описываем все связи с другими таблицами (внешние ключи)
            new Entity\ReferenceField(
                'UF_CINEMA',
                'MIET\VIKA\CinemaTable',
                array('=this.UF_CINEMA' => 'ref.ID')
            ),
            new Entity\ReferenceField(
                'UF_PROVIDER',
                'MIET\VIKA\ProviderTable',
                array('=this.UF_PROVIDER' => 'ref.ID')
            ),
        );
    }
}
