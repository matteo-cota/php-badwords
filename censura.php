<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati Censura</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <?php
        // Recupera i dati dal form
        $paragraph = $_POST['paragraph'];
        $badword = $_POST['badword'];

        // Stampa il paragrafo e la sua lunghezza
        echo "<h4>Paragrafo originale:</h4><p>$paragraph</p>";
        echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";

        // Sostituisce la parola da censurare con ***
        $censoredParagraph = str_replace($badword, '***', $paragraph);

        // Stampa il paragrafo censurato e la sua nuova lunghezza
        echo "<h4>Paragrafo censurato:</h4><p>$censoredParagraph</p>";
        echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri</p>";
        ?>
    </div>
</body>
</html>
