<?php
  // phpinfo();
$Name = "Andrei";
$Age = 34;
$a = 5;
$b = 7;
$rez = $a + $b;

$background_color = 'blue';
$color = 'red';
$width = '100px';
$height = '100px';
$a1 = $rez - $a;
$b1 = $rez - $b;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset='UTF-8'>
  <title>
    Швецов Андрей.
    Тема: Переменные.
    Типы данных - Введение в web-программирование на PHP.
  </title>
</head>

<body>
  <h1><?=$_SERVER["HTTP_HOST"] ?></h1>
  <pre>
    <?php
      var_dump($_GET, $_POST);
    ?>
  </pre>
  <?php
  echo "<p>Hello! My name is $Name.</p>
    <p>I'm $Age</p>
    <p>$a+$b=$rez</p>
    <p>Задание 4</p>
    <p>$a1+$b1=$rez</p>";
  ?>

  <p>Задание 5</p>
  <style>
    .right-answer {
      color: green;
    }
  </style>
  <form method="POST">
    <h3>Вопрос 1. Как меня зовут?</h3>
    <ol>
      <li><label>
          <input type='radio' name='hei' value="pert1"/> Пётр
        </label></li>
      <li>
        <input type='radio' name='hei' id="petr2" value="pert2"/>
        <label for="petr2"> Пётр</label>
      </li>
      <li><label>
          <input type='radio' name='hei' value="иван1"/> Иван
        </label>
      </li>
      <li class="right-answer">
        <label>
          <input type='radio' name='hei' value="андрей"/> Андрей
        </label>
      </li>
    </ol>
    <h3>Вопрос 2. В каких словах больше 3 букв?</h3>
    <ol>
      <li class="right-answer"><label><input type='checkbox' name="second-question[]" value="Слон"> Слон</label></li>
      <li class="right-answer"><label><input type='checkbox' name="second-question[]" value="Холм"> Холм</label></li>
      <li><label><input type='checkbox' name="second-question[]" value="Рот"> Рот</label></li>
      <li><label><input type='checkbox' name="second-question[]" value="Сом"> Сом</label></li>
    </ol>
    <h3>Вопрос 3. Что подразумевалось под заданием5?</h3>
    <ol>
      <li>Просто написать несолько тэгов html</li>
      <li><span class="right-answer">Возможно этот нужно было</span></li>
      <li>Чтобы написать теги html и css</li>
      <li>Чтобы написать теги html, css и cкрипты JS</li>
      <li>Чтобы перечитывал вопрос несолько раз и так и не понял как надо сделать</li>
    </ol>
    <button type="submit">Отправть</button>
  </form>
  <p>Задание 6</p>
  <ul>
    <li>width: <?=$width?></li>
    <li>height: <?=$height?></li>
    <li>background_color: <?=$background_color?></li>
    <li>color: <?=$color?></li>
  </ul>
  <?php
  echo $tag;
  echo "<div style='width:$width; height:$height; background-color: $background_color;'>
    <p style='color: $color;'>Hello</p>
  </div>
  "
  ?>
</body>

</html>