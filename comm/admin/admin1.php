<?php
  include("cap.php");

  if(isset($_POST['go']))
    {      $f=fopen("conf/mes.txt","w");

      if($_POST['bgcolor']=="")fwrite($f,"0 ���� ��������*#ffffff\r\n");
         else fwrite($f,"0 ���� ��������*".$_POST['bgcolor']."\r\n");

      //���������
       if($_POST['head_font_color']=="")fwrite($f,"1 ���� ������ ���������*#000000\r\n");
         else fwrite($f,"1 ���� ������ ���������*".$_POST['head_font_color']."\r\n");
       fwrite($f,"2 ������ ������ ���������*".$_POST['head_font_size']."\r\n");
       fwrite($f,"3 ���������� ������ ���������*".$_POST['head_font_type']."\r\n");
       fwrite($f,"4 �������� ������ ���������*".$_POST['head_font_width']."\r\n");
       fwrite($f,"5 �������� ������ ���������*".$_POST['head_font_name']."\r\n");

       if(isset($_POST['view_head']))  fwrite($f,"6 ���������� ���������*1\r\n");
       else  fwrite($f,"6 ���������� ���������*2\r\n");

       //�����
        if($_POST['form_font_color']=="")fwrite($f,"7 ���� ������ �����*#000000\r\n");
         else fwrite($f,"7 ���� ������ �����*".$_POST['form_font_color']."\r\n");
       fwrite($f,"8 ������ ������ �����*".$_POST['form_font_size']."\r\n");
       fwrite($f,"9 ���������� ������ �����*".$_POST['form_font_type']."\r\n");
       fwrite($f,"10 �������� ������ �����*".$_POST['form_font_width']."\r\n");
       fwrite($f,"11 �������� ������ �����*".$_POST['form_font_name']."\r\n");

       //������
        if($_POST['but_size']=="" || !is_numeric($_POST['but_size']) || $_POST['but_size']< 20)
            fwrite($f,"12 ������ ������ *80\r\n");
      else  fwrite($f,"12 ������ ������ *".$_POST['but_size']."\r\n");

     if($_POST['but_color']=="") fwrite($f,"13 ���� ������ *#808080\r\n");
     else fwrite($f,"13 ���� ������ *".$_POST['but_color']."\r\n");

      if($_POST['but_line_color']=="") fwrite($f,"14 ���� ����� ������ *#ffffff\r\n");
     else fwrite($f,"14 ���� ����� ������ *".$_POST['but_line_color']."\r\n");

     fwrite($f,"15 ������ ����� ������ *".$_POST['but_line_size']."\r\n");
     fwrite($f,"16 ��� ����� ������ *".$_POST['but_line_type']."\r\n");


      if($_POST['but_font_color']=="") fwrite($f,"17 ���� ������ ������ *#000000\r\n");
     else fwrite($f,"17 ���� ������ ������ *".$_POST['but_font_color']."\r\n");

     fwrite($f,"18 ������ ������ ������ *".$_POST['but_font_size']."\r\n");
     fwrite($f,"19 ���������� ������ ������ *".$_POST['but_font_type']."\r\n");
     fwrite($f,"20 �������� ������ ������ *".$_POST['but_font_width']."\r\n");
     fwrite($f,"21 �������� ������ ������ *".$_POST['but_font_name']."\r\n");

     //��������
      if($_POST['blok_color']=="") fwrite($f,"22 ���� ����� ��������� *#ffffff\r\n");
     else fwrite($f,"22 ���� ����� ��������� *".$_POST['blok_color']."\r\n");

        if($_POST['blok_size']=="" || !is_numeric($_POST['blok_size']) || $_POST['blok_size']< 20)
            fwrite($f,"23 ������ ����� ��������� *600\r\n");
      else  fwrite($f,"23 ������ ����� ��������� *".$_POST['blok_size']."\r\n");

     if($_POST['line_color']=="") fwrite($f,"24 ���� ����� ����� ��������� *#ffffff\r\n");
     else fwrite($f,"24 ���� ����� ����� ��������� *".$_POST['line_color']."\r\n");

     fwrite($f,"25 ������ ����� ����� ��������� *".$_POST['line_size']."\r\n");
     fwrite($f,"26 ��� ����� ����� ��������� *".$_POST['line_type']."\r\n");

     if($_POST['bot_line_color']=="") fwrite($f,"27 ���� ������ ����� ����� ��������� *#ffffff\r\n");
     else fwrite($f,"27 ���� ������ ����� ����� ��������� *".$_POST['bot_line_color']."\r\n");

     fwrite($f,"28 ������ ������ ����� ����� ��������� *".$_POST['bot_line_size']."\r\n");
     fwrite($f,"29 ��� ������ ����� ����� ��������� *".$_POST['bot_line_type']."\r\n");

     if($_POST['date_font_color']=="") fwrite($f,"30 ���� ������ ���� *#000000\r\n");
     else fwrite($f,"30 ���� ������ ���� *".$_POST['date_font_color']."\r\n");

     fwrite($f,"31 ������ ������ ���� *".$_POST['date_font_size']."\r\n");
     fwrite($f,"32 ���������� ������ ���� *".$_POST['date_font_type']."\r\n");
     fwrite($f,"33 �������� ������ ���� *".$_POST['date_font_width']."\r\n");
     fwrite($f,"34 �������� ������ ���� *".$_POST['date_font_name']."\r\n");

     if($_POST['comm_font_color']=="") fwrite($f,"35 ���� ������ ��������� *#000000\r\n");
     else fwrite($f,"35 ���� ������ ��������� *".$_POST['comm_font_color']."\r\n");

     fwrite($f,"36 ������ ������ ��������� *".$_POST['comm_font_size']."\r\n");
     fwrite($f,"37 ���������� ������ ��������� *".$_POST['comm_font_type']."\r\n");
     fwrite($f,"38 �������� ������ ��������� *".$_POST['comm_font_width']."\r\n");
     fwrite($f,"39 �������� ������ ��������� *".$_POST['comm_font_name']."\r\n");

     //���������
       //�������� ���������
      $_POST['navig_block_color_aktiv']=trim($_POST['navig_block_color_aktiv']);
      if($_POST['navig_block_color_aktiv']=="")fwrite($f, "40 ���� ����� ���������*#ffffff\r\n");
      else fwrite($f,"40 ���� ����� ���������*".$_POST['navig_block_color_aktiv']."\r\n");
      fwrite($f,"41 ������ ����� ���������*".$_POST['navig_block_size_aktiv']."\r\n");

      $_POST['navig_text_color_aktiv']=trim($_POST['navig_text_color_aktiv']);
      if($_POST['navig_text_color_aktiv']=="")fwrite($f, "42 ���� ������ ����� ���������*#000000\r\n");
      else fwrite($f,"42 ���� ������ ����� ���������*".$_POST['navig_text_color_aktiv']."\r\n");

      fwrite($f,"43 ������ ������ ����� ���������*".$_POST['navig_text_size_aktiv']."\r\n");
      fwrite($f,"44 ������ ������ ����� ���������*".$_POST['navig_text_font_aktiv']."\r\n");
      fwrite($f,"45 �������� ������ ����� ���������*".$_POST['navig_text_font_name_aktiv']."\r\n");


      @$_POST['navig_line_color_aktiv']=trim(@$_POST['navig_line_color_aktiv']);
      if(@$_POST['navig_line_color_aktiv']=="")fwrite($f, "46 ���� ����� ����� ���������*#ffffff\r\n");
      else fwrite($f,"46 ���� ����� ����� ���������*".$_POST['navig_line_color_aktiv']."\r\n");

      fwrite($f,"47 ������ ����� ����� ���������*".$_POST['navig_line_size_aktiv']."\r\n");


         //��������� ���������
      $_POST['navig_block_color_passiv']=trim($_POST['navig_block_color_passiv']);
      if($_POST['navig_block_color_passiv']=="")fwrite($f, "48 ���� ����� ���������*#ffffff\r\n");
      else fwrite($f,"48 ���� ����� ���������*".$_POST['navig_block_color_passiv']."\r\n");
      fwrite($f,"49 ������ ����� ���������*".$_POST['navig_block_size_passiv']."\r\n");

      $_POST['navig_text_color_passiv']=trim($_POST['navig_text_color_passiv']);
      if($_POST['navig_text_color_passiv']=="")fwrite($f, "50 ���� ������ ����� ���������*#000000\r\n");
      else fwrite($f,"50 ���� ������ ����� ���������*".$_POST['navig_text_color_passiv']."\r\n");

      fwrite($f,"51 ������ ������ ����� ���������*".$_POST['navig_text_size_passiv']."\r\n");
      fwrite($f,"52 ������ ������ ����� ���������*".$_POST['navig_text_font_passiv']."\r\n");
       fwrite($f,"53 �������� ������ ����� ���������*".$_POST['navig_text_font_name_passiv']."\r\n");

      @$_POST['navig_line_color_passiv']=trim(@$_POST['navig_line_color_passiv']);
      if(@$_POST['navig_line_color_passiv']=="")fwrite($f, "54 ���� ����� ����� ���������*#ffffff\r\n");
      else fwrite($f,"54 ���� ����� ����� ���������*".$_POST['navig_line_color_passiv']."\r\n");

      fwrite($f,"55 ������ ����� ����� ���������*".$_POST['navig_line_size_passiv']."\r\n");

      //���������
      fwrite($f,"56 ������� ���� *".$_POST['pos_date']."\r\n");

       if($_POST['count_comm']=="" || !is_numeric($_POST['count_comm']) || $_POST['count_comm']< 1)
            fwrite($f,"57 ��������� �� �������� *10\r\n");
      else  fwrite($f,"57 ��������� �� �������� *".$_POST['count_comm']."\r\n");

      if($_POST['count_chr']=="" || !is_numeric($_POST['count_chr']) || $_POST['count_chr']< 1)
            fwrite($f,"58 ������ � ��������� *500\r\n");
      else  fwrite($f,"58 ������ � ��������� *".$_POST['count_chr']."\r\n");

      fwrite($f,"59 ���� ������ *".$_POST['e-mail']."\r\n");

      if($_POST['oll_blok_color']=="") fwrite($f,"60 ���� ����� ����� ��������� *#ffffff\r\n");
     else fwrite($f,"60 ���� ����� ����� ��������� *".$_POST['oll_blok_color']."\r\n");

      fwrite($f,"61 ��������� ��������� *".$_POST['cod']."\r\n");

      //������
       if($_POST['cit_font_color']=="") fwrite($f,"62 ���� ������ ������ *#000000\r\n");
     else fwrite($f,"62 ���� ������ ������ *".$_POST['cit_font_color']."\r\n");

     fwrite($f,"63 ������ ������ ������ *".$_POST['cit_font_size']."\r\n");
     fwrite($f,"64 ���������� ������ ������ *".$_POST['cit_font_type']."\r\n");
     fwrite($f,"65 �������� ������ ������ *".$_POST['cit_font_width']."\r\n");
     fwrite($f,"66 �������� ������ ������ *".$_POST['cit_font_name']."\r\n");

      if($_POST['cit_line_color']=="") fwrite($f,"67 ���� ����� ������ *#ffffff\r\n");
     else fwrite($f,"67 ���� ����� ������ *".$_POST['cit_line_color']."\r\n");

     fwrite($f,"68 ������  ����� ������ *".$_POST['cit_line_size']."\r\n");
     fwrite($f,"69 ���  ����� ������ *".$_POST['cit_line_type']."\r\n");

       if($_POST['otv_font_color']=="") fwrite($f,"70 ���� ������ �������� *#000000\r\n");
     else fwrite($f,"70 ���� ������ �������� *".$_POST['otv_font_color']."\r\n");

     fwrite($f,"71 ������ ������ �������� *".$_POST['otv_font_size']."\r\n");
     fwrite($f,"72 ���������� ������ �������� *".$_POST['otv_font_type']."\r\n");
     fwrite($f,"73 �������� ������ �������� *".$_POST['otv_font_width']."\r\n");
     fwrite($f,"74 �������� ������ �������� *".$_POST['otv_font_name']."\r\n");


       if($_POST['date_cit_font_color']=="") fwrite($f,"75 ���� ������ ����_������ *#000000\r\n");
     else fwrite($f,"75 ���� ������ ����_������ *".$_POST['date_cit_font_color']."\r\n");

     fwrite($f,"76 ������ ������ ����_������ *".$_POST['date_cit_font_size']."\r\n");
     fwrite($f,"77 ���������� ������ ����_������ *".$_POST['date_cit_font_type']."\r\n");
     fwrite($f,"78 �������� ������ ����_������ *".$_POST['date_cit_font_width']."\r\n");
     fwrite($f,"79 �������� ������ ����_������ *".$_POST['date_cit_font_name']."\r\n");


      if($_POST['send_font_color']=="") fwrite($f,"80 ���� ������ �������� ������� *#000000\r\n");
     else fwrite($f,"80 ���� ������ �������� ������� *".$_POST['send_font_color']."\r\n");

     fwrite($f,"81 ������ ������ �������� ������� *".$_POST['send_font_size']."\r\n");
     fwrite($f,"82 ���������� ������ �������� ������� *".$_POST['send_font_type']."\r\n");
     fwrite($f,"83 �������� ������ �������� ������� *".$_POST['send_font_width']."\r\n");
     fwrite($f,"84 �������� ������ �������� ������� *".$_POST['send_font_name']."\r\n");


      if($_POST['fon_cit']=="") fwrite($f,"85 ��� ������ *#ffffff\r\n");
     else fwrite($f,"85 ��� ������ *".$_POST['fon_cit']."\r\n");

      fclose($f);
    }



