<?php
include_once 'model/donhang.php';
$orderObj=new DONHANG();
    $action="index";
    if(isset($_GET['act']))
        $action=$_GET['act'];
    switch($action)
    {
        case 'index':
            $newOrder=$orderObj->getOrder();
            include '../view/admin/donhang/donhang.php';
            break;
        case 'sendmail':
            $id = $_GET['id'];
            $data = $orderObj->getOrderDetail($id);
            $email_to = $_GET['email'];
            sendMail($data,$email_to);
            $newOrder=$orderObj->getOrder();
            include '../view/admin/donhang/donhang.php';
            break;
    }
    function sendMail($data,$email_to)
    {
        require_once 'Mail.php';
        require_once 'Mail/mime.php';

        $smtp = array();
        $smtp['host']='ssl://smtp.gmail.com';
        $smtp['port']='465';
        $smtp['auth']=true;
        $smtp['username']='vudanheoheo@gmail.com';
        $smtp['password']='leecho1509';
        // tao doi tuong goi mail
        $mailer = mail::factory('smtp',$smtp);
        // ngoi gui
        $from= "vudanheoheo@gmail.com";
        // nguoi nhan   
        $to = $email_to;
        $subject = "Test mail";
        // tao header
        $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);
        $mime = new Mail_mime();
        $body= '<html><head><meta charset="utf-8"></head><body>';
        $body .= '<table width="900px" border="1">
            <tr>
            <td>Ten sp</td>
            <td>Hinh</td>
            </tr>';
            foreach ($data as $r){
                $body .='<tr>
                    <td>'.$r['name'].'</td>
                    <td><img src="../assets/images/'.$r['image_link'].'" width="50px"></td>
                </tr>';
                //$mime->addHTMLImage('../assets/images/'.$r['image_link'], 'image/png');
            }
        $body .='</table>';
        $body .= '</body></html>';
        
        $mime->setHTMLBody($body);  
        
        $body=$mime->get();
        // tao header 
        $headers = $mime->headers($headers);
        $mail = $mailer->send($to, $headers, $body);
        if (PEAR::isError($mail)) {
            $alert = "<p>" . $mail->getMessage(). "</p>";
        }else {
            $alert = "<p> Message successfully send! </p>";
        }
        include '../view/mail.php';
    }
?>