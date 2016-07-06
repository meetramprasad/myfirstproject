<?php 
include('database.php');
ob_start();
error_reporting(0);
if($_POST['quote_submit'] == 'quote_submit'){
    $rand = rand('111111111','999999999');
    mysqli_query($con, "INSERT INTO `quote_details`(`quote_id`,`phone_no`, `name`, `email`, `additional_notes`, `quote_serial_no_id`, `quote_fault_id`, `quote_include_id`, `quote_accessories_id`, `quote_collection_id`) VALUES ('".$rand."',".$_POST['phone_no']."','".$_POST['name']."','".$_POST['email']."','".$_POST['additional_notes']."','".$_POST['quote_serial_no']."','".$_POST['quote_fault']."','".$_POST['quote_include']."','".$_POST['quote_accessories']."','".$_POST['quote_collection']."')");
    header("Location:index.php?sub=true");
}
if($_POST['contact_submit'] == 'contact_submit'){
    mysqli_query($con, "INSERT INTO `contact`(`full_name`, `email`, `mobile`, `message`) VALUES ('".$_POST['full_name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['message']."')");
    header("Location:index.php?sub=true");
}
?>

