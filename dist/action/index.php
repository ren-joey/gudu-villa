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
    .form-signin-heading:empty{
        opacity: 0;
    }
    </style>

    <?php

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $mymail = $_GET['mail'];
    $type = $_GET['type'];
    $date = $_GET['date'];
    $weekday = date('w', strtotime($date));
    $days = $_GET['days'];
    $specialPrice = '';
    $price;
    switch($type){
        case 2:
            $price = 2500;
            break;
        case 4:
            $price = 3500;
            break;
        case 6:
            $price = 4500;
            break;
        case 8:
            $price = 5500;
            break;
        case 9:
            $price = 15000;
            break;
        default:
            $price = 0;
            break;
    }

    if($weekday >= 1 && $weekday <= 5){
        $price = $price * 0.8;
        $specialPrice = '（平日訂房優惠價）';
    }

    $total = $price * $days;
    if($type == 9){
        $type = '包棟';
    }else{
        $type = $type.'人房';
    }

    $title = '您有一個新房客-'.$name;
    $str = '
    <div style="background-color:#8c705d;background-image:none;background-repeat:repeat;background-position:top left;color:#333;font-family:Helvetica,Arial,sans-serif;line-height:1.25">
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" class="m_4123362032509020739body-table">
        <tbody>
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="20" cellspacing="0" width="600" class="m_4123362032509020739outer-email-container">
                        <tbody>
                            <tr>
                                <td align="center" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="m_4123362032509020739inner-email-container"
                                        style="background-color:#fff;background-image:none;background-repeat:repeat;background-position:top left">


                                        <tbody>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" height="90" width="100%"
                                                        class="m_4123362032509020739email-logo" style="background-color:#fff;background-image:none;background-repeat:repeat;background-position:top left">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle">
                                                                    <a href="http://www.surgestudio.net/document/gudu/"
                                                                        target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.twitch.tv/r/e/eyJjaGFubmVsIjoiYXNpYWdvZHRvbmVnZzNiZTAiLCJsb2NhdGlvbiI6ImxvZ28iLCJlbWFpbF9pZCI6ImZlZjkxMzMwLWQyMTktNDgxNi1iMDZjLWUxYzJiZjM3ZjY1ZiIsInNvdXJjZV9lbWFpbCI6InR3aXRjaF9mYXZvcml0ZV91cCIsIm5hbWUiOiJ0d2l0Y2hfZmF2b3JpdGVfdXAiLCJsb2dpbiI6IiJ9/51860211/517e827907952b8ccd6dee30c4881668f3f736d0/asiagodtonegg3be0?ignore_query%3Dtrue%26tt_content%3Dtwitch_favorite_up%26tt_medium%3Demail&amp;source=gmail&amp;ust=1536088399990000&amp;usg=AFQjCNFeVhfV0wqrB6zN_-k4wTStvquajg">
                                                                        <img style="margin-top:20px; margin-botton:20px;"
                                                                            src="http://www.surgestudio.net/document/gudu/images/logo.png"
                                                                            width="145" height="90" alt="古都民宿" class="CToWUd">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" height="1" width="100%"
                                                        class="m_4123362032509020739email-divider">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle" style="background-color:#eeeeee"
                                                                    width="249"></td>
                                                                <td align="center" valign="middle" style="background-color:#8c705d"
                                                                    width="102"></td>
                                                                <td align="center" valign="middle" style="background-color:#eeeeee"
                                                                    width="249"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="0" cellspacing="0" height="0" width="100%"
                                                        class="m_4123362032509020739email-content">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle">

                                                                    <div class="m_4123362032509020739stream-status"
                                                                        style="color:#333;font-size:18px;font-weight:bold;line-height:36px;margin-top:10px;width:70%">
                                                                        <span style="color:#8c705d;text-decoration:none">訂房確認</a>
                                                                    </div>

                                                                    <a href="http://www.surgestudio.net/document/gudu/"
                                                                        target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.twitch.tv/r/e/eyJjaGFubmVsIjoiYXNpYWdvZHRvbmVnZzNiZTAiLCJsb2NhdGlvbiI6ImNoYW5uZWxfcGljdHVyZSIsImVtYWlsX2lkIjoiZmVmOTEzMzAtZDIxOS00ODE2LWIwNmMtZTFjMmJmMzdmNjVmIiwic291cmNlX2VtYWlsIjoidHdpdGNoX2Zhdm9yaXRlX3VwIiwibmFtZSI6InR3aXRjaF9mYXZvcml0ZV91cCIsImxvZ2luIjoiIn0%3D/51860211/a7fa36f06ec603ecb610bd8aa65fc1e60ec6c7a1/asiagodtonegg3be0?ignore_query%3Dtrue%26tt_content%3Dtwitch_favorite_up%26tt_medium%3Demail&amp;source=gmail&amp;ust=1536088399990000&amp;usg=AFQjCNFc4sKO9YxVaxcTzvw2YERHp5QAwg">
                                                                        <img src="http://surgestudio.net/document/gudu/images/0-2.jpg"
                                                                            width="200" height="auto" class="CToWUd">
                                                                    </a>

                                                                    <div style="color:#999;font-size:16px;line-height:30px;margin-bottom:40px">
                                                                        <strong>'.
                                                                        '訂房人姓名：'.$name.
                                                                        '<br>訂房人電話：'.$phone.
                                                                        '<br>電子郵件：'.$mymail.
                                                                        '<br>預定房型：'.$type.
                                                                        '<br>入住日期：'.$date.
                                                                        '<br>入住天數：'.$days.
                                                                        '<br>單價<span style="color: red;">'.$specialPrice.'</span>：'.$price.
                                                                        '<br><span style="color:red; font-size: 18px;">總價：'.$total.
                                                                        '<span></strong>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="30" cellspacing="0" height="0" width="100%"
                                                        class="m_4123362032509020739email-action" style="border-top-width:1px;border-top-style:solid;border-top-color:#eee">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle">
                                                                    <p class="m_2278953390991021809mb-0 m_2278953390991021809text-center m_2278953390991021809sz-13"
                                                                        style="Margin:0;Margin-bottom:10px;color:red;font-family:Helvetica,Arial,Verdana,'Trebuchet MS';font-size:16px;font-weight:400;line-height:24px;margin:0;margin-bottom:5px;padding:0;padding-bottom:0;text-align:center">
                                                                        🤗提醒您：請與我們聯繫確定該房源還有空房後再進行匯款哦🤗<br>
                                                                        客服專線：0937432625
                                                                    </p>
                                                                    <p class="m_2278953390991021809mb-0 m_2278953390991021809text-center m_2278953390991021809sz-13"
                                                                        style="Margin:0;Margin-bottom:10px;color:#322f37;font-family:Helvetica,Arial,Verdana,'Trebuchet MS';font-size:13px;font-weight:400;line-height:24px;margin:0;margin-bottom:0;padding:0;padding-bottom:0;text-align:center">
                                                                        匯款銀行：彰化銀行(009)<br>
                                                                        匯款帳號：5845-51-03687200<br>
                                                                        匯款戶名：劉昀荃
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" valign="top">
                                                    <table border="0" cellpadding="30" cellspacing="0" height="0" width="100%"
                                                        class="m_4123362032509020739email-action" style="border-top-width:1px;border-top-style:solid;border-top-color:#eee">
                                                        <tbody>
                                                            <tr>
                                                                <td align="center" valign="middle">
                                                                    <div>
                                                                        <a href="http://www.surgestudio.net/document/gudu/"
                                                                            style="background-color:#8c705d;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:14px;line-height:40px;margin-bottom:10px;text-align:center;text-decoration:none;width:200px"
                                                                            target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.twitch.tv/r/e/eyJjaGFubmVsIjoiYXNpYWdvZHRvbmVnZzNiZTAiLCJsb2NhdGlvbiI6ImFjdGlvbiIsImVtYWlsX2lkIjoiZmVmOTEzMzAtZDIxOS00ODE2LWIwNmMtZTFjMmJmMzdmNjVmIiwic291cmNlX2VtYWlsIjoidHdpdGNoX2Zhdm9yaXRlX3VwIiwibmFtZSI6InR3aXRjaF9mYXZvcml0ZV91cCIsImxvZ2luIjoiIn0%3D/51860211/ad89e0afaddee112be559f236ab1821da1532234/asiagodtonegg3be0?ignore_query%3Dtrue%26tt_content%3Dtwitch_favorite_up%26tt_medium%3Demail&amp;source=gmail&amp;ust=1536088399990000&amp;usg=AFQjCNHoM0Oto2P6gbg3v8iOPl5k56fnDA">
                                                                            前往官網
                                                                        </a>
                                                                        <br>
                                                                        <small class="m_4123362032509020739alternate-link"
                                                                            style="color:#999;font-size:11px;margin-top:4px;margin-bottom:4px;margin-right:4px;margin-left:4px">
                                                                            Or click this link:
                                                                            <a href="http://www.surgestudio.net/document/gudu/"
                                                                                style="color:#999" target="_blank"
                                                                                data-saferedirecturl="https://www.google.com/url?q=https://www.twitch.tv/r/e/eyJjaGFubmVsIjoiYXNpYWdvZHRvbmVnZzNiZTAiLCJsb2NhdGlvbiI6ImFjdGlvbl9hbHQiLCJlbWFpbF9pZCI6ImZlZjkxMzMwLWQyMTktNDgxNi1iMDZjLWUxYzJiZjM3ZjY1ZiIsInNvdXJjZV9lbWFpbCI6InR3aXRjaF9mYXZvcml0ZV91cCIsIm5hbWUiOiJ0d2l0Y2hfZmF2b3JpdGVfdXAiLCJsb2dpbiI6IiJ9/51860211/3559db8159b6cc848ce1cbc90800720669e87994/asiagodtonegg3be0?ignore_query%3Dtrue%26tt_content%3Dtwitch_favorite_up%26tt_medium%3Demail&amp;source=gmail&amp;ust=1536088399990000&amp;usg=AFQjCNGBzX3VWzrjwaEzLR_zA-Fpbt1F5Q">http://www.surgestudio.net/document/gudu/</a>
                                                                        </small>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <img src="https://ci3.googleusercontent.com/proxy/nWOKbL2eFz8zyQLDNFEH5u2w9rypD9KgE-ggoxqVjbjIjUv2ddoU3qVfqjlST9Yk-l6VrZvrboF084HczNmXBj6H1FCGjzVGK4U0BMgpvX_lZcFXpB3iw7D9Xb9-zl_AWad5XagPrg1EC6G0NObAT97aqsk1Jumecbk5ldJKIVKmfy4JqJU40oPosd7YNO86pbsfWmjON9n3UaieSlxpE_O9QkSkJz7TiB52hvklbUaDLOWTEefZLKEbzgbYdfnU1drOmDNyCwvZ=s0-d-e1-ft#https://spade.twitch.tv/track?data=eyJldmVudCI6ImVtYWlsX29wZW4iLCJwcm9wZXJ0aWVzIjp7Im5vdGlmaWNhdGlvbl9pZCI6ImZlZjkxMzMwLWQyMTktNDgxNi1iMDZjLWUxYzJiZjM3ZjY1ZiJ9fQ%3D%3D&amp;img=1&amp;ua=1"
        width="1" height="1" class="CToWUd">
    <div class="yj6qo"></div>
    <div class="adL">
    </div>
</div>
    ';

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
    // $mail->addAddress('tsuyiren@gmail.com', '湧動創意');
    $mail->addAddress($mymail, $name);

    //Set the subject line
    $mail->Subject = $title;

    //Replace the plain text body with one created manually
    $mail->Body = $str;

    $mail->IsHTML(true);
    ?>
</head>
<body>

<div class="join-page-php" style="height: 300px; background-color: white; color: #8c705d; text-align: center;">
<h2 class="form-signin-heading" style="margin:0 !important; padding:0 !important;  text-align: center; color: #8c705d; letter-spacing: 2px;">
<?php

//send the message, check for errors
if (!$mail->send()) {
    echo "提交失敗，請連繫管理人員。";
    ?>
    </h2>
<?php
} else {
    echo "提交完成"; ?>
    </h2>
    <div style="margin-top: 10px;">您將會收到一封訂房確認信<br>請至 <?php echo $mymail ?>查詢</div>
<?php } ?>

</div>
</body>
</html>