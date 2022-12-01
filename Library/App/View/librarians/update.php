<div class="header">
    <h1>Update Data Librarian</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/librarians') ?>">Back</a></button>
</div>
<div class="container isi">
<div class="card">
<form class="form p-3" action="<?= \Lib\App\Core\Router::url("/librarians/update/$data->id/save");?>" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $data->id?>">
        <div class="form-group">
            <label for="username" class="form-label">username</label>:
            <input type="text" name="username" id="username" value="<?= $data->username?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Nama</label>:
            <input type="text" name="name" id="name" value="<?= $data->name?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>:
            <input type="email" name="email" id="email" value="<?= $data->email?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="avatar" class="form-label">avatar</label>:
            <input type="text" name="avatar" id="avatar" value="<?= $data->avatar?>" class="form-control">
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
    </form>
    </div>    
</div>