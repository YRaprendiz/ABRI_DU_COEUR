<?php
class ProductController {
    public function show($id) {
        // Récupère le produit via le modèle
        $product = Product::find($id);
        include '../Views/products/show.php';
    }
}
?>
