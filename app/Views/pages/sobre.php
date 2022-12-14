<div class="container">

    <p>Conteúdo da sobre.</p>

    <?php
    $texto = 'Mensagem Criptografada!';
    $textoCripto = $cripto->encrypt($texto);
    echo $textoCripto . '<br/><br/>';
    echo $cripto->decrypt($textoCripto) . '<br/><br/>';

    ?>

</div>