<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?= BASE_URL ?>script.js" defer></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>Views/style.css">

    <title>Document</title>
</head>
<body>
<header>
    <img id="logo" src="<?= BASE_URL ?>Views/include/img/OIG1.M5.2SkJJ9MRHJ.jpg" alt="logo de l'entreprise">
</header>
<h1>Hackers Poulette SARL</h1>

    <p class="subtitle">Si vous souhaitez nous contacter remplissez le formulaire suivant : </p>
    <section class="main-container">
<form action ="" method="post"  style="display: flex; flex-direction: column;" novalidate >
    <label for="name">
        <input placeholder="Nom de famille" type="text" minlength="2" maxlength="255" name="name" id="name" required><br>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="firstname">
        <input placeholder="Prénom" type="text" minlength="2" maxlength="255" name="firstname" id="firstname" required><br>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="email">
        <input placeholder="Email" type="email" minlength="2" maxlength="255" name="email" id="email" required><br>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="description">
        <input placeholder="Décris ton problème" type="text" minlength="2" maxlength="1000" name="description" id="description" required ><br>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="file">
        <input type="file"  value='Upload ton fichier'name="file" id="file"> <br>
        <span class="error" aria-live="polite"></span>
    </label>

    <label for="submit" id="submitLabel">
        <input type="submit" value="Envoyer" name="submit" id="submit">

    </label>

</form>
    </section>
</body>
</html>

