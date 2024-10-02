<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class=" text-center">PHP Badwords</h1>
        <form action="censura.php" method="POST">
            <div class="mb-3">
                <textarea name="paragraph" rows="5" class="form-control" placeholder="Inserisci un paragrafo" required></textarea>
            </div>
            <div class="mb-3">
                <input type="text" name="badword" class="form-control" placeholder="Inserisci una parola da censurare" required>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</body>
</html>
