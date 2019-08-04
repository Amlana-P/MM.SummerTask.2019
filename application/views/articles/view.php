<h2><?php echo $article['title']; ?></h2>	
<small class="post-date">Posted on: <?php echo $article['created_at']; ?></small><br>
<div class="post-thumb">
	<img class="post-thumb" src="<?php echo site_url(); ?>/assets/images/posts/<?php echo $article['post_image']; ?>" >
	<br><br>
	
</div>
<div class="article-body">
	<?php echo $article['body']; ?>	
</div>

<?php if($this->session->userdata('user_id') == $article['user_id']): ?>
<hr>
<a href="<?php echo base_url(); ?>articles/edit/<?php echo $article['slug']; ?>" class="btn btn-success pull-left">Edit</a>

<?php echo form_open('/articles/delete/'.$article['id']); ?>
<input type="submit" value="delete" class="btn btn-danger pull-right">
</form>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<h5><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h5>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<?php echo form_close(); ?>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$article['id']); ?>
<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
	<label>Body</label>
	<textarea name="body" class="form-control"></textarea>
</div>

<button class="btn btn-primary" type="submit" >Submit</button>
</form>
<?php echo form_close(); ?>

