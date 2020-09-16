m4_changequote(`<<<', `>>>')m4_dnl
m4_include(<<<html-snippets.m4>>>)m4_dnl
m4_define(<<<articleHeader>>>,<<<m4_dnl
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">
    <title>$1</title>
</head>
<body>
    <header>
        <nav>
            <a href="/index.html" title="Главная страница"><span class="logo">ツ</span>На главную</a>
        </nav>
    </header>

    <hr />
>>>)m4_dnl
m4_define(<<<gramendHeader>>>, <<<m4_dnl
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/style.css">
    <title>$1</title>
</head>

<body>
    <header>
        <a href="m4_regexp(m4___file__, <<<\(.*\)\.m4$>>>, <<<\1.en.html>>>)" title="English language" id="lang">
            <img
                src="/img/en-flag.png"
                height="22"
                alt="English Flag"
            />
            English
        </a>
        <nav>
            <a href="/index.html" title="Главная страница"><span class="logo">ツ</span>Грамэнд</a>
            <!-- <a href="about.html" title="О компании">О компании</a> -->
            <a href="/appreciation.html" title="Для тех, кто помнит корни">Благодарности</a>
        </nav>
    </header>

    <hr />
>>>)m4_dnl
m4_define(<<<gramendFooter>>>, <<<m4_dnl
    <hr />

    <footer>
        <img src="$1" alt="$2" />
        <br />
        <nav>
            <a_external id="html-validation" href="#" title="">Проверка HTML</a>
            <a_external id="css-validation" href="#" title="">Проверка CSS</a>
            <a_external href="https://github.com/Suhoy95/gramend-ru" title="Исправить опечатку">Опечатка? Пришли Pull-Request!</a>
            <script>
                document.getElementById("html-validation")
                    .setAttribute("href", `https://validator.w3.org/nu/?doc=${encodeURIComponent(window.location)}`);
                document.getElementById("css-validation")
                    .setAttribute("href", `https://jigsaw.w3.org/css-validator/validator?uri=${encodeURIComponent(window.location)}`);
            </script>
        </nav>
        <br />
            <a_external href="http://ustalov.imm.uran.ru/"
                title="Помним и не забываем!"
                style="text-decoration: none;"
            >
                <img src="/img/walking-cat.gif" alt="Кот">
                <img src="/img/counter.gif" alt="Сто-Пятсот просмотров">
            </a>
            <a_external
                href="http://www.w3.org/QA/Tools/Donate"
                title="Поддержи чистый WEB"
            >
                <img
                     src="http://www.w3.org/QA/Tools/I_heart_validator_lg"
                     alt="Validators Donation Program logo"
                />
            </a>
            <a_external href="http://jigsaw.w3.org/css-validator/check/referer">
                <img
                    style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Правильный CSS!"
                />
            </a>
    </footer>
</body>

</html>
>>>)m4_dnl
