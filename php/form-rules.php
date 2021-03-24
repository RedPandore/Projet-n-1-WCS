<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array_map('trim', $_POST);

    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Le nom est obligatoire.';
    }

    $nameLength = 255;
    if (strlen($data['name']) > $nameLength) {
        $errors[] = 'Le nom doit faire moins de ' . $nameLength . ' caractères';
    }

    if (empty($data['email'])) {
        $errors[] = 'L\'email est obligatoire';
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Mauvais format d\'email';
    }

    /*
        if (empty($errors)) {
            Alors, renvoyer un mail/vers une BDD/...
        }
     header('Location: form.php');
    */
}