<h2> Question List</h2>

<p><?=$totalJokes?> questions have been submitted to the Internet Question Database.</p>

<?php foreach ($questions as $question): ?>
    <blockquote>
        <p>
    <?php echo htmlspecialchars($question['questiontext'], ENT_QUOTES, 'UTF-8') ?>
    <br /> <?php echo htmlspecialchars($question['moduleName'], ENT_QUOTES, 'UTF-8') ?> 

    (by <a href="mailto:<?php echo htmlspecialchars($question['email'], ENT_QUOTES, 'UTF-8'); ?>">
    <?php echo htmlspecialchars($question['name'], ENT_QUOTES, 'UTF-8'); ?></a>)
    
    </td>
            </p>
    <img id="Images" height="200px" src="images/<?php echo htmlspecialchars($question['image'],
    ENT_QUOTES, 'UTF-8'); ?>" 
    alt="<?php echo htmlspecialchars($question['alt_text'], ENT_QUOTES, 'UTF-8'); ?>" 
    title="<?php echo htmlspecialchars($question['alt_text'], ENT_QUOTES, 'UTF-8'); ?>"
    /></td>


    <!-- <a href="editjoke.php?id=<?=$question['id']?>">Edit</a> -->

<!-- <form action="deletejoke.php" method="post">
        <input type="hidden" name="id" value="<?=$question['id']?>">
        <input type="submit" value="Delete">
</form> -->
        </p>
    </blockquote>
    <?php endforeach;?>