$conf=file("conf/mes.txt");
for($i=0; $i<count($conf); $i++)
  {  	$conf[$i]=trim($conf[$i]);
  	$expl=explode("*",$conf[$i]);
    $conf[$i]=$expl[1];
  }

//�������� �������================================
    for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[81]==$i) $sel_send_font_size[$n]="selected";

      if($conf[82]=="italic")$sel_send_font_type[1]="selected";
      if($conf[82]=="normal")$sel_send_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[83]==$i) $sel_send_font_width[$n]="selected";
   else $sel_send_font_width[$n]="";
 }


if($conf[84]=="Times New Roman, serif")$sel_send_font_name[0]="selected";
if($conf[84]=="Arial, sans-serif")$sel_send_font_name[1]="selected";
if($conf[84]=="Tahoma, sans-serif")$sel_send_font_name[2]="selected";
if($conf[84]=="Verdana, sans-serif")$sel_send_font_name[3]="selected";
if($conf[84]=="Courier New, monospace")$sel_send_font_name[4]="selected";
if($conf[84]=="Calisto MT, cursive")$sel_send_font_name[5]="selected";
if($conf[84]=="Broadway, fantasy")$sel_send_font_name[6]="selected";



//������================================
    for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[63]==$i) $sel_cit_font_size[$n]="selected";

      if($conf[64]=="italic")$sel_cit_font_type[1]="selected";
      if($conf[64]=="normal")$sel_cit_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[65]==$i) $sel_cit_font_width[$n]="selected";
   else $sel_cit_font_width[$n]="";
 }


