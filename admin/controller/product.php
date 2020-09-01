<?php 
include_once 'model/product.php';
include_once 'model/catalog.php';
$productObj = new PRODUCT();
$cataObj = new CATALOG();

    $action = "index";
    if(isset($_GET['act']))
        $action = $_GET['act'];
    switch ($action) {
        case "index":
            $ds_pro=$productObj->getAllProduct();
            include '../view/admin/product/product.php';
        break;
        case 'addnew':
            $ds_cate=$cataObj->getAllCatalog();
            include '../view/admin/product/formInsertProduct.php';    
        break;
        case 'insert':
            // upload 1 anh
            $imgName = $_FILES['productImage']['name'];
            $dir = "assets/images/";
            $file_path=$dir.$imgName;
            move_uploaded_file($_FILES['productImage']['tmp_name'],$file_path);  
            // upload nhieu anh
            $anhphu="";
            foreach ($_FILES['listImages']['name'] as $key => $val) {
                $file_path = $dir.basename($_FILES['listImages']['name'][$key]);
                if(move_uploaded_file($_FILES['listImages']['tmp_name'][$key], $file_path)==true)
                {
                    $anhphu = $anhphu.",".$_FILES['listImages']['name'][$key];
                }
            }
            $anhphu = ltrim($anhphu,",");
            $id_cate = $_POST['id_catalog'];
            $name = $_POST['name'];
            $content = $_POST['content'];
            // them ao database
            $productObj->insertProduct($id_cate, $name, $content, $price, $discount, $imgName, $anhphu, $view, $buyed, $total, $count);
            // thien thi
            $ds_sanpham = $productObj->layTatCaSanPham();
            include 'view/sanpham/sanpham.php';
        break;
    }
?>