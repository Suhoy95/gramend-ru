<?php
require_once("common.php");

// Здесь началась Валидация формы на сервере
$form1_submit = $forms["form1"]["submit_name"];
if (!isset($_POST[$form1_submit])) {
    header("Location: form1.php");
    exit;
}

// Считаем количество баллов с правильных ответов 1-ой формы
foreach ($forms['form1']['questions'] as $question) {
    if (!isset($_POST[$question['name']])) {
        continue;
    }

    if($_POST[$question['name']] == $question["right_answer"]) {
        // Каждый вопрос с первой страницы оценивается в 1 балл.
        $score += 1;
    }
}

$title = "Вторая форма - Задание 1";
require_once("header.php");
?>
<h1>Тело формы 2</h1>

<?php
render_form($forms["form2"], "form3.php", $score);
require_once("footer.php");
?>