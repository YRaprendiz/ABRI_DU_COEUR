<?php
class Product {
    public $id;
    public $name;
    public $description;
    public $price;

    // Méthode pour trouver un produit par ID
    public static function find($id) {
        $sql = "SELECT * FROM Produit WHERE id_produit = :id";
        // Exécution de la requête SQL...
        return $product;
    }
}
?>
