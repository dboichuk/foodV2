<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summary</title>
</head>
<body>
<h1>Order summary:</h1>
<p>Thank you for ordering <?= ($SESSION['food']) ?> for <?= ($SESSION['meal']) ?></p>
<?php if (isset($SESSION['conds'])): ?>
    <p>Condiments: <?= (implode($SEESION['conds'],", ")) ?></p>
<?php endif; ?>
<p><a href="order">Back to Order Page</a></p>

</body>
</html>