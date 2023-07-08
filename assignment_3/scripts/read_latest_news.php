<?php
$articles = json_decode(file_get_contents('../data/articles.json'), true);

$articles = array_reverse($articles);

foreach ($articles as $article) {
    echo '<div class="article">';
    echo '<h2>' . htmlspecialchars($article['title']) . '</h2>';
    echo '<p>' . htmlspecialchars($article['content']) . '</p>';
    echo '<p>Last edited: ' . htmlspecialchars($article['editDate']) . '</p>';
    echo '<a href="news_edit.php?id=' . $article['id'] . '" class="btn btn-primary">Edit</a>';

    echo '<form method="POST" action="scripts/news_remove.php" style="display: inline;">';
    echo '<input type="hidden" name="id" value="' . $article['id'] . '">';
    echo '<button type="submit" class="btn btn-danger">Remove</button>';
    echo '</form>';

    echo '</div>';
}

?>
