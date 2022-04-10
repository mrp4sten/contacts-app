<?php
    $contacts = [
        ["name" => "Mauricio", "phone_number" => "5538389460"],
        ["name" => "Miguel", "phone_number" => "5548856052"],
        ["name" => "Leon", "phone_number" => "5614488580"],
    ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts App</title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="static/css/bootstrap.css" type="text/css">
    <!--bootstrap bundle.js-->
    <script defer src="static/js/bootstrap.bundle.js"></script>

    <!-- static content -->
    <link rel="stylesheet" href="./static/css/main.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold" href="#">
                <img class="mr-2" src="./static/img/logo.png" />
                ContactsApp
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts-app/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts-app/add.html">Add Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container pt-4 p-3">
            <div class="row">
                <?php foreach($contacts as $contact): ?>
                <div class="col-md-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title text-capitalize"> <?= $contact["name"] ?> </h3>
                            <p class="m-2"><?= $contact["phone_number"] ?></p>
                            <a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
                            <a href="#" class="btn btn-danger mb-2">Delete Contact</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

</body>

</html>
