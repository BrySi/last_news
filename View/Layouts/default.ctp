<?php
/**
 * Created by IntelliJ IDEA.
 * User: Bryan
 * Date: 19/09/2015
 * Time: 23:03
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="BrySi_">

    <title><?= $title_for_layout; ?> - <?= $this->Configuration->get('name') ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,900' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>" />
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php
$flash = $this->Session->flash();
if(!empty($flash)) { ?><br>
    <div class="container">
        <?= $flash ?>
    </div>
<?php } ?>

<?= $this->fetch('content'); ?>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</body>
