<div class="header">
    <h1>Login</h1>
</div>
<div class="isi">
    <div class="card mt-5">
        <form class="form p-3" action="<?= \Lib\App\Core\Router::url('/login/post') ?>" method="post">
            <div class="form-group">
                <label for="username" class="form-label">Username</label>:
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>:
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" value="Login" class="saveButton btn btn-primary mt-3">
        </form>
    </div>
</div>