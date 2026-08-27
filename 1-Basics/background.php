<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS Background</title>

    <style>

        body {
            /*
            background-color: #ff0;

            background-image: url("images/image.jpg");

            background-repeat: repeat-x;
            background-repeat: repeat-y;
            background-repeat: no-repeat;

            background-size: cover;

            background-position: left top;
            background-position: left center;
            background-position: left bottom;

            background-position: center bottom;
            background-position: center top;
            background-position: center center;

            background-position: right center;
            background-position: right top;
            background-position: right bottom;
            */
        }

        .one {
            background-image: url("images/image2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;

            padding: 30px;
            color: white;
        }

    </style>
</head>

<body>

    <h1>CSS Background Example</h1>

    <div class="one">
        <h2>Background Image</h2>

        <p>
            This example demonstrates CSS background image,
            repeat, size and attachment.
        </p>
    </div>

</body>
</html>