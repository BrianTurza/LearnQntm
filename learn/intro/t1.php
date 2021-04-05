<?php

$output = shell_exec(escapeshellcmd('./../../../virtualenv/public_html/ide/3.7/bin/python3 test.py'));

/*
$_POST['code'] = '
print("test")
';
    $curl = 'server.itkids.sk/brian/api.php';
    $fields = array(
        'code' => urlencode($_POST['code']),

    );

    // here you do prepare your POST data
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $curl);

    // here you define that your data will be sent via POST
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    // this curlopt ensures the output of your destination is captured
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
?
*/
?>