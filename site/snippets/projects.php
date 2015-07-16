<div class="page-wrapper">
  <div class="container">
    <?php foreach(page('projects')->children()->visible()->limit(15) as $project): ?>
    <?php
        $grid = $project->grid();
        switch ($grid) {
        case 'full':
          $grid = 'grid-full';
          break;
        case 'two-thirds':
          $grid = 'grid-twothirds';
          break; 
        case 'half':
          $grid = 'grid-half';
          break;
        case 'third':
          $grid = 'grid-third';
          break;
        case 'quarter':
          $grid = 'grid-quarter';
          break;
        case 'tall':
          $grid = 'grid-tall';
          break;
        default:
          $grid = 'grid-third';
        }
    ?>

      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <span class="item thumbnail <?php echo $grid ?>">
        <a href="<?php echo $project->url() ?>">
          <span class="title"><?php echo html($project->title()) ?></span>
          <img class="lazy" data-original="<?php echo $image->url() ?>" alt="<?php echo html($project->title()) ?>">
        </a>
      </span>
      <?php endif ?>
    <?php endforeach ?>
  </ul>
  <?php snippet('footer') ?>
</div>