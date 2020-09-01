<?php
 include('database.php');
 class USER extends DATABASE
 {
     function __construct()
     {
         parent::__construct();
     }
     function CheckLogin($email,$pass)
     {
        $query="SELECT * FROM admin where email='$email' AND password='$pass'";
        $this->SetQuery($query);
        $this->result=$this->ThucHienTruyVan();
        $rows_affected = $this->result->rowCount();
        if ($rows_affected == 0)
        {
            return false;    
        }
        return true;
     }
    function updatePassword($email,$newpass)
    {
        $query="update admin set password='".$newpass."' where email='".$email."'";
        $this->SetQuery($query);
        $this->result=$this->ThucHienTruyVan();
    }
}
?>