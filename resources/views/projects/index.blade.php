<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Mon Portfolio</h1>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Ajouter un Projet</a>
    @foreach ($projects as $project)
        <div>
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
            <p>{{ $project->technologies }}</p>
            <a href="{{ route('projects.show', $project->id) }}">Voir les détails</a>
        </div>
    @endforeach
</body>
</html>
