<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/links.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">WP23</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                foreach ($navigation['items'] as $item => $url) {
                    $active = $navigation['active'] === $item ? 'active' : '';
                    echo "<li class=\"nav-item {$active}\"><a class=\"nav-link\" href=\"{$url}\">{$item}</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>
</header>
