<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="\Hackers_Poulette\script.js" defer></script>

    <title>Document</title>
</head>
<body>
<h1>Hackers Poulette SARL</h1>

<p>Si vous souhaitez vous inscrire remplissez le formulaire suivant : </p>

<form action method="post"  style="display: flex; flex-direction: column;" novalidate >
    <label for="name"> Nom :
        <input type="text" minlength="2" maxlength="255" name="name" id="name" required>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="firstname"> Prénom :
        <input type="text" minlength="2" maxlength="255" name="firstname" id="firstname" required>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="email"> E-mail :
        <input type="email" minlength="2" maxlength="255" name="email" id="email" required>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="file"> A link to your file :
        <input type="file" name="file" id="file">
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="description"> Description :
        <input type="text" minlength="2" maxlength="1000" name="description" id="description" required >
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="submit">
        <input type="submit" value="Envoyer" name="submit" id="submit">

    </label>

</form>
</body>
</html>

