<?php

$projects = page('projects')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of projects:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $projects = $projects->limit($limit);

?>

<div class="row grid">
  <?php $ic = 0; ?>
  <?php foreach($projects as $project): ?>

    <div class="col-sm-6 col-md-4 showcase-thumb">
        <a href="<?= $project->url() ?>" class="showcase-link">
          <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
            <img src="<?= $image->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="img-thumbnail" />
          <?php endif ?>
          <div class="showcase-caption">
            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
            <p>→ <?= $project->year() ?></p>
          </div>
        </a>
    </div>
    <?php if( $ic == 1 ): ?>
      <div class="col-sm-6 col-md-4 showcase-thumb float-right">
          <div class="text-right"><?= $page->text()->kirbytext() ?></div>
      </div>
    <?php endif; ?>
    <?php $ic++; ?>
  <?php endforeach ?>

</div>