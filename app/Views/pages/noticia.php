<div class="container">

    <div class="card my-3">
        <div class="card-body">
            <img src="/img/noticias/<?= $noticias['img'] ?>" alt="" class="img-fluid col-md-6 offset-md-3">
            <div class="py-4">
                <?= $noticias['descricao'] ?>
            </div>
        </div>

        <div class="card-footer">
            <b>Autor: </b><?= $noticias['autor'] ?>
        </div>
    </div>


    <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>

</div>