<div class="container">
    <div class="row">
        <div class="span3">

<div id="side" >

  <h3><li><a href="sport">Спорт/Фитнес</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="yoga">Yoga</a></li>
                    <li><a href="pilates">Pilates</a></li>
                    <li><a href="strip-dance">Strip Dance</a></li>
                    <li><a href="tennis">Теннис</a></li>
                    <li><a href="run">Бег</a></li>
                    <li><a href="streching">Стречинг</a></li>
  </ul>

  <h3><li><a href="martial">Боевые искусства</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="box">Бокс</a></li>
                    <li><a href="karate">Каратэ</a></li>
                    <li><a href="sambo">Самбо</a></li>
                    <li><a href="dzudo">Дзюдо</a></li>
                    <li><a href="tai-box">Тайский бокс</a></li>
  </ul>

  <h3><li><a href="computer">Компьютерные курсы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="programming">Программирование</a></li>
                    <li><a href="seo">SEO</a></li>
                    <li><a href="smm">SMM</a></li>
                    <li><a href="design">Дизайн</a></li>
                    <li><a href="video-edit">Видеомонтаж</a></li>
                    </ul>
  </ul>

  <h3><li><a href="languages">Иностранные языки</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="english">Английский</a></li>
                    <li><a href="french">Французский</a></li>
                    <li><a href="spanish">Испанский</a></li>
                    <li><a href="italian">Итальянский</a></li>
                    <li><a href="german">Немецкий</a></li>
                    <li><a href="chinese">Китайский</a></li>
  </ul>

  <h3><li><a href="dance">Танцы</a></li></h3>
  <ul class="nav nav-list">
                    <li><a href="clubdance">Клубные танцы</a></li>
                    <li><a href="hiphop">Hip-Hop</a></li>
                    <li><a href="baldance">Бальные танцы</a></li>
                    <li><a href="childdance">Детские танцы</a></li>
                    <li><a href="bellydance">Танец живота</a></li>
                    <li><a href="tango">Танго</a></li>
  </ul>

</div>
        </div>

        <div class="span9">                  
            <div id="courses">
                <div class="accordion" id="accordion2">
                    <?php                                      
                    if(mysql_num_rows($data) > 0) {
                        $i=1;
                        while($row = mysql_fetch_array($data)) {
                        //echo $i."name_eng=".$row['name_eng'];
                        //echo "<br>".$i."eng=".$row['eng'];
                        //echo "<br>".$i."name_rus=".$row['name_rus'];
                        //echo "<br>".$i."price=".$row['price'];
                        //echo "<br>".$i."description=".$row['description'];
                        echo (" <div class='accordion-group'>                        
                                    <div class='accordion-heading' >
                                        <div class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' data-target='#collapse".$i."'>                                            
                                            
                                            <table class = 'table_course'><tr>
                                            <td width = '150px'>
                                            <div class = 'picture_course'>
                                                <a href=/".$row['compname_eng']."/".$row['coursename_eng'].">
                                                    <img src='../images/1.jpg'/>
                                                </a>
                                            </div>
                                            </td>
                                            <td>
                                            <div class='name_course'>
                                                <span class='page-header'> 
                                                    <h4>
                                                        <a href=/".$row['compname_eng']."/".$row['coursename_eng'].">".$row['coursename_rus']."</a>
                                                    </h4>
                                                    <p>
                                                        <small>".$row['compname_rus']."</small>
                                                    </p>
                                                </span>                                    
                                            </div>
                                            </td>
                                            <td>
                                            <div class='price_course'>
                                                    price".$row['price']."
                                            </div>
                                            </td>
                                            </tr></table>
                                        </div>                                                                               
                                    </div>
                                    <div id='collapse".$i."' class='accordion-body collapse'>
                                        <div class='accordion-inner'>
                                            <div class = 'description_course'> 
                                             ".$row['description']."
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                ");
                        $i=$i+1;

                        }
                    } else 
                    echo("  <div class='accordion-group'>
                                <div class='accordion-heading' >
                                    <div style='padding:5px 10px 5px 30px ;')>
                                        <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse2'>
                                            К сожалению, курсов данного типа еще нет в нашей базе.<br>
                                            В ближайшее время будет пополнение курсов<br> 
                                            Ждите новостей в группе вконтакте
                                        </a>
                                    </div>
                                </div>
                             </div>
                             <div id='collapse2' class='accordion-body collapse'>
                                 <div class='accordion-inner'> 
                                      хуй вам
                                 </div>
                             </div>
                        ");
  
                 ?>
                </div>
            </div>
        </div>
    </div>

</div>