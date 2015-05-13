<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;


$this->title = 'Beach Body Fitness';
/**
 * @var $this \yii\base\View
 * @var $content string
 */
//$this->registerAssetBundle('app');

?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  
  <title><?php echo Html::encode($this->title); ?></title>
  <?php $this->head(); ?>
	
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  
  <!-- CSS  -->
<!--    <link href="--><?php //echo $this->theme->baseUrl ?><!--/css/foundation.css" type="text/css" rel="stylesheet" media="screen,projection"/>-->

    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo $this->theme->baseUrl ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo $this->theme->baseUrl ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo $this->theme->baseUrl ?>/css/pricing-table-global.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <?php $this->beginBody() ?>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="container">
      <div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo"><?php echo Html::encode($this->title); ?></a>
	  		<?php
						echo Menu::widget([
						    'options' => ['id' => "nav-mobile", 'class' => 'right side-nav'],
						    'items' => [
						        ['label' => 'Home', 'url' => ['site/index']],
						        ['label' => 'About', 'url' => ['site/about']],
                    ['label' => 'Services', 'url' => ['site/pricing']],
						        ['label' => 'Contact', 'url' => ['site/contact']],
                    ['label' => 'Signup', 'url' => ['site/signup']],
//						        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
						    ],
						]);
					?>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m12">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>

  <footer class="orange">
<!--    <div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col l6 s12">-->
<!--          <h5 class="white-text">Company Bio</h5>-->
<!--          <p class="grey-text lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>-->
<!---->
<!---->
<!--        </div>-->
<!--        <div class="col l3 s12">-->
<!--          <h5 class="white-text">Settings</h5>-->
<!--          <ul>-->
<!--            <li><a class="white-text" href="#!">Link 1</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 2</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 3</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 4</a></li>-->
<!--          </ul>-->
<!--        </div>-->
<!--        <div class="col l3 s12">-->
<!--          <h5 class="white-text">Connect</h5>-->
<!--          <ul>-->
<!--            <li><a class="white-text" href="#!">Link 1</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 2</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 3</a></li>-->
<!--            <li><a class="white-text" href="#!">Link 4</a></li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text lighten-3" href="">Materialize</a>
      </div>
    </div>
  </footer>  


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/materialize.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/init.js"></script>
  <script src="<?php echo $this->theme->baseUrl ?>/js/foundation.js"></script>


  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage(); ?>