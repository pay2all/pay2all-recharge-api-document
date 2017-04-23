<?php
//sample php code

//this will collect data from form
$provider_id = $_POST['provider_id']; 
$number = $_POST['number'];
$amount = $_POST['amount'];
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
            'number' => $number,
            'provider_id' => $provider_id,
            'amount' => $amount,
            'vendor_id' => 1,
        );

        $key = "Personal Access Tokens";

        $header = ["Accept:application/json", "Authorization:Bearer ".$key];

        $method = 'POST';


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
        echo $response;  [JSON RESPONSE]


$maindata = json_decode($response);

$transactionid = $maindata['operator_ref'];
$status = $maindata['status']; 
$payid = $maindata['payid']; //pay2all order id

//display the result to customer
echo"Transaction ID: $transactionid (This is Operator reference ID)";
echo"<br/>";
echo"Recharge Status: $status";
echo"<br/>";


?>