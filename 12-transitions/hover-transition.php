<!DOCTYPE html>
<html>
<head>
    <title>Hover Transition</title>

    <style>

        .oneimage {
            width: 200px;
            height: 100px;

            border: 2px dashed red;

            transition: all 0.5s ease;
        }

        .oneimage:hover {
            width: 300px;
            height: 200px;

            border: 2px dashed #00f;
        }

    </style>
</head>

<body>

    <h1>Hover Transition</h1>

    <img
        class="oneimage"
        src="images/image2.jpg"
        alt="No-Image"
    >

</body>
</html>