<?php
require "header.php";
?>

<form action="index.php?controller=posts&action=update" method="post">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo "$post->id" ?>" readonly>
    </div>
    <div class="form-group">
        <label for="name">Title: </label>
        <input type="text" name="title" class="form-control" id="title" value="<?php echo $post->title ?>" required>
    </div>
    <div class="form-group">
        <label for="Description">Description: </label>
        <input type="text" name="description" class="form-control" id="description" value="<?php echo $post->description ?>" required>
    </div>
    <div class="form-group">
        <label for="name">Image: </label>
        <input type="text" name="image" class="form-control" id="image" value="<?php echo $post->image ?>" required>
    </div>
    <div class="form-group">
        <label for="Description">Status: </label>
        <input type="text" name="status" class="form-control" id="status" value="<?php echo $post->status ?>" required>
    </div>
    <div class="form-group">
        <label for="name">Date: </label>
        <input type="text" name="date" class="form-control" id="date" value="<?php echo $post->date ?>" required>
    </div>
    <button type="submit" class="btn btn-default" name="update_post" id="update_post">Update post</button>
</form>


