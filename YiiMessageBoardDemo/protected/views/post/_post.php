<blockquote class="post-content">
    <p><?php echo $post->content; ?></p>
</blockquote>
<div class="post-author alert alert-info clearfix">
    <div class="pull-left">Posted by <?php echo $post->author; ?></div>
    <div class="pull-right">Posted on <?php echo $post->date; ?></div>
</div>
<div class="clearfix"><a href="<?php echo '/post/' . $post->id; ?>" class="btn btn-primary btn-xs pull-right">View post page</a></div>