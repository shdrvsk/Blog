<html>
    <?php foreach($articles as $article):?>
        <h1><?=$article['topic']?></h1>
        <i><?=$article['dt']?></i>
        <p><?=$article['text']?></p>
        <a href=<?="index.php?id={$article['id']}"?>>More...</a>
    <?php endforeach ?>
</html>