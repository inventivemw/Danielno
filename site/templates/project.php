<?php snippet('header') ?>

<div class="page-wrapper">
  <div class="container">
    <?php if(($page->vimeo() != "")){?>
      <div class="video-wrapper">
        <iframe src="//player.vimeo.com/video/<?php echo $page->vimeo() ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen width="425" height="240" ></iframe>
      </div>
    <?php } ?>
    <?php foreach($page->images()->sortBy('sort', 'asc') as $project): ?>
      <?php if ((strpos($project->url(), 'featured')==true))
        echo '<div class="thumbnail"><img class="lazy" data-original="'.$project->url().'" alt="'.$page->title().'"></div>';
      ?>
    <?php endforeach ?>
    <div class="clearfix"></div>
    <div id="desc">
      <p class="caption">
        <?php echo $page->caption() ?>
      </p>
      <div class="proj-desc">
        <h2><?php echo $page->title() ?></h2>
        <?php echo kirbytext($page->text()) ?>
        <div class="meta">
          <?php if(($page->casestudy() != ""))
            echo '<p><strong>Case study:</strong> <a target="_blank" href="'.$page->casestudy().'" title="'.$page->title().'">'."View the full case study".'</a> about the project in my journal.</p>';
          ?>
          <?php if(($page->website() != ""))
            echo '<p><strong>URL:</strong> <a target="_blank" href="'.$page->website().'" title="'.$page->title().'">'.$page->title().'</a></p>';
          ?>
        </div>
      </div>
    </div>
    <?php foreach($page->images() as $project): ?>
      <?php if ((strpos($project->url(), '@2x')===false) && (strpos($project->url(), 'thumb')===false) && (strpos($project->url(), 'featured')===false))
        echo '<div class="thumbnail"><img src="'.$project->url().'" alt="'.$page->title().'"></div>';
      ?>
    <?php endforeach ?>
    <div class="clearfix"></div>

    <!-- Project navigation -->
    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
        <div class="prev-button">
          <a href="<?php echo $prev->url() ?>"><i class="glyphicon glyphicon-chevron-left prev"></i><span>Previous</span></a>
        </div>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
        <div class="next-button">
          <a href="<?php echo $next->url() ?>"><span>Next</span><i class="glyphicon glyphicon-chevron-right next"></i></a>
        </div>
      <?php endif ?>
    </nav>
    <?php snippet('footer') ?>
  </div>
</div>