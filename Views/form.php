<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<h1>Hackers Poulette SARL</h1>

<p>Si vous souhaitez vous inscrire remplissez le formulaire suivant : </p>

<form action method="post"  style="display: flex; flex-direction: column;" >
    <label for="name"> Nom :
        <input type="text" minlength="2" maxlength="255" name="name" required>
    </label>

    <label for="firstname"> Prénom :
        <input type="text" minlength="2" maxlength="255" name="firstname" required>
    </label>

    <label for="email"> E-mail :
        <input type="email" minlength="2" maxlength="255" name="email" required>
    </label>

    <label for="file"> A link to your file :
        <input type="file" name="file">
    </label>

    <label for="description"> Description :
        <input type="text" minlength="2" maxlength="1000" name="description" required >
    </label>

    <label for="submit">
        <input type="submit" value="Envoyer" name="submit">
    </label>

</form>
</body>
</html>

