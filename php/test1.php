<div class="well well-small" id="about">
            <h6>� ��������</h6>

			<?php 
                       $data1 = mysql_query("SELECT *
                                  FROM companies
                                  where companies.compname_eng = 'summerhouse'");

                while($row = mysql_fetch_array($data1)) 
                {
                    $text_description =  $row['about'];
                }
                
                
                if (isset($_POST['action'])) {
                    if (!($_POST['action']=='2'))    {                 
                        if (($_POST['action_save']=='1'))    {
                            //������ � ���� ������
                            $text_description = $_POST["test"];
                            $compid = $_SESSION['id'];
                            mysql_query("UPDATE  `improvy`.`companies` 

                                         SET  `about` = '$text_description' 
                                         WHERE  `companies`.`id_company` = $compid ");
                        }                               
                        echo '<form name="frm" method="POST">
                                <input type="submit" value="�������������!" class="button_edit_textarea" >';                        
                        //����� �� ���� ������ 
                        echo $text_description."<br/>"; 
                        //���� ��� ����� ����
                        echo '<input type="hidden" name="action" value=2>
                              </form>';                            				
                    }
                    else {   
                        echo '<form name="frm" method="POST">';
                        echo '<input type="submit" value="���������" class="btn button_save">';
                        //���� ��� ����� ����
                        echo '<input type="hidden" name="action" value=1>';
                        //���� ��� ����������
                        echo '<input type="hidden" name="action_save" value=1>';
                        //����� �� ���� ������  
                        echo '<textarea class="textarea" placeholder="������� �������� ����� ��������." style="width: 662px; height: 200px" name="test">'.$text_description.'</textarea>';                           
                        
                        echo '</form>';     
                    }
                }
                else{
                    echo '<form name="frm" method="POST">';
                    if (isset($_SESSION['id']))
                    {                        
                        echo '<input type="submit" value="�������������!" class="button_edit_textarea" >';
                    }
                    //����� �� ���� ������ 
                    echo $text_description."<br/>"; 
                    //���� ��� ����� ����
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