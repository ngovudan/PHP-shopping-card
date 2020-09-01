<?php
    include('database.php');
    class CATALOG extends DATABASE
    {
        function __construct()
        {
            parent::__construct();
        }
        function getAllCatalog()
        {
            $this->SetQuery("SELECT * from catalog");
            $this->result=$this->ThucHienTruyVan();
            return $this->result;
        }
        function insertCatalog($name, $description, $created)
        {
            $query = "INSERT into catalog(name, description, created) Value ('".$name."','".$description."','".$created."')";
            $this->Setquery($query);
            $this->result=$this->ThucHienLenh();
        }
        
    }
?>