<?php

$text = trim($_GET['text']) ?? '';
$censored = trim($_GET['censored']) ?? '';
$text_censored = str_replace($censored, '***', $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>

    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main>
        <section id='form-php'>
            <div class="container">
                <h1 class='text-center my-5'>Form php</h1>
                <div class="form-text">
                    <h3>Testo Form</h3>
                    <p><?= $text?></p>
                    <h5>Lunghezza testo</h5>
                    <p><?= strlen($text) ?></p>
                </div>
                <div class="form-censored">
                    <h5>Testo da censurare</h5>
                    <p><?= $censored ?></p>
                </div>
                <div class="text-censored">
                    <h3>Testo censurato</h3>
                    <p><?= $text_censored ?></p>
                    <p><?= strlen($text_censored) ?></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>