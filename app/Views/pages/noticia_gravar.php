<div class="container">
    <div class="alert-danger p-3 my-3">
        <?= \Config\Services::validation()->listerrors(); ?>
    </div>

    <form action="<?= '/noticias/gravar/' ?>" method="post">
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" value="">
        </div>
        <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao"></textarea>
        </div>
        <input type="hidden" name="id" value="">
        <input type="submit" name="submit" class="btn btn-primary" value="Salvar">
    </form>
</div>