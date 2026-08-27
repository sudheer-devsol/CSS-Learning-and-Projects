<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Selectors</title>

    <style>

        /* Element Selector */
        h1, h2, p {
            color: darkseagreen;
        }

        /* Child Selector */
        body > h1,
        body > h2,
        body > p {
            color: lightpink;
        }

        /* Universal Selector */
        /*
        * {
            color: firebrick;
        }
        */

        /* Class Selector */
        /*
        .color {
            color: darkmagenta;
        }
        */

        /* ID Selector */
        /*
        #color {
            color: darkturquoise;
        }
        */

    </style>
</head>

<body>

    <h1 style="text-align: center;">CSS Selectors</h1>

    <h2>Heading Example</h2>

    <p>This is a paragraph using CSS selectors.</p>

    <div class="color">
        <h2>Class Selector Example</h2>
        <p>This paragraph belongs to the color class.</p>
    </div>

    <div id="color">
        <h2>ID Selector Example</h2>
        <p>This paragraph belongs to the color ID.</p>
    </div>

</body>
</html>