<?php

include 'C:\xampp\htdocs\Web project\add.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["Name"]) &&
    isset($_POST["email"]) &&
    isset($_POST["password_registration"]) &&
    isset($_POST["password_confirmation"]) &&
    isset($_POST["Conditions"])
) {
    if (
        !empty($_POST['Name']) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password_registration"]) &&
        !empty($_POST["password_confirmation"])&&
        !empty($_POST["Conditions"])
    ) {
        $client = new Client(
            null,
            $_POST['Name'],
            $_POST['email'],
            $_POST['password_registration'],
            $_POST['password_confirmation'],
            $_POST['Conditions'],
        );
        $clientC->addClient($client);
        header('Location:ListClients.php');
    } else
        $error = "Missing information";
}


?>