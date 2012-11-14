<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Imptovy - это место, где собраны все образовательные курсы и спортивные секции вашего города." />
		<meta name="keywords" content="" />
		<title>ImprovY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link href="/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="/js/code.js" type="text/javascript"></script>        
        <link rel="stylesheet" href="/css/jquery-ui-1.9.0.custom.css" />
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/reg.js"></script>
        <script src="/js/select.js"></script>
		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        
	</head>
  <?php
  /*  session_start();
    include '/php/db.php';

    
    if (isset($_COOKIE['login'])) {
      $ck = $_COOKIE['login'];
       $result = mysql_query("SELECT `id`,`pass` FROM `users` WHERE `pass`='$ck'");

       $row = mysql_fetch_array($result);          
        $_SESSION['id'] = $row['id'];
     } */
  ?>
	<body >    
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">ImprovY</h3>
          </div>
          <div class="modal-body">
                <form class="form-horizontal" method="POST" action="" id="entForm">
                     <div class="control-group">
                        <label class="control-label" for="inputEmail">Email</label>
                        <div class="controls">
                          <input type="text" id="entEmail" placeholder="Email" name="Email">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Пароль</label>
                        <div class="controls">
                          <input type="password" id="entPassword" placeholder="Пароль" name="Pass">
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">                          
                          <button class="btn btn-primary" type="button" id="ent" href='#'>Войти</button>                                                 
                        </div>
                      </div>                      
                </form>
                <p id="thx" style="display:none">Спасибо за регистрацию! нажмите <a href="/main">сюда</a> чтобы начать работать</p>
          </div>
          <div class="modal-footer">
           <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button> -->
          </div>
        </div>

        <header>                
                    <div class="navbar navbar-fixed-top">
                        <div class="navbar-inner ">
                            <div class="container">
                                <a class="brand" href="/main">ImprovY</a>
                                <a class="brand" href="/main">Санкт-Петербург</a>
                                <ul class="nav pull-right">
                                    <li><a href='/contacts'>Контакты</a></li>
                                    <?php
                                   if (!isset($_SESSION['id'])) {
                                    echo("<li><a href='#' id='b3'>Вход</a></li>
                                      <li><button class='btn btn-primary' type='button' id='b'>Добавить курсы</button></li>");
                                    } else echo("<li><a href='#' id='b1'>Личный кабинет</a></li>
                                    <li><a href='#' id='b2'>Выход</a></li>");
                                    ?>
                                    <?php 
//                                        
//                                        switch($content_view){
//                                            case "main_view.php":   echo "<li class='active'><a href='/main'>Главная</a></li>
//                                                                    <li><a href='/contacts'>Контакты</a></li>
//                                                                    <li><a href='/portfolio'>О нас</a></li>" ; break;
//                                            case "contacts_view.php":   echo "<li><a href='/main'>Главная</a></li>
//                                                                    <li class='active'><a href='/contacts'>Контакты</a></li>
//                                                                    <li><a href='/portfolio'>О нас</a></li>"; break;
//                                            case "portfolio_view.php":   echo "<li ><a href='/main'>Главная</a></li>
//                                                                    <li><a href='/contacts'>Контакты</a></li>
//                                                                    <li class='active'><a href='/portfolio'>О нас</a></li>";break;
//                                            
//                                        }
//                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
              
        </header>
        <br />
        <?php include 'application/views/'.$content_view; ?>
        <footer class="footer">
            <div class="container">
                <div class="row">
                
                </div>
            </div>
        </footer> 
				
	</body>
</html>

