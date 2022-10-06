<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercise.css">
    <title>Exercises</title>
</head>
<body class="exercise">
    <header class="header">
        <h1>Course PHP</h1>
        <h2>Exercise View</h2>
    </header>
    <nav class="navigation">
        <a href="#" class="green">Unformatted</a>
        <a href="index.php" class="red">Back</a>
    </nav>
    <main class="main">
        <div class="content">
        <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
        </div>
    </main>
    <footer class="footer">
        COD3R
    </footer>
</body>
</html>