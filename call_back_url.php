        <?php
        
        $client_id = $_GET['client_id'];
        $status = $_GET['status'];
        $payid = $_GET['payid'];
        $operator_ref = $_GET['operator_ref'];

        if ($status == 'success') {
            update your record
        } elseif ($status == 'failure' || $status == 'Refunded' || $status == 'refunded') {
            update your record and refund to your customer
        }
        
        ?>
        
