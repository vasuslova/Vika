<?php
namespace MIET\VIKA;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ProviderTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'provider';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('PROVIDER_ID_FIELD')
            ),
            'UF_NAME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('PROVIDER_UF_NAME_FIELD')
            ),
            'UF_VIEW' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('PROVIDER_UF_VIEW_FIELD')
            ),
            //Описываем все связи с другими таблицами (внешние ключи)
            new Entity\ReferenceField(
                'UF_VIEW',
                'Bitrix\Iblock\ElementTable',
                array('=this.UF_VIEW' => 'ref.ID')
            ),
        );
    }
}