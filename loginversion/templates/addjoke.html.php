<h2>Add a question</h2>

<form action="" method="post"> 
<label for="questiontext"><p>Type your question here:</p> </label>
<input type="text" id="questiontext" name="questiontext" required>

<select name="persons">
    <option value="">Select an author</option>
<?php foreach ($persons as $person): ?>
<option value="<?php echo htmlspecialchars($person['id'], ENT_QUOTES, 'UTF-8'); ?>">
<?php echo htmlspecialchars($person['name'], ENT_QUOTES, 'UTF-8'); ?></option>
<?php endforeach;?>
</select> 

<select name="modules">
    <option value="">Select a module</option>
<?php foreach ($modules as $module): ?>
<option value="<?php echo htmlspecialchars($module['id'], ENT_QUOTES, 'UTF-8'); ?>">
<?php echo htmlspecialchars($module['moduleName'], ENT_QUOTES, 'UTF-8'); ?></option>
<?php endforeach;?>
</select>

<input type="submit" name="submit" value="Add">
</form>