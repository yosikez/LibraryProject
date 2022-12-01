<div class="header">
    <h1>Input Data Librarian</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/librarians') ?>">Back</a></button>
</div>
<div class="container isi">
    <div class="card">
        <form class="form p-3" action="<?= \Lib\App\Core\Router::url('/librarians/add/save'); ?>" method="POST">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>:
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="name">Nama</label>:
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>:
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">password</label>:
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="avatar">avatar</label>:
                <input type="text" name="avatar" id="avatar" class="form-control">
            </div>
            <input type="submit" value="submit" class="saveButton btn btn-primary mt-2" class="form-control">
        </form>
    </div>
</div>