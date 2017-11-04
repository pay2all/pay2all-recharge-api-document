<?php
//sample php code

//this will collect data from form
$provider_id = $_POST['provider_id']; 
$number = $_POST['number'];
$amount = $_POST['amount'];
$client_id = "09919190"; //(your system unique id. that you can check in pay2all);
//end of data collection from form


//check whether user enter some data or not
        if(empty($provider_id)){
        echo"select operator";
        exit;
        }
        if(empty($number)){
        echo"enter mobile number";
        exit;
        }
        if(empty($amount)){
        echo"enter amount";
        exit;
        }
        $api_token = "api_token"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
        $ch = curl_init();
        $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$number&provider_id=$provider_id&amount=$amount&client_id=$client_id";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;


?>
