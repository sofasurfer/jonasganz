<?php snippet('header') ?>
<div class="container-dark">
  <div class="container-fluid main" role="main">

    <div class="row">

    <div class="col-md-12 d-md-none d-md-block d-lg-none">
      <div class="contact-info top">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <?php
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" class="img-thumbnail" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
      <?php //snippet('prevnext') ?>

    </div>

    <div class="col-md-12 col-lg-6">
      <?= $page->text()->kirbytext() ?>
      <?php if( $page->text2()->isNotEmpty() ): ?>
        <div class="col-info"><?= $page->text2()->kirbytext() ?></div>
      <?php endif; ?>
      <h2>Kunden</h2>
      <div class="col-wrap">
        <div class="col-left"><?= $page->client1()->kirbytext() ?></div>
        <div class="col-right"><?= $page->client2()->kirbytext() ?></div>
      </div>
      <small><?= $page->impressum()->kirbytext() ?></small>
    </div>

    <div class="col-md-6 d-none d-lg-block ">
      <div class="contact-info">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <?php
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" class="img-thumbnail" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
      <?php //snippet('prevnext') ?>

    </div>

  </div>
</div>

<?php snippet('footer') ?>