<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CyberShake</title>

	<!-- <link href="../css/mainCSS.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <style>
    body{
    margin:0;
    padding:0;
    }
    </style>

    <?php

    $title = '您有一個新房客';
    // $str = '商店名稱：'.$_GET['inputName'] .'。電子信箱：'. $_GET['inputEmail'] .'。連絡電話：'. $_GET['inputPhone'];
    $str = '測試';

    require 'PHPMailerAutoload.php'; // path to the PHPMailer class

    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    $mail->CharSet = "utf-8";

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    // $mail->Username = "joey@surgestudio.net";
    // $mail->Username = "ch1540@yahoo.com.tw";
    $mail->Username = "tsuyiren@gmail.com";

    //Password to use for SMTP authentication
    // $mail->Password = "a600friends";
    // $mail->Password = "ch063699";
    $mail->Password = "uckascqnzwpeqarx";

    //Set who the message is to be sent from
    $mail->setFrom('tsuyiren@gmail.com', '湧動創意');

    //Set an alternative reply-to address
    // $mail->addReplyTo('tsuyiren@gmail.com', '湧動創意');

    //Set who the message is to be sent to
    $mail->addAddress('ch1540@yahoo.com.tw', '古都民宿');

    //Set the subject line
    $mail->Subject = $title;

    //Replace the plain text body with one created manually
    $mail->Body = $str;
    ?>
</head>
<body>

<div class="join-page-php">
<h2 class="form-signin-heading" style="margin:0 !important; padding:0 !important;">
<?php

//send the message, check for errors
if (!$mail->send()) {
    echo "提交失敗，請連繫管理人員。";
} else {
    echo "提交完成";
}

?>
</h2>
</div>
</body>
</html>