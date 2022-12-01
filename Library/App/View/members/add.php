<div class="container main form-wrap mb-5">
    <div class="card mt-5">
    <div class="card-header">
        <h3>Form Data Member</h3>
    </div>
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url('/members/add/save');?>" method="POST">
        <div class="form-group">
            <label for="nik" class="form-label">NIK</label>:
            <input type="text" name="nik" id="nik"  class="form-control">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Nama</label>:
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Telp</label>:
            <input type="text" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="address" class="form-label">Alamat</label>:
            <input type="text" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="bornplace" class="form-label">Tempat Lahir</label>:
            <input type="text" name="bornplace" id="bornplace" class="form-control">
        </div>
        <div class="form-group">
            <label for="born_date" class="form-label">Tanggal Lahir</label>:
            <input type="date" name="born_date" id="born_date" class="form-control">
        </div> 
        <div class="form-group">
            <label for="gender" class="form-label">Gender</label>:
            <select name="gender" id="gender"  class="form-select">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
                <option value="O">Lainnya</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country" class="form-label">Negara</label>:
            <input type="text" name="country" id="country" class="form-control">
        </div>
        <div class="form-group">
            <label for="nationality" class="form-label">Kewarganegaraan</label>:
            <select name="nationality" id="nationality" class="form-select">
                <option value="WNI" selected>WNI</option>
                <option value="WNA">WNA</option>
            </select>
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