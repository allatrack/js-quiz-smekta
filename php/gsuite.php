<?php

if ($_POST) {
    foreach ( $_POST as $key => $value)
    {
        $post_items[] = $key . '=' . urlencode($value);
    }
    $post_string = implode ('&', $post_items);
    
    echo $post_string;
    echo '\n';
    
    $curl_connection = curl_init('https://docs.google.com/forms/d/e/1FAIpQLSfOFCkbnPbENUTxvCVQhL3F7KyXej0PIFR32IOvh5zFIibdVw/formResponse');
    
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);

    
    $result = curl_exec($curl_connection);
    //show information regarding the request
    print_r(curl_getinfo($curl_connection));
    echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
    //close the connection
    curl_close($curl_connection);
    
}

?>