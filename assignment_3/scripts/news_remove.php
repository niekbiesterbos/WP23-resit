<?php
$id = $_POST['id'];

$articles = json_decode(file_get_contents('../data/articles.json'), true);

foreach ($articles as $index => $article) {
    if ($article['id'] == $id) {
        unset($articles[$index]);
        break;
    }
}

file_put_contents('../data/articles.json', json_encode(array_values($articles)));
header('Location: ../index.php');
exit;
?>
