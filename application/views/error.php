<?php if ( ! is_numeric($code)) $code = 500 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $code . ' ' . Response::$messages[$code] ?></title>
</head>
<body>
    <h1><?php echo $code . ' ' . Response::$messages[$code] ?></h1>
<?php if ($code != 500): ?>
    <p><?php echo $message ?></p>
<?php endif ?>
</body>
</html>
