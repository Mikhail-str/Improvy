<div class="container">
<div class="row">
    <div class="span3">
        <div class="thumbnail" style="padding:5px;">
            <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
            <div id="ymaps-map-id_135272645449970217571" style="width: 210px; height: 300px;"></div>
            <script type="text/javascript">
            function fid_135272645449970217571(ymaps) {
                var map = new ymaps.Map("ymaps-map-id_135272645449970217571", {center: [30.381683621829444, 59.950885785505406], zoom: 13, type: "yandex#map"});
                    map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
                    map.geoObjects.add(new ymaps.Placemark([30.381806211813883, 59.9429719377242], {balloonContent: "Q-Йога", iconContent: "2"}, {preset: "twirl#redIcon"}));
                    };</script>
            <script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135272645449970217571"></script>
            <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
         </div>       
        

        <br />
        <form action="/summerhouse" method="post">
<!--        <select onchange="this.form.submit()" name="location" id="select">
                <option value="all">Выберите адрес</option>
                <option value="Хухуху">Зал на Комендантском</option>
                <option value="pioner">Зал на Пионерской</option>
                <option value="krest">Зал на Крестовском</option>
                <option value="vas">Зал на Ваське</option>
                <option value="punk">Зал в ПУНКе</option>
            </select>
-->
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox1" value="option_all"> Показать все
        </label><br />
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> Зал на Комендантском
        </label><br />
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> Зал на Пионерской
        </label><br />
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал на Крестовском
        </label><br />     
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал на Ваське
        </label><br />
        <label class="checkbox inline">
            <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал в ПУНКе
        </label><br /><br />
        <a href=""><button class="btn btn-primary">Добавить адрес</button></a>
        </form>
        
        
    </div>
    <div class="span9">
        <div class="thumbnail">
            <img src="/images/comp.jpg" />
        </div>
        <br />
        <div class="well well-small" id="about">
            <h6>О компании</h6>

			<?php 


                while($row = mysql_fetch_array($data[1])) 
                {
                    $text_description =  $row['about'];
                }
                if (isset($_POST['action'])) {
                      
                   
                    if (!($_POST['action']=='2'))    {                 
                        if (($_POST['action_save']=='1'))    {
                            //Запись в базу данных
                            $text_description = $_POST["test"];
                            $compid = $_SESSION['id'];
                            mysql_query("UPDATE  `improvy`.`companies` 

                                         SET  `about` = '$text_description' 
                                         WHERE  `companies`.`id_company` = $compid ");
                        }                               
                        echo '<form name="frm" method="POST">';
                        echo '<input type="submit" value="Редактировать!" class="button_edit_textarea" >';                        
                        //Вывод из базы данных 
                        echo $text_description."<br/>"; 
                        //Флаг для смены окна
                        echo '<input type="hidden" name="action" value=2>';
                        echo '</form>';                            				
                    }
                    else {   
                        echo '<form name="frm" method="POST">';
                        echo '<input type="submit" value="Сохранить" class="btn button_save">';
                        //Флаг для смены окна
                        echo '<input type="hidden" name="action" value=1>';
                        //Флаг для сохранения
                        echo '<input type="hidden" name="action_save" value=1>';
                        //Вывод из базы данных  
                        echo '<textarea class="textarea" placeholder="Введите описание вашей компании." style="width: 662px; height: 200px" name="test">'.$text_description.'</textarea>';                           
                        
                        echo '</form>';     
                    }
                }
                else{
                    echo '<form name="frm" method="POST">';
                    if (isset($_SESSION['id']))
                    {                        
                        echo '<input type="submit" value="Редактировать!" class="button_edit_textarea" >';
                    }
                    //Вывод из базы данных 
                    echo $text_description."<br/>"; 
                    //Флаг для смены окна
                    echo '<input type="hidden" name="action" value=2>';
                    echo '</form>';   
                }                               
            ?>
				        <script>
							$('.textarea').wysihtml5();
						</script>
						<script type="text/javascript" charset="utf-8">
							$(prettyPrint);
						</script>
        </div>


 
<div id="courses">
    <div class="accordion" id="accordion2">

            
               <?php                    
                    if(mysql_num_rows($data[2]) > 0) {
                        $i=1;
                        

                        while($row = mysql_fetch_array($data[2])) {
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
                                             ОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание".$row['description']."
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                ");
                        $i=$i+1;
                        }
                    } else echo("<div class='accordion-group'>
                                    <div class='accordion-heading' >
                                    <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapse2'>
                                        Следуйте указаниям ниже, чтобы добавить первый курс.
                                    </a>
                                    </div>
                                 </div>
                                 <div id='collapse2' class='accordion-body collapse'>
                                     <div class='accordion-inner'> 
                                          хуй вам
                                     </div>
                                 </div>
                                ");
                ?>
             
                

        <div class="accordion-group">
            <div class="accordion-heading" >            
               <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNew" id="APM">
                <div class="new_coorse_add_button">
                    <img id="PM" src="images/png/new_coorse_add_new.png"/>
                </div>                      
                </a>                      
             </div>                             
              <div id="collapseNew" class="accordion-body collapse">
                  <div class="accordion-inner" style="background: #f5f5f5;">                                  
                      <form class="form-horizontal" method="POST" action="" id="regForm" name="form_new_course">
                        <div class="control-group">
                            <label class="control-label">Название курса</label>
                            <div class="controls">
                            <input type="text" id="name_new_course" placeholder="Название курса" name="name_new_course"/></input>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Тип курса</label>
                            <div class="controls">
                                <select name="type_new_course" id="type_new_course">
                                        <option value="">Выберите тип курса</option>
                                    <?php
                                        $type_course = mysql_query("
                                            SELECT id_type, name 
                                            FROM  `type` 
                                        ");
                                        while($row = mysql_fetch_array($type_course)) 
                                        {
                                        echo ('                                         
                                            <option value="'.$row["id_type"].'">'.$row["name"].'</option>
                                            ');
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Подтип курса</label>
                            <div class="controls">
                                <select name="under_type_new_course" id="under_type_new_course">
                                    <option value="">Выберите подтип курса</option>
                                    <?php
                                    echo ('                               
                                    <option value="komen">Английский язык</option>
                                    ')
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Описание</label>
                            <div class="controls">
                                <textarea class="textarea1" id="description_new_course" placeholder="Введите описание курса" name="description_new_course" style="width: 460px; height: 170px"></textarea>                             
                            </div>
                                <script>
			                         $('.textarea1').wysihtml5();
                                </script>
                        </div>                        
                        <div class="control-group">
                            <label class="control-label" for="inputImageCourse">
                                Выберите картинку<br/>Внимание!Картинка должна быть формата 200px*700px
                            </label>
                            <div class="controls" id="new_course_text">
                                <div class="type_file">
                                    <input type="text" class="inputFileVal" readonly="readonly" id="fileName" />
                                    <input type="file" size="35" class="inputFile" id="image_new_course_local" onchange='document.getElementById("fileName").value=this.value' name="image_new_course_local"/>
                                    <div class="fonTypeFile" >
                                    <input type="button" class="btn"  onclick="document.forms['form_new_course']['image_new_course_local'].click()" value="Обзор">
                                    </div>
                                </div>
                                <br/>или добавьте ссылку на картинку <br/>
                                <input type="text" id="image_new_course_link" placeholder="Ссылка" name="image_new_course_link"></input>
                                
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">
                                Выберите расположение
                                
                            </label>
                            <div class="controls" id="new_course_text">
                               
                                    <?php
                                    echo ('
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Зал на Комендантском
                                    </label><br />
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Зал на Пионерской
                                    </label><br />
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал на Крестовском
                                    </label><br />     
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал на Ваське
                                    </label><br />
                                    <label class="checkbox inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option3"> Зал в ПУНКе
                                    </label><br />
                                    ');                          
                                    /*echo ('
                                    <select name="location_new_course" id="select" multiple="multiple">
                                        <option value="">Выберите адрес</option>
                                        <option value="komen">Зал на Комендантском</option>
                                        <option value="pioner">Зал на Пионерской</option>
                                        <option value="krest">Зал на Крестовском</option>
                                        <option value="vasil">Зал на Ваське</option>
                                        <option value="punk">Зал в ПУНКе</option>
                                    </select>
                                    ');*/
                                    ?>
                                <br />или добавьте новое место проведения курса<br />
                                <input type="text" id="name_new_venue" placeholder="Название, если есть" name="name_new_venue">
                                <input type="text" id="countre_adress_new_venue" placeholder="Город" name="countre_adress_new_venue">
                                <input type="text" id="phone_new_venue" placeholder="Контактный телефон" name="phone_new_venue">
                                <input type="text" id="street_adress_new_venue" placeholder="Улица" name="street_adress_new_venue">
                                <input type="text" id="metro_new_venue" placeholder="Метро" name="metro_new_venue">
                                <input type="text" id="home_adress_new_venue" placeholder="Дом" name="home_adress_new_venue">
                                <input type="text" id="found_adress_new_venue" placeholder="Как найти" name="found_adress_new_venue">
                                <input type="text" id="corpus_adress_new_venue" placeholder="Корпус" name="corpus_adress_new_venue">
                                
                                
                            </div>
                        </div>   
                    <p>Новый курс будет добавлен сразу после проверки модератором
                            <input class="btn" value="Добавить" id="badd"/></p>
                            
                          

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>      

        </div>
        
    </div>
</div>
</div>