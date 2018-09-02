<?php

require_once 'swiftmailer/lib/swift_required.php';

$messageText = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <title>Empty Template</title>
    <!--[if !mso]><!-- -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <!--<![endif]-->

    <style type="text/css" id="media-query">
        body {
            margin: 0;
            padding: 0;
        }
        
        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }
        
        .ie-browser table,
        .mso-container table {
            table-layout: fixed;
        }
        
        * {
            line-height: inherit;
        }
        
        a[x-apple-data-detectors=true] {
            color: inherit !important;
            text-decoration: none !important;
        }
        
        [owa] .img-container div,
        [owa] .img-container button {
            display: block !important;
        }
        
        [owa] .fullwidth button {
            width: 100% !important;
        }
        
        [owa] .block-grid .col {
            display: table-cell;
            float: none !important;
            vertical-align: top;
        }
        
        .ie-browser .num12,
        .ie-browser .block-grid,
        [owa] .num12,
        [owa] .block-grid {
            width: 620px !important;
        }
        
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }
        
        .ie-browser .mixed-two-up .num4,
        [owa] .mixed-two-up .num4 {
            width: 204px !important;
        }
        
        .ie-browser .mixed-two-up .num8,
        [owa] .mixed-two-up .num8 {
            width: 408px !important;
        }
        
        .ie-browser .block-grid.two-up .col,
        [owa] .block-grid.two-up .col {
            width: 310px !important;
        }
        
        .ie-browser .block-grid.three-up .col,
        [owa] .block-grid.three-up .col {
            width: 206px !important;
        }
        
        .ie-browser .block-grid.four-up .col,
        [owa] .block-grid.four-up .col {
            width: 155px !important;
        }
        
        .ie-browser .block-grid.five-up .col,
        [owa] .block-grid.five-up .col {
            width: 124px !important;
        }
        
        .ie-browser .block-grid.six-up .col,
        [owa] .block-grid.six-up .col {
            width: 103px !important;
        }
        
        .ie-browser .block-grid.seven-up .col,
        [owa] .block-grid.seven-up .col {
            width: 88px !important;
        }
        
        .ie-browser .block-grid.eight-up .col,
        [owa] .block-grid.eight-up .col {
            width: 77px !important;
        }
        
        .ie-browser .block-grid.nine-up .col,
        [owa] .block-grid.nine-up .col {
            width: 68px !important;
        }
        
        .ie-browser .block-grid.ten-up .col,
        [owa] .block-grid.ten-up .col {
            width: 62px !important;
        }
        
        .ie-browser .block-grid.eleven-up .col,
        [owa] .block-grid.eleven-up .col {
            width: 56px !important;
        }
        
        .ie-browser .block-grid.twelve-up .col,
        [owa] .block-grid.twelve-up .col {
            width: 51px !important;
        }
        
        @media only screen and (min-width: 640px) {
            .block-grid {
                width: 620px !important;
            }
            .block-grid .col {
                display: table-cell;
                Float: none !important;
                vertical-align: top;
            }
            .block-grid .col.num12 {
                width: 620px !important;
            }
            .block-grid.mixed-two-up .col.num4 {
                width: 204px !important;
            }
            .block-grid.mixed-two-up .col.num8 {
                width: 408px !important;
            }
            .block-grid.two-up .col {
                width: 310px !important;
            }
            .block-grid.three-up .col {
                width: 206px !important;
            }
            .block-grid.four-up .col {
                width: 155px !important;
            }
            .block-grid.five-up .col {
                width: 124px !important;
            }
            .block-grid.six-up .col {
                width: 103px !important;
            }
            .block-grid.seven-up .col {
                width: 88px !important;
            }
            .block-grid.eight-up .col {
                width: 77px !important;
            }
            .block-grid.nine-up .col {
                width: 68px !important;
            }
            .block-grid.ten-up .col {
                width: 62px !important;
            }
            .block-grid.eleven-up .col {
                width: 56px !important;
            }
            .block-grid.twelve-up .col {
                width: 51px !important;
            }
        }
        
        @media (max-width: 640px) {
            .block-grid,
            .col {
                min-width: 320px !important;
                max-width: 100% !important;
            }
            .block-grid {
                width: calc(100% - 40px) !important;
            }
            .col {
                width: 100% !important;
            }
            .col>div {
                margin: 0 auto;
            }
            img.fullwidth {
                max-width: 100% !important;
            }
        }
    </style>
</head>

