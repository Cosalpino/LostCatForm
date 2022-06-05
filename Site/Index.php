<?php
/**
 * @file    Index.php
 * @brief   This is design to be the router of the site
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 04.06.2022 / 0.1
 */
require_once "Controller/Redirector.php";
if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch ($action){
        case 'addMyLostCat':
            addMyLostCat();
            break;
        default:
            addMyLostCat();
            break;
    }
}else{
    addMyLostCat();
}
