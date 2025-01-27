<?php
class FormModel
{
    public function savedata($name, $firstname, $email, $file, $description)
    {
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