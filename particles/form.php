<?php include 'particles/header.php'; ?>

<main>
    <h2>Prihlasovaci formular</h2>
    <form action="process_form.php" method="POST">
        <label for="username">Meno:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Poslat</button>
    </form>
</main>

<?php include 'particles/footer.php'; ?>
