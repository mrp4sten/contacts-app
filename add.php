<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact = [
      "name" => $_POST["name"],
      "phone_number" => $_POST["phone_number"],
    ];

  if (file_exists("contacts.json")) {
    $contacts = json_decode(file_get_contents("contacts.json"), true);
  } else {
    $contacts = [];
  }
    $contacts[] = $contact;

    file_put_contents("contacts.json", json_encode($contacts));

    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>

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
                        <a class="nav-link" href="/contacts-app/add.php">Add Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container pt-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">Add New Contact</div>
                <div class="card-body">
                  <form method="POST" action="add.php">
                    <div class="mb-3 row">
                      <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
        
                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                      </div>
                    </div>
        
                    <div class="mb-3 row">
                      <label for="phone_number" class="col-md-4 col-form-label text-md-end">Phone Number</label>
        
                      <div class="col-md-6">
                        <input id="phone_number" type="tel" class="form-control" name="phone_number" required autocomplete="phone_number" autofocus>
                      </div>
                    </div>
        
                    <div class="mb-3 row">
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</body>

</html>
