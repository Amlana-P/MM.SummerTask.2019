<h2><?= $title ?></h2>
<?php foreach($articles as $articles) : ?>
	<h3><?php echo $articles['title']; ?> </h3>
	<div class="row">
		<div class="col-md-3">
			<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $articles['post_image']; ?>">
		</div>
		<div class="col-md-9">
			<small class="post-date">Posted on : <?php echo $articles['created_at']; ?> in <strong><?php echo $articles['name']; ?></strong><br>
			</small>
			<?php echo word_limiter($articles['body'],80); ?>
			<br><br>
			<P><a class="btn btn-info" href="<?php echo site_url('/articles/'.$articles['slug']); ?>">Read More</a></P>
		</div>
	</div>

	<?php endforeach; ?>