<?php
    require_once 'Mail.php';
    require_once 'Mail/mime.php';
    //tao chung thuc mail
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
    $to = "vudanheoheo@gmail.com";
    $subject = "Test mail";
    // taoj header cho mail
    $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);
    //////////////////////////
    /*
    $body = "any message you want";
    $mail = $mailer->send($to, $header, $body);
    // cheack send mail
    if (PEAR::isError($mail)) {
        $alert = "<p>" . $mail->getMessage(). "</p>";
    }else {
        $alert = "<p> Message successfully send! </p>";
    }
    include 'view/mail.php';
    */
    /*$mime = new Mail_mime();
    $body= '<html><body>';
    $body .= '<h1 style="color:#f40;">Hi Dan</h1>
            <p style="color:#080; font-size:18px;">Will you marry me?</p>';
    $body .= '</body></html>';

    $mime->setHTMLBody($body);
    $body = $mime->get();
    // tao header cho mail mime
    $headers = $mime->headers($headers);
    // goi mai 
    $mail = $mailer->send($to, $headers, $body);

    if (PEAR::isError($mail)) {
        $alert = "<p>" . $mail->getMessage(). "</p>";
    }else {
        $alert = "<p> Message successfully send! </p>";
    }
    include 'view/mail.php';*/
    // cai nay gui mail co images

   /* $mime = new Mail_mime();
    $body= '<html><body>';
    $body .= '<h1 style="color:#f40;">Hi Dan</h1>
            <img src="assets/images/nam.php" width="50px">
            <p style="color:#080;font-size:18px;">Will you marry me?</p>';
    $body .= '</body></html>';
    $mime->addHTMLImage("assets/images/nam.png", "image/png");
    $mime->setHTMLBody($body);
    $mime->addAttachment("assets/images/nam.png", "image/jpeg");
    $body=$mime->get();
    // tao header 
    $headers = $mime->headers($headers);
    $mail = $mailer->send($to, $headers, $body);
    if (PEAR::isError($mail)) {
        $alert = "<p>" . $mail->getMessage(). "</p>";
    }else {
        $alert = "<p> Message successfully send! </p>";
    }
    include 'view/mail.php';*/
    $mime = new Mail_mime();
        $body= '<html><head><meta charset="utf-8"></head><body>';
        $body .= '<table width="900px" border="1">
            <tr>
            <td>Ten sp</td>
            <td>Hinh</td>
            </tr>';
            foreach ($data as $r) {
                $body .= '
                    <tr>
                        <td>'.$r['name'].'</td>
                        <td><img src="../assets/images/'.$r['image_link'].'" width="50px"></td>
                    </tr>';
                    $mime->addHTMLImage('../assets/images/'.$r['image_link'], 'image/png');
            }
        $body .='</table>';
        $body .='</body></html>';
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
    header("location:../view/admin/donhang/donhang.php");
    }
?>