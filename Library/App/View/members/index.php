<div class="container-fluid">

    <div class="card mt-5">

        <div class="card-header d-flex justify-content-between">
            <h1>Data Member</h1>
            <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/members/add') ?>">Add</a></button>
        </div>

        <div class="table-wra p-3">
            <table class="table p-3">
                <tr>
                    <td>No</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Telp</td>
                    <td>Alamat</td>
                    <td>Tempat Lahir</td>
                    <td>Tanggal Lahir</td>
                    <td>Gender</td>
                    <td>Negara</td>
                    <td>Kewarganegaraan</td>
                    <td>Status</td>
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
                        <td><?= $dt->nik ?></td>
                        <td><?= $dt->name ?></td>
                        <td><?= $dt->phone ?></td>
                        <td><?= $dt->address ?></td>
                        <td><?= $dt->bornplace ?></td>
                        <td><?= $dt->born_date ?></td>
                        <td><?= $dt->gender ?></td>
                        <td><?= $dt->country ?></td>
                        <td><?= $dt->nationality ?></td>
                        <td><?php echo $dt->isActive==1 ? "Active" : "Non-Active";?></td>
                        <td><?= $dt->created_at ?></td>
            
                        <td>
                            <a href="<?= Router::url('/members/update') . "/$dt->id" ?>" class="btn btn-warning">Update</a>
                            <a href="<?= Router::url('/members/delete') . "/$dt->id" ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>