<?php snippet('header') ?>

<div class="container-dark">
  <div class="container main" role="main">

    <div class="row">

      <div class="col-md-12">
        <h1><?= $page->title()->html() ?> &#x31; </h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>