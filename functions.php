
<?php
$passLength;
if (isset($_GET['length'])) {
    if (is_numeric($_GET['length']) && intval($_GET['length']) >= 4) {
        $passLength = intval($_GET['length']);
        echo "<p>La tua password è: " . generatePass($passLength) . "</p>";
    } else {
        echo "<p>Devi inserire un numero che sia maggiore di 3.</p>";
    }
};

function  generatePass($length) {
    $password= "";
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&()*+,-./:;<=>?@[]^_{|}~";
    $charsLength = strlen($chars);
    for ($i=0; $i < $length; $i++) {
        $password .= $chars[rand(0, $charsLength - 1)];
        }
    return $password;
};
$password = generatePass($passLength);
?> 