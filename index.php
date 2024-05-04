<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>STRONG PASSWORD GENERATOR</h1>
    <form method="GET">
        <label>Dimmi quanto deve essere lunga la tua password</label>
        <input type="text" name="length">
        <button type="submit">invia</button>
    </form>

    <?php
        $passLength;
        if (isset($_GET['length'])) {
            if (is_numeric($_GET['length']) && intval($_GET['length']) >= 4) {
                $passLength = intval($_GET['length']);
            } else {
                echo "<p>Devi inserire un numero che sia maggiore di 3.</p>";
            }
        }
        var_dump($passLength);
?> 

</body>
</html>