<?php
include("cap.php");

 $file=array();
 $d=opendir("db");
            while(($e=readdir($d))!=false)
           {
             if($e =="." || $e ==".." || $e==".htaccess" || $e=="bl" || $e=="blok.txt") continue;
             $file[]=$e;
           }
closedir($d);
rsort($file);


//������������ ���������
 $topic_count_page=50;
 if(!isset($_GET['page']) || !is_numeric(@$_GET['page']) || @$_GET['page']<1 )$page=1;
 else $page=$_GET['page'];
 if($page > ceil(count($file)/ $topic_count_page))$page=1;
 $start=$page * $topic_count_page-$topic_count_page;
 $pages=ceil(count($file)/ $topic_count_page);
 if(empty($_GET['ind']) || !is_numeric(@$_GET['ind']) || @$_GET['ind']>ceil($pages/$topic_count_page)  || @$_GET['ind']<1)$index=1;
 else $index= $_GET['ind'];
?>
<TABLE align=center bgcolor=#EBEBEB width=80% CELLPADDING=10 CELLSPACING=0 border=0>

<tr >
   <td colspan=2><FONT COLOR="#408080" size=+1>�������������� � ��������</FONT><br />
  ٸ������ ��������� ��� ��������������. �������� ��� �� �������� � ������� ��� ��� ����� ��� ����������� ������ �� �����������. <br />
  <b>��������! � ���� ������ "�����_�� ��������" ������ �������� �������� �� �������� (�� ��������� comm)</b><br />
  ��������! ������ �� "�������" ������� � �������������� �������� ���� ������������ �� ������ ����!

</tr>

<?php
if(count($file)> $topic_count_page)
    {
      //������������ ��������
      echo "<tr><td colspan=3>";

       if($index>1)echo "
       <a class='navig_passiv' href=admin3.php?sel3=selected&page=".(($index-1)*10)."&ind=".($index-1)." title=�����><<</a>";

       for($i=$index*10-9,$p=1; $i < $pages+1; $i++,$p++)
          {

            if($p>10 )
          	  {
          	  	echo "<a class='navig_passiv'  href=admin3.php?sel3=selected&page=".($i)."&ind=".($index+1)." title=�����>>></a>";
          	  	break;
          	  }
          	if($page==$i)
            echo "<a class='navig_activ' href=admin3.php?sel3=selected&page=$i&ind=$index>$i</a>";
            else
            echo "<a class='navig_passiv'href=admin3.php?sel3=selected&page=$i&ind=$index>$i</a>";
          }

     echo "</td></tr>";
    }
   echo "<tr><td>���������</td><td>���</td><td>�������</td></tr>";
     for($x=$start,$y=0; $x<count($file); $x++,$y++)
         {
           if($y==$topic_count_page)break;
           $text=file("db/$file[$x]/index.txt");
           $text[0]=trim($text[0]);
           $count="count['$text[0]']";
          echo "<tr>
               <td><a href=red.php?id=$file[$x]&ind_ret=$index&page_ret=$page><b>$text[0]</b></a></td>
               <td> &lt;a href=http://$_SERVER[SERVER_NAME]/�����_�� ��������/comm.php?id=$file[$x]&gt;����������� (&lt;?php echo $$count  ?&gt;)&lt;/a&gt;</td>
               <td><a href=del.php?id=$file[$x]&ind=$index&page=$page>�������</a></td>
          </tr>";


         }


if(count($file)> $topic_count_page)
    {
      //������������ ��������
      echo "<tr><td colspan=3>";

       if($index>1)echo "
       <a class='navig_passiv' href=admin3.php?sel3=selected&page=".(($index-1)*10)."&ind=".($index-1)." title=�����><<</a>";

       for($i=$index*10-9,$p=1; $i < $pages+1; $i++,$p++)
          {

            if($p>10 )
          	  {
          	  	echo "<a class='navig_passiv'  href=admin3.php?sel3=selected&page=".($i)."&ind=".($index+1)." title=�����>>></a>";
          	  	break;
          	  }
          	if($page==$i)
            echo "<a class='navig_activ' href=admin3.php?sel3=selected&page=$i&ind=$index>$i</a>";
            else
            echo "<a class='navig_passiv'href=admin3.php?sel3=selected&page=$i&ind=$index>$i</a>";
          }

     echo "</td></tr>";
    }
?>




</table>
</body>

</html>