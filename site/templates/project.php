<?php snippet('header') ?>
<div class="container-light p-detail">
  <div class="container-fluid main" role="main">

    <div class="row">

    <div class="col-md-3 p-fixed">
      <h1 class="p-title"><?= $page->title()->html() ?></h1>
      <p class="intro text">
        → <?= $page->year() ?>
      </p>

      <?= $page->text()->kirbytext() ?>

      <?php
        if( $page->purl() ){
          echo '<a class="p-link" href="' . $page->purl() . '" target="_blank">' . $page->purl() . '</a>';
        }
      ?>

    </div>
    
    <div class="col-md-9">
      
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      $first = false;
      $right = false;
      foreach($page->imglist()->toStructure() as $image): ?>
        <?php if( $image->location() == 'line' ): ?>
          <div class="p-line"></div>
        <?php else: ?>

          <?php

          $caption = false;
          if( !$image->title()->empty() && $image->location() == 'full' ){
            $first = false;
            $caption = $image->title();
          }else if ( !$image->title()->empty() && $image->location() == 'half' && !$first ){
            $first = true;
            $caption = $image->title();
          }else if ( $image->title()->empty() && $first ){
            $first = false;
            $caption = '&nbsp;';
          }else if ( !$image->title()->empty() && $first ){
            $first = false;
            $caption = $image->title();
          }

          if( !$image->link()->empty() ){
            $caption = '<a href="'.$image->link().'" target="_blank">'.$caption.'</a>';
          }

          ?>

          <figure class="img-<?= $image->location(); ?> <?= ($right) ? 'right' : 'left'; ?> ">
            <img src="<?= $image->image()->toFile()->url() ?>" class="img-thumbnail" alt="<?= $image->title(); ?>" />


            <?php if( !empty($caption) ): ?>
              <div class="caption"><?= $caption; ?></div>
            <?php endif; ?>
          </figure>

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