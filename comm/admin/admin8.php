<?php
 include("cap.php");
 $info="";
 if(isset($_POST['go']))
  {
     $f=fopen("conf/blok.txt","w");

     //���������
     fwrite($f,"0 ���������*".$_POST['head']."\r\n");
     if($_POST['head_font_color']=="")fwrite($f,"1 ���� ������ ���������*#000000\r\n");
     else fwrite($f,"1 ���� ������ ���������*".$_POST['head_font_color']."\r\n");
     fwrite($f,"2 ������ ������ ���������*".$_POST['head_font_size']."\r\n");
     fwrite($f,"3 ���������� ������ ���������*".$_POST['head_font_type']."\r\n");
     fwrite($f,"4 �������� ������ ���������*".$_POST['head_font_width']."\r\n");
     fwrite($f,"5 �������� ������ ���������*".$_POST['head_font_name']."\r\n");

     //����
       if($_POST['blok_width']=="" || !is_numeric($_POST['blok_width']) || $_POST['blok_width']< 10)
            fwrite($f,"6 ������  ����� *300\r\n");
      else  fwrite($f,"6 ������  ����� *".$_POST['blok_width']."\r\n");


      if($_POST['blok_color']=="")fwrite($f,"7 ����  �����*#ffffff\r\n");
     else fwrite($f,"7 ���� �����*".$_POST['blok_color']."\r\n");

       if($_POST['blok_line_color']=="") fwrite($f,"8 ���� ����� ����� *#ffffff\r\n");
     else fwrite($f,"8 ���� ����� ����� *".$_POST['blok_line_color']."\r\n");

     fwrite($f,"9 ������ ����� ����� *".$_POST['blok_line_size']."\r\n");
     fwrite($f,"10 ��� ����� ����� *".$_POST['blok_line_type']."\r\n");

     if($_POST['tem_font_color']=="")fwrite($f,"11 ���� ������ ����*#000000\r\n");
     else fwrite($f,"11 ���� ������ ����*".$_POST['tem_font_color']."\r\n");
     fwrite($f,"12 ������ ������ ����*".$_POST['tem_font_size']."\r\n");
     fwrite($f,"13 ���������� ������ ����*".$_POST['tem_font_type']."\r\n");
     fwrite($f,"14 �������� ������ ����*".$_POST['tem_font_width']."\r\n");
     fwrite($f,"15 �������� ������ ����*".$_POST['tem_font_name']."\r\n");

     if($_POST['date_font_color']=="")fwrite($f,"16 ���� ������ ����*#000000\r\n");
     else fwrite($f,"16 ���� ������ ����*".$_POST['date_font_color']."\r\n");
     fwrite($f,"17 ������ ������ ����*".$_POST['date_font_size']."\r\n");
     fwrite($f,"18 ���������� ������ ����*".$_POST['date_font_type']."\r\n");
     fwrite($f,"19 �������� ������ ����*".$_POST['date_font_width']."\r\n");
     fwrite($f,"20 �������� ������ ����*".$_POST['date_font_name']."\r\n");

      if($_POST['name_font_color']=="")fwrite($f,"21 ���� ������ �����*#000000\r\n");
     else fwrite($f,"21 ���� ������ �����*".$_POST['name_font_color']."\r\n");
     fwrite($f,"22 ������ ������ �����*".$_POST['name_font_size']."\r\n");
     fwrite($f,"23 ���������� ������ �����*".$_POST['name_font_type']."\r\n");
     fwrite($f,"24 �������� ������ �����*".$_POST['name_font_width']."\r\n");
     fwrite($f,"25 �������� ������ �����*".$_POST['name_font_name']."\r\n");

     if($_POST['comm_font_color']=="")fwrite($f,"26 ���� ������ ���������*#000000\r\n");
     else fwrite($f,"26 ���� ������ ���������*".$_POST['comm_font_color']."\r\n");
     fwrite($f,"27 ������ ������ ���������*".$_POST['comm_font_size']."\r\n");
     fwrite($f,"28 ���������� ������ ���������*".$_POST['comm_font_type']."\r\n");
     fwrite($f,"29 �������� ������ ���������*".$_POST['comm_font_width']."\r\n");
     fwrite($f,"30 �������� ������ ���������*".$_POST['comm_font_name']."\r\n");

     if(isset($_POST['view_head'])) fwrite($f,"31 ���������� ���������*1\r\n");
     else fwrite($f,"31 ���������� ���������*0\r\n");

      if(isset($_POST['view_tem'])) fwrite($f,"32 ���������� ����*1\r\n");
     else fwrite($f,"32 ���������� ����*0\r\n");

       if(isset($_POST['view_date'])) fwrite($f,"33 ���������� ����*1\r\n");
     else fwrite($f,"33 ���������� ����*0\r\n");

      if(isset($_POST['view_name'])) fwrite($f,"34 ���������� ���*1\r\n");
     else fwrite($f,"34 ���������� ���*0\r\n");

      if($_POST['count_comm']=="" || !is_numeric($_POST['count_comm']) || $_POST['count_comm']< 1 || $_POST['count_comm']>30)
            fwrite($f,"35 ���������� ��������� *3\r\n");
      else  fwrite($f,"35 ���������� ���������  *".$_POST['count_comm']."\r\n");

       if($_POST['count_chr']=="" || !is_numeric($_POST['count_chr']) || $_POST['count_chr']< 1)
            fwrite($f,"36 ���������� ������ *100\r\n");
      else  fwrite($f,"36 ���������� ������  *".$_POST['count_chr']."\r\n");
     fclose($f);
  }
