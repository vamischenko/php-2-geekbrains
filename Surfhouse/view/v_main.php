<?php
/**
 * Основной шаблон
 * ===============
 * $title - заголовок
 * $content - HTML страницы
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/script.js" defer></script>
    <link rel="stylesheet" href="styles/style.css">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">-->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="favicon.ico">
</head>

<body>
    <div class="<?=$this->action=='index'?'header header-index':'header'?><?=$this->action=='contact'?' header-contact':''?>">
        <div class="header-container">
            <a href="./" class="logo"></a>
            <div class="header-social<?=$this->action=='contact'?' header-social-contact':''?>">
                <?php include 'modules/header-social.php'; ?>
            </div>
            <div class="clr"></div>
            <!-- <div class="cart cart-index">
                <a href="cart.php" class="fa fa-shopping-cart fa-2x" aria-hidden="true"></a>
            </div> -->
            <?php if (isset($this->action) && $this->action == 'index') include 'modules/header-index.php'?>
        </div>
    </div>

    <div class="main">
        <div class="main-container">
            <div class="navy">
                <ul class="<?=$this->action=='index'?'menu menu-index':'menu'?>">
                    <?php include 'modules/menu.php'; ?>
                </ul>
                <div class="aside">
                    <a href="#">now is open!</a>
                </div>
            </div>
			<div class="content">
				<?=$content?>
			</div>
            <?php include 'modules/social.php'; ?>
        </div>
        <div class="clr"></div>
    </div>

    <?php include 'modules/footer.php'; ?>

</body>

</html>