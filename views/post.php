<html>
    <h1><?=$article['topic']?></h1>
    <i><?=$article['dt']?></i>
    <p><?=$article['text']?></p>
    <a href=<?="post.php?del_id={$article['id']}"?>>Delete post</a>
</html>