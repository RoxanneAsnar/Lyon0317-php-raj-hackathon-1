<?php


    $curl = curl_init();


    curl_setopt($curl, CURLOPT_URL, $url);

    curl_setopt($curl, CURLOPT_COOKIESESSION, true);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    $return = curl_exec($curl);

    curl_close($curl);

    $url = file_get_contents($url);

    $result = json_decode($return,true);