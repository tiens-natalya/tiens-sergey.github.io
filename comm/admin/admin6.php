<?php
 include("cap.php");
 if(isset($_POST['go']))
  {
    $_POST['name']=trim($_POST['name']);
    $expl=explode(",",$_POST['name']);
    $f=fopen("conf/stop.txt","w");
    for($n=0;$n<count($expl);$n++)
      {        $expl[$n]=trim($expl[$n]);
        if($n==count($expl)-1)fwrite($f,$expl[$n]);
        else fwrite($f,$expl[$n].",");
      }
    fclose($f);
  }
$stop=file("conf/stop.txt");
$opis="";
if(isset($stop[0])) $opis=$stop[0];
?>
<TABLE align=center bgcolor=#EBEBEB width=80% CELLPADDING=20 CELLSPACING=0 border=0>

<tr >
   <td ><FONT COLOR="#408080" size=+1>����������� �����</FONT><br />
   ��������� ����� �������. ���� ��� ����� ����� ������������ � ���������, ����������� ������������� �� �����, � ������������ ������������� ��������
   � ������ ������. </td>
</tr>

<FORM ACTION="admin6.php?sel6=selected" METHOD="POST" name="form">

<tr bgcolor=#F0F0F0>
<td>
 <textarea name="name" rows=10 cols=80><?echo $opis?></textarea><br />
 <input type="submit" value="���������" name=go>

</td></tr>
</form>
</table>
</body>

</html>