$conf=file("conf/blok.txt");
for($i=0; $i<count($conf); $i++)
  {
  	$conf[$i]=trim($conf[$i]);
  	$expl=explode("*",$conf[$i]);
    $conf[$i]=$expl[1];
  }
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


//������ �����
for($i=0; $i<6; $i++)
 {
   if($conf[9]==$i) $sel_blok_line_size[$i]="selected";
   else $sel_blok_line_size[$i]="";
 }

 //��� �����
if($conf[10]=="none")$sel_blok_line_type[0]="selected";
if($conf[10]=="dotted")$sel_blok_line_type[1]="selected";
if($conf[10]=="dashed")$sel_blok_line_type[2]="selected";
if($conf[10]=="solid")$sel_blok_line_type[3]="selected";
if($conf[10]=="double")$sel_blok_line_type[4]="selected";

//����� ����
 for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[12]==$i) $sel_tem_font_size[$n]="selected";

      if($conf[13]=="italic")$sel_tem_font_type[1]="selected";
      if($conf[13]=="normal")$sel_tem_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[14]==$i) $sel_tem_font_width[$n]="selected";
   else $sel_tem_font_width[$n]="";
 }


if($conf[15]=="Times New Roman, serif")$sel_tem_font_name[0]="selected";
if($conf[15]=="Arial, sans-serif")$sel_tem_font_name[1]="selected";
if($conf[15]=="Tahoma, sans-serif")$sel_tem_font_name[2]="selected";
if($conf[15]=="Verdana, sans-serif")$sel_tem_font_name[3]="selected";
if($conf[15]=="Courier New, monospace")$sel_tem_font_name[4]="selected";

//����� ����
 for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[17]==$i) $sel_date_font_size[$n]="selected";

      if($conf[18]=="italic")$sel_date_font_type[1]="selected";
      if($conf[18]=="normal")$sel_date_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[19]==$i) $sel_date_font_width[$n]="selected";
   else $sel_date_font_width[$n]="";
 }


if($conf[20]=="Times New Roman, serif")$sel_date_font_name[0]="selected";
if($conf[20]=="Arial, sans-serif")$sel_date_font_name[1]="selected";
if($conf[20]=="Tahoma, sans-serif")$sel_date_font_name[2]="selected";
if($conf[20]=="Verdana, sans-serif")$sel_date_font_name[3]="selected";
if($conf[20]=="Courier New, monospace")$sel_date_font_name[4]="selected";

//����� �����
 for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[22]==$i) $sel_name_font_size[$n]="selected";

      if($conf[23]=="italic")$sel_name_font_type[1]="selected";
      if($conf[23]=="normal")$sel_name_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[24]==$i) $sel_name_font_width[$n]="selected";
   else $sel_name_font_width[$n]="";
 }


if($conf[25]=="Times New Roman, serif")$sel_name_font_name[0]="selected";
if($conf[25]=="Arial, sans-serif")$sel_name_font_name[1]="selected";
if($conf[25]=="Tahoma, sans-serif")$sel_name_font_name[2]="selected";
if($conf[25]=="Verdana, sans-serif")$sel_name_font_name[3]="selected";
if($conf[25]=="Courier New, monospace")$sel_name_font_name[4]="selected";

