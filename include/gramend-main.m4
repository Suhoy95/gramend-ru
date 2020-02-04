m4_changequote(`<<<', `>>>')m4_dnl
m4_define(<<<gramendHeader>>>, <<<m4_dnl
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>$1</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.html" title="Main page"><span class="logo">ツ</span> Gramend R&D</a>
            <a href="about.html" title="About company">About</a>
            <a href="appreciation.html" title="For those who remember the roots">Appreciation</a>
        </nav>
    </header>

    <hr />
>>>)m4_dnl
m4_define(<<<gramendFooter>>>, <<<m4_dnl
    <hr />
    <marquee direction="right">
        <a href="http://ustalov.imm.uran.ru/"
            target="_blank"
            title="Know the roots!"
            style="text-decoration: none;">
            <img src="img/walking-cat.gif" alt="A cat">
            <img src="img/counter.gif" alt="Billions of visitors">
        </a>
    </marquee>
    <hr />

    <footer>
        <img src="$1" alt="$2" />
        <br />
        <nav>
            <a id="html-validation" href="#" title="">HTML Validation</a>
            <a id="css-validation" href="#" title="">CSS Validation</a>
            <a href="https://github.com/Suhoy95/gramend-ru" title="">Found errata? Make Pull-Request!</a>
            <script>
                document.getElementById("html-validation")
                    .setAttribute("href", `https://validator.w3.org/nu/?doc=${encodeURIComponent(window.location)}`);
                document.getElementById("css-validation")
                    .setAttribute("href", `https://jigsaw.w3.org/css-validator/validator?uri=${encodeURIComponent(window.location)}`);
            </script>
        </nav>
        <br />
        <a href="https://u.fsf.org/upcycle"><img src="https://static.fsf.org/nosvn/windows/winupcycle_text.png" width="300" alt="Upcycle Windows 7 petition image"></a>
        <br />
        <a href="//www.w3.org/QA/Tools/Donate" title="Validators Donation Program">
            <img src="//www.w3.org/QA/Tools/I_heart_validator_lg" alt="Validators Donation Program logo" /></a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Правильный CSS!" />
        </a>
    </footer>
</body>

</html>
>>>)m4_dnl
