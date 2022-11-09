<?php
// Воображаемая Model

$forms["form1"] = array(
    "type" => "radio",
    "submit_name" => "form1",
    "questions" => array(
        array(
            "text" => "Текст вопроса 1",
            "name" => "question1",
            "right_answer" => 2,
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
        array(
            "text" => "Текст вопроса 2",
            "name" => "question2",
            "right_answer" => 2,
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
        array(
            "text" => "Текст вопроса 3",
            "name" => "question3",
            "right_answer" => 1,
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
    )
);

$forms["form2"] = array(
    "type" => "checkbox",
    "submit_name" => "form2",
    "questions" => array(
        array(
            "text" => "Текст вопроса 4",
            "name" => "question4",
            "right_answer" => array(2, 3),
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
        array(
            "text" => "Текст вопроса 5",
            "name" => "question5",
            "right_answer" => array(3, 4),
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
        array(
            "text" => "Текст вопроса 6",
            "name" => "question6",
            "right_answer" => array(1, 4),
            "options" => array(
                "1" => "Первый ответ", // ключ - это value в input, а значение - это label
                "2" => "Второй ответ", // ключ - это value в input, а значение - это label
                "3" => "Третий ответ", // ключ - это value в input, а значение - это label
                "4" => "Четвертый ответ", // ключ - это value в input, а значение - это label
            ),
        ),
    )
);

$forms["form3"] = array(
    "type" => "text",
    "submit_name" => "form3",
    "questions" => array(
        array(
            "text" => "Текст вопроса 7",
            "name" => "question1",
            "right_answer" => "иван",
            "options" => array("" => "Введите ответ"),
        ),
        array(
            "text" => "Текст вопроса 8",
            "name" => "question2",
            "right_answer" => "вася",
            "options" => array("" => "Введите ответ"),
        ),
        array(
            "text" => "Текст вопроса 9",
            "name" => "question3",
            "right_answer" => "коля",
            "options" => array("" => "Введите ответ"),
        ),
    )
);

function render_form($f, $action, $score=0)
{
    ?>
<form method="post" action="<?=$action?>">
    <input type="text" name="score" value="<?=$score?>" />
    <?php foreach($f["questions"] as $question): ?>
        <section>
            <h3><?=$question["text"]?></h3>
            <ul>
                <?php foreach($question["options"] as $value => $option_text): ?>
                    <li>
                        <?php if($f['type'] == "text"): ?>
                            <label>
                                <?=$option_text?>
                                <input
                                    require
                                    type="<?=$f['type']?>"
                                    name="<?=$question["name"]?>"
                                    value="<?=$value?>" />
                            </label>
                        <?php else:
                            $name = $question["name"].($f['type'] == "checkbox" ? "[]" : "");
                        ?>
                            <label>
                                <input
                                    require
                                    type="<?=$f['type']?>"
                                    name="<?=$name?>"
                                    value="<?=$value?>" />
                                <?=$option_text?>
                            </label>
                        <?php endif; ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </section>
    <?php endforeach; ?>

    <input type="submit" name="<?=$f['submit_name']?>" value="Next" />
</form>
    <?php
}
