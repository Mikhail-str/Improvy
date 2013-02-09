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
		<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Textarea edit -->
         <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-wysihtml5.css"></link>
        <style type="text/css" media="screen">
        	.jumbo {
        		font-size: 20px;font-weight:normal;padding:14px 24px;margin-right:10px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;
				}
            .button_edit_textarea {
                position:relative;
                top: -45px;
                left:10px;
                float:right;
                width:  48px !important;  
                height: 48px; 
                margin: 0;
                padding:0;
                border: 0;
                background: transparent url('images/png/edit_textarea.png') no-repeat center top;
                text-indent: -1000em;
                cursor: pointer;
                opacity: 0.5; 
                cursor: hand;              
            }
            .button_edit_textarea:hover, .new_coorse_add_button:hover, .image_collapse_open:hover{
                opacity: 1.0;
            }
             
             ..image_collapse_open{
                width:60px !important;
                height:60px !important;
             }
            .new_coorse_add_button, .image_collapse_open{
                opacity: 0.7;   
            }
            
            .button_save {
                float:right;
                 position:relative;             
            }
            .new_coorse_add_button{
                width:  64px !important;  
                height: 64px; 
                margin: auto auto !important;
                padding:0;
                border: 0;
                cursor: pointer;
                
                cursor: hand;               
            }
            .accordion-group:hover, .accordion-group:active, .accordion-group:focus {                
                background: #f5f5f5;
            }
            .accordion-group {
                margin:0;                                
                border-radius:0px;
            }
            #new_course_text {
                font-size: 12px;
            }            
            .accordion-toggle{
                padding: 0px !important;
            }
            .table_course {
                border:0px;
                width:100%;
                height:85px !important;
            }
            .picture_course {
                
                margin: 0;
            }
            .picture_course img{
                padding: 0px 10px 0px 0px;
                height: 80px;
                width:140px;
                margin: 0px;
            }
            .name_course {
                float:left;
            }
            .name_course a, {
            text-decoration: none;
            color:#0381cb;
            }
            .name_course a:hover {
                text-decoration: none;
                
            }
            .price_course {
                color:#e28768;
                text-align:right;
                padding: 5px 10px 5px 10px;
            }
            .description_course {
                word-wrap: break-word;
            }
            .controls file {
                
            }
            

            
            .type_file { /* блок-родитель, внутри которого будут позиционироваться остальные элементы для реализации стильного поля выбора файлов */
                position: relative;
                height: 26px;
            }
            .inputFile { /* поле type="file" */
                z-index: 2; /* z-слой должен быть больше, чем у блока с оформлением */
                filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); /* делаем поле абсолютно прозрачным */
                -moz-opacity: 0;
                -khtml-opacity: 0;
                opacity: 0;
                width: 200px; /* задаем ширину для всех браузеров. Для firefox подбираем значение параметра size в поле */
            }
            .fonTypeFile { /* блок с оформлением */
                width: 77px; /* размеры картинки для оформления */
                height: 32px;
                position: absolute;
                top: 3px;
                left: 230px;
                z-index: 1; /* z-слой меньше, чем у поля выбора файла */
            }
            .inputFileVal { /* поле, в котором будет показан результат выбора файла */
                position: relative;
                top: 3px;
                left: 0px;
                z-index: 2;
                width: 206px;
                background: none;
                border: none;
            }
        </style>        
        
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
                          <button class="btn btn-primary" type="submit" id="ent" href='#'>Войти</button>                                                 
                        </div>
                      </div>                      
                </form>
                
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
