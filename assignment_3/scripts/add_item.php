<?php
$title = $_POST['title'];
$content = $_POST['content'];

$articles = json_decode(file_get_contents('../data/articles.json'), true);

$articles[] = [
    'title' => $title,
    'content' => $content,
    'editDate' => date('Y-m-d H:i:s'),
    'id' => random_int(1, 1000) * random_int(0, 1000)
];

file_put_contents('../data/articles.json', json_encode($articles));
header('Location: ../news_add.php');
exit;
?>
