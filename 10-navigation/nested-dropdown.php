<!DOCTYPE html>
<html>
<head>

    <title>Nested Dropdown</title>

    <style>

        ul {
            list-style: none;
        }

        li {
            position: relative;
        }

        li ul {
            display: none;
            position: absolute;
            left: 100%;
            top: 0;
        }

        li:hover > ul {
            display: block;
        }

    </style>

</head>

<body>

    <ul>

        <li>
            PHP

            <ul>

                <li>
                    Basic

                    <ul>
                        <li>Variables</li>
                        <li>Operators</li>
                        <li>Loops</li>
                    </ul>

                </li>

                <li>Advanced</li>

            </ul>

        </li>

    </ul>

</body>
</html>