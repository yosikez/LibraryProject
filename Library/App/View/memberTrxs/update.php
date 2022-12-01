<div class="container main form-wrap mb-5">
    <div class="card mt-5">
    <div class="card-header">
        <h3>Form Data Trx Member</h3>
    </div>
    <?php $dataTrx = $data['user'];?>
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url("/subsmember/update/$dataTrx->id/save");?>" method="POST">
        <div class="form-group">
            <label for="member_id" class="form-label">Nama Member</label>:
            <select name="member_id" id="member_id" class="form-select">
                <?php foreach($data['members'] as $mId):?>
                    <option value="<?= $mId->id?>" <?php echo $mId->id == $data['user']->member_id ? "selected" : "" ?>><?= $mId->name?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="subs_id" class="form-label">Nama Paket</label>:
                <select name="subs_id" id="subs_id" class="form-select">
                <?php foreach($data['subscriptions'] as $subs):?>
                    <option value="<?= $subs->id?>" <?php echo $subs->id == $data['user']->subs_id ? "selected" : "" ?>><?= $subs->title?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group">
            <label for="trx_date" class="form-label">Tanggal Transaksi</label>:
            <input type="date" name="trx_date" id="trx_date" class="form-control" value="<?= $data['user']->trx_date?>">
        </div>
        <div class="form-group">
            <label for="active_at" class="form-label">Aktif Pada</label>:
            <input type="date" name="active_at" id="active_at" class="form-control" value="<?= $data['user']->active_at?>">
        </div>
        <div class="form-group">
            <label for="expire_at" class="form-label">Berakhir Pada</label>:
            <input type="date" name="expire_at" id="expire_at" class="form-control" value="<?= $data['user']->expire_at?>">
        </div>
        <div class="form-group">
            <label for="status" class="form-label">Status</label>:
            <select name="status" id="status" class="form-select">
                <option value="PAID" selected>PAID</option>
                <option value="UNPAID">UNPAID</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total_order" class="form-label">Total Order</label>:
            <input type="number" name="total_order" id="total_order" class="form-control" value="<?= $data['user']->total_order?>">
        </div>
        <div class="form-group">
            <label for="note" class="form-label">Note</label>:
            <input type="text" name="note" id="note" class="form-control" value="<?= $data['user']->note?>">
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
    </form>
    </div>
</div>