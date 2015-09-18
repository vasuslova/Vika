<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' =>
        $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' =>
        $arResult['ERROR']));?>
<?endif;?>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST">

    <table>
        <tr>
            <td><?=GetMessage("NAME");?></td>
            <td><input type="text" name="NAME" value="<?=$REQUEST["UF_NAME"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("PROVIDER");?></td>
            <td>
                <select name="UF_PROVIDER">
                    <?foreach($arResult['UF_PROVIDER'] as $arItem):?>
                        <option value="<?=$arItem['ID'];?>">
                            <?=$arItem['UF_NAME'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td><?=GetMessage("CINEMA");?></td>
            <td>
                <select name="UF_CINEMA">
                    <?foreach($arResult['UF_CINEMA'] as $arItem):?>
                        <option value="<?=$arItem['ID'];?>">
                            <?=$arItem['UF_NAME'];?>
                        </option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="saveFilm" value="Сохранить">
                <input type="reset" value="Очистить">
            </td>
        </tr>
    </table>
</form>