<?php
    

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $company_name = $_POST['company-name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $to = 'aikido763@gmail.com';

        echo $name;

    }
?>