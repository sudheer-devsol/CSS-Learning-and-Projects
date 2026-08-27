<!DOCTYPE html>
<html>
<head>
    <title>Position</title>

    <style>

        .menu {
            position: relative;
        }

        .submenu {
            display: none;
            position: absolute;
        }

        .menu:hover .submenu {
            display: block;
        }

    </style>
</head>

<body>

    <div class="menu">

        Course

        <div class="submenu">
            PHP
        </div>

    </div>

</body>
</html>