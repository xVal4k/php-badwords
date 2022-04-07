<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <!-- Style link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $text = 'Subjective idealism, a philosophy based on the premise that nothing exists except minds and spirits and their perceptions or ideas. A person experiences material things, but their existence is not independent of the perceiving mind; material things are thus mere perceptions. The reality of the outside world is contingent on a knower. The 18th-century Anglo-Irish philosopher George Berkeley succinctly formulated his fundamental proposition thus: Esse est percipi (“To be is to be perceived”). In its more extreme forms, subjective idealism tends toward solipsism, which holds that I alone exist.';
    $censured_word = $_GET['censured_word'];
    ?>
    <div>
        <h1>Solipsism / Subjective idealism</h1>
        <p style="font-size: 20px"><?= $text ?></p>
        <p>Text length: <span style="font-weight: bold; font-style: italic"> <?= strlen($text) ?> characters </span></p>
        <p>Censured word: <span style="font-weight: bold; color: red"> <?= $censured_word ?></span></p>
        <p style="font-size: 20px">Text censured: <br><?= str_replace($censured_word, '<span style="color: red">***</span>', $text) ?></p>
    </div>
</body>

</html>