<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur mon portfolio</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Ajouter un Projet</a>
    </div>
</body>
</html>