if($conf[66]=="Times New Roman, serif")$sel_cit_font_name[0]="selected";
if($conf[66]=="Arial, sans-serif")$sel_cit_font_name[1]="selected";
if($conf[66]=="Tahoma, sans-serif")$sel_cit_font_name[2]="selected";
if($conf[66]=="Verdana, sans-serif")$sel_cit_font_name[3]="selected";
if($conf[66]=="Courier New, monospace")$sel_cit_font_name[4]="selected";
if($conf[66]=="Calisto MT, cursive")$sel_cit_font_name[5]="selected";
if($conf[66]=="Broadway, fantasy")$sel_cit_font_name[6]="selected";


 for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[76]==$i) $sel_date_cit_font_size[$n]="selected";

      if($conf[77]=="italic")$sel_date_cit_font_type[1]="selected";
      if($conf[77]=="normal")$sel_date_cit_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[78]==$i) $sel_date_cit_font_width[$n]="selected";
   else $sel_date_cit_font_width[$n]="";
 }


if($conf[79]=="Times New Roman, serif")$sel_date_cit_font_name[0]="selected";
if($conf[79]=="Arial, sans-serif")$sel_date_cit_font_name[1]="selected";
if($conf[79]=="Tahoma, sans-serif")$sel_date_cit_font_name[2]="selected";
if($conf[79]=="Verdana, sans-serif")$sel_date_cit_font_name[3]="selected";
if($conf[79]=="Courier New, monospace")$sel_date_cit_font_name[4]="selected";
if($conf[79]=="Calisto MT, cursive")$sel_date_cit_font_name[5]="selected";
if($conf[79]=="Broadway, fantasy")$sel_date_cit_font_name[6]="selected";


//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[68]==$i) $sel_cit_line_size[$i]="selected";
   else $sel_cit_line_size[$i]="";
 }

 //��� �����
if($conf[69]=="none")$sel_cit_line_type[0]="selected";
if($conf[69]=="dotted")$sel_cit_line_type[1]="selected";
if($conf[69]=="dashed")$sel_cit_line_type[2]="selected";
if($conf[69]=="solid")$sel_cit_line_type[3]="selected";
if($conf[69]=="double")$sel_cit_line_type[4]="selected";



//��������
  for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[71]==$i) $sel_otv_font_size[$n]="selected";

      if($conf[72]=="italic")$sel_otv_font_type[1]="selected";
      if($conf[72]=="normal")$sel_otv_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[73]==$i) $sel_otv_font_width[$n]="selected";
   else $sel_otv_font_width[$n]="";
 }


