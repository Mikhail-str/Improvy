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
        <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="/js/code.js" type="text/javascript"></script>        
        <link rel="stylesheet" href="/css/jquery-ui-1.9.0.custom.css" />
        <script src="/js/jquery-ui.js"></script>
        <script src="/js/reg.js"></script>
        <script src="/js/select.js"></script>
        <script src="/js/addcourse.js"></script>
        <script src="/js/addvenue.js"></script>
		    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Textarea edit -->
         <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-wysihtml5.css"></link>


        <script type="text/javascript">        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-30181385-1']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();        
        </script>  
        <script src="/bootstrap/js/wysihtml5-0.3.0.js"></script>
        <script src="/bootstrap/js/bootstrap-wysihtml5.js"></script>  
        <!-- Textarea edit  end     -->
	</head>
 
	<body >    
        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-header" id="modal-header">
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
                
          </div>
         
          <div class="modal-footer">
           <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
        <div class = "content">
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
                                    echo("<li><a href='#enter' id='b3'>Вход</a></li>
                                      <li><button class='btn btn-primary' type='button' id='b'>Добавить курсы</button></li>");
                                    } else {
                                        $compname = $_SESSION['name'];
                                        echo "<li><a href='/$compname' id='b1'>Личный кабинет</a></li>
                                        <li><a href='#exit' id='b2'>Выход</a></li>";
                                    }
                                    ?>                         
                                </ul>
                            </div>
                        </div>
                    </div>
              
        </header>
        <?php include 'application/views/'.$content_view; ?>
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="span6">

                    </div>
                    <div class="span6">

                    </div>
                </div>
            </div>
        </footer> 
				
	</body>
</html>
