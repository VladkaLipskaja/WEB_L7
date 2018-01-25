<?php
echo 
'<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Tables</title>
</head>
<body>';
echo '
<form action="l7.php" method="post">
 <p>Number of rows: <input type="number" name="rows" /></p>
 <p>Number of columns: <input type="number" name="columns" /></p>
 <p><input type="submit" /></p>
</form>';
$host = "localhost";
$login ="mysql";
$password="mysql";
$link = mysql_connect($host, $login, $password) or die("Can't connect " . mysql_error());
echo 'Connection is';
mysql_select_db('tables') or die('Can*t select bd');
$variable=$_POST['rows'];
$columns = $_POST['columns'];
if ($variable==="")  {$variable = mysql_result(mysql_query('SELECT `T1` FROM `table`'),0);}
if ($columns==="")  {$columns = mysql_result(mysql_query('SELECT `T1` FROM `table`'),0);}
$query = 'INSERT INTO `users_variables` (Rows, Columns, Date) VALUES('.$variable.', "'.$variable.', "'.date("Y-m-d H:i:s").'");'; 
	mysql_query($query);
mysql_close($link);
$variable=$variable1;
echo '
	<table> <caption>3.1</caption>	
		<tr>';
		for($i=0;$i++<($variable+1);)
		echo	'<td class="example1"></td>';
		echo '</tr><tr>';
$colsp = '<td colspan='.($variable+1).'></td>
		</tr>';
		echo $colsp;
for($i=0;$i++<($variable-1);)
	echo '<tr>
			<td rowspan="'.($variable-1).'-$i"></td>
			<td colspan="'.$variable.'-$i"></td>
		</tr>';
		
echo'</table><br><table> <caption>3.2</caption>';

$c=$variable2;
if ($c==="") $c=7;
   $table='<table>';
   for($x=$c; $x>=1; $x=($x-1))
   {
     $y=($x+2);
     $table .= '<tr>
     <td rowspan="'.$y.'"> </td>
     <td colspan="'.$x.'"></td>
     </tr>';
    }
   $y=$y-1;
   $table .='<tr>
   <td rowspan="'.$y.'"></td>
   </tr>
   </table>';
   echo $table; 
$variable=$variable3;
echo'</table><br><table> <caption>3.3</caption>';
echo '  <tr>
			<td class="example1"></td>
			<td class="example1"></td>
			<td class="example1"></td>
			<td class="example1"></td>
			<td class="example1"></td>
			<td class="example1"></td>
			<td class="example1"></td>
		</tr>';
		
for($i=0;$i++<(($variable-1)/2);)
echo '  <tr>
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td colspan="1"></td>
		</tr>
		<tr>
			<td colspan="1"></td>
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td colspan="2"></td>
		</tr>';

if ($variable%2===1) echo 
'<tr>
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td colspan="2"></td>
			<td colspan="1"></td>
</tr>';
echo '
	</table><br>';
$r= $variable4;	
echo '<table><caption>3.4</caption>';
   $table ='<tr>
    <td rowspan="3"></td>
    <td rowspan="1"></td>
    <td rowspan="2"></td>
    <td rowspan="3"></td>
    <td rowspan="1"></td>
    <td rowspan="2"></td>
    <td rowspan="3"></td>
     </tr>';
    for ($i=1; $i<$r; $i++)
    { 
       $ost=$i%3; 
       $j='3';
       $table.='<tr>';
       if ($i>=$r-2) $j=$r-$i;
       $table.='<td rowspan="'.$j.'"></td><td rowspan="'.$j.'"></td>';
       if($ost==0) $table.='<td rowspan="'.$j.'"></td>';
     $table.='</tr>';
    }
    $table.='</table>';
    echo $table;
?>