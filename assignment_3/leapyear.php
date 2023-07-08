<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = array(
    'active' => 'Leap Year',
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
    <div class="col-md-12">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['place'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $place = $_POST['place'];

                echo "<h1>Welcome {$name}!</h1>";
                echo "<p>Nice, you're living in {$place}</p>";
                echo "<p>The next 5 leap years this will be your age:</p>";

                // calculate next 5 leap years
                $currentYear = date("Y");
                $leapYears = [];

                while (count($leapYears) < 5) {
                    $currentYear++;
                    if ($currentYear % 4 == 0 && ($currentYear % 100 != 0 || $currentYear % 400 == 0)) {
                        $leapYears[] = $currentYear;
                    }
                }

                echo "<table class='table'>";
                echo "<thead><tr><th>Year</th><th>Age</th></tr></thead>";
                echo "<tbody>";
                foreach ($leapYears as $year) {
                    echo "<tr><td>{$year}</td><td>" . ($age + $year - date("Y")) . "</td></tr>";
                }
                echo "</tbody></table>";
            }
        }
        ?>

        <form id="leapYearForm" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" class="form-control" id="age" name="age" min="1" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your age.</div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter a valid email.</div>
            </div>

            <div class="form-group">
                <label for="place">Place:</label>
                <input type="text" class="form-control" id="place" name="place" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your place of residence.</div>
            </div>

            <button type="button" id="submitForm" class="btn btn-primary">Show me!</button>

        </form>
    </div>
</div>

<script src="scripts/leapyear.js"></script>

<?php
include __DIR__ . '/tpl/body_end.php';
?>
