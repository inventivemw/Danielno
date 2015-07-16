<?php snippet('header') ?>

<section id="journal" class="page-wrapper">
	<div class="container">
		<article>
			<div class="content-body">
			  	<div class="title">
			  		<h1><?php echo $page->title()->html() ?></h1>
			  	</div>
			  	<div class="body">
			  		<p class="lead"><?php echo $page->lead() ?></p>
			  		<?php echo $page->text()->kirbytext() ?>
			  	</div>
			  	<hr>
			  	<footer>
					<ul>
						<li class="date">
							<p><strong><?php echo $page->date('Y') ?></strong></p>
							<?php echo $page->date('d.m') ?>
						</li>
					 	<?php if(($page->tags() != "")){ ?>
		 				<li class="tags">
		 				<p><strong>Tags</strong></p>
		 				<?php foreach($page->tags()->split(',') as $tag): ?>
		 					<?php echo $tag.', ' ?>
		 				<?php endforeach ?>
		 				</li>
		 				<?php } ?>
				 	</ul>	
				</footer>
			</div>
		</article>
		<?php snippet('footer') ?>
	</div>
</section>