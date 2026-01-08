<!DOCTYPE html>
<html lang="en">

<head>
    <?php require __DIR__ . '/head.php'; ?>
</head>

<body>

        <?php require __DIR__ . '/navbar.php'; ?>

    <main>
            <?php require $viewPath; ?>
    </main>

        <?php require __DIR__ . '/footer.php'; ?>
        <?php require __DIR__ . '/scripts.php'; ?>

</body>

</html>