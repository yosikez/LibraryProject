<nav class="navbar">
    <div class="nav-brand">
        <i class='bx bx-library bx-sm'></i>
        <a href="<?= Lib\App\Core\Router::url('/librarians') ?>">Library</a>
    </div>
    <div class="nav-actions">
        <?php if(@$_SESSION['auth']) { ?>
        <a href="<?= Lib\App\Core\Router::url('/logout') ?>">Logout</a>
        <?php } else { ?>
            <a href="<?= Lib\App\Core\Router::url('/login') ?>">Login</a>
        <?php } ?>
    </div>
</nav>
