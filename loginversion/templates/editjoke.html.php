<form action="" method="post">
    <input type="hidden" name="questionid" value="<?=$question['id'];?>">
    <label for="questiontext">Type your question here:</label>
    <textarea id="questiontext" name="questiontext" rows="3"
    cols="40"><?=$question['questiontext']?></textarea>
    <input type="submit" value="Save">
</form>