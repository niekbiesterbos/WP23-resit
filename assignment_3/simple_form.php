<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = array(
    'active' => 'Simple Form',
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

<div class="row">
    <div class="col-lg-12">
    <?php
    $provinces = array(
        "Arnhem" => "Gelderland",
        "Assen" => "Drenthe",
        "Middelburg" => "Zeeland",
        "Lelystad" => "Flevoland",
        "Leeuwarden" => "Friesland",
        "Groningen" => "Groningen",
        "Haarlem" => "North Holland",
        "The Hague" => "South Holland",
        "Utrecht" => "Utrecht",
        "Eindhoven" => "North Brabant",
        "Maastricht" => "Limburg",
        "Zwolle" => "Overijssel",
        "Amsterdam" => "the capital of the Netherlands"
    );

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!empty($_GET['name'])) {
            $name = $_GET['name'];
            echo "<h1>Welcome {$name}!</h1>";
        }

        if (!empty($_GET['place'])) {
            $place = $_GET['place'];

            if (array_key_exists($place, $provinces)) {
                echo "<p>You're from the capital of {$provinces[$place]}!</p>";
            } else {
                echo "<p>You're from {$place}!</p>";
            }
        }
    }
    ?>


        <form method="GET" action="simple_form.php">
            <div class="form-group">
                <label for="name">Name: </label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="place">Place: </label>
                <input type="text" class="form-control" id="place" name="place">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
