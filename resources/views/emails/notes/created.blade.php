<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Récapitulatif de votre note</title>
</head>
<body>
    <h1>Bonjour {{ $note->user->name }},</h1>

    <p>Votre note a bien été créée. Voici le récapitulatif :</p>

    <p><strong>Titre :</strong> {{ $note->title }}</p>

    <p><strong>Contenu :</strong></p>
    <p>{!! nl2br(e($note->content)) !!}</p>

    <p><strong>Date de création :</strong> {{ $note->created_at->format('d/m/Y H:i') }}</p>

    <p>Merci d'utiliser notre application.</p>
</body>
</html>
