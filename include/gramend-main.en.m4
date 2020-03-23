m4_changequote(`<<<', `>>>')m4_dnl
m4_define(<<<gramendHeader>>>, <<<m4_dnl
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>$1</title>
</head>

<body>
    <header>
        <a href="m4_regexp(m4___file__, <<<\(.*\)\.en\.m4$>>>, <<<\1.html>>>)" title="Русский язык" id="lang">
            <img
                src="img/ru-flag.jpg"
                height="22"
                alt="Russia Flag"
            />
            Русский
        </a>
        <nav>
            <a href="index.en.html" title="Main page"><span class="logo">ツ</span> Gramend R&D</a>
            <a href="about.en.html" title="About company">About</a>
            <a href="appreciation.en.html" title="For those who remember the roots">Appreciation</a>
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
            <a id="html-validation" href="#" title="" target="_blank">HTML Validation</a>
            <a id="css-validation" href="#" title="" target="_blank">CSS Validation</a>
            <a href="https://github.com/Suhoy95/gramend-ru" title="" target="_blank">Found errata? Make Pull-Request!</a>
            <script>
                document.getElementById("html-validation")
                    .setAttribute("href", `https://validator.w3.org/nu/?doc=${encodeURIComponent(window.location)}`);
                document.getElementById("css-validation")
                    .setAttribute("href", `https://jigsaw.w3.org/css-validator/validator?uri=${encodeURIComponent(window.location)}`);
            </script>
        </nav>
        <br />
            <a href="http://ustalov.imm.uran.ru/"
                target="_blank"
                title="Know the roots!"
                style="text-decoration: none;"
            >
                <img src="img/walking-cat.gif" alt="A cat">
                <img src="img/counter.gif" alt="Billions of visitors">
            </a>
            <a
                href="//www.w3.org/QA/Tools/Donate"
                title="Validators Donation Program"
                target="_blank"
            >
                <img
                     src="//www.w3.org/QA/Tools/I_heart_validator_lg"
                     alt="Validators Donation Program logo"
                />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                <img
                    style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!"
                />
            </a>
    </footer>
</body>

</html>
>>>)m4_dnl
