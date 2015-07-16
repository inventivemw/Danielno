<?php snippet('header') ?>
<div id="about" class="page-wrapper">
  <div class="container">
    <h2><?php echo $page->title()->html() ?></h2>
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <div id="experience">
      <ul>
        <li> 
          <span>&bull;</span>
          <strong>2011 &ndash; 2014</strong><br>
          Communication Designer<br>
          <a href="http://unimelb.edu.au" target="_blank">University of Melbourne</a>
        </li>
        <li> 
          <span>&bull;</span>
          <strong>2014 &ndash; Present</strong><br>
          Web Developer<br>
          <a href="http://esperantomagazine.com" target="_blank">Esperanto Magazine</a>
        </li>
        <li> 
          <span>&bull;</span>
          <strong>2014</strong><br>
          <s>Web Designer<br>
          <a href="http://projectwarehouse.com.au" target="_blank">Project Warehouse</a></s>
        </li>
        <li> 
          <span>&bull;</span>
          <strong>2013 &ndash; 2014</strong><br>
          Bachelor of Visual Communication<br>
          Monash University
        </li>
        <li> 
          <span>&bull;</span>
          <strong>2011 &ndash; 2012</strong><br>
          <s>Bachelor of Design (Multimedia Systems)<br>
          RMIT University</s>
        </li>
        <li> 
          <span>&bull;</span>
          <strong>2009 &ndash; 2010</strong><br>
          Advanced Diploma in Multimedia<br>
          NMIT
        </li>
      </ul>
    </div>
    <?php snippet('footer') ?>
  </div>
</div>