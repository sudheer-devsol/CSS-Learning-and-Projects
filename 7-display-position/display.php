<!DOCTYPE html>
<html>
<head>
    <title>Display</title>

    <style>

        li ul {
            display: none;
        }

        ul li {
            display: block;
        }

        li:hover > ul {
            display: block;
        }

    </style>
</head>

<body>

    <ul>
        <li>
            Course

            <ul>
                <li>PHP</li>
                <li>Java</li>
            </ul>

        </li>
    </ul>

</body>
</html>