<?php
require "header.php";
?>

<div class="row">
    <div class="col-lg-6 col-sm-12">
        <h2>Posts</h2>
        <table class="table-striped">
            <tr>
                <th>ID &ensp; </th>
                <th>Title &ensp; </th>
                <th>Description &ensp;</th>
                <th>Image</th>
                <th>Status &ensp;</th>
                <th>Date</th>

            </tr>

                <tr>
                    <td><?php echo "$post->id" ?></td>
                    <td><?php echo "$post->title" ?></td>
                    <td><?php echo "$post->description" ?></td>
                    <td><?php echo "$post->image" ?></td>
                    <td><?php echo "$post->status" ?></td>
                    <td><?php echo "$post->date" ?></td>

                </tr>

        </table>
    </div>
</div>
