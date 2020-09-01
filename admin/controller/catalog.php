<?php
include_once 'model/catalog.php';
$cateObj=new CATALOG();
    $action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
    switch($action)
    {
        case 'index':
            $listcate=$cateObj->getAllCatalog();
            include '../view/admin/catalog/catalog.php';
            break;
        case 'addnew':
            include '../view/admin/catalog/addnewCatalog.php';
            break;
        case 'insertCatalog':
            $name = $_POST['catalogName'];
            $description = $_POST['description'];
            $created = date('Y-m-d H:i:s');

            $cateObj->insertCatalog($name, $description, $created);
            $ds_cata=$cateObj->getAllCatalog();
            include '../view/admin/catalog/catalog.php';
            break;
    }
?>