<!DOCTYPE html>
<html>
<head>
    <title>Horizontal Menu</title>

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

        ul li a {
            text-decoration: none;
            padding: 20px;
            display: block;
            white-space: nowrap;
        }

        li a:hover {
            background-color: pink;
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

        <li><a href="#">Home</a></li>

        <li><a href="#">About</a></li>

        <li><a href="#">Course</a></li>

        <li><a href="#">Gallery</a></li>

        <li><a href="#">Contact Us</a></li>

    </ul>

</body>
</html>