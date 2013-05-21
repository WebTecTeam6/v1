<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Makke
 * Date: 21.05.13
 * Time: 15:14
 * To change this template use File | Settings | File Templates.
 */

function validateName($firstValid){

    $pattern1 = '/[A-Z]{1}[a-z]{0,14}$/';

    if(preg_match($pattern1, $firstValid)==1){
        return true;
    } else {
        echo "ich werde bald eine Fehlermeldung sein";
        return false;
    }
}

function validateAge($firstValid){

    $pattern1 = '/[0-9]{1,2}$/';

    if(preg_match($pattern1, $firstValid)==1){
        return true;
    } else {
        echo "ich werde bald eine Fehlermeldung sein";
        return false;
    }
}

?>