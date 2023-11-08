<?php
$score = 0;

// Пример на примање на одговори и проверка на точните одговори
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question1 = $_POST["question1"];
    $question2 = $_POST["question2"];
    $question3 = $_POST["question3"];
    $question4 = isset($_POST["question4"]) ? $_POST["question4"] : [];
    $question5 = $_POST["question5"];
    $question6 = $_POST["question6"];
    $question7 = $_POST["question7"];
    $question8 = $_POST["question8"];
    $question9 = $_POST["question9"];
    $question10 = $_POST["question10"];

    // Проверка на точните одговори и доделување на поени
    if ($question1 == "dinamicni") {
        $score += 1;
    }

    if ($question2 == "veb-server") {
        $score += 1;
    }

    if ($question3 == "$") {
        $score += 1;
    }

    $correct = ["12", "0"];
    if (count(array_intersect($question4, $correct)) == count($correct)) {
        $score += 1;
    }

    if ($question5 == 28) {
        $score += 1;
    }

    if ($question6 == 5) {
        $score += 1;
    }

    if ($question7 == "var_dump") {
        $score += 1;
    }
    if ($question8 == "//rezultat, /*rezultat*/, /**rezultat*/") {
        $score += 1;
    }
    if ($question9 == "both") {
        $score += 1;
    }

    if ($question10 == "7&21") {
        $score += 1;
    }
    // Дополнителни проверки и доделување на поени за прашање 5

    // Пример: Проверка дали текстот во прашање 5 содржи некој збор
    if (strpos($question5, "збор") !== false) {
        $score += 1;
    }
}

// Испис на резултатите
echo "Вкупно освоени поени: $score";
?>

<!-- Додадете линк за обидете се повторно до претходната страна -->
<a href="index.html">Обидете се повторно</a>
