<div class="container">
    <form action="/usuarios/login" method="post">
        <div class="form-group">
            <label for="user">User</label>
            <input type="text" name="user" class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <?= csrf_field(); ?>

        <input type="submit" name="submit" value="Login" class="btn btn-primary">

    </form>
</div>