<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Projet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Ajouter un Projet</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
        <label for="technologies">Technologies :</label>
        <input type="text" name="technologies" id="technologies" required>
        <label for="image_url">URL de l'image :</label>
        <input type="url" name="image_url" id="image_url">
        <label for="project_url">URL du projet :</label>
        <input type="url" name="project_url" id="project_url">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
