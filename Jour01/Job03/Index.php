<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>
<body>
    <?php
        $bool = true;
        $str = "String";
        $int = 17;
        $float = 7.97;

        echo $bool . $str . $int . $float;
    ?>
    <table>
        <tr>
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td><?php echo gettype($bool) ?></td>
            <td>$bool</td>
            <td><?php echo $bool ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($str) ?></td>
            <td>$str</td>
            <td><?php echo $str ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($int) ?></td>
            <td>$int</td>
            <td><?php echo $int ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($float) ?></td>
            <td>$float</td>
            <td><?php echo $float ?></td>
        </tr>
</body>
</html>
