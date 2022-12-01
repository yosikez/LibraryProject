<div class="header">
    <h1>Update Data Member</h1>
    <button><a href="<?= \Lib\App\Core\Router::url('/members') ?>">Back</a></button>
</div>
<div class="isi">
    <div class="card mt-5">
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url("/members/update/$data->id/save");?>" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $data->id?>">
        <div class="form-group">
            <label for="nik" class="form-label">NIK</label>:
            <input type="text" name="nik" id="nik" value="<?= $data->nik?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Nama</label>:
            <input type="text" name="name" id="name" value="<?= $data->name?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Telp</label>:
            <input type="text" name="phone" id="phone" value="<?= $data->phone?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Alamat</label>:
            <input type="text" name="address" id="address" value="<?= $data->address?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="bornplace" class="form-label">Tempat Lahir</label>:
            <input type="text" name="bornplace" id="bornplace" value="<?= $data->bornplace?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="born_date" class="form-label">Tanggal Lahir</label>:
            <input type="date" name="born_date" id="born_date" value="<?= $data->born_date?>" class="form-control">
        </div> 
        <div class="form-group">
            <label for="gender" class="form-label">Gender</label>:
            <select name="gender" id="gender" class="form-select">
                <option value="L" <?php echo $data->gender=='L' ? "selected": ""?>>Laki-Laki</option>
                <option value="P" <?php echo $data->gender=='P' ? "selected": ""?>>Perempuan</option>
                <option value="O" <?php echo $data->gender=='O' ? "selected": ""?>>Lainnya</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country" class="form-label">Negara</label>:
            <input type="text" name="country" id="country" value="<?= $data->country?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="nationality" class="form-label">Kewarganegaraan</label>:
            <select name="nationality" id="nationality" class="form-select">
                <option value="WNI" <?php echo $data->nationality=='WNI' ? "selected": ""?>>WNI</option>
                <option value="WNA" <?php echo $data->nationality=='WNA' ? "selected": ""?>>WNA</option>
            </select>
        </div>
        <div class="form-group">
            <label for="isActive" class="form-label">Status</label>:
                <select name="isActive" id="isActive" class="form-select">
                <option value="1" <?php echo $data->isActive==1 ? "selected": ""?>>Active</option>
                <option value="0" <?php echo $data->isActive==0 ? "selected": ""?>>Non-active</option>
            </select>
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
    </form>
    </div>
</div>