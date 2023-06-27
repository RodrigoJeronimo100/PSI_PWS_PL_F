<h2 class="text-left top-space">Chapter Index</h2>
<h2 class="top-space"></h2>

<h1><?= $book->name ?></h1>
<h3><?= $book->isbn ?></h3>
<h3><?= $book->genre->name ?></h3>

<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th>
            </th><th><h3>User Actions</h3></th></thead>
            <tbody>
            <?php foreach ($book->chapters as $chapter) { ?>
                <tr>
                    <td><?=$chapter->id?></td>
                    <td><?=$chapter->name?></td>
                    <td>
                        <a href="index.php?c=chapter&a=show&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=chapter&a=edit&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=chapter&a=delete&id=<?=$book->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Chapter</h3>
        <p>
            <a href="index.php?c=chapter&a=create&id=<?= $book->id ?>" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->