if($conf[74]=="Times New Roman, serif")$sel_otv_font_name[0]="selected";
if($conf[74]=="Arial, sans-serif")$sel_otv_font_name[1]="selected";
if($conf[74]=="Tahoma, sans-serif")$sel_otv_font_name[2]="selected";
if($conf[74]=="Verdana, sans-serif")$sel_otv_font_name[3]="selected";
if($conf[74]=="Courier New, monospace")$sel_otv_font_name[4]="selected";
if($conf[74]=="Calisto MT, cursive")$sel_otv_font_name[5]="selected";
if($conf[74]=="Broadway, fantasy")$sel_otv_font_name[6]="selected";


//���������================================
    for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[2]==$i) $sel_head_font_size[$n]="selected";

      if($conf[3]=="italic")$sel_head_font_type[1]="selected";
      if($conf[3]=="normal")$sel_head_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[4]==$i) $sel_head_font_width[$n]="selected";
   else $sel_head_font_width[$n]="";
 }


if($conf[5]=="Times New Roman, serif")$sel_head_font_name[0]="selected";
if($conf[5]=="Arial, sans-serif")$sel_head_font_name[1]="selected";
if($conf[5]=="Tahoma, sans-serif")$sel_head_font_name[2]="selected";
if($conf[5]=="Verdana, sans-serif")$sel_head_font_name[3]="selected";
if($conf[5]=="Courier New, monospace")$sel_head_font_name[4]="selected";
if($conf[5]=="Calisto MT, cursive")$sel_head_font_name[5]="selected";
if($conf[5]=="Broadway, fantasy")$sel_head_font_name[6]="selected";


if($conf[6]==1)$check_view='checked';
else $check_view='';

//�����================================
    for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[8]==$i) $sel_form_font_size[$n]="selected";

      if($conf[9]=="italic")$sel_form_font_type[1]="selected";
      if($conf[9]=="normal")$sel_form_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[10]==$i) $sel_form_font_width[$n]="selected";
   else $sel_form_font_width[$n]="";
 }


if($conf[11]=="Times New Roman, serif")$sel_form_font_name[0]="selected";
if($conf[11]=="Arial, sans-serif")$sel_form_font_name[1]="selected";
if($conf[11]=="Tahoma, sans-serif")$sel_form_font_name[2]="selected";
if($conf[11]=="Verdana, sans-serif")$sel_form_font_name[3]="selected";
if($conf[11]=="Courier New, monospace")$sel_form_font_name[4]="selected";
if($conf[11]=="Calisto MT, cursive")$sel_form_font_name[5]="selected";
if($conf[11]=="Broadway, fantasy")$sel_form_font_name[6]="selected";
//������==========================================

//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[15]==$i) $sel_but_line_size[$i]="selected";
   else $sel_but_line_size[$i]="";
 }

 //��� �����
if($conf[16]=="none")$sel_but_line_type[0]="selected";
if($conf[16]=="dotted")$sel_but_line_type[1]="selected";
if($conf[16]=="dashed")$sel_but_line_type[2]="selected";
if($conf[16]=="solid")$sel_but_line_type[3]="selected";
if($conf[16]=="double")$sel_but_line_type[4]="selected";

//�����
//������ ������

for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[18]==$i) $sel_but_font_size[$n]="selected";
   else $sel_but_font_size[$n]="";

 }
 //���
 if($conf[19]=="normal") $sel_but_font_type[0]="selected";
 if($conf[19]=="italic") $sel_but_font_type[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[20]==$i) $sel_but_font_width[$n]="selected";
   else $sel_but_font_width[$n]="";
 }

//��������
if($conf[21]=="Times New Roman, serif")$sel_but_font_name[0]="selected";
if($conf[21]=="Arial, sans-serif")$sel_but_font_name[1]="selected";
if($conf[21]=="Tahoma, sans-serif")$sel_but_font_name[2]="selected";
if($conf[21]=="Verdana, sans-serif")$sel_but_font_name[3]="selected";
if($conf[21]=="Courier New, monospace")$sel_but_font_name[4]="selected";
if($conf[21]=="Calisto MT, cursive")$sel_but_font_name[5]="selected";
if($conf[21]=="Broadway, fantasy")$sel_but_font_name[6]="selected";

//����� ���������============================
//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[25]==$i) $sel_line_size[$i]="selected";
   else $sel_line_size[$i]="";
 }

 //��� �����
if($conf[26]=="none")$sel_line_type[0]="selected";
if($conf[26]=="dotted")$sel_line_type[1]="selected";
if($conf[26]=="dashed")$sel_line_type[2]="selected";
if($conf[26]=="solid")$sel_line_type[3]="selected";
if($conf[26]=="double")$sel_line_type[4]="selected";

//������ ����� ���������============================
//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[28]==$i) $sel_bot_line_size[$i]="selected";
   else $sel_bot_line_size[$i]="";
 }

 //��� �����
if($conf[29]=="none")$sel_bot_line_type[0]="selected";
if($conf[29]=="dotted")$sel_bot_line_type[1]="selected";
if($conf[29]=="dashed")$sel_bot_line_type[2]="selected";
if($conf[29]=="solid")$sel_bot_line_type[3]="selected";
if($conf[29]=="double")$sel_bot_line_type[4]="selected";

//����� ����
//������ ������

for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[31]==$i) $sel_date_font_size[$n]="selected";
   else $sel_date_font_size[$n]="";

 }
 //���
 if($conf[32]=="normal") $sel_date_font_type[0]="selected";
 if($conf[32]=="italic") $sel_date_font_type[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[33]==$i) $sel_date_font_width[$n]="selected";
   else $sel_date_font_width[$n]="";
 }

//��������
if($conf[34]=="Times New Roman, serif")$sel_date_font_name[0]="selected";
if($conf[34]=="Arial, sans-serif")$sel_date_font_name[1]="selected";
if($conf[34]=="Tahoma, sans-serif")$sel_date_font_name[2]="selected";
if($conf[34]=="Verdana, sans-serif")$sel_date_font_name[3]="selected";
if($conf[34]=="Courier New, monospace")$sel_date_font_name[4]="selected";
if($conf[34]=="Calisto MT, cursive")$sel_date_font_name[5]="selected";
if($conf[34]=="Broadway, fantasy")$sel_date_font_name[6]="selected";


