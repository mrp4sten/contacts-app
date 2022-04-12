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

  <?php $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); ?>
  <?php if ($uri == "/contacts-app/" || $uri == "/contacts-app/index.php"): ?>
    <script defer src="./static/js/welcome.js"></script>
  <?php endif; ?>
</head>

<body>
  <!-- navbar -->
  <?php require "partials/navbar.php" ?>
  <main>

  <!-- content here -->
