<?php
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$articles = json_decode(file_get_contents('../data/articles.json'), true);

foreach ($articles as $index => $article) {
    if ($article['id'] == $id) {
        $articles[$index] = [
            'title' => $title,
            'content' => $content,
            'editDate' => date('Y-m-d H:i:s'),
            'id' => $id
        ];
        break;
    }
}

file_put_contents('../data/articles.json', json_encode(array_values($articles)));
header('Location: ../news_edit.php');
exit;
?>