//����� ���������
//������ ������

for($i=10,$n=0; $i<22; $i+=2,$n++)
 {
   if($conf[36]==$i) $sel_comm_font_size[$n]="selected";
   else $sel_comm_font_size[$n]="";

 }
 //���
 if($conf[37]=="normal") $sel_comm_font_type[0]="selected";
 if($conf[37]=="italic") $sel_comm_font_type[1]="selected";

 //��������
 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[38]==$i) $sel_comm_font_width[$n]="selected";
   else $sel_comm_font_width[$n]="";
 }

//��������
if($conf[39]=="Times New Roman, serif")$sel_comm_font_name[0]="selected";
if($conf[39]=="Arial, sans-serif")$sel_comm_font_name[1]="selected";
if($conf[39]=="Tahoma, sans-serif")$sel_comm_font_name[2]="selected";
if($conf[39]=="Verdana, sans-serif")$sel_comm_font_name[3]="selected";
if($conf[39]=="Courier New, monospace")$sel_comm_font_name[4]="selected";
if($conf[39]=="Calisto MT, cursive")$sel_comm_font_name[5]="selected";
if($conf[39]=="Broadway, fantasy")$sel_comm_font_name[6]="selected";



 //������������ ��������� �������� �������

      for($i=1 ; $i<6; $i++)
      if($conf[41]==$i) $sel_navig_block_size_aktiv[$i-1]="selected";

      for($i=8 ; $i<13; $i++)
      if($conf[43]==$i) $sel_navig_text_size_aktiv[$i-8]="selected";


      if($conf[44]=="italic")$sel_navig_text_font_aktiv[1]="selected";
      if($conf[44]=="normal")$sel_navig_text_font_aktiv[0]="selected";

  //��������
if($conf[45]=="Times New Roman, serif")$sel_text_font_name_aktiv[0]="selected";
if($conf[45]=="Arial, sans-serif")$sel_text_font_name_aktiv[1]="selected";
if($conf[45]=="Tahoma, sans-serif")$sel_text_font_name_aktiv[2]="selected";
if($conf[45]=="Verdana, sans-serif")$sel_text_font_name_aktiv[3]="selected";
if($conf[45]=="Courier New, monospace")$sel_text_font_name_aktiv[4]="selected";
if($conf[45]=="Calisto MT, cursive")$sel_text_font_name_aktiv[5]="selected";
if($conf[45]=="Broadway, fantasy")$sel_text_font_name_aktiv[6]="selected";


       for($i=0 ; $i<6; $i++)
        if($conf[47]==$i) $sel_navig_line_size_aktiv[$i]="selected";

      //������������ ��������� ��������� �������

      for($i=1 ; $i<6; $i++)
      if($conf[49]==$i) $sel_navig_block_size_passiv[$i-1]="selected";

      for($i=8 ; $i<13; $i++)
      if($conf[51]==$i) $sel_navig_text_size_passiv[$i-8]="selected";


      if($conf[52]=="italic")$sel_navig_text_font_passiv[1]="selected";
      if($conf[52]=="normal")$sel_navig_text_font_passiv[0]="selected";


  //��������
if($conf[53]=="Times New Roman, serif")$sel_text_font_name_passiv[0]="selected";
if($conf[53]=="Arial, sans-serif")$sel_text_font_name_passiv[1]="selected";
if($conf[53]=="Tahoma, sans-serif")$sel_text_font_name_passiv[2]="selected";
if($conf[53]=="Verdana, sans-serif")$sel_text_font_name_passiv[3]="selected";
if($conf[53]=="Courier New, monospace")$sel_text_font_name_passiv[4]="selected";
if($conf[53]=="Calisto MT, cursive")$sel_text_font_name_passiv[5]="selected";
if($conf[53]=="Broadway, fantasy")$sel_text_font_name_passiv[6]="selected";


       for($i=0 ; $i<6; $i++)
        if($conf[55]==$i) $sel_navig_line_size_passiv[$i]="selected";

//���������

$check_pos1="";
$check_pos2="";

 if($conf[56]=="right")$check_pos1="checked";
 if($conf[56]=="left")$check_pos2="checked";

 $sel_cod1="";
 $sel_cod2="";
 if($conf[61]=="koi-8")$sel_cod1="selected";
 if($conf[61]=="win")$sel_cod2="selected";

?>

<script language='JavaScript1.1' type='text/javascript'>
<!--

  function win(par)
  {

    var obj=par;
    mainwin=window.open('rgb.html','',
   'Width=550, height=500,left=100,top=100,status=yes,toolbar=no,menubar=no,scrollbars=yes,resizable=yes');

  }

//-->
</script>
<CENTER>
 <TABLE bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>
 <tr ><td colspan=2>  <a href=# onclick=win()>������� �������� �����</a></td></tr>
<FORM ACTION="admin1.php?sel1=selected" METHOD="POST" name="form">
 <tr >
   <td>���� ��������<br />

   </td>
   <td>
       <input name="bgcolor" type="text"  size=10 value="<? echo @$conf[0] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[0]; ?> > ����
		</font></big></b>
   </td>

</tr>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>���������</FONT></td>
 </tr>
 <tr >
   <td>�����<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="head_font_color" type="text"  size=10 value="<? echo @$conf[1] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[1]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="head_font_size">
<OPTION value="10" <?  echo @$sel_head_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_head_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_head_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_head_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_head_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_head_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="head_font_type">
<OPTION value="normal" <?  echo @$sel_head_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_head_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="head_font_width">
<OPTION value="100" <?  echo @$sel_head_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_head_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_head_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_head_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_head_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_head_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_head_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="head_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_head_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_head_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_head_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_head_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_head_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_head_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_head_font_name[6]; ?> >Broadway</option>

