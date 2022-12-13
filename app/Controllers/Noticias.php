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
            'noticias' => $model->getNoticias()
        ];



        echo view('templates/header', $data);
        echo view('pages/noticias', $data);
        echo view('templates/footer', $data);
    }

    public function item($id = NULL)
    {

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
}
