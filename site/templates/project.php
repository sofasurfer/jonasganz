<?php snippet('header') ?>
<div class="container-light p-detail">
  <div class="container-fluid main" role="main">

    <div class="row">

    <div class="col-sm-12 col-md-3 p-fixed">
      <h1 class="p-title"><?= $page->title()->html() ?></h1>
      <p class="intro text">
        → <?= $page->year() ?>
      </p>

      <?= $page->text()->kirbytext() ?>

      <?php
        if( $page->purl() ){
          echo '<div class="p-link">' . $page->purl()->kirbytext() . '</div>';
        }
      ?>

    </div>
    
    <div class="col-sm-12 col-md-9">
      
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      $right = false;
      foreach($page->imglist()->toStructure() as $image): ?>
        <?php if( $image->location() == 'line' ): ?>
          <div class="p-line"></div>
        <?php else: ?>

          <figure class="img-<?= $image->location(); ?> <?= ($right) ? 'right' : 'left'; ?> ">
            <img src="<?= $image->image()->toFile()->url() ?>" class="img-thumbnail" alt="<?= $image->title(); ?>" />
          </figure>

          <?php if ( !$image->title()->empty() ): ?>
            <div class="p-caption"><?= $image->title()->kirbytext(); ?></div>
          <?php endif; ?>

          <?php
          if( $image->location() == 'half' && !$right ){
            $right = true;
          }else if( $image->location() == 'half' ){
            $right = false;
          }
          ?>

        <?php endif; ?>
      <?php endforeach ?>
          
      <?php //snippet('prevnext') ?>

    </div>




  </div>
</div>

<?php snippet('footer') ?>