//����� ���������
 for($i=10,$n=0; $i<21; $i+=2,$n++)
      if($conf[27]==$i) $sel_comm_font_size[$n]="selected";

      if($conf[28]=="italic")$sel_comm_font_type[1]="selected";
      if($conf[28]=="normal")$sel_comm_font_type[0]="selected";


 for($i=100,$n=0; $i<800; $i+=100,$n++)
 {
   if($conf[29]==$i) $sel_comm_font_width[$n]="selected";
   else $sel_comm_font_width[$n]="";
 }


if($conf[30]=="Times New Roman, serif")$sel_comm_font_name[0]="selected";
if($conf[30]=="Arial, sans-serif")$sel_comm_font_name[1]="selected";
if($conf[30]=="Tahoma, sans-serif")$sel_comm_font_name[2]="selected";
if($conf[30]=="Verdana, sans-serif")$sel_comm_font_name[3]="selected";
if($conf[30]=="Courier New, monospace")$sel_comm_font_name[4]="selected";

//����������

if($conf[31]==1)$check_view_head='checked';
if($conf[32]==1)$check_view_tem='checked';
if($conf[33]==1)$check_view_date='checked';
if($conf[34]==1)$check_view_name='checked';

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
<TABLE align=center bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>

<tr >
   <td ><FONT COLOR="#408080" size=+1>��������� ����� ��������� ���������</FONT> </td>
</tr>
<tr ><td colspan=2>  <a href=# onclick=win()>������� �������� �����</a></td></tr>
<FORM ACTION="admin8.php?sel8=selected" METHOD="POST" name="form">

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>���������</FONT></td>
 </tr>
 <tr >
   <td>��������</td>
   <td><input name="head" type="text" value="<? echo @$conf[0]; ?>" size=60></td>
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

</SELECT>
   </td>
</tr>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>����</FONT></td>
 </tr>

<tr >
   <td>������</td>
   <td><input name="blok_width" type="text" value="<? echo @$conf[6]; ?>" size=5>&nbsp;px</td>
 </tr>

<tr >
   <td>����</td>
   <td> <input name="blok_color" type="text"  size=10 value="<? echo @$conf[7] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[7]; ?> > ����
		</font></big></b></td>
 </tr>

<tr>
   <td>����, ������ � ��� ����� </td>

   <td>

             <INPUT TYPE="text" NAME="blok_line_color" SIZE="10"  VALUE="<? echo @$conf[8] ?>">
         &nbsp;<b><big><font color= <? echo @$conf[8]; ?> > ����
		</font></big></b>&nbsp;&nbsp;&nbsp;

         &nbsp;&nbsp;&nbsp;<select  name="blok_line_size">
           <option value="0" <? echo @$sel_blok_line_size[0] ?> >0</option>
           <option value="1" <? echo @$sel_blok_line_size[1] ?> >1</option>
           <option value="2" <? echo @$sel_blok_line_size[2] ?> >2</option>
           <option value="3" <? echo @$sel_blok_line_size[3] ?> >3</option>
           <option value="4" <? echo @$sel_blok_line_size[4] ?> >4</option>
           <option value="5" <? echo @$sel_blok_line_size[5] ?> >5</option>
        </select>&nbsp;px&nbsp;&nbsp;&nbsp;
        <SELECT NAME="blok_line_type">
<OPTION value="none" <?  echo @$sel_blok_line_type[0]; ?>>���</option>
<OPTION value="dotted" <?  echo @$sel_blok_line_type[1]; ?>>�����</option>
<OPTION value="dashed" <? echo @$sel_blok_line_type[2]; ?>>�������</option>
<OPTION value="solid" <? echo @$sel_blok_line_type[3]; ?>>��������</option>
<OPTION value="double" <? echo @$sel_blok_line_type[4]; ?>>�������</option>
</SELECT>
   </td>
</tr>

 <tr >
   <td>����� ����<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="tem_font_color" type="text"  size=10 value="<? echo @$conf[11] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[11]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="tem_font_size">
<OPTION value="10" <?  echo @$sel_tem_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_tem_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_tem_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_tem_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_tem_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_tem_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="tem_font_type">
<OPTION value="normal" <?  echo @$sel_tem_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_tem_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="tem_font_width">
<OPTION value="100" <?  echo @$sel_tem_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_tem_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_tem_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_tem_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_tem_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_tem_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_tem_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="tem_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_tem_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_tem_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_tem_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_tem_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_tem_font_name[4]; ?> >Courier New</option>


