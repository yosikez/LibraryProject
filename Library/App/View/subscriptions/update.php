<div class="header">
    <h1>Update Data Subscriptions</h1>
    <button><a href="<?= \Lib\App\Core\Router::url('/subscriptions') ?>">Back</a></button>
</div>

<div class="isi">
    <div class="card">
     
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url("/subscriptions/update/$data->id/save");?>" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $data->id?>">
        <div class="form-group">
            <label for="title">Nama Paket</label>:
            <input type="text" name="title" id="title" value="<?= $data->title?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="month">Durasi (Bulan)</label>:
            <input type="text" name="month" id="month" value="<?= $data->month?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>:
            <input type="text" name="price" id="price" value="<?= $data->price?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="isActive">Status</label>:
                <select name="isActive" id="isActive" class="form-select">
                <option value="1" <?= $data->isActive == 1 ? "selected" : ""?>>Active</option>
                <option value="0" <?= $data->isActive == 0 ? "selected" : ""?>>Non-active</option>
            </select>
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
    </form>
    </div>
</div>