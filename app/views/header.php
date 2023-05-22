<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mobile Web 3D Application</title>
  <link href="static/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="static/css/main.css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <script src="static/js/x3dom.js"></script>
  <link rel="stylesheet" href="static/css/x3dom.css">
</head>


<body>
  <nav class="navbar navbar-expand-sm nav-background fixed-top">
    <div class="container-fluid">
      <div class="logo">
        <a class="navbar-brand" href="#">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>World</h3>
          <p>Find your own</p>
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse flex-row-reverse" id="navbarScroll">
        <ul class="navbar-nav my-2 navbar-nav-scroll" style="--bs-scroll-height: auto;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Drinks
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <?php foreach ($items as $item): ?>
                <li>
                  <a class="dropdown-item" href="<?php echo $item['website'] ?>"><?php echo $item['name'] ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>