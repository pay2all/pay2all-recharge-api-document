<?php
$client_id = $_GET['client_id'];
$status = $_GET['status'];
$payid = $_GET['payid'];
$operator_ref = $_GET['operator_ref'];
if ($status == 'success') {
    echo "update your record";
} else if($status == 'failure' OR  $status == 'Refunded') {
    echo "update your record and refund to your customer";
}
?>