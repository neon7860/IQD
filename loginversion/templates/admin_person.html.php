<h2>Author List</h2>

<p><?=$totalPersons?> authors have been added to the Internet Question Database.</p>

<?php foreach ($persons as $person): ?>
    <blockquote>
        <p>
     <?php echo htmlspecialchars($person['name'], ENT_QUOTES, 'UTF-8') ?>


    <a href="editperson.php?id=<?=$person['id']?>">Edit</a> 

<form action="deleteperson.php" method="post">
        <input type="hidden" name="id" value="<?=$person['id']?>">
        <input type="submit" value="Delete">
</form> 
        </p>
    </blockquote>
    <?php endforeach;?>