</SELECT>
   </td>
</tr>

<tr >
   <td>����� ����<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="date_font_color" type="text"  size=10 value="<? echo @$conf[16] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[16]; ?> > ����
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


</SELECT>
   </td>
</tr>

<tr >
   <td>����� �����<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="name_font_color" type="text"  size=10 value="<? echo @$conf[21] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[21]; ?> > ����
		</font></big></b>&nbsp;
		<SELECT NAME="name_font_size">
<OPTION value="10" <?  echo @$sel_name_font_size[0]; ?>>10</option>
<OPTION value="12" <?  echo @$sel_name_font_size[1]; ?>>12</option>
<OPTION value="14" <? echo @$sel_name_font_size[2]; ?>>14</option>
<OPTION value="16" <? echo @$sel_name_font_size[3]; ?>>16</option>
<OPTION value="18" <? echo @$sel_name_font_size[4]; ?>>18</option>
<OPTION value="20" <? echo @$sel_name_font_size[5]; ?>>20</option>
</SELECT>&nbsp;&nbsp;pt&nbsp;

<SELECT NAME="name_font_type">
<OPTION value="normal" <?  echo @$sel_name_font_type[0]; ?> >����������</option>
<OPTION value="italic" <?  echo @$sel_name_font_type[1]; ?> >���������</option>
</SELECT>

<SELECT NAME="name_font_width">
<OPTION value="100" <?  echo @$sel_name_font_width[0]; ?> >100</option>
<OPTION value="200" <?  echo @$sel_name_font_width[1]; ?> >200</option>
<OPTION value="300" <?  echo @$sel_name_font_width[2]; ?> >300</option>
<OPTION value="400" <?  echo @$sel_name_font_width[3]; ?> >400</option>
<OPTION value="500" <?  echo @$sel_name_font_width[4]; ?> >500</option>
<OPTION value="600" <?  echo @$sel_name_font_width[5]; ?> >600</option>
<OPTION value="700" <?  echo @$sel_name_font_width[6]; ?> >700</option>
</SELECT>

<SELECT NAME="name_font_name">
<OPTION value="Times New Roman, serif" <?  echo @$sel_name_font_name[0]; ?> >Times New Roman</option>
<OPTION value="Arial, sans-serif" <?  echo @$sel_name_font_name[1]; ?> >Arial</option>
<OPTION value="Tahoma, sans-serif" <?  echo @$sel_name_font_name[2]; ?> >Tahoma</option>
<OPTION value="Verdana, sans-serif" <?  echo @$sel_name_font_name[3]; ?> >Verdana</option>
<OPTION value="Courier New, monospace" <?  echo @$sel_name_font_name[4]; ?> >Courier New</option>


</SELECT>
   </td>
</tr>


<tr >
   <td>����� ������������<br />
   ����, ������ � �������, ���������� ������, ��������,
   ��������
   </td>
   <td>
       <input name="comm_font_color" type="text"  size=10 value="<? echo @$conf[26] ?>">
   &nbsp;&nbsp;<b><big><font color= <? echo @$conf[26]; ?> > ����
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


</SELECT>
   </td>
</tr>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>���������</FONT></td>
 </tr>

<tr >
   <td>���������� ���������</td><td><input name="view_head" type="checkbox" value="ON" <?echo @$check_view_head?>></td>
 </tr>

<tr >
   <td>���������� ����</td><td><input name="view_tem" type="checkbox" value="ON" <?echo @$check_view_tem?>></td>
 </tr>

<tr >
   <td>���������� ����</td><td><input name="view_date" type="checkbox" value="ON" <?echo @$check_view_date?>></td>
 </tr>
 <tr >
   <td>���������� ���</td><td><input name="view_name" type="checkbox" value="ON" <?echo @$check_view_name?>></td>
 </tr>

 <tr >
   <td>���������� ��������� <br />
   �� ����� 30</td><td><input name="count_comm" type="text" value="<? echo @$conf[35] ?>" size=5></td>
 </tr>

 <tr >
   <td>���������� ������ � ���������</td><td><input name="count_chr" type="text" value="<? echo @$conf[36] ?>" size=5></td>
 </tr>

<tr >
   <td colspan=2><input type="submit" value="���������" name=go></td>
 </tr>
</form>
</table>
</body>

</html>