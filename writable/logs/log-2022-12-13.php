<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-13 09:00:56 --> Class 'codeIgniter\Exceptions\PageNotFoundException' not found
#0 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Pages->mostrar()
#1 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#2 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#3 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#4 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#5 {main}
CRITICAL - 2022-12-13 09:49:04 --> Arquivo inválido: pages/noticias.php
#0 /home/scieve/code4/system/View/View.php(224): CodeIgniter\Exceptions\FrameworkException::forInvalidFile()
#1 /home/scieve/code4/system/Common.php(176): CodeIgniter\View\View->render()
#2 /home/scieve/code4/app/Controllers/Noticias.php(21): view()
#3 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Noticias->index()
#4 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#5 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#6 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#7 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#8 {main}
