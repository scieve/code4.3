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
CRITICAL - 2022-12-13 10:02:54 --> Undefined index: titulo
#0 /home/scieve/code4/app/Controllers/Noticias.php(37): CodeIgniter\Debug\Exceptions->errorHandler()
#1 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Noticias->item()
#2 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#3 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#4 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#6 {main}
CRITICAL - 2022-12-13 11:33:55 --> Undefined offset: 0
#0 /home/scieve/code4/app/Controllers/Noticias.php(100): CodeIgniter\Debug\Exceptions->errorHandler()
#1 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Noticias->editar()
#2 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#3 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#4 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#5 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#6 {main}
CRITICAL - 2022-12-13 12:13:28 --> pg_query(): Query failed: ERROR:  column &quot;updated_at&quot; of relation &quot;noticias&quot; does not exist
LINE 1: ...s&quot; (&quot;titulo&quot;, &quot;autor&quot;, &quot;descricao&quot;, &quot;created_at&quot;, &quot;updated_a...
                                                             ^
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler()
#1 /home/scieve/code4/system/Database/Postgre/Connection.php(194): pg_query()
#2 /home/scieve/code4/system/Database/BaseConnection.php(738): CodeIgniter\Database\Postgre\Connection->execute()
#3 /home/scieve/code4/system/Database/BaseConnection.php(666): CodeIgniter\Database\BaseConnection->simpleQuery()
#4 /home/scieve/code4/system/Database/BaseBuilder.php(2166): CodeIgniter\Database\BaseConnection->query()
#5 /home/scieve/code4/system/Model.php(713): CodeIgniter\Database\BaseBuilder->insert()
#6 /home/scieve/code4/system/Model.php(541): CodeIgniter\Model->insert()
#7 /home/scieve/code4/app/Controllers/Noticias.php(74): CodeIgniter\Model->save()
#8 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Noticias->gravar()
#9 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#10 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#11 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#12 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#13 {main}
CRITICAL - 2022-12-13 12:43:56 --> Undefined variable: sfsf
#0 /home/scieve/code4/app/Models/UsuariosModel.php(18): CodeIgniter\Debug\Exceptions->errorHandler()
#1 /home/scieve/code4/app/Controllers/Usuarios.php(27): App\Models\UsuariosModel->getUsuarios()
#2 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Usuarios->login()
#3 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#4 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#5 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#6 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#7 {main}
