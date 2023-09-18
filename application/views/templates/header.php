<!-- header start -->
<!DOCTYPE html>
<html lang="ru"> 
<head>
    <!-- Google Tag Manager -->
     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
     new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
     j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
     'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WK58PNW');</script> 
      <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta name="robots" content="<?php echo $st_ind ?>">
    <link rel="canonical" href="<?php echo $link_can ?>" />
    <meta name="yandex-verification" content="9873b89c30927e5d" />
    <meta name="description" content="<?php echo $description ?>"/>
    <meta name="keywords" content="Ремонт мобильных телефонов, Ремонт планшетов, Минск, Фрунзенский район"/> ]
    <!-- OG Tags -->
	 <meta property="og:title" content="M-FIX / Ремонт мобильных телефонов">
	 <meta property="og:description" content="Сайт мастерской по ремонту телефонов">
	 <meta property="og:type" content="article">
	 <meta property="og:image" content="https://m-fix.mikola.tech/assets/img/preview-m-fix.png">
	 <meta property="og:site_name" content="M-FIX ремонт мобильных телефонов">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="/assets/css/style.css" rel="stylesheet">
    
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

    <?php
    ob_start();
    include 'local_business.php';
    $include1 = ob_get_contents();
    ob_end_clean();

    if ($local_business_enable == 1) {
  print <<<HERE

$include1

HERE;
 } 

     
     ?> 
    
   
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK58PNW"
     height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
     <!-- End Google Tag Manager (noscript) -->

  <nav class="navbar navbar-default">  
    <div class="container-fluid">    
      <div class="navbar-header" style="">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" style="margin-top: 5px; margin-bottom: 0px;">
          <div class="row" style="margin-left: 4px;">
            <p class="navbar-text visible-xs col-xs-5" style="margin-top: 0px; margin-bottom: 0px;"><span style="font-weight: bolder;">Меню</span></p>
            <div class="col-xs-7" style="margin-top: 3px;">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </div>          
          </div>          
        </button>      
        <a class="navbar-brand" href="/" style="padding-top: 0px; padding-left: 0px;"><img src="/assets/img/logo.jpg" height="50"  alt="Сервисный центр M-FIX">
        </a>
      </div>    
      <div class="collapse navbar-collapse" id="navbar-main">     
        <ul class="nav nav-pills navbar-right">
          <li class=""><a href="/"><span style="font-size: 1.5em;">Главная</span></a></li>
          <li><a href="/products#st"><span style="font-size: 1.5em;">Товары</span></a></li>
          <li><a href="/catalog#st"><span style="font-size: 1.5em;">Каталог</span></a></li>            
          <li><a href="/remont-telefonov#st"><span style="font-size: 1.5em;">Ремонт телефонов</span></a></li>
          <li><a href="/remont-planshetov#st"><span style="font-size: 1.5em;">Ремонт планшетов</span></a></li>
          <li><a href="/garantiya#st"><span style="font-size: 1.5em;">Гарантия</span></a></li>
          <li><a href="/vacancy#st"><span style="font-size: 1.5em;">Вакансия</span></a></li>         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="font-size: 1.5em;">Прочее</span><span class="caret"></span></a>
            <ul class="dropdown-menu">                       
              <li><a href="/kontakty#st">Контакты</a></li>
              <li><a href="/principy-obsluzhivaniya#st">Принципы обслуживания</a></li>
              <li><a href="/poryadok-obsluzhivaniya-1#st">Порядок обслуживания</a></li>
              <li><a href="/net-zaryadki#st">Проблемы с зарядкой</a></li>
              <li><a href="/remont-apple#st">Ремонт Apple</a></li>              
              <li><a href="/articles#st">Статьи</a></li>
              <li><a href="/tekhnicheskaya-informaciya#st">Техническая информация</a></li>
              <li><a href="/yuridicheskaya-informaciya#st">Юридическая информация</a></li>       
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row" id="panno">  
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 310px; height: 320px;">      
        <p style="text-align: center; font-family: Century Gothic; font-size: 1.2em; font-weight: bolder; margin-bottom: 0px;">Сервисный центр M-FIX
        </p>       

        <p style="font-family: Century Gothic; font-weight: bolder; text-align: center;"><span style="font-size: 1.4em;">&#x231a;&#32;</span>с 11-00 до 20-00 без выходных
        </p>
        <p style="text-align: center; font-family: Century Gothic; font-size: 1.2em; font-weight: bolder; margin-bottom: 4px;">Контактная информация:
        </p>          
        <p class="hidden-xs" style="font-family: Century Gothic; font-size: 1.1em; font-weight: bolder; text-align: center;"><span style="font-size: 1.3em;">&#9990; </span>8-029-1169801 (Velcom)
        </p>     
        <a class="call visible-xs" href="tel:+375291169801"><span style="font-size: 1.2em;">&#9990; </span>Позвонить 8-029-1169801 Velcom</a>
                 
        
        
          
          
            <a class="viber" href="viber://add?number=375291169801">Связаться через Viber</a>         
                  
        
        
          
            
          
            <p style="font-size: 1.1em; font-weight: bold; font-family: Century Gothic; text-align: center; margin-top: 8px; margin-bottom: 2px;"><span>&#x260e; </span>8-017-2027610 (МГТС)</p>
                  
        
        <p style="text-align: center; font-weight: bold; margin-bottom: 0px;">
          Наш адрес:
        </p>
        <p style="text-align: center; font-family: Century Gothic; font-weight: bold; margin-bottom: 0px; margin-top: 0px;">
          г. Минск, Фрунзенский район,  
        </p>
        <p style="text-align: center; font-family: Century Gothic; font-weight: bold; margin-bottom: 0px;">
          ул. Дунина-Марцинкевича, д.11 
        </p>
        <p style="text-align: center;font-family: Century Gothic; font-weight: bold; margin-bottom: 0px;">
          ТЦ "Раковский Кирмаш" .
        </p>
        <p style="text-align: center; font-family: Century Gothic; font-weight: bold; margin-bottom: 0px;">
          2-ой этаж, павильон 15/3
        </p>      
        <p style="text-align: center; font-family: Century Gothic; font-weight: bold;">
         рядом со ст. м. ПУШКИНСКАЯ
        </p>        
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 310px; height: 320px;">      
      <img id="logo" src="/assets/img/business_image.jpg" alt="Сервисный центр M-FIX, информация">     
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 310px; height: 320px;">    
        <p style="font-weight: bolder; font-size: 1.0em; text-align: center; margin-left: 3px;">
        НАС ВЫБИРАЮТ ПОТОМУ, ЧТО МЫ РАБОТАЕМ
        </p>      
        <dl style="margin-bottom: 0px;">
         <dt style="font-weight: bolder; text-align: center;">Рационально:</dt>
         <dd style="text-align: center; font-weight: bolder; font-style: italic;  font-size: 0.75em;">многолетний опыт работы позволяет правильно произвести диагностику и выполнить ремонт наиболее эффективным способом</dd> 
         <dt style="font-weight: bolder; text-align: center;">Качественно:</dt>
         <dd style="text-align: center; font-weight: bolder; font-style: italic; font-size: 0.75em;">на все выполненные работы предоставляется гарантия</dd>
         <dt style="font-weight: bolder; text-align: center;">Эффективно:</dt>
         <dd style="text-align: center; font-weight: bolder; font-style: italic; font-size: 0.75em;">качественные комплектующие и правильно организованный рабочий процесс сэкономят Ваше время и деньги.</dd>
         <dt style="font-weight: bolder; text-align: center;">Доступно:</dt>
         <dd style="text-align: center; font-weight: bolder; font-style: italic; font-size: 0.75em;">мы находимся недалеко от метро и работаем без выходных.</dd>
        </dl>  
    </div>
    <div class="block col-lg-3 col-md-6 col-sm-6 col-xs-12" style="width: 320px; height: 320px; padding-top: 30px; padding-bottom: 20px;">
      <p style="text-align: center; font-weight: bolder; font-size: 1.2em;">Проложить маршрут</p>
      <a class="google" href="https://www.google.com/maps/dir//M-FIX+%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD%D1%82+%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BE%D0%B2+%D0%B8+%D0%BF%D0%BB%D0%B0%D0%BD%D1%88%D0%B5%D1%82%D0%BE%D0%B2,+%D1%83%D0%BB.+%D0%94%D1%83%D0%BD%D0%B8%D0%BD%D0%B0-%D0%9C%D0%B0%D1%80%D1%86%D0%B8%D0%BD%D0%BA%D0%B5%D0%B2%D0%B8%D1%87%D0%B0+11,+%D0%9C%D0%B8%D0%BD%D1%81%D0%BA/@53.9070243,27.4902124,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x46dbc54ed15cb46b:0x5eeb68b0931c91fa!2m2!1d27.4924011!2d53.9070243">google maps</a>
      <a class="yandex" href="https://yandex.by/maps/157/minsk/?ll=27.491771%2C53.906846&mode=routes&rtext=~53.906841%2C27.491775&rtt=auto&z=17">яндекс карты</a>
      <div style="margin-top: 50px;">
        <a class="question" href="https://www.google.com/search?q=M-FIX+%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD%D1%82+%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BE%D0%B2+%D0%B8+%D0%BF%D0%BB%D0%B0%D0%BD%D1%88%D0%B5%D1%82%D0%BE%D0%B2&ludocid=6839675566683886074&lsig=AB86z5X6KWN92aPC2EKr1LivoyoY#fpstate=lie&lpqa=a,,d,1">Задайте вопрос мастеру</a>        
      </div>      
      <p style="text-align: center; font-weight: bolder; font-size: 1.3em; margin-top: 40px;">Оставьте отзыв</p>
      <a class="review" href="https://www.google.com/search?q=M-FIX+%D0%A0%D0%B5%D0%BC%D0%BE%D0%BD%D1%82+%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%BE%D0%B2+%D0%B8+%D0%BF%D0%BB%D0%B0%D0%BD%D1%88%D0%B5%D1%82%D0%BE%D0%B2&ludocid=6839675566683886074&lsig=AB86z5X6KWN92aPC2EKr1LivoyoY#fpstate=lie&lrd=0x46dbc54ed15cb46b:0x5eeb68b0931c91fa,3,,,">google my business</a>
      <a class="review" href="https://yandex.by/maps/org/m_fix_by/180797035006/?add-review=true&ll=27.491771%2C53.906846&z=17">яндекс справочник</a>      
    </div>              
  </div>    
  </div>
  
  <div class="wrapper">      
    <div class="container">        
      <div class="row">          
        <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3"> <!-- Меняем блоки местами col-lg-push-3 -->
          <form role="search" action="/search#st" method="get" class="hidden-lg" style="margin-right: 30px;">
            <div class="form-group">
              <div class="input-group">
                <input style="text-align: center; font-size: 1.3em;" type="search" name="q_search" class="form-control input-lg" placeholder="Название модели">
                <div class="input-group-btn">
                  <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
              </div>
            </div>
          </form>
          <br> 
          
          <!-- header end -->
	
