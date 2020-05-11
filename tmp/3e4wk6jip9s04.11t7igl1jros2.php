<!doctype html>
<html lang="en">
<head>
    <title>Food Order</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href=""></head>
<body>
<div class="container">
    <h1>What would you like to order?</h1>

    <form action="#" method="post" class="form-horizontal">




        <div class="form-group">
            <label class="col-sm-2 control-label">Select a Con</label>



            <div class="col-sm-4">
                <?php foreach (($conds?:[]) as $c): ?>
                    <input type="checkbox" name="conds[]" id="<?= ($c) ?>" value="<?= ($c) ?>"> <?= (ucfirst($c)) ?></input><br>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="col-xs-3 ">
            <input class="form-control btn btn-default"
                   type="submit" value="Place Order">
        </div>
    </form>
</div>
</body>
</html>