<!DOCTYPE html>
<html>
<head>
    <title>Attribute Selector</title>

    <style>

        a[target] {
            color: red;
        }

        a[target="_blank"] {
            color: blue;
        }

        p[title~=para-1] {
            color: green;
        }

        p[title|=para] {
            color: navy;
        }

        p[title^=ph] {
            color: red;
        }

        p[title$=hp] {
            color: maroon;
        }

        p[title*=ph] {
            color: darkgoldenrod;
        }

    </style>
</head>

<body>

    <h1>Attribute Selectors</h1>

    <a href="https://www.google.com" target="_blank">
        Google
    </a>

    <p title="para-1">
        Paragraph 1
    </p>

    <p title="para">
        Paragraph 2
    </p>

    <p title="php">
        PHP
    </p>

    <p title="phhp">
        PHHP
    </p>

</body>
</html>