<body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF">

    <!--[if IE]><div class="ie-browser"><![endif]-->
    <!--[if mso]><div class="mso-container"><![endif]-->
    <div class="nl-container" style="min-width: 320px;Margin: 0 auto;background-color: #FFFFFF">
        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #FFFFFF;"><![endif]-->

        <div style="background-color:transparent;">
            <div style="Margin: 0 auto;min-width: 320px;max-width: 620px;width: 620px;width: calc(31000% - 197780px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse;display: table;width: 100%;">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                    <!--[if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:10px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                    <div class="col num12" style="min-width: 320px;max-width: 620px;width: 620px;width: calc(30000% - 185380px);background-color: transparent;">
                        <div style="background-color: transparent; width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:10px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->


                                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 5px;"><![endif]-->
                                <div style="font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;color:#000000;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 5px;">
                                    <div style="font-size:12px;line-height:14px;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;color:#000000;text-align:left;">
                                        <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><strong><span style="font-size: 18px; line-height: 21px;">Дякуємо за ваші відповіді</span></strong></p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->



                                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 25px;"><![endif]-->
                                <div style="font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;color:#71777D;line-height:120%; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 25px;">
                                    <div style="font-size:12px;line-height:14px;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;color:#71777D;text-align:left;">
                                        <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center">Ви зареєстровані у розіграші</p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->


                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
            </div>
        </div>
        <div style="background-color:transparent;">
            <div style="Margin: 0 auto;min-width: 320px;max-width: 620px;width: 620px;width: calc(31000% - 197780px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse;display: table;width: 100%;">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                    <!--[if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                    <div class="col num12" style="min-width: 320px;max-width: 620px;width: 620px;width: calc(30000% - 185380px);background-color: transparent;">
                        <div style="background-color: transparent; width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->


                                <div style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
                                    <!--[if (mso)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px;padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td><![endif]-->
                                    <div align="center">
                                        <div style="border-top: 1px dotted #CCCCCC; width:100%; line-height:1px; height:1px; font-size:1px;">&#160;</div>
                                    </div>
                                    <!--[if (mso)]></td></tr></table></td></tr></table><![endif]-->
                                </div>


                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
            </div>
        </div>
        <div style="background-color:transparent;">
            <div style="Margin: 0 auto;min-width: 320px;max-width: 620px;width: 620px;width: calc(31000% - 197780px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse;display: table;width: 100%;">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                    <!--[if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                    <div class="col num12" style="min-width: 320px;max-width: 620px;width: 620px;width: calc(30000% - 185380px);background-color: transparent;">
                        <div style="background-color: transparent; width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->


                                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
                                <div style="color:#555555;line-height:120%;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
                                        <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 18px; line-height: 21px;"><strong>Переможці будуть опубліковані на сторінці:</strong></span></p>
                                        <p style="margin: 0;font-size: 18px;line-height: 22px;text-align: center"><a style="color:#71777D;color:#71777D;text-decoration: underline;" href="http://gastro-likar.info/capmaign-result/" target="_blank" rel="noopener noreferrer">«Результати розіграшу»</a></p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->


                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
            </div>
        </div>
        <div style="background-color:transparent;">
            <div style="Margin: 0 auto;min-width: 320px;max-width: 620px;width: 620px;width: calc(31000% - 197780px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid ">
                <div style="border-collapse: collapse;display: table;width: 100%;">
                    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="background-color:transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width: 620px;"><tr class="layout-full-width" style="background-color:transparent;"><![endif]-->

                    <!--[if (mso)|(IE)]><td align="center" width="620" style=" width:620px; padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><![endif]-->
                    <div class="col num12" style="min-width: 320px;max-width: 620px;width: 620px;width: calc(30000% - 185380px);background-color: transparent;">
                        <div style="background-color: transparent; width: 100% !important;">
                            <!--[if (!mso)&(!IE)]><!-->
                            <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                                <!--<![endif]-->


                                <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><![endif]-->
                                <div style="color:#555555;line-height:120%;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;">
                                    <div style="font-size:12px;line-height:14px;color:#555555;font-family:\'Lato\', Tahoma, Verdana, Segoe, sans-serif;text-align:left;">
                                        <p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 12px; line-height: 14px;">Слідкуйте за повідомленнями на своїй електронній пошті</span></p>
                                    </div>
                                </div>
                                <!--[if mso]></td></tr></table><![endif]-->


                                <!--[if (!mso)&(!IE)]><!-->
                            </div>
                            <!--<![endif]-->
                        </div>
                    </div>
                    <!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
                </div>
            </div>
        </div>
        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </div>
    <!--[if (mso)|(IE)]></div><![endif]-->


</body>

</html>';

// CREATE TRANSPORT CONFIG
$transport = Swift_SmtpTransport::newInstance('in-v3.mailjet.com', 587, 'tls')
//$transport = Swift_SmtpTransport::newInstance('smtp.zoho.eu', 587, 'tls')
//$transport = Swift_SmtpTransport::newInstance('smtp.zoho.eu', 465, 'ssl')
 // ->setUsername('hello@gastro-likar.info')
 // ->setPassword('=767tobesy');
 // ->setUsername('promo@gastrogid.com')
 // ->setPassword('megra538');
 ->setUsername('946bdd90fd1fd24f1b2ebe3e60e5fc9e')
 ->setPassword('78ea0b7aa256a8b1e490dcebc3e5df77');


function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if ($_POST) {
    
    // Enter the email where you want to receive the message
    $emailTo = trim($_POST['entry_1395175042']);
    
    $clientEmail = trim($_POST['entry_1395175042']);
    
    $array = array(
        'emailMessage' => $clientEmail
    );
    
    
    if (!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    $array['messageMessage'] = $messageText;

      
    // Create a message
    $message = Swift_Message::newInstance('Вітаємо, ви зареєстровані в розіграші')
    ->setFrom(array('promo@gastrogid.com' => 'promo@gastrogid.com'))
    ->setTo(array($emailTo))
    ->setBody($messageText, 'text/html');

    // SEND
    $mailer = Swift_Mailer::newInstance($transport);
    $mailer->send($message);    
    
    /*$message = Swift_Message::newInstance('Вітаємо, Користувач $emailTo зареєстрован в розіграші')
    ->setFrom(array('promo@gastrogid.com' => 'promo@gastrogid.com'))
    ->setTo(array('billing@smartsecurityapp.com'))
    ->setBody($messageText, 'text/html');

    // SEND
    $mailer->send($message);*/
    
    echo json_encode($array);
    
}

?>