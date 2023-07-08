<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = array(
    'active' => 'Add news item',
    'items' => array(
        'News' => './index.php',
        'Add news item' => './news_add.php',
        'Leap Year' => './leapyear.php',
        'Simple Form' => './simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

<form method="post" action="scripts/add_item.php">
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
include __DIR__ . '/tpl/body_end.php';
?>
