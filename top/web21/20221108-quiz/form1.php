<?php
    require_once("common.php");

    // Начинается View
    $title = "Первая форма - Задание 1";
    require_once("header.php");
?>
<h1>Тело формы 1</h1>
<?php
    render_form($forms["form1"], "form2.php");
    require_once("footer.php");
?>