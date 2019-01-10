<?php snippet('header') ?>
<div class="container-light">
  <div class="container-fluid main" role="main">

    <div class="row">
    
    <div class="col-md-9">
      
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


    <div class="col-md-3">
      <h1 class="p-title"><?= $page->title()->html() ?></h1>
      <p class="intro text">
        → <?= $page->year() ?>
      </p>

      <?= $page->text()->kirbytext() ?>

      <?php
        if( $page->purl() ){
          echo '<a href="' . $page->purl() . '" target="_blank">' . $page->purl() . '</a>';
        }
      ?>

    </div>

  </div>
</div>

<?php snippet('footer') ?>