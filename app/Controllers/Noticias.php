<?php

namespace App\Controllers;

use App\Models\NoticiasModel;
use CodeIgniter\Controller;

class Noticias extends Controller
{
    public function index()
    {

        $model = new NoticiasModel();

        $data = [
            'title' => 'Últimas Notícias',
            'noticias' => $model->getNoticias(),
            'session'  => \Config\Services::session()
        ];



        echo view('templates/header', $data);
        echo view('pages/noticias', $data);
        echo view('templates/footer', $data);
    }

    public function item($id = NULL)
    {

        $data['session'] = \Config\Services::session();
        $model = new NoticiasModel();

        $data['noticias'] = $model->getNoticias($id);

        if (empty($data['noticias'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possível encontrar a notícia com id: ' . $id);
        }


        $data['title'] = $data['noticias']['titulo'];


        echo view('templates/header', $data);
        echo view('pages/noticia', $data);
        echo view('templates/footer', $data);
    }

    public function inserir()
    {
        $data['session'] = \Config\Services::session();
        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }


        helper('form');
        $data['title'] = 'Inserir Notícias';


        echo view('templates/header', $data);
        echo view('pages/noticia_gravar');
        echo view('templates/footer');
    }

    public function gravar()
    {

        $data['session'] = \Config\Services::session();
        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }
        helper('form');
        $model = new NoticiasModel();
        
        if ($this->validate([
            'titulo'        => ['label' => 'Título', 'rules' => 'required|min_length[3]|max_length[100]'],
            'autor '        => ['label' => 'Autor', 'rules' => 'required|min_length[3]|max_length[100]'],
            'descricao '    => ['label' => 'Descricao', 'rules' => 'required|min_length[3]']
        ])) {

            $id = $this->request->getVar('id'); 
            $titulo = $this->request->getVar('titulo');
            $autor = $this->request->getVar('autor');
            $descricao = $this->request->getVar('descricao');

            if(!$img->isValid()){
                $model->save([
                    'id' => $id,
                    'titulo' => $titulo,
                    'autor' => $autor,
                    'descricao' => $descricao,
                    'img' => $img,
                ]);
                return redirect('noticias');

            }else{
                $validaIMG = $this->validate([
                    'label' => 'Imagem',
                    'img' => [
                        'uploaded[img]',
                        'mine_in[img,image/jpg,image/jpeg,image/gif,image/png]',
                        'max_size[img,4096]',
                    ],
                ])
            }


            
        } else {
            $data['title'] = 'Erro ao gravar a Notícia';
            echo view('templates/header', $data);
            echo view('pages/noticia_gravar');
            echo view('templates/footer');
        }
    }

    public function editar($id = NULL)
    {

        $model = new NoticiasModel();

        $data = [
            'title'     => 'Editar Notícias',
            'noticias'  => $model->getNoticias($id),
            'session'   => \Config\Services::session(),
        ];

        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }


        if (empty($data['noticias'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não é possível encontrar a notícia com id: ' . $id);
        }


        $data['title'] = $data['noticias']['titulo'];


        echo view('templates/header', $data);
        echo view('pages/noticia_gravar', $data);
        echo view('templates/footer');
    }

    public function excluir($id = NULL)
    {

        $data['session'] = \Config\Services::session();
        if (!$data['session']->get('logged_in')) {
            return redirect('login');
        }
        $model = new NoticiasModel();
        $model->delete($id);
        return redirect('noticias');
    }

    
}
