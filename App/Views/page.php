<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>
<body>
    <?php
        for ($i = 0; $i < count($data['arr']); $i++) {
            echo "<h2>[".$i."] = ".$data['arr'][$i]."</h2>";
        }
    ?>
</body>
</html>
