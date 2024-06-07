<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>{{ $project->technologies }}</p>
    @if ($project->image_url)
        <img src="{{ $project->image_url }}" alt="Image du projet">
    @endif
    @if ($project->project_url)
        <a href="{{ $project->project_url }}">Voir le projet</a>
    @endif
</body>
</html>
