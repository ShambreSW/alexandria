<?php
  session_start();

echo <<<_INIT
 <DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Allura|Arizonia|Calligraffitti|Charmonman|Cinzel|Cookie|Damion|Dancing+Script|Fredericka+the+Great|Grand+Hotel|Great+Vibes|Herr+Von+Muellerhoff|Homemade+Apple|Italianno|Kristi|Leckerli+One|Lobster|Lobster+Two|Merienda+One|Montez|Mr+Dafoe|Mr+De+Haviland|Oregano|Pacifico|Parisienne|Petit+Formal+Script|Pinyon+Script|Playball|Rochester|Sacramento|Satisfy|Srisakdi|Tangerine|Yesteryear" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
    header {
      background-color: #80d6ab;
    }

    body {
      font-family: 'alex brush';
      font-weight: bolder;
      text-align: center;
      background: linear-gradient(to bottom, #80d6ab 0%, #ab80d6 100%);
    }


    h1 {
      font-size: 12em;
      letter-spacing: 30px;
    }

    .username {
      font-size: 3em;
      margin-top: -1.2em;
      letter-spacing: 15px;
      word-spacing: .75em;
    }

    img {
      margin-right: 2.5%;
      vertical-align: middle;
    }
    </style>

_INIT;

  require_once 'functions.php';

  $userstr = 'Welcome Guest';

  if (isset($_SESSION['user']))
  {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = "Logged in as: $user";
  }
  else $loggedin = FALSE;

echo <<<_MAIN
    <title>Alexandria</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div data-role="page">
      <header data-role="header">
        <h1 class="logo" class="center"><img class="muses" src="images/images_of_behance.jpeg"><span>Alexandria</span></h1>
        <div class="username">$userstr</div>
      <div data-role="content">

_MAIN;

  if ($loggedin)
  {
echo <<<_LOGGEDIN
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition="slide" href='members.php?view=$user'>Home</a>
          <a data-role='button' data-inline='true' data-icon='user'
            data-transition="slide" href='members.php'>Members</a>
          <a data-role='button' data-inline='true' data-icon='heart'
            data-transition="slide" href='friends.php'>Friends</a><br>
          <a data-role='button' data-inline='true' data-icon='mail'
            data-transition="slide" href='messages.php'>Messages</a>
          <a data-role='button' data-inline='true' data-icon='edit'
            data-transition="slide" href='profile.php'>Edit Profile</a>
          <a data-role='button' data-inline='true' data-icon='action'
            data-transition="slide" href='logout.php'>Log out</a>
        </div>
_LOGGEDIN;
  }
  else
  {
echo <<<_GUEST
        <div class='center'>
          <a class="btn btn-secondary" role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Home</a>
          <a class="btn btn-secondary" role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Sign Up</a>
          <a class="btn btn-secondary" role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Log In</a>
        </div>
        <p class='info'>(You must be logged in to use this app)</p>
_GUEST;
  }
?>
