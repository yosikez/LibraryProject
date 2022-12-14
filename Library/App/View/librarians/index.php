<div class="header">
    <h1>Data Librarian</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/librarians/add') ?>">Add</a></button>
</div>
<div class="container isi">
    <div class="card">


        <div class="table-wra p-3">
            <table class="table p-3">
                <tr>
                    <td>No</td>
                    <td>Username</td>
                    <td>Nama</td>
                    <td>Email</td>
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
                        <td><?= $dt->username ?></td>
                        <td><?= $dt->name ?></td>
                        <td><?= $dt->email ?></td>
                        <td><?= $dt->created_at ?></td>
            
                        <td>
                            <a href="<?= Router::url('/librarians/update') . "/$dt->id" ?>" class="btn btn-warning">Update</a>
                            <a href="<?= Router::url('/librarians/delete') . "/$dt->id" ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>