<div class="container">

    <div class="card mt-5">

        <div class="card-header d-flex justify-content-between">
            <h1>Data Subscriptions</h1>
            <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/subscriptions/add') ?>">Add</a></button>
        </div>

        <div class="table-wra p-3">
            <table class="table p-3">
                <tr>
                    <td>No</td>
                    <td>Nama Paket</td>
                    <td>Durasi (bulan)</td>
                    <td>Harga</td>
                    <td>Status</td>
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
                        <td><?= $dt->title ?></td>
                        <td><?= $dt->month ?></td>
                        <td><?= $dt->price ?></td>
                        <td><?= $dt->isActive == 1 ? "Active" : "Non-Active"?></td>
                        <td><?= $dt->created_at ?></td>
            
                        <td>
                            <a href="<?= Router::url('/subscriptions/update') . "/$dt->id" ?>" class="btn btn-warning">Update</a>
                            <a href="<?= Router::url('/subscriptions/delete') . "/$dt->id" ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>