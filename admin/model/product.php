<?php
    include_once ('database.php');
    class PRODUCT extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllProduct()
        {
            $this->SetQuery("SELECT * from product");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function insertProduct($id_cate, $name, $content, $price, $discount, $imgName, $anhphu, $view, $buyed, $total, $count)
        {
            $query = "INSERT into product(catalog_id,name,content,price,discount, image_link, image_list,view,buyed,rate_total,rate_count) 
            Value ('".$id_cate."','".$name."','".$content."','".$price."','".$discount."','".$imgName."','".$anhphu."','".$view."','".$buyed."','".$total."','".$count."')";
            $this->Setquery($query);
            $this->result=$this->ThucHienLenh();
        }
    }
?>