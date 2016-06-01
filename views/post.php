<h1><?=$post->topic?></h1>
<i><?=$post->dt?></i>
<p><?=$post->text?></p>
<a href=<?="post.php?del_id={$post->id}"?>>Delete post</a>