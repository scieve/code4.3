<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use CodeIgniter\Controller;

class Usuarios extends BaseController
{
    public function index()
    {

        $data['session'] = \Config\Services::session();

        $data['title'] = 'Login';

        echo view('templates/header', $data);
        echo view('login_page');
        echo view('templates/footer');
    }

    public function criar()
    {
        $data['session'] = \Config\Services::session();
        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }

        // helper('form');

        $data['title'] = 'Criar Usuário';

        echo view('templates/header', $data);
        echo view('criar_usuario');
        echo view('templates/footer');
    }

    public function gravar()
    {

        $data['session'] = \Config\Services::session();
        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }
        $model = new UsuariosModel();
        $user = $this->request->getVar('user');
        $senha = $this->request->getVar('senha');

        $senhaCripto = md5($senha);

        $model->save([
            'user' => $user,
            'senha' => $senhaCripto,
        ]);
        return redirect('login');

        // if ($this->validate([
        //     'titulo'        => ['label' => 'Título', 'rules' => 'required|min_length[3]|max_length[100]'],
        //     'autor '        => ['label' => 'Autor', 'rules' => 'required|min_length[3]|max_length[100]'],
        //     'descricao '    => ['label' => 'Descricao', 'rules' => 'required|min_length[3]']
        // ])) {

        //     $id = $this->request->getVar('id');
        //     $titulo = $this->request->getVar('titulo');
        //     $autor = $this->request->getVar('autor');
        //     $descricao = $this->request->getVar('descricao');
        //     $img = $this->request->getFile('img');

        //     if (!$img->isValid()) {
        //         $model->save([
        //             'id' => $id,
        //             'titulo' => $titulo,
        //             'autor' => $autor,
        //             'descricao' => $descricao,
        //         ]);
        //         return redirect('noticias');
        //     } else {
        //         $validaIMG = $this->validate([
        //             'img' => [
        //                 'uploaded[img]',
        //                 'mime_in[img,image/jpg,image/jpeg,image/gif,image/png]',
        //                 'max_size[img,4096]',
        //             ],
        //         ]);

        //         if ($validaIMG) {
        //             $novoNome = $img->getRandomName();
        //             $img->move('img/noticias', $novoNome);

        //             $model->save([
        //                 'id' => $id,
        //                 'titulo' => $titulo,
        //                 'autor' => $autor,
        //                 'descricao' => $descricao,
        //                 'img' => $novoNome,
        //             ]);
        //             return redirect('noticias');
        //         } else {
        //             $data['title'] = 'Erro ao gravar a Notícia';
        //             echo view('templates/header', $data);
        //             echo view('pages/noticia_gravar');
        //             echo view('templates/footer');
        //         }
        //     }
        // } else {
        //     $data['title'] = 'Erro ao gravar a Notícia';
        //     echo view('templates/header', $data);
        //     echo view('pages/noticia_gravar');
        //     echo view('templates/footer');
        // }
    }

    public function login()
    {
        $model =  new UsuariosModel();

        $user = $this->request->getVar('user');
        $senha = $this->request->getVar('senha');

        $data['usuarios'] = $model->getUsuarios($user, $senha);
        $data['session'] = \Config\Services::session();



        if (empty($data['usuarios'])) {
            return redirect('login');
        } else {
            $sessionData = [
                'user'  => $user,
                'logged_in' => TRUE
            ];

            $data['session']->set($sessionData);
            return redirect('noticias');
        }
    }

    public function logout()
    {
        $data['session'] = \Config\Services::session();
        $data['session']->destroy();
        return redirect('login');
    }
}
