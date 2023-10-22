<?php
    // add the person to the newsletter list
    // $email = $_POST['email'];
    // $email = json_decode($email, true);
    $_POST = json_decode(file_get_contents('php://input'), true);
    $email = $_POST['email'];

    // check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        // dont add it to the list and return
        http_response_code(400);
    } else {

        // check if email already exists
        $file = file_get_contents("newsletter.txt");
        $emails = explode("\n", $file);
        foreach ($emails as $e) {
            if ($e == $email) {
                // dont add it to the list and return
                http_response_code(400);
                return;
            }
        }
        
        // add the email to the list
        file_put_contents("newsletter.txt", "$email\n", FILE_APPEND);
    }

    


?>