<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = array(
    'active' => 'Links',
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
    <h1>Linkjes</h1>
    <ul id="linkList">
        <li><a href="http://google.com">Google</a></li>
        <li><a href="http://facebook.com">Facebook</a></li>
    </ul>
    <button id="toggleLinks">Verberg linkjes</button>
    <input type="text" id="linkName" placeholder="Link naam">
    <input type="text" id="linkURL" placeholder="URL">
    <button id="addLink">Voeg link toe</button>
    <button id="deleteMode">Delete modus</button>
</div>
<?php
include __DIR__ . '/tpl/body-end.php';
/* Footer */
include __DIR__ . '/tpl/footer.php';
?>
