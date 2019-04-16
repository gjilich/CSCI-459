<?php
require('../model/database.php');
require('../model/customer_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'search_customers';
    }
}

//instantiate variable(s)
$last_name = '';
$customers = array();

if ($action == 'search_customers') {   
    include('customer_search.php');
} else if ($action == 'display_customers') {
    $last_name = filter_input(INPUT_POST, 'last_name');
    if (empty($last_name)) {
        $message = 'You must enter a last name.';
    } else {
        $customers = get_customers_by_last_name($last_name);
    }
    include('customer_search.php');
} else if ($action == 'display_customer') {
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    $customer = get_customer($customer_id);
    
    $emailFormat = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
    $phoneFormat = '/^(\d{3}-)|(\(\d{3}\) ?)\d{3}-\d{4}$/';
    $errorMessage = "";
    $pwError = "";
    $phoneError = "";
    $emailError = "";
    
    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    
    if(strlen($first_name) < 1 || strlen($first_name) > 51){
        $errorStr = "Required";
    } else {
        $first_name = filter_input(INPUT_POST, 'first_name');
    }
        
    if(strlen($last_name) < 1 || strlen($last_name) > 51){
        $errorStr = "Required";
    } else {
        $last_name = filter_input(INPUT_POST, 'last_name');
    }
    
    
    if(strlen($address) < 1 || strlen($address) > 51){
        $errorStr = "Required";
    } else {
        $address = filter_input(INPUT_POST, 'address');        
    }
   
    if(strlen($city) < 1 || strlen($city) > 51){
        $errorStr = "Required";
    } else {
        $city = filter_input(INPUT_POST, 'city');        
    }
    
    if(strlen($state) < 1 || strlen($state) > 51){
        $errorStr = "Required";
    } else {
        $state = filter_input(INPUT_POST, 'state');        
    }
    
    if(strlen($postal_code) < 1 || strlen($postal_code) > 21){
        $errorStr = "Required";
    } else {
        $postal_code = filter_input(INPUT_POST, 'postal_code');        
    }
    
    if(!preg_match($phoneFormat, $phone)){
        $phoneError = "Use (999)999-9999 format";
    }  else {
        $phone = filter_input(INPUT_POST, 'phone');        
    }
    
    if(!preg_match($emailFormat, $email)){
        $emailError = "Invalid email";
    } else {
        $email = filter_input(INPUT_POST, 'email');
    }
    
    if(strlen($password) < 6){
        $pwError = "Too short";
    } elseif(strlen($password) > 21){
        $pwError = "Too long";
    } else {
        $password = filter_input(INPUT_POST, 'password');
    }
    
    $country_code = filter_input(INPUT_POST, 'country_code');
    
    include('customer_display.php');
} else if ($action == 'update_customer') {
    $emailFormat = '/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/';
    $phoneFormat = '/^(\d{3}-)|(\(\d{3}\) ?)\d{3}-\d{4}$/';
    $errorMessage = "";
    $pwError = "";
    $phoneError = "";
    $emailError = "";
    
//    if(!isset($errorMessage) || !isset($pwError) || !isset($emailError) || !isset($phoneError)){
//        
    //    $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
    //    
    //    if(strlen($first_name) < 1 || strlen($first_name) > 51){
    //        $errorStr = "Required";
    //    } else {
    //        $first_name = filter_input(INPUT_POST, 'first_name');
    //    }
    //        
    //    if(strlen($last_name) < 1 || strlen($last_name) > 51){
    //        $errorStr = "Required";
    //    } else {
    //        $last_name = filter_input(INPUT_POST, 'last_name');
    //    }
    //    
    //    
    //    if(strlen($address) < 1 || strlen($address) > 51){
    //        $errorStr = "Required";
    //    } else {
    //        $address = filter_input(INPUT_POST, 'address');        
    //    }
    //   
    //    if(strlen($city) < 1 || strlen($city) > 51){
    //        $errorStr = "Required";
    //    } else {
    //        $city = filter_input(INPUT_POST, 'city');        
    //    }
    //    
    //    if(strlen($state) < 1 || strlen($state) > 51){
    //        $errorStr = "Required";
    //    } else {
    //        $state = filter_input(INPUT_POST, 'state');        
    //    }
    //    
    //    if(strlen($postal_code) < 1 || strlen($postal_code) > 21){
    //        $errorStr = "Required";
    //    } else {
    //        $postal_code = filter_input(INPUT_POST, 'postal_code');        
    //    }
    //    
    //    if(!preg_match($phoneFormat, $phone)){
    //        $phoneError = "Use (999)999-9999 format";
    //    }  else {
    //        $phone = filter_input(INPUT_POST, 'phone');        
    //    }
    //    
    //    if(!preg_match($emailFormat, $email)){
    //        $emailError = "Invalid email";
    //    } else {
    //        $email = filter_input(INPUT_POST, 'email');
    //    }
    //    
    //    if(strlen($password) < 6){
    //        $pwError = "Too short";
    //    } elseif(strlen($password) > 21){
    //        $pwError = "Too long";
    //    } else {
    //        $password = filter_input(INPUT_POST, 'password');
    //    }
    //    
    //    $country_code = filter_input(INPUT_POST, 'country_code');
    //} else{
    //      include('customer_display.php');
    //}
    update_customer($customer_id, $first_name, $last_name,
            $address, $city, $state, $postal_code, $country_code,
            $phone, $email, $password);

    include('customer_search.php');
}
?>