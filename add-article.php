<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once './components/head.php' ?>
  <link rel="stylesheet" href="./public/css/add-article.css">
  <title>Créer un article</title>
</head>

<body>
  <div class="container">
    <?php require_once './components/header.php' ?>
    <div class="content">
        <div class="block p-20 form-container">
            <h1>Écrire un article</h1>
            <form action="/add-article.php" method="POST">
                <div class="form-control">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title">
                    <!-- <p class="text-error"></p> -->
                </div>
                <div class="form-control">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image">
                    <!-- <p class="text-error"></p> -->
                </div>
                <div class="form-control">
                    <label for="category">Catégorie</label>
                    <select name="category" id="category">
                        <option value="technology">Technologie</option>
                        <option value="technology">Nature</option>
                        <option value="technology">Politique</option>
                    </select>
                    <!-- <p class="text-error"></p> -->
                </div>
                <div class="form-control">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="content"></textarea>
                    <!-- <p class="text-error"></p> -->
                </div>
                <div class="form-action">
                    <a href="/" class="btn btn-secondary" type="button">Annuler</a>
                    <button class="btn btn-primary" type="button">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once './components/footer.php' ?>
  </div>
</body>

</html>