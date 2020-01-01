<?php
$name=$_GET["name1"];
$python=$_GET["python"];
$mad=$_GET["MAD"];
$php=$_GET["php"];
$python_remark="";
$mad_remark="";
$php_remark="";
echo'<style>';
echo'#md{
	width:15%;
	
}
#para{
	margin-top: 0%;
	margin-left:40%;
	margin-bottom:20%;
}
table{
	padding-right:20px;
	background-color:#FFC0CB;
	border-collapse: collapse;
    width: 80%;
	border-radius:15px;
}
td,th{
	  padding: 8px;
}
#uv{
	  border-collapse: collapse;
}';
echo'</style>';
echo'<img src="logo.jpg" id="md" style="width:"50" height:"50"">';
echo '<br><br><p id="para">Your Name:'.$name.'<br id="para">Your Scored marks are:';
echo'<br><br><table  class="table">';
echo'<tr align="center" id="uv">';
echo'<th style="padding-left:"20"">Subject</th>';
echo'<th>Mareks</th>';
echo'<th>Remark</th>';
echo'</tr>';
if($python>7)
{
	$python_remark="pass";
}else{
	$python_remark="fail";
}

if($mad>7)
{
	$mad_remark="pass";
}else{
	$mad_remark="fail";
}
if($php>7)
{
	$php_remark="pass";
}else{
	$php_remark="fail";
}
echo'<tr align="center"><td>python</td><td>'.$python.'</td><td>'.$python_remark.'</td>';
echo'<tr align="center"><td>mad</td><td>'.$mad.'</td><td>'.$mad_remark.'</td>';
echo'<tr align="center"><td>php</td><td>'.$php.'</td><td>'.$php_remark.'</td>';
echo'<tr align="center"><td>total</td><td>'.$ac=($php+$mad+$python).'</td><td>'.$ac_remark=((($php+$mad+$python)/60)*100).'%</td>';
?>
