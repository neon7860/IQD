<h2>Modules List</h2>

<p><?=$totalModules?> modules have been added to the Internet Question Database.</p>

<?php foreach ($modules as $module): ?>
    <blockquote>
        <p>
     <?php echo htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8') ?>


    <!-- <a href="editjoke.php?id=<?=$module['id']?>">Edit</a> -->

<form action="deletemodule.php" method="post">
        <input type="hidden" name="id" value="<?=$module['id']?>">
        <input type="submit" value="Delete">
</form> 
        </p>
    </blockquote>
    <?php endforeach;?>