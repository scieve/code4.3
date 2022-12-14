<div class="container">
    <?php
    // $atributos = [
    //     'class' => 'usuarios',
    //     'id'    => 'meuFormulario'
    // ];
    // $hidden = [
    //     'usuario' => 'Emerson',
    //     'user_id'    => '123'
    // ];
    // echo form_open('/usuarios/gravar', $atributos, $hidden);
    // $data = [
    //     'name' => 'Camila',
    //     'email'    => 'meuemail@meuemail.com',
    //     'url' => 'https://meusite.com.br'
    // ];
    // echo form_hidden($data);
    // $data = [
    //     'type' => 'text',
    //     'name'    => 'email',
    //     'id' => 'email',
    //     'value'    => 'meuemail@meuemail.com',
    //     'class' => 'minhaclasse',


    // ];

    // $data = [
    //     'type' => 'text',
    //     'name'    => 'email',
    //     'id' => 'email',
    //     'value'    => 'meuemail@meuemail.com',
    //     'class' => 'minhaclasse',


    // ];

    // echo form_input($data);
    // echo form_close();


    $user = [
        'type'  => 'text',
        'name'  => 'user',
        'id'    => 'user',
        'class' => 'form-control',
    ];
    $senha = [
        'type'  => 'password',
        'name'  => 'senha',
        'id'    => 'senha',
        'class' => 'form-control',
    ];
    $btn = [
        'type'      => 'submit',
        'name'      => 'btn',
        'class'     => 'btn btn-primary my-3',
        'content'   => 'Gravar',
    ];

    echo form_open('/usuarios/gravar') .
        form_label('Usuarios', 'user') .
        form_input($user) .
        form_label('Senha', 'senha') .
        form_input($senha) .
        form_button($btn) .
        form_close();

    ?>
</div>