<?php snippet('header') ?>
<div class="container-dark">
  <div class="container-fluid main" role="main">

    <div class="row">

    <div class="col-md-6">
      <?= $page->text()->kirbytext() ?>
      <h2>Kunden</h2>
      <div class="col-wrap">
        <div class="col-left"><?= $page->client1()->kirbytext() ?></div>
        <div class="col-right"><?= $page->client2()->kirbytext() ?></div>
      </div>
      <small><?= $page->impressum()->kirbytext() ?></small>
    </div>

    <div class="col-md-6">
      <div class="contact-info">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
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