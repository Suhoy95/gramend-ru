<?php
    $forms[0] = array(
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
    $forms["form1"] = array(
        "type" => "radio",
        "submit_name" => "form1",
        "questions" => array(
            array(
                "text" => "Текст вопроса 4",
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
                "text" => "Текст вопроса 5",
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
                "text" => "Текст вопроса 7",
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        var_dump($_POST);
        $count_right_answers = 0;
    ?>
    </pre>

    <?php 
        $f = $forms[0]; // $f - текущая форма
        foreach ($forms as $key => $value) {
            if (isset($_POST[$key])) {
                $f = $value;
                // Посчитать правильные ответы где-то здесь?
            }
        }
    ?>
    <form method="post">
        <?php foreach($f["questions"] as $question): ?>  
            <section>
                <h3><?=$question["text"]?></h3>        
                <ul>
                    <?php foreach($question["options"] as $value => $option_text): ?>
                        <li>
                            <label> 
                                <input 
                                    type="<?=$f['type']?>"
                                    name="<?=$question["name"]?>"
                                    value="<?=$value?>" />
                                <?=$option_text?>
                            </label>
                        </li>
                    <?php endforeach ?>
                </ul>
            </section>
        <?php endforeach; ?>
        
        <input type="submit" name="<?=$f['submit_name']?>" value="Next" />
    </form>
</body>
</html>