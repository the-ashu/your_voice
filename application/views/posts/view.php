<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br>
<div class="row">
    <div class="col-md-3">
        <img class="post-thumb" src="<?php echo site_url();?>/../assets/images/posts/<?php echo $post['post_image'];?>">
    </div>
    <div class="col col-md-9">
        <small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br>
        <?php echo $post['body']; ?><br><br>

    </div>
</div>
<hr>
<a class="btn btn-success pull-right" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>
<?php echo form_open('/posts/delete/'.$post['id']);?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>
