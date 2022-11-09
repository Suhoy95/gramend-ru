<?php
    require_once("common.php");

    $form2_submit = $forms["form2"]["submit_name"];
    if (!isset($_POST[$form2_submit])) {
        header("Location: form1.php");
        exit;
    }

    // Считаем количество баллов с правильных ответов 2-ой формы
    $score = isset($_POST["score"]) ? (int)($_POST["score"]) : 0;

    // TODO: Проверить на корректность $score

    foreach ($forms['form2']['questions'] as $question) {
        if (!isset($_POST[$question['name']])) {
            continue;
        }

        $correct = true;
        // Если нашелся хоть один неправильный ответ
        foreach ($_POST[$question['name']] as $value) {
            if (!in_array($value, $question["right_answer"])) {
                $correct = false;
                break;
            }
        }

        // Если нашелся правильный не выбранный ответ
        foreach ($question["right_answer"] as $answer) {
            if (!in_array($answer, $_POST[$question['name']])) {
                $correct = false;
                break;
            }
        }

        if($correct) {
            // Со второй в 3 балла.
            $score += 3;
        }
    }

    $title = "Третья форма - Задание 1";
    require_once("header.php");
?>
<h1>Тело формы 3</h1>
<?php
    render_form($forms["form3"], "result.php", $score);
    require_once("footer.php");
?>