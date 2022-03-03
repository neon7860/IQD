<p><?=$totalJokes?> questions have been submitted to the Internet Joke Database.</p>

<?php foreach ($questions as $question): ?>
    <blockquote>
        <p>
    <?php echo htmlspecialchars($question['questiontext'], ENT_QUOTES, 'UTF-8') ?>
    <br /> <?php echo htmlspecialchars($question['moduleName'], ENT_QUOTES, 'UTF-8') ?>

    (by <a href="mailto:<?php echo htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php echo htmlspecialchars($question['name'], ENT_QUOTES, 'UTF-8'); ?></a>)

    <a href="editjoke.php?id=<?=$question['id']?>">Edit</a>

<form action="deletejoke.php" method="post">
        <input type="hidden" name="id" value="<?=$question['id']?>">
        <input type="submit" value="Delete">
</form>

        </p>
    </blockquote>
    <?php endforeach;?>