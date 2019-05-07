<?php
require_once dirname(__FILE__) . '/../controllers/YaroskovCtrl.php';

$ctrl = new YaroskovCtrl();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $ctrl->data['title']; ?></title>

    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="block block_header">
            <div class="block__content block__content_header">
                <h1 class="title-1"><?php echo $ctrl->data['title']; ?></h1>
            </div>
        </div>
    </header>
    <div class="content">
        <?php if(isset($_GET['page']) && $_GET['page'] != ''): ?>
            <?php require_once dirname(__FILE__) . '/pages/page.php'; ?>
        <?php else: ?>
            <?php require_once dirname(__FILE__) . '/pages/main-menu.php'; ?>
        <?php endif; ?>
    </div>
    <footer class="footer">
        <div class="block block_header">
            <div class="block__content block__content_header">
                <p><?php echo $ctrl->data['email']; ?></p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>