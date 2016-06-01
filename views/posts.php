<html>
    <?php foreach($posts as $post):?>
        <h1><?=$post->topic?></h1>
        <i><?=$post->dt?></i>
        <p><?=$post->text?></p>
        <a href=<?="index.php?id=$post->id"?>>More...</a>
    <?php endforeach ?>
</html>