<div class="header">
    <h1>Update Data Buku</h1>
    <button class="btn btn-success"><a class="text-white text-decoration-none" href="<?= \Lib\App\Core\Router::url('/books') ?>">Back</a></button>
</div>
<div class="container isi">
    <div class="card mt-5">
    <form class="form p-3" action="<?= \Lib\App\Core\Router::url("/books/update/$data->id/save");?>" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $data->id?>">
        <div class="form-group">
            <label for="isbn" class="form-label">ISBN</label>:
            <input type="text" name="isbn" id="isbn" value="<?= $data->isbn?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Judul Buku</label>:
            <input type="text" name="title" id="title" value="<?= $data->title?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="synopsis" class="form-label">Sinopsis</label>:
            <input type="text" name="synopsis" id="synopsis" value="<?= $data->synopsis?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="author" class="form-label">Author</label>:
            <input type="text" name="author" id="author" value="<?= $data->author?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="publisher" class="form-label">Penerbit</label>:
            <input type="text" name="publisher" id="publisher" value="<?= $data->publisher?>" class="form-control">
        </div> 
        <div class="form-group">
            <label for="category" class="form-label">Kategori</label>:
            <input type="text" name="category" id="category" value="<?= $data->category?>" class="form-control">
        </div>
        <div class="form-group" class="form-label">
            <label for="language">Bahasa</label>:
            <input type="text" name="language" id="language" value="<?= $data->language?>" class="form-control">
        </div>
        <input type="submit" value="submit" class="saveButton btn btn-primary mt-5">
    </form>
    </div>
</div>