<?php
/**
 * Created by PhpStorm.
 * User: Dexx
 * Date: 21/12/2014
 * Time: 11:59
 */
$valid = false;
$send = false;
$nom = '';
if( isset($_POST['form-submit'])  ) {
    $send = true;
    $nom = (isset($_POST['nom']))?htmlentities($_POST['nom']):'';
    if( !empty($nom) ) {
        $valid = true;
    }
}