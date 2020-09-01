<?php
    include_once('database.php');
    class DONHANG extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getOrder()
        {
            $this->SetQuery("SELECT * from customer where status='1'");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function getOrderDetail($id)
        {
            $this->SetQuery("SELECT name,image_link,price,qty from product,orderdetail WHERE product.id=orderdetail.product_id and customer_id='$id'");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        
        
    }
?>