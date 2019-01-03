<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?= css('assets/css/index.css') ?>

</head>
<body>

<input type="checkbox" id="navmenu">
<?php snippet('menu') ?>

<header>
  <div class="bg-dark2" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <a href="<?= url() ?>" class="branding" rel="home"><?= $site->title()->html() ?></a>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <div class="float-right">
            <label for="navmenu" class="text-white nav-opener"><i class="arrow-top">&rarr;</i></label>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<main role="main">
