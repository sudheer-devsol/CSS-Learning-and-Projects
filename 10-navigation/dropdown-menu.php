<!DOCTYPE html>
<html>
<head>

    <title>Drop Down Menu</title>

    <style>

        * {
            margin: 0;
            padding: 0;
        }

        ul {
            list-style: none;
            background-color: skyblue;
        }

        ul li {
            float: left;
            background-color: skyblue;
            display: block;
            position: relative;
        }

        li ul {
            display: none;
        }

        ul li a {
            text-decoration: none;
            padding: 20px;
            display: block;
            white-space: nowrap;
        }

        li a:hover {
            background-color: pink;
        }

        li:hover > ul {
            display: block;
            position: absolute;
        }

        li:hover li {
            float: none;
        }

        ul ul ul {
            position: relative;
            top: 0;
            left: 100%;
        }

        ul::before,
        ul::after {
            content: " ";
            display: block;
        }

        ul::after {
            clear: both;
        }

    </style>

</head>

<body>

    <ul>

        <li>
            <a href="#">Home</a>
        </li>

        <li>
            <a href="#">About</a>
        </li>

        <li>
            <a href="#">Course</a>

            <ul>

                <li>
                    <a href="#">PHP Advance</a>
                </li>

                <li>
                    <a href="#">Java Basic</a>
                </li>

                <li>

                    <a href="#">PHP Basic</a>

                    <ul>

                        <li>
                            <a href="#">Introduction To PHP</a>
                        </li>

                        <li>
                            <a href="#">Variables & Operators</a>
                        </li>

                        <li>

                            <a href="#">Looping And Branching</a>

                            <ul>

                                <li><a href="#">Topic 1</a></li>
                                <li><a href="#">Topic 2</a></li>
                                <li><a href="#">Topic 3</a></li>

                            </ul>

                        </li>

                    </ul>

                </li>

                <li>
                    <a href="#">Java Advance</a>
                </li>

            </ul>

        </li>

        <li>
            <a href="#">Gallery</a>
        </li>

        <li>
            <a href="#">Contact Us</a>
        </li>

    </ul>

</body>
</html>