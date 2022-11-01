<?php
    require_once("header.php");
    // Начальный PHP-код
    // Объявление переменных;
    // Обращение к БД
    // Вычисления на стороне сервера (картинку сделать)
?>
<h1>Введение в PHP (PHP Hypertext Processor)</h1>
<section>
    <h2>Встраивании PHP в HTML</h2>
    <?php
        echo "Первый вариант<br />";
    ?>
    <?
        // short_open_tag = on ; В php.ini
        echo "Второй вариант<br />";
    ?>
    <!-- Аналогично <?php echo "Третий вариент";?> -->
    <p><?="Третий вариант"?></p>
</section>

<section>
    <h2>Что вам от ЯП (Языков Программирования)</h2>
    <ul>
        <li><a href="http://learnxinyminutes.com/">Learn X in Y minutes</a></li>
        <li>Перменными
            <ul>
                <li>Обьявление переменной - сказать Интерпретатору, что такая переменная есть (Пример из JS, <pre> let a;</pre></pre>)</li>
                <li>Инициализация переменной - сказать чему равна переменная
                (Пример из JS, <pre> let a = 20;</pre>)
                </li>
                <li>Тип/значение переменной</li>
            </ul>
            <?php
                $name = "Вася"; 
            ?>
        </li>
        <li>Управляюще конструкции
            <ul>
                <li>Ветвления (if/ifelse/else)</li>
                <li>
                    С множественным выбором (switch/case)
                    - Можно просто выучить как пишеться (if/elseif)
                </li>
                <li>Циклы (while/do-while/for/foreach)</li>
            </ul>
        </li>
        <li>Функции</li>
        <li>Работа с множеством файлов (Модули)</li>
        <li>ОПП</li>
    </ul>
</section>

<section>
    <!-- 20221101-intro-to-php.php#arrays-and-loops -->
    <h2 id="arrays-and-loops">Массивы и Циклы</h2>
    <section>
        <?php
            $numbers = array(1000, 993, 986);
            // count($numbers) аналогично numbers.length в JS
            echo "В масииве: ".count($numbers)." элемента<br />";
            for ($i=0; $i < count($numbers); $i++) { 
                echo "<p>Hello, world ".$numbers[$i]."!</p>";
            }
        ?>
        <section>
            <h3>Ассоцитивные массивы/Хеш-Таблицы/Обьекты(как в JS)</h3>
            <?php 
                $months = array(
                    "Ноябрь" => 11,
                    "Декабрь" => 12
                );
                echo "В масииве: ".count($months)." элемента<br />";
                echo "Ноябрь: ".$months["Ноябрь"]."<br />";
                // foreach (iterable_expression as $value)
                //     statement
                // foreach (iterable_expression as $key => $value)
                //     statement
                // iterable_expression - итерируемое выражение
                // выражение, которое вернет итерируемый обьект
                // итерируемый обьект - это обьект, который можно перебрать в цикле
                // statement - выражение. 
                // Весь код на PHP состоит из выражений, разделенных ";"
                // $value - значение, т.е. 1-ый вариент - это перебор значений в массиве
                foreach ($numbers as $value) {
                    echo "Выводим numbers: $value<br />";
                }
                foreach ($months as $value) {
                    echo "Выводим months: $value<br />";
                }
                foreach ($months as $key => $value) {
                    echo "Выводим months: $key => $value<br />";
                }
            ?>
        </section>
    </section>
</section>
<section>
    <h2>Функции</h2>
    <section>
        <h3>Общий синтаксис</h3>
        <?php
            function is_mirrored($n)
            {
                $n_array = str_split((string) $n);

                // Индексы массива:
                // 0, 1, 2, ..., count(array) - 1, [не входит в массив] count(array)
                //
                // array[-1] <=> array[count(array) - 1 - $i]
                for ($i=0; $i < count($n_array) / 2; $i++) { 
                    if (strcmp($n_array[$i], $n_array[count($n_array) - 1 - $i]) != 0) {
                        return false;
                    }
                }
                return true;
            }
        ?>
    </section>

    <section>
        <h3>Передача по ссылке</h3>
        <?php
            // Для JS:
            //  Примитивные типы [скорее всего] - передаваться по значению
            //  Сложные (массивы, обьекты) - передаватся по ссылке
            // function make_zero_to_ten($a) { // < Передача по значению
            function make_zero_to_ten(&$a) { // < Передача по ссылке
                for ($i=0; $i < count($a); $i++) { 
                    if ($a[$i] === 0) {
                        $a[$i] = 10;
                    }
                }
            }
            
            $a = array(1, 0, 2, 0, 3, 0, 4);
            make_zero_to_ten($a);

            echo "<pre>";
            var_dump($a);
            echo "</pre>";
        ?>
    </section>
</section>

<section>
    <h2 id="homework">Разбор ДЗ</h2>
    <p>Проверить что число зеркально</p>
    <?php
        $n = 2112;
        echo (string) $n."<br />";
        echo var_dump(implode(array_reverse(str_split((string) $n))))."<br />";
        $reversed_n = implode(array_reverse(str_split((string) $n)));
        echo "Число $n зеркально: ".( $n == $reversed_n ? "да" : "нет")."<br />";

        // свой вызов функции:
        echo "Число $n зеркально: ".( is_mirrored($n) ? "да" : "нет")."<br />";

        $count_mirrored_numbers = 0;
        for ($i=1000; $i < 10000; $i++) { 
            if(is_mirrored($i)) {
                $count_mirrored_numbers += 1;
            }   
        }

        echo "Кол-во зеркальных чисел: ".$count_mirrored_numbers."<br />";
    ?>
</section>

<section>
    <h2>Пятиминука Философии</h2>
    <p>
        Програмисты делятся на 4 уровня навыков
    </p>
    <ol>
        <li>Те кто мишут мало, и неправильно</li>
        <li>Те кто мишут много, и неправильно</li>
        <li>Те кто мишут много, и правильно</li>
        <li>Те кто мишут мало, и правильно</li>
    </ol>
</section>

<?php
    require_once("footer.php");
