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


        $parameters = array(
                'number' => $mobile_number,
                'provider_id' => $provider_id // Provider id check in pay2all
                'amount' => $amount, // Recharge or payment Amount
                'client_id' => $client_id // your system unique id
                'optional1' => '',
                'optional2' => '',
                'optional3' => '',
                'optional4' => ''
        );

        $key = ""; //you have to add personal access token 

    

        $header = ["Accept:application/json", "Authorization:Bearer ".$key];

        $method = 'POST';

        $url = 'https://pay2all.in/api/v1/transaction';


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);
        echo $response;  //[JSON RESPONSE]


     


?>
