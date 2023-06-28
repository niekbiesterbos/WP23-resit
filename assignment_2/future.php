<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = array(
    'active' => 'Home',
    'items' => array(
        'Home' => 'index.php',
        'Links' => 'links.php',
        'News' => 'news.php',
        'Future' => 'future.php'
    )
);
include __DIR__ . '/tpl/head.php';
/* Body */
include __DIR__ . '/tpl/body-start.php';
?>
<div class="col-md-12">
    <h1>Dit is de future pagina</h1> 
</div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>
