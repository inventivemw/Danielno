<?php snippet('header') ?>

<section id="journal" class="page-wrapper">
	<div class="container">
		<?php foreach($page->children()->visible()->flip() as $article): ?>
		<article>
			<div class="content-body">
				<h1><a href="<?php echo $article->url(); ?>"><?php echo $article->title()->html() ?></a></h1>
				<div class="body">
					<p><?php echo $article->text()->kirbytext() ?></p>
				</div>
				<footer>
					<ul>
						<li class="date">
							<p><strong><?php echo $article->date('Y') ?></strong></p>
							<?php echo $article->date('d.m') ?>
						</li>
					 	<?php if(($article->tags() != "")){ ?>
		 				<li class="tags">
		 				<p><strong>Tags</strong></p>
		 				<?php foreach($article->tags()->split(',') as $tag): ?>
		 					<?php echo $tag.', ' ?>
		 				<?php endforeach ?>
		 				</li>
		 				<?php } ?>
				 	</ul>	
				</footer>
			</div>
		</article>
		<?php endforeach ?>
		<?php snippet('footer') ?>
	</div>
</section>
