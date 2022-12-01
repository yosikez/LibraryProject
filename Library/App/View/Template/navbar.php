<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                <li class="nav-item">
                    <a class="nav-link" href="<?= Lib\App\Core\Router::url('/librarians') ?>">Petugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Lib\App\Core\Router::url('/subscriptions') ?>">Subcriptions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Lib\App\Core\Router::url('/books') ?>">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Lib\App\Core\Router::url('/members') ?>">Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Lib\App\Core\Router::url('/subsmember') ?>">Subs Member</a>
                </li>
                
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= Lib\App\Core\Router::url('/../assets/img/53571-ai.png') ?>" alt="" width="40px">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= Lib\App\Core\Router::url('/login') ?>">Login</a></li>
                        <li><a class="dropdown-item" href="<?= Lib\App\Core\Router::url('/logout') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>