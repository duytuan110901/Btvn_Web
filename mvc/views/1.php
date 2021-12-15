<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            background-color: burlywood;
        }
    </style>
</head>
<body>
    <h1>
        <?php
            while ($row = mysqli_fetch_array($data["SH"])) {
                echo $row["id"] . " " . $row["xinchao"] . " 　" . $row["tambiet"] . "<br>";
            }
        ?>
    </h1>
</body>
</html>