</SELECT><br />
<input name="view_head" type="checkbox" value="ON" <?echo $check_view?>>&nbsp; ����������
   </td>
</tr>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>�����</FONT></td>
 </tr>

<tr >
   <td>�����<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="form_font_color" type="text"  size=10 value="<? echo @$conf[7] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[7]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="form_font_size">
<OPTION value="10" <?  echo @$sel_form_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_form_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_form_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_form_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_form_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_form_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="form_font_type">
<OPTION value="normal" <?  echo @$sel_form_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_form_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="form_font_width">
<OPTION value="100" <?  echo @$sel_form_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_form_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_form_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_form_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_form_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_form_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_form_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="form_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_form_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_form_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_form_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_form_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_form_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_form_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_form_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
</tr>

<tr >
   <td  colspan=2><b>������</b>  </td>
</tr>

<tr>
   <td> ������ � ��������</td>

   <td><input name="but_size" type="text" value="<? echo @$conf[12]?>" size=10> </td>
</tr>

<tr>
   <td>����</td>

   <td><input name="but_color" type="text"  size=10 value="<? echo @$conf[13] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[13]; ?> > ����
		</font></big></b></td>
</tr>

<tr>
   <td>����, ������ � ��� ����� </td>

   <td>

             <INPUT TYPE="text" NAME="but_line_color" SIZE="10"  VALUE="<? echo @$conf[14] ?>">
         &nbsp;<font color="<? echo @$conf[14]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="but_line_size">
           <option value="0" <? echo @$sel_but_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_but_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_but_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_but_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_but_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_but_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="but_line_type">
