<?php
require "header.php";
?>

<form action="index.php?controller=posts&action=create" method="post">

    <div class="form-group">
        <label for="name">Title: </label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
    </div>
    <div class="form-group">
        <label for="birthyear">Description: </label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Description" required>
    </div>
    <div class="form-group">
        <label for="description">Image: </label>
        <input type="file" name="image" class="form-control" id="image" placeholder="Image" required>
    </div>
    <div class="form-group">
        <label for="description">Status: </label>
        <input type="text" name="status" class="form-control" id="status" placeholder="Status" required>
    </div>
    <div class="form-group">
        <label for="description">Date: </label>
        <input type="text" name="date" class="form-control" id="date" placeholder="Date" required>
    </div>

    <button type="submit" class="btn btn-default" name="insert_post" id="insert_post">Insert new Post</button>
</form>
