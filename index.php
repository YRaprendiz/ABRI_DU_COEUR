<?php
// Chargement automatique des classes
spl_autoload_register(function ($class) {
    include 'app/' . str_replace('\\', '/', $class) . '.php';
});

// Analyse de l'URL
$request = $_SERVER['REQUEST_URI'];

// Définir les routes
if ($request == '/home' || $request == '/') {
    $controller = new Controllers\HomeController();
    $controller->index();
} elseif (preg_match('/\/products\/(\d+)/', $request, $matches)) {
    $controller = new Controllers\ProductController();
    $controller->show($matches[1]);
} else {
    // Page 404 si la route n'existe pas
    echo "404 - Page non trouvée";
}
?>
