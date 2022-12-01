<div class="container">

    <div class="card mt-5">

        <div class="card-header d-flex justify-content-between">
            <h1>Data Buku</h1>
            <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/books/add') ?>">Add</a></button>
        </div>

        <div class="table-wra p-3">
            <table class="table p-3">
                <tr>
                    <td>No</td>
                    <td>ISBN</td>
                    <td>Judul</td>
                    <td>Sinopsis</td>
                    <td>Author</td>
                    <td>Penerbit</td>
                    <td>Kategori</td>
                    <td>Bahasa</td>
                    <td>Created At</td>
                    <td>Action</td>
                </tr>
                <?php

                use Lib\App\Core\Router;

                $no = 1;
                foreach ($data as $dt) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $dt->isbn ?></td>
                        <td><?= $dt->title ?></td>
                        <td><?= $dt->synopsis ?></td>
                        <td><?= $dt->author ?></td>
                        <td><?= $dt->publisher ?></td>
                        <td><?= $dt->category ?></td>
                        <td><?= $dt->language ?></td>
                        <td><?= $dt->created_at ?></td>
            
                        <td>
                            <a href="<?= Router::url('/books/update') . "/$dt->id" ?>" class="btn btn-warning">Update</a>
                            <a href="<?= Router::url('/books/delete') . "/$dt->id" ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>