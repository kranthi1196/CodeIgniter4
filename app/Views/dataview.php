<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataView File</title>
</head>
<body>
    <h2>Subjects List:</h2>
    <ul>
        <?php foreach($subjects As $sub);?>
        <li><?= $sub['subject']?> - <?= $sub['abbr']?></li>
        
    </ul>
</body>
</html>