<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = array(
    'active' => 'Edit news item',
    'items' => array(
        'News' => './index.php',
        'Add news item' => './news_add.php',
        'Leap Year' => './leapyear.php',
        'Simple Form' => './simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';


$id = $_GET['id'];
$articles = json_decode(file_get_contents('../data/articles.json'), true);
$article = $articles[$id];
?>

<form method="post" action="scripts/edit_item.php">
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $id; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($article['title']); ?>">
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content"><?php echo htmlspecialchars($article['content']); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
