<?php
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    // Méthode pour trouver un utilisateur par ID
    public static function find($id) {
        // Connecter à la base de données et récupérer l'utilisateur
        $sql = "SELECT * FROM Utilisateur WHERE id_utilisateur = :id";
        // Exécution de la requête SQL...
        return $user;
    }
}
?>

<!--_______________________________________________________________________________________________________________________________________________________________________________
<?php
class User {
    public static function find($id) {
        $db = Database::getConnection();
        $stmt = $db->prepare('SELECT * FROM Utilisateur WHERE id_utilisateur = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
?>
-->