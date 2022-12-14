<div class="header">
    <h1>Data Trx Member</h1>
    <button><a href="<?= \Lib\App\Core\Router::url('/subsmember/add') ?>">Add</a></button>
</div>
<div class="isi">
    <div class="card">
        <table class="table p-3">
            <tr>
                <td>No</td>
                <td>Nama Member</td>
                <td>Nama Paket</td>
                <td>Tanggal Transaksi</td>
                <td>Aktif Pada</td>
                <td>Berakhir Pada</td>
                <td>Status</td>
                <td>Total Order</td>
                <td>Note</td>
                <td>Create At</td>
                <td>Action</td>
            </tr>
            <?php

            use Lib\App\Core\Router;

            $no = 1;
            foreach ($data as $dt) :
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $dt->memberName ?></td>
                    <td><?= $dt->subsTitle ?></td>
                    <td><?= $dt->trx_date ?></td>
                    <td><?= $dt->active_at ?></td>
                    <td><?= $dt->expire_at ?></td>
                    <td><?= $dt->status ?></td>
                    <td><?= $dt->total_order ?></td>
                    <td><?= $dt->note ?></td>
                    <td><?= $dt->created_at ?></td>
                    <td><?= $dt->created_at ?></td>

                    <td>
                        <a href="<?= Router::url('/subsmember/update') . "/$dt->id" ?>" class="btn btn-warning">Update</a>
                        <a href="<?= Router::url('/subsmember/delete') . "/$dt->id" ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>