<div class="header input">
    <h1>Form Input Data Buku</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/books') ?>">Back</a></button>
</div>
<div class="container isi">
    <div class="card">
        <form class="form" action="<?= \Lib\App\Core\Router::url('/books/add/save'); ?>" method="POST">
            <div class="form-group">
                <label for="isbn" class="form-label">ISBN</label>:
                <input type="text" name="isbn" id="isbn" class="form-control">
            </div>
            <div class="form-group">
                <label for="title" class="form-label">Judul Buku</label>:
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="synopsis" class="form-label">Sinopsis</label>:
                <input type="text" name="synopsis" id="synopsis" class="form-control">
            </div>
            <div class="form-group">
                <label for="author" class="form-label">Author</label>:
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="publisher" class="form-label">Penerbit</label>:
                <input type="text" name="publisher" id="publisher" class="form-control">
            </div>
            <div class="form-group">
                <label for="category" class="form-label">Kategori</label>:
                <input type="text" name="category" id="category" class="form-control">
            </div>
            <div class="form-group">
                <label for="language" class="form-label">Bahasa</label>:
                <input type="text" name="language" id="language" class="form-control">
            </div>
            <input type="submit" value="submit" class="saveButton btn btn-primary mt-3">
        </form>
    </div>
</div>