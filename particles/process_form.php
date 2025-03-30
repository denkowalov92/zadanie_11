<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));
?>
  <!DOCTYPE html>
  <html lang='sk'>
  <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Výsledok formulára</title>
      <link rel='stylesheet' href='css/style.css'>
      <link rel="stylesheet" href="css/process_form.css"> <!-- Pripojenie druhého CSS súboru -->
  </head>
  <body>
      <div class="container">
          <h2>Odoslali ste:</h2>
          <p><strong>Vaše meno:</strong> <?php echo $name; ?></p>
          <p><strong>Váš email:</strong> <?php echo $email; ?></p>
          <p><strong>Správa:</strong> <?php echo $message; ?></p>
          <a href='contact.php'>Späť</a>
      </div>
  </body>
  </html>
<?php
} else {
    echo "<p>Chyba: Údaje neboli odoslané správne.</p>";
}
?>