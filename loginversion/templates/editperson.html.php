<form action="" method="post">
    <input type="hidden" name="personid" value="<?=$person['id'];?>">
    <label for="name">Type a name here:</label>
    <textarea id="name" name="name" rows="3"
    cols="40"><?=$person['name']?></textarea>
    <input type="submit" value="Save">
</form>