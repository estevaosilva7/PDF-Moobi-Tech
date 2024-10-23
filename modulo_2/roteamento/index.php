<?php

// Autoload das classes do diretório "controllers"
spl_autoload_register(function ($class) {
    $file = __DIR__ . "/controllers/$class.php";
    if (file_exists($file)) {
        include $file;
    } else {
        throw new Exception("Classe '$class' não encontrada.");
    }
});

// Captura o caminho da URL
$path = isset($_GET['path']) ? explode('/', $_GET['path']) : ['empresa', 'index'];

// Extrai o controlador e o método
$controllerName = ucfirst($path[0]) . 'Controller'; // Ex: PessoaController
$method = $path[1] ?? 'index'; // Ex: index

try {
    // Verifica se o controlador existe
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
    } else {
        throw new Exception("Controlador '$controllerName' não encontrado.");
    }

    // Verifica se o método existe no controlador
    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        throw new Exception("Método '$method' não encontrado.");
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}




var_dump($path);
var_dump($method);
var_dump($controllerName);
