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
}