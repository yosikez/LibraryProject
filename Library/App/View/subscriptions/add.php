<div class="container main form-wrap">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Form Input Data Subscriptions</h3>
        </div>
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url('/subscriptions/add/save');?>" method="POST">
        <div class="form-group">
            <label for="title" class="form-label">Nama Paket</label>:
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="month" class="form-label">Durasi (Bulan)</label>:
            <input type="text" name="month" id="month" class="form-control">
        </div>
        <div class="form-group">
            <label for="price" class="form-label">Harga</label>:
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="isActive" class="form-label">Status</label>:
                <select name="isActive" id="isActive" class="form-select">
                <option value="1" selected>Active</option>
                <option value="0">Non-active</option>
            </select>
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
    </form>
    </div>
</div>