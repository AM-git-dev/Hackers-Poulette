<?php
class FormModel
{
    public function savedata($name, $firstname, $email, $file, $description)
    {
        if (empty(trim($_POST['name'])) || empty(trim($_POST['firstname'])) || empty(trim($_POST['email'])) || empty(trim($_POST['description']))) {
            die("Tous les champs sont requis.");

        } else {

        }
        try {
            $bdd = DbConnection::getBdd();
            $query = $bdd->prepare('INSERT INTO hackerspoulette (name, firstname, email, file, description) VALUES(?, ?, ?, ?, ?)');
            $query->execute(array($name, $firstname, $email, $file, $description));


        } catch (exception $e) {
            echo $e->getMessage();
        }
        return $bdd;

    }

}
?>