<div class="container">
    <?php if (!empty($noticias)  && is_array($noticias)) : ?>
        <?php foreach ($noticias as $noticias_item) : ?>
            <div class="card my-5">
                <div class="card-body">
                    <h3><?= $noticias_item['titulo'] ?></h3>
                    <p><?= $noticias_item['descricao'] ?></p>
                </div>

                <div class="card-footer">
                    <a href="<?= 'noticias/' . $noticias_item['id'] ?>" class="btn btn-success">Saiba mais</a>
                    <a href="<?= 'noticias/editar/' . $noticias_item['id'] ?>" class="btn btn-warning">Editar</a>
                    <a href="<?= 'noticias/excluir/' . $noticias_item['id'] ?>" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        <?php endforeach; ?>

    <?php else : ?>

        <h3>Sem notícias</h3>
        <p>Não existe nenhuma notícia cadastrada no sistema.</p>

    <?php endif ?>



</div>