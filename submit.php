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
//end of data input checking


//common settings
$api_token = ""; //your pay2all api token


//doing recharge now by hitting pay2all api
$ch = curl_init();
$timeout = 60; // set to zero for no timeout
$myurl = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&provider_id=$provider_id&number=$number&amount=$amount";
curl_setopt ($ch, CURLOPT_URL, $myurl);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
//echo"$file_contents";

//capture the response from pay2all api
//splitting each data as single
$maindata = json_decode($file_contents, true);

$transactionid = $maindata['operator_ref'];
$status = $maindata['status']; 
$payid = $maindata['payid']; //pay2all order id

//display the result to customer
echo"Transaction ID: $transactionid (This is Operator reference ID)";
echo"<br/>";
echo"Recharge Status: $status";
echo"<br/>";


?>