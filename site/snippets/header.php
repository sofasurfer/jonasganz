<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if($page->isHomePage()): ?>
    <?php echo seo('title'); ?>
  <?php else: ?>
    <title><?= seo('title', array(), true); ?> | <?= $site->title()->html() ?></title>
  <?php endif; ?>
  <?php echo seo('description'); ?>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?= css('assets/css/index.css?v=7.1') ?>

  <link rel="apple-touch-icon" sizes="57x57" href="/assets/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">
  <link rel="manifest" href="/assets/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="msapplication-TileImage" content="/assets/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#000000">

</head>
<body class="<?= $page->intendedTemplate(); ?>">

<input type="checkbox" id="navmenu">
<?php snippet('menu') ?>

<header>
  <div class="bg-dark2" id="navbarHeader">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-10 col-sm-8 col-md-8">
          <a href="<?= url() ?>" class="branding" rel="home"><?= $site->title()->html() ?></a>
        </div>
        <div class="col-xs-2 col-sm-4 col-md-4">
          <div class="float-right">
            <label for="navmenu" class="text-white nav-opener">

<svg  class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.36 28.42"><defs><style>.cls-1{fill:none;}.cls-2{clip-path:url(#clip-path);}.cls-3{fill:#ffffff;}</style><clipPath id="clip-path" transform="translate(0)"><rect class="cls-1" width="18.36" height="28.42"/></clipPath></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g class="cls-2"><path class="cls-3" d="M8.21,28.42v-24A7.32,7.32,0,0,1,1.89,8.17H0V5.94A13.13,13.13,0,0,0,1.35,6C3.71,6,7.87,4.67,8,0h2.36C10.44,4.67,14.7,6,17,6a13.15,13.15,0,0,0,1.35,0V8.17H16.42a7.26,7.26,0,0,1-6.27-3.71v24Z" transform="translate(0)"/></g></g></g></svg>              

            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<main role="main">
