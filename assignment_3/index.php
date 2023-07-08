<?php
$page_title = 'Webprogramming Assignment 3';
$navigation = array(
    'active' => 'News',
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

<div id="news-container"></div>

<script>
//initial fetch
fetch('scripts/read_latest_news.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('news-container').innerHTML = data;
});
setInterval(() => {
    fetch('scripts/read_latest_news.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('news-container').innerHTML = data;
        });
}, 2000); 
</script>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
