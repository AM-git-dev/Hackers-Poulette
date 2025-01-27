<?php

require 'Models/FormModel.php';

class FormController {

    public static function handleRequest() {

        if(isset($_POST["submit"])) {

            $name = htmlspecialchars($_POST["name"]) ;
            $firstname =  htmlspecialchars($_POST["firstname"]);
            $email = htmlspecialchars($_POST["email"]);
            $file = htmlspecialchars($_POST["file"]) ?? null;
            $description = htmlspecialchars($_POST["description"]);

            $model = new FormModel();
            $model->savedata($name, $firstname, $email, $file, $description);
        }
        include 'Views/form.php';
    }
}