<OPTION value="none" <?  echo @$sel_but_line_type[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_but_line_type[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_but_line_type[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_but_line_type[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_but_line_type[4]; ?>>�������</option>
</SELECT>
   </td>
</tr>


<tr >
   <td style=" border-bottom:1px solid #d0c9ad;">�����<br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td style=" border-bottom:1px solid #d0c9ad;">
       <input name="but_font_color" type="text"  size=10 value="<? echo @$conf[17] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[17]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="but_font_size">
<OPTION value="10" <?  echo @$sel_but_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_but_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_but_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_but_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_but_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_but_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="but_font_type">
<OPTION value="normal" <?  echo @$sel_but_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_but_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="but_font_width">
<OPTION value="100" <?  echo @$sel_but_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_but_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_but_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_but_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_but_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_but_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_but_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="but_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_but_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_but_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_but_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_but_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_but_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_but_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_but_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>�����������</FONT></td>
 </tr>

<tr >
   <td>���� ����� ����� ������������<br />
   (������ � ������)</td>
   <td><input name="oll_blok_color" type="text"  size=10 value="<? echo @$conf[60] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[60]; ?> > ����
		</font></big></b></td>
 </tr>

<tr >
   <td>���� ������ �����</td>
   <td><input name="blok_color" type="text"  size=10 value="<? echo @$conf[22] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[22]; ?> > ����
		</font></big></b></td>
 </tr>

<tr >
   <td>������ �����</td>
   <td><input name="blok_size" type="text"  size=10 value="<? echo @$conf[23] ?>">
   &nbsp;px </td>
 </tr>
<tr>
   <td>����, ������ � ��� �����<br />
   (�������, ������, �����) </td>

   <td>

             <INPUT TYPE="text" NAME="line_color" SIZE="10"  VALUE="<? echo @$conf[24] ?>">
         &nbsp;<font color="<? echo @$conf[24]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="line_size">
           <option value="0" <? echo @$sel_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="line_type">
<OPTION value="none" <?  echo @$sel_line_type[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_line_type[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_line_type[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_line_type[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_line_type[4]; ?>>�������</option>
</SELECT>
   </td>
</tr>

<tr>
   <td>����, ������ � ��� �����<br />
   (������) </td>

   <td>

             <INPUT TYPE="text" NAME="bot_line_color" SIZE="10"  VALUE="<? echo @$conf[27] ?>">
         &nbsp;<font color="<? echo @$conf[27]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="bot_line_size">
           <option value="0" <? echo @$sel_bot_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_bot_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_bot_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_bot_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_bot_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_bot_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="bot_line_type">
<OPTION value="none" <?  echo @$sel_bot_line_type[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_bot_line_type[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_bot_line_type[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_bot_line_type[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_bot_line_type[4]; ?>>�������</option>
</SELECT>
   </td>
</tr>

<tr >
   <td >����� ���� � �����<br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td >
       <input name="date_font_color" type="text"  size=10 value="<? echo @$conf[30] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[30]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="date_font_size">
<OPTION value="10" <?  echo @$sel_date_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_date_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_date_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_date_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_date_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_date_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="date_font_type">
<OPTION value="normal" <?  echo @$sel_date_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_date_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="date_font_width">
<OPTION value="100" <?  echo @$sel_date_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_date_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_date_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_date_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_date_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_date_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_date_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="date_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_date_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_date_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_date_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_date_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_date_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_date_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_date_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>

<tr >
   <td style=" border-bottom:1px solid #d0c9ad;">����� ������������<br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td style=" border-bottom:1px solid #d0c9ad;">
       <input name="comm_font_color" type="text"  size=10 value="<? echo @$conf[35] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[35]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="comm_font_size">
<OPTION value="10" <?  echo @$sel_comm_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_comm_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_comm_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_comm_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_comm_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_comm_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="comm_font_type">
<OPTION value="normal" <?  echo @$sel_comm_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_comm_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="comm_font_width">
<OPTION value="100" <?  echo @$sel_comm_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_comm_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_comm_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_comm_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_comm_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_comm_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_comm_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="comm_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_comm_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_comm_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_comm_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_comm_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_comm_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_comm_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_comm_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>

<tr><td>��� ������</td>
<td>
 <input name="fon_cit" type="text"  size=10 value="<? echo @$conf[85] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[85]; ?> > ����
		</font></big></b>
</td>
</tr>

<tr >
   <td >����� ������<br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td >
       <input name="cit_font_color" type="text"  size=10 value="<? echo @$conf[62] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[62]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="cit_font_size">
<OPTION value="10" <?  echo @$sel_cit_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_cit_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_cit_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_cit_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_cit_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_cit_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="cit_font_type">
<OPTION value="normal" <?  echo @$sel_cit_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_cit_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="cit_font_width">
<OPTION value="100" <?  echo @$sel_cit_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_cit_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_cit_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_cit_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_cit_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_cit_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_cit_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="cit_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_cit_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_cit_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_cit_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_cit_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_cit_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_cit_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_cit_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>



<tr >
   <td >����� ���� � ����� � ������<br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td >
       <input name="date_cit_font_color" type="text"  size=10 value="<? echo @$conf[75] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[75]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="date_cit_font_size">
<OPTION value="10" <?  echo @$sel_date_cit_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_date_cit_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_date_cit_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_date_cit_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_date_cit_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_date_cit_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="date_cit_font_type">
<OPTION value="normal" <?  echo @$sel_date_cit_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_date_cit_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="date_cit_font_width">
<OPTION value="100" <?  echo @$sel_date_cit_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_date_cit_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_date_cit_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_date_cit_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_date_cit_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_date_cit_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_date_cit_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="date_cit_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_date_cit_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_date_cit_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_date_cit_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_date_cit_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_date_cit_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_date_cit_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_date_cit_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>





<tr >
   <td >����� ������</td>

    <td >
             <INPUT TYPE="text" NAME="cit_line_color" SIZE="10"  VALUE="<? echo @$conf[67] ?>">
         &nbsp;<font color="<? echo @$conf[67]; ?>">&nbsp;&nbsp;<b>����</b></font>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="cit_line_size">
           <option value="0" <? echo @$sel_cit_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_cit_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_cit_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_cit_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_cit_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_cit_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="cit_line_type">
<OPTION value="none" <?  echo @$sel_cit_line_type[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_cit_line_type[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_cit_line_type[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_cit_line_type[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_cit_line_type[4]; ?>>�������</option>
</SELECT></td>
 </tr>

<tr >
   <td >����� ������� <b>��������</b><br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td >
       <input name="otv_font_color" type="text"  size=10 value="<? echo @$conf[70] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[70]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="otv_font_size">
<OPTION value="10" <?  echo @$sel_otv_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_otv_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_otv_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_otv_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_otv_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_otv_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="otv_font_type">
<OPTION value="normal" <?  echo @$sel_otv_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_otv_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="otv_font_width">
<OPTION value="100" <?  echo @$sel_otv_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_otv_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_otv_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_otv_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_otv_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_otv_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_otv_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="otv_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_otv_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_otv_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_otv_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_otv_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_otv_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_otv_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_otv_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>


<tr >
   <td style=" border-bottom:1px solid #d0c9ad;">����� ������� <b>�������� �����������</b><br>
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td style=" border-bottom:1px solid #d0c9ad;">
       <input name="send_font_color" type="text"  size=10 value="<? echo @$conf[80] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[80]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="send_font_size">
<OPTION value="10" <?  echo @$sel_send_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_send_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_send_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_send_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_send_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_send_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="send_font_type">
<OPTION value="normal" <?  echo @$sel_send_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_send_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="send_font_width">
<OPTION value="100" <?  echo @$sel_send_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_send_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_send_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_send_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_send_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_send_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_send_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="send_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_send_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_send_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_send_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_send_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_send_font_name[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_send_font_name[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_send_font_name[6]; ?> >Broadway</option>
</SELECT>
   </td>
   </tr>




<tr >
        <td valign=top>
           ������������ ���������<br> -<b>��������</b> �������
        </td>
        <td>
         <b>��������� ����� � �������</b><br><br>
         ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_block_color_aktiv" SIZE="10"  VALUE="<? echo @$conf[40] ?>">
         &nbsp;<font color="<? echo @$conf[40]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_block_size_aktiv">
           <option value="1" <? echo @$sel_navig_block_size_aktiv[0] ?> >1</option>
           <option value="2" <? echo @$sel_navig_block_size_aktiv[1] ?> >2</option>
           <option value="3" <? echo @$sel_navig_block_size_aktiv[2] ?> >3</option>
           <option value="4" <? echo @$sel_navig_block_size_aktiv[3] ?> >4</option>
           <option value="5" <? echo @$sel_navig_block_size_aktiv[4] ?> >5</option>
        </select>&nbsp;px<br><br>
        <b>��������� ����</b><br><br>
          ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_text_color_aktiv" SIZE="10"  VALUE="<? echo @$conf[42] ?>">
         &nbsp;<font color="<? echo @$conf[42]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_text_size_aktiv">
           <option value="8" <? echo @$sel_navig_text_size_aktiv[0] ?> >8</option>
           <option value="9" <? echo @$sel_navig_text_size_aktiv[1] ?> >9</option>
           <option value="10" <? echo @$sel_navig_text_size_aktiv[2] ?> >10</option>
           <option value="11" <? echo @$sel_navig_text_size_aktiv[3] ?> >11</option>
           <option value="12" <? echo @$sel_navig_text_size_aktiv[4] ?> >12</option>
        </select>&nbsp;pt&nbsp;&nbsp;
        ����������&nbsp;&nbsp;
        <select  name="navig_text_font_aktiv">
           <option value="normal" <? echo @$sel_navig_text_font_aktiv[0] ?> >����������</option>
           <option value="italic" <? echo @$sel_navig_text_font_aktiv[1] ?> >���������</option>
        </select>&nbsp;
        <SELECT NAME="navig_text_font_name_aktiv">
<OPTION value="Times New Roman, serif" <?  echo @$sel_text_font_name_aktiv[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_text_font_name_aktiv[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_text_font_name_aktiv[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_text_font_name_aktiv[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_text_font_name_aktiv[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_text_font_name_aktiv[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_text_font_name_aktiv[6]; ?> >Broadway</option>
</SELECT>
        <br><br>
         <b>��������� ����� �� ����� ������</b><br><br>
         ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_line_color_aktiv" SIZE="10"  VALUE="<? echo @$conf[46] ?>">
         &nbsp;<font color="<? echo @$conf[46]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_line_size_aktiv">
           <option value="0" <? echo @$sel_navig_line_size_aktiv[0] ?> >0</option>
           <option value="1" <? echo @$sel_navig_line_size_aktiv[1] ?> >1</option>
           <option value="2" <? echo @$sel_navig_line_size_aktiv[2] ?> >2</option>
           <option value="3" <? echo @$sel_navig_line_size_aktiv[3] ?> >3</option>
           <option value="4" <? echo @$sel_navig_line_size_aktiv[4] ?> >4</option>
           <option value="5" <? echo @$sel_navig_line_size_aktiv[5] ?> >5</option>
        </select>&nbsp;px

        </td>
     </tr>


<tr >
        <td valign=top>
           ������������ ���������<br> -<b>���������</b> �������
        </td>
        <td>
         <b>��������� ����� � �������</b><br><br>
         ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_block_color_passiv" SIZE="10"  VALUE="<? echo @$conf[48] ?>">
         &nbsp;<font color="<? echo @$conf[48]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_block_size_passiv">
           <option value="1" <? echo @$sel_navig_block_size_passiv[0] ?> >1</option>
           <option value="2" <? echo @$sel_navig_block_size_passiv[1] ?> >2</option>
           <option value="3" <? echo @$sel_navig_block_size_passiv[2] ?> >3</option>
           <option value="4" <? echo @$sel_navig_block_size_passiv[3] ?> >4</option>
           <option value="5" <? echo @$sel_navig_block_size_passiv[4] ?> >5</option>
        </select>&nbsp;px<br><br>
        <b>��������� ����</b><br><br>
          ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_text_color_passiv" SIZE="10"  VALUE="<? echo @$conf[50] ?>">
         &nbsp;<font color="<? echo @$conf[50]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_text_size_passiv">
           <option value="8" <? echo @$sel_navig_text_size_passiv[0] ?> >8</option>
           <option value="9" <? echo @$sel_navig_text_size_passiv[1] ?> >9</option>
           <option value="10" <? echo @$sel_navig_text_size_passiv[2] ?> >10</option>
           <option value="11" <? echo @$sel_navig_text_size_passiv[3] ?> >11</option>
           <option value="12" <? echo @$sel_navig_text_size_passiv[4] ?> >12</option>
        </select>&nbsp;pt&nbsp;&nbsp;
        ����������&nbsp;&nbsp;
        <select  name="navig_text_font_passiv">
           <option value="normal" <? echo @$sel_navig_text_font_passiv[0] ?> >����������</option>
           <option value="italic" <? echo @$sel_navig_text_font_passiv[1] ?> >���������</option>
        </select>&nbsp;
        <SELECT NAME="navig_text_font_name_passiv">
<OPTION value="Times New Roman, serif" <?  echo @$sel_text_font_name_passiv[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_text_font_name_passiv[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_text_font_name_passiv[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_text_font_name_passiv[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_text_font_name_passiv[4]; ?> >Courier New</option>
<OPTION value="Calisto MT, cursive" <?  echo @$sel_text_font_name_passiv[5]; ?> >Calisto MT</option>
<OPTION value="Broadway, fantasy" <?  echo @$sel_text_font_name_passiv[6]; ?> >Broadway</option>
</SELECT>
        <br><br>
         <b>��������� ����� �� ����� ������</b><br><br>
         ����&nbsp;&nbsp;
         <INPUT TYPE="text" NAME="navig_line_color_passiv" SIZE="10"  VALUE="<? echo @$conf[54] ?>">
         &nbsp;<font color="<? echo @$conf[54]; ?>">&nbsp;<b>����</b></font>&nbsp;&nbsp;
         ������&nbsp;&nbsp;
         <select  name="navig_line_size_passiv">
           <option value="0" <? echo @$sel_navig_line_size_passiv[0] ?> >0</option>
           <option value="1" <? echo @$sel_navig_line_size_passiv[1] ?> >1</option>
           <option value="2" <? echo @$sel_navig_line_size_passiv[2] ?> >2</option>
           <option value="3" <? echo @$sel_navig_line_size_passiv[3] ?> >3</option>
           <option value="4" <? echo @$sel_navig_line_size_passiv[4] ?> >4</option>
           <option value="5" <? echo @$sel_navig_line_size_passiv[5] ?> >5</option>
        </select>&nbsp;px

        </td>
     </tr>
 <tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>���������</FONT></td>
 </tr>
  <tr >
   <td>���� � ���</td>
   <td><input name="pos_date" type="radio" value="right" <?echo $check_pos1 ?>>&nbsp;������&nbsp;&nbsp;
       <input name="pos_date" type="radio" value="left"  <?echo $check_pos2 ?>>&nbsp;�����&nbsp;&nbsp;
   </td>
 </tr>

 <tr >
   <td>������������ �� ��������</td>
   <td><input name="count_comm" type="text" value="<? echo @$conf[57] ?>" size=10>
   </td>
 </tr>

<tr >
   <td>����������� ������ � ���������</td>
   <td><input name="count_chr" type="text" value="<? echo @$conf[58] ?>" size=10>
   </td>
 </tr>

<tr >
   <td>E-mail, �� ������� ����� ��������� ���������� � ����� ���������<br />
   ���� ���������� ������, �� ��������� �� �����</td>
   <td><input name="e-mail" type="text" value="<? echo @$conf[59] ?>" size=30>
   </td>
 </tr>

<tr >
   <td>��������� �������� ����������</td>
   <td><select name="cod">
  <option value="koi-8" <?echo $sel_cod1 ?>>koi-8</option>
  <option value="win" <?echo $sel_cod2 ?>>win</option>
</select>
   </td>
 </tr>

<tr >

   <td colspan=2><input type="submit" value="���������" name=go>
   </td>
 </tr>
</form>
 </table>

