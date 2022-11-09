<?php
    require_once("common.php");

    $form3_submit = $forms["form3"]["submit_name"];
    if (!isset($_POST[$form3_submit])) {
        header("Location: form1.php");
        exit;
    }

     // Считаем количество баллов с правильных ответов 3-ой формы
     $score = isset($_POST["score"]) ? (int)($_POST["score"]) : 0;

     // TODO: Проверить на корректность $score

     foreach ($forms['form3']['questions'] as $question) {
         if (!isset($_POST[$question['name']])) {
             continue;
         }

         if(strcmp($_POST[$question['name']], $question["right_answer"]) == 0) {
             // Со третей  в 5 балла.
             $score += 5;
         }
     }

    $title = "Результаты - Задание 1";
    require_once("header.php");
?>
<h1>Тело результата</h1>
<p>
    Вы заработали <?=$score?> балла.
</p>
<?php
    require_once("footer.php");
?>