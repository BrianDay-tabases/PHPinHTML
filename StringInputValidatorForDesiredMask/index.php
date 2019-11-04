<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        if (empty($name)) {
            $message = 'Please enter your name';
            break;
        }
        // 2. display the name with only the first letter capitalized
        $name = strtolower($name);
        $name = ucwords($name);
        // Page 269 for Separating First and Last name
        $i = strpos($name, ' ');
        if ($i === false) {
            $first_name = $name;
        } else { 
            $first_name = substr($name, 0, $i);              
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
        if (empty($email)) {
            $message = 'Please enter your email address';
            break;
        } else if (strpos($email, '@') === false || strpos($email, '.') === false) {
            $message = 'Please format your email address';
            break;
        }
        
        
        
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        if (empty($phone)) {
            $message = 'Please enter your phone#';
            break;
        } else if (strlen($phone) < 7) {
            $message = 'Please format phone with at least seven digits';
            break;
        } else { 
            $phone = str_replace('-', '', $phone);
            $phone = str_replace('.', '', $phone);
            $phone = str_replace('(' || ')', '', $phone);
            $phone = str_replace(' ', '', $phone);
        }
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if (strlen($phone) == 7) {
            $first = substr($phone, 0, 3);
            $second = substr($phone, 3, 4);
            $phone = $first . '-' . $second;
        } else {
            $first = substr($phone, 0, 3);
            $second = substr($phone, 3, 3);
            $third = substr($phone, 6, 4);
            $phone = [$first . '-' . $second . '-' . $third];
        }
       
        /*************************************************
         * Display the validation message
         ************************************************/
        $message = 
                "Hello $first_name,\n" .
                "\n" .
                "Thank you for entering this data:\n" .
                "\n" .
                "Name: $name\n" .
                "Email: $email\n" .
                "Phone: $phone\n";
        break;
}
include 'string_tester.php';
?>