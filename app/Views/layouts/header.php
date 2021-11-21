<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
    <title><?= $title; ?></title>
</head>

<body>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?> " aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?>" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'blogs' ? 'active' : '' ?>" href="/blogs">Blog</a>
            </li>
        </ul>
    </div>
    
  <!-- <nav>
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == '' ? 'active' : '' ?> " aria-current="page" href="/">Home</a> |
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'about' ? 'active' : '' ?> " href="/about">About</a> |
      <a class="nav-link <?= \Config\Services::request()->uri->getSegment(1) == 'blogs' ? 'active' : '' ?> " href="/blogs">Blogs</a> |
  </nav> -->