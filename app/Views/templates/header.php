<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo CodeIgniter 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <h1><?= $title; ?></h1>
            </div>
            <div class="col-md-3">
            <?php if($session->get('logged_in')): ?>
                <p>Bem-vindo ao sistema, <?php $session->get('user') ?> ! <a href="/usuarios/logout">Sair</a></p>
            <?php else: ?>
                <a href="/login" class="btn btn-primary">Entrar no Sistema</a>
            <?php endif; ?>
            </div>
        </div>
    </div>