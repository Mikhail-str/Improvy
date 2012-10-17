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
        
       <link rel="stylesheet" href="/css/jquery-ui.css" />
       <script src="/js/jquery-ui.js"></script>

		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
	</head>
	<body >
        <header>
                
                    <div class="navbar navbar-fixed-top">
                        <div class="navbar-inner ">
                            <div class="container">
                                <a class="brand" href="/main">ImprovY</a>
                                <a class="brand" href="/main">Санкт-Петербург</a>
                                <ul class="nav pull-right">
                                    <li><a href='/contacts'>Контакты</a></li>
                                    <li><button class="btn btn-primary" type="button">Добавить курсы</button></li>
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