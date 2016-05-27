<html>
    <?php foreach($articles as $article):?>
        <h1><?=$article['topic']?></h1>
        <i><?=$article['dt']?></i>
        <p><?=$article['text']?></p>
    <?php endforeach ?>
</html>