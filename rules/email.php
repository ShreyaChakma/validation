<?php


if (isset($_POST['email'])) {

    if (empty($_POST['email'])) {
        echo error_message('Please enter your email');
        die();
    } else {

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo error_message('inavlid email format');
            die();
        }
    }

    
}
