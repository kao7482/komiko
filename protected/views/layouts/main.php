<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php CHtml::encode($this->pageTitle);?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" id="crayon-css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="crayon-css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/anfuegung.css" type="text/css" media="all">    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php echo $content; ?>
    
      <a href="#" class="top"><div class="topcon"></div></a>
      <footer class="container">
        <p>Powered by: 百合會APP製作委員會（YAP48）</p>
    	<p>網站所有漫畫均來自網友分享和上傳，以便漫畫愛好者研究漫畫技巧和構圖方式，版權歸屬其版權擁有者所有。版權擁有者如果對本站提供的漫畫有任何疑問，請聯繫我們，我們會根據情況酌情處理。舉報不良漫畫、缺頁、排版錯誤、求漫、發漫、合作，都可發郵件給我們。</p>
      </footer>
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/anfuegung.js"></script>
  </body>
</html>