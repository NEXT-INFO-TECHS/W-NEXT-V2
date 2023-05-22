<?php
require_once("include/dbController.php");
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");

$inserted_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");


use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['discussProject'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $page = $_POST['page'];

    $query = "INSERT INTO `contact`(`name`, `email`, `phone`, `inserted_at`, `updated_at`) VALUES ('$name','$email','$phone','$inserted_at','$updated_at')";

    $insert = $db_handle->insertQuery($query);


    $subject = 'Next Info techs';

    $messege = "
            <html lang='en'>
            <head>
                <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
                <meta content='width=device-width, initial-scale=1.0' name='viewport'>
                <meta name='x-apple-disable-message-reformatting'>
                <meta content='IE=edge' http-equiv='X-UA-Compatible'>
            
                <title>Email Template</title>
                <style>
                    a, a[href], a:hover, a:link, a:visited {
                        text-decoration: none !important;
                        color: #0000EE;
                    }
            
                    p, p:visited {
                        font-size: 15px;
                        line-height: 24px;
                        font-family: 'Helvetica', Arial, sans-serif;
                        font-weight: 300;
                        text-decoration: none;
                        color: #000000;
                    }
            
                    h1 {
                        font-size: 22px;
                        line-height: 24px;
                        font-family: 'Helvetica', Arial, sans-serif;
                        font-weight: normal;
                        text-decoration: none;
                        color: #000000;
                    }
            
                    .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {
                        line-height: 100%;
                    }
                </style>
            </head>
            <body style='text-align: center; margin: 0; padding: 10px 0;-webkit-text-size-adjust: 100%;background-color: #000000; color: #000000'>
            
            <div style='text-align: center;'>
                <div style='max-width: 600px;margin: auto;border: 3px solid #46aef7;background: rgb(5 31 94 / 90%);-webkit-box-shadow: 0 0 5px 5px rgba(15,238,255,1);-moz-box-shadow: 0 0 5px 5px rgba(15,238,255,1);box-shadow: 0 0 5px 5px rgba(15,238,255,1);'>
                    <table style='text-align: center; vertical-align: top;'>
                        <tbody>
                        <tr>
                            <td style='width: 596px; vertical-align: top; padding: 15px 0;'>
                                <img alt='Logo' height='85'
                                     src='https://nextinfotechs.com/assets/images/logo/NEXT-logo.png'
                                     style='width: 128px; max-width: 128px; height: 52px; max-height: 52px; text-align: center; color: #ffffff;'
                                     width='180'>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            
                    <img alt='Hero image'
                         height='350' src='https://fullsphere.co.uk/misc/free-template/images/hero.jpg'
                         style='width: 100%; text-align: center;'>
            
            
                    <table style='text-align: center; vertical-align: top;'>
                        <tbody>
                        <tr>
                            <td style='width: 596px; vertical-align: top; padding: 30px 30px 40px;'>
            
                                <h1 style='font-size: 35px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-decoration: none; color: #ffffff;'>
                                    NEXT INFO TECHS
                                </h1>
                                <p style='font-size: 15px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    At Next Info Techs, we're passionate about helping businesses grow and thrive. With years of
                                    experience in the industry, we have the skills and knowledge to delivertop-notch technology
                                    solutions that are customized to meet your specific needs. Our team of experts is dedicated to
                                    providing personalized support and guidance to help you achieve your business goals.
                                </p>
                                <p style='font-size: 15px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    You can estimate your project with us <a
                                        href='https://nextinfotechs.com/'
                                        style='text-decoration: underline; color: #ececec;'
                                        target='_blank'><u>here.</u></a>
                                </p>
            
                            </td>
                        </tr>
                        </tbody>
                    </table>
            
                    <img alt='Image'
                         height='240' src='https://fullsphere.co.uk/misc/free-template/images/image-2.jpg'
                         style='width: 100%; text-align: center;'>
            
            
                    <table style='text-align: center; vertical-align: top;'>
                        <tbody>
                        <tr>
                            <td style='width: 596px; vertical-align: top; padding: 30px 30px 0;'>
                                <h1 style='font-size: 25px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 600; text-decoration: none; color: #ffffff; margin-bottom: 0;'>
                                    About NEX
                                </h1>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            
            
                    <table style='text-align: center; vertical-align: top;margin-bottom: 3rem;margin-top: 1.5rem'>
                        <tbody>
                        <tr>
                            <td style='width: 252px; vertical-align: top; padding: 15px 30px 30px 15px;text-align: center;border: 3px solid #46aef7;
                            border-radius: 15px;
                            margin: 8px;
                            color: white;
                            background: rgba(0, 0, 0, 0.3);'>
                                <p style='font-size: 15px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    We're dedicated to helping you grow your business and achieve your goals. Our personalized
                                    approach ensures that we understand your business needs & provide solutions that meet your
                                    specific goals.
                                </p>
                            </td>
                            <td style='width: 252px; vertical-align: top; padding: 15px 30px 30px 15px;text-align: center;
                            border: 3px solid #46aef7;
                            border-radius: 15px;
                            margin: 8px;
                            color: white;
                            background: rgba(0, 0, 0, 0.3);'>
                                <p style='font-size: 15px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    We use the latest technology and tools to deliver top-notch results. We stay up-to-date with the
                                    latest trends & best practices to ensure that we're providing you with the best possible
                                    solutions.
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            
            
                    <img alt='Image'
                         height='240' src='https://fullsphere.co.uk/misc/free-template/images/image-3.jpg'
                         style='width: 100%; text-align: center;'>
            
            
                    <table style='text-align: center; vertical-align: top;'>
                        <tbody>
                        <tr>
                            <td style='width: 596px; vertical-align: top; padding: 30px;'>
            
                                <!-- Your inverted logo is here -->
                                <img alt='Logo'
                                     src='https://nextinfotechs.com/assets/images/logo/NEXT-logo.png'
                                     style='width: 128px; max-width: 128px; height: 52px; max-height: 52px; text-align: center; color: #ffffff;'>
            
                                <p style='font-size: 13px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    <b style='color:#00e52d'>Whatsapp:</b> +1 (646) 631-1557
                                </p>
            
                                <p style='margin-bottom: 0; font-size: 13px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; font-weight: 400; text-decoration: none; color: #ffffff;'>
                                    <a href='https://nextinfotechs.com/' style='text-decoration: underline; color: #ffffff;'
                                       target='_blank'>
                                        www.nextinfotechs.com
                                    </a>
                                </p>
            
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            </body>
            </html>";

    $sender_name = "Next Info techs";
    $sender_email = "noreply@nextinfotechs.com";

    $username = "noreply@nextinfotechs.com";
    $password = "urd|]1837M&m";

    $receiver_email = $email;

    $mail = new PHPMailer(true);
    $mail->isSMTP();

    $mail->Host = 'mail.nextinfotechs.com';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->Subject = $subject;
    $mail->msgHTML($messege);
    $mail->addAddress($receiver_email);

    if ($insert&&$mail->send()) {
        echo "<script>
                document.cookie = 'alert = 1;';
                window.location.href='".$page."';
                </script>";
    }else{
        echo "<script>
                document.cookie = 'alert = 2;';
                window.location.href='404';
                </script>";
    }
}
