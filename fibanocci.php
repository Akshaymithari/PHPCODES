<!--
     Hi I am TY CSE student
		     My name: Akshay Mithari
		  RollNumber:  224
 ProblemStatment: FIBANOCCI SERIES
Use of languages: HTML,PHP,Javascript,CSS
          Status: All is well
-->
<?php
if(isset($_POST["send"])){
  $a=0;$b=1;$c=0;$no=$_POST["no"];
  echo'<div style="background-color:#d4ff32;text-align:center;">';
  echo '<p style="font-family:Monospace;background-color:#d4ff32;">ANS:</p>';
  for($i=0;$i<$no;$i++){
      echo $a.' ';
      $c=$a+$b;
      $a=$b;
      $b=$c;
  }
}
echo'</div>';
?>
<html>
<script>
function my(){
	document.getElementById("text1").focus(); //.........................to get focus
}
</script>
<body style="font-family:Monospace;" onload="my()">
<form action="" method="post">
<center>
<!--WE USE CENTER TAG TO ALIGN ALL FORM CONNTENTS AT MIDDLE-->
<p style="font-family: fantasy; margin-top:200px;font-size:20px;">FIBANOCCI SERIES</p>
<input type="text" id="text1" name="no" value="<?php if(isset($no)){echo $no;}?>"style="outline:none;border-radius:5px;text-align:center;border-top:none;border-left:none;border-right:none;border-bottom-color:green;">
<!-- AFTER CLICKING ON SUBMIT BUTTON WE LOST OUR ENTER VALUE FROM TEXTBOX SO WE USE PHP TO GET THAT VALUE IN TEXTBOX  USING VALUE ATTRIBUTE -->
<br>
<br>
<input type="submit" value="submit" name="send" style="border-radius:15px;border:none;width:150px;height:30px;font-weight:bold;outline:none;">
</center>
</form>
</body>
</html>
