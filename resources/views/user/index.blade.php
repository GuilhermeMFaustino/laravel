<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
usuarios
<?php foreach($user as $use){
    echo $use->name . "<br>";
} ?>
</body>
</html>
