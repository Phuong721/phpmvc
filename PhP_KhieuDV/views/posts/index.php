<?php
require "views/posts/header.php";
?>


<div class="row">
    <div class="col-lg-6 col-sm-12">
        <h2>Posts</h2>
        <table class="table-striped">
            <tr>
                <th>ID &ensp; </th>
                <th>Thumb &ensp; </th>
                <th>Title &ensp;</th>
                <th>&emsp; &emsp; &emsp; &emsp; Action &ensp;</th>

            </tr>
            <?php
            foreach ($posts as $post){
                ?>
                <tr>
                    <td><?php $id = $post->id;echo $id ?></td>
                    <td><?php $description = $post->description;echo $description  ?></td>
                    <td><?php $title = $post->title;echo $title ?></td>
                    <td>
                        <a class="btn btn-default" href="index.php?controller=posts&action=update&id=<?php $id = $post->id;echo $id; ?>">Update</a>

                        <a class="btn btn-default" href="index.php?controller=posts&action=delete&id=<?php $id = $post->id;echo $id; ?>">Delete</a>

                        <a class="btn btn-default" href="index.php?controller=posts&action=showPost&id=<?php $id = $post->id;echo $id; ?>">Info</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>
