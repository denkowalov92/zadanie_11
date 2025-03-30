<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "<h2>Vložili ste:</h2>";
    echo "<p>Užívateľské meno: $username</p>";
    echo "<p>Heslo: " . str_repeat("*", strlen($password)) . "</p>";
} else {
    echo "<p>Chyba: údaje neboli odoslané.</p>";
}
?>
<a href="form.php">Spat</a>
