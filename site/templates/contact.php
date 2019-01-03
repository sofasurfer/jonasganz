<?php snippet('header') ?>
<div class="container-dark">
  <div class="container-fluid main" role="main">

    <div class="row">

    <div class="col-md-6">
      <?= $page->text()->kirbytext() ?>
    </div>

    <div class="col-md-6">
      
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" class="img-thumbnail" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
      <?= $page->intro() ?>

      <?php //snippet('prevnext') ?>

    </div>

  </div>
</div>

<?php snippet('footer') ?>