<?php
require 'dbConfig.php';

$account_holder_fullnames = $_POST['full_names'];
$email = $_POST['email'];
$identifier = $_POST['identifier'];
$depositor_names = $_POST['depositor_names'];

$transaction_type = $_POST['transaction_type'];
$date = $_POST['date'];
$amount = $_POST['amount'];

$status = $_POST['status'];



$add_transaction = "INSERT INTO transaction_history(id, account_holder_full_names, account_holder_identifier, account_holder_email,
depositor_name, transaction_type, date, amount, status)" ."VALUES('', '$account_holder_fullnames', '$identifier', '$email',
'$depositor_names', '$transaction_type', '$date', '$amount', '$status')";


$inserted_transaction = mysqli_query($con, $add_transaction);

if ($inserted_transaction){
    echo 'successful';

}


else{
    echo 'failed';
}











?>