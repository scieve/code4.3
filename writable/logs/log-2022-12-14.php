<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-14 07:36:39 --> syntax error, unexpected '}'
#0 /home/scieve/code4/system/Autoloader/Autoloader.php(296): CodeIgniter\Autoloader\Autoloader->requireFile()
#1 /home/scieve/code4/system/Autoloader/Autoloader.php(258): CodeIgniter\Autoloader\Autoloader->loadInNamespace()
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass()
#3 [internal function]: spl_autoload_call()
#4 /home/scieve/code4/system/CodeIgniter.php(801): class_exists()
#5 /home/scieve/code4/system/CodeIgniter.php(328): CodeIgniter\CodeIgniter->startController()
#6 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#7 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#9 {main}
CRITICAL - 2022-12-14 07:59:34 --> Imagem não é uma regra válida.
#0 /home/scieve/code4/system/Validation/Validation.php(287): CodeIgniter\Validation\Exceptions\ValidationException::forRuleNotFound()
#1 /home/scieve/code4/system/Validation/Validation.php(175): CodeIgniter\Validation\Validation->processRules()
#2 /home/scieve/code4/system/Controller.php(220): CodeIgniter\Validation\Validation->run()
#3 /home/scieve/code4/app/Controllers/Noticias.php(98): CodeIgniter\Controller->validate()
#4 /home/scieve/code4/system/CodeIgniter.php(847): App\Controllers\Noticias->gravar()
#5 /home/scieve/code4/system/CodeIgniter.php(338): CodeIgniter\CodeIgniter->runController()
#6 /home/scieve/code4/system/CodeIgniter.php(246): CodeIgniter\CodeIgniter->handleRequest()
#7 /home/scieve/code4/public/index.php(45): CodeIgniter\CodeIgniter->run()
#8 /home/scieve/code4/system/Commands/Server/rewrite.php(34): require_once('/home/scieve/co...')
#9 {main}
