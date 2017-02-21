<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
	Signite system
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="/css/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="/css/flat-ui.css" rel="stylesheet">
    <?= $this->Html->css('style.css') ?>
    <script src="/js/vendor/respond.min.js"></script>
    <script src="/js/flat-ui.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-embossed navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Signite" width="30"> Signite System</a>
        </div>
        <?php if(empty($login)){; ?>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--li class="prof_img"><img src="/<?= $user_auth['filepath'] ?>" alt="" width="30">　<span><?= $user_auth['name'] ?></span></li-->
                <li class="prof_img"><span><?= $user_auth['name'] ?></span></li>
                <li class="logout"><a href="/login/"><span class="fui-export"></span>　Logout</a></li>
            </ul>
        <?php }; ?>
        </div><!-- /.navbar-collapse -->
    </nav><!-- /navbar -->
    <div class="clearfix" id="cont_box">
    <?= $this->Flash->render() ?>
    <?php if(empty($login)){; ?>
	<nav class="col-md-2 col-sm-3 col-xs-12 h-100 d-inline-block no-p">
		<?php echo $this->element('sidemenu'); ?>
	</nav>
	<div class="col-md-10 col-sm-9 col-xs-12" id="cont_right">
	        <?= $this->fetch('content') ?>
	</div>
    <?php } else {; ?>
	<div class="col-md-12 col-sm-12 col-xs-12">
	        <?= $this->fetch('content') ?>
	</div>
    <?php }; ?>
    </div>
    <footer>
    </footer>
</body>
</html>
