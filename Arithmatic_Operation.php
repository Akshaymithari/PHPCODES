<!--
     Hi I am TY CSE student
		     My name: Akshay Mithari
		  RollNumber:  224
 ProblemStatment: Calculator For Performting Arithmatic Operations
Use of languages: HTML,PHP,Javascript,CSS
          Status: All is well
-->
<?php
if(isset($_POST["send"])){
$no1=$_POST["no1"];
$no2=$_POST["no2"];
$result=0;
if(isset($_POST["add"])){
$add=$_POST["add"];

switch ($add) {
  case 1:
    $result=$no1+$no2;
    break;
  case 2:
  $result=$no1-$no2;
    break;
  case 3:
  $result=$no1%$no2;
    break;
  case 4:
  $result=$no1/$no2;
    break;
  case 5:
  $result=$no1*$no2;
    break;
  default:
    $result=6;
    }
  }else{echo'<script>alert("enter an option")</script>';}//.............@ Javascript alertboxis used when user forgot to select operator
}
?>
<html>
<script>
function my(){
	document.getElementById("text1").focus(); //.........................# to get focus
}
</script>
<body style="font-family:Monospace;" onload="my()">
<form action="" method="post">
<center>
  <div style="border-style:solid; width:50%;height:280px;border-radius:15px;margin-top:10%">
<!--@ WE USE CENTER TAG TO ALIGN ALL FORM CONNTENTS AT MIDDLE-->
<p style="font-family: fantasy;font-size:20px;">CALCULATOR</p>
<input type="text" id="text1" name="no1" value="<?php if(isset($no1)){echo $no1;}?>"style="outline:none;border-radius:5px;text-align:center;border-top:none;border-left:none;border-right:none;border-bottom-color:green;">
<input type="text" id="text2" name="no2" value="<?php if(isset($no2)){echo $no2;}?>"style="outline:none;border-radius:5px;margin-left:20px;text-align:center;border-top:none;border-left:none;border-right:none;border-bottom-color:green;">
<!-- # AFTER CLICKING ON SUBMIT BUTTON WE LOST OUR ENTER VALUE FROM TEXTBOX SO WE USE PHP TO GET THAT VALUE IN TEXTBOX  USING VALUE ATTRIBUTE -->
<br>
<br>
<input type="radio" name="add" value="1">+
<input type="radio" name="add" value="2">-
<input type="radio" name="add" value="3">%
<input type="radio" name="add" value="4">/
<input type="radio" name="add" value="5">*
<br>
<br>
<input type="submit" value="submit" name="send">
<br>
<br>
<?php
    if(isset($result)){
				echo'<p style="font-family: Monospace; font-weight: light; font-size:15; background-color:#d4ff32;margin-right:700px;">Ans:  '.$result.' </p>';
        //.....................................@ to display data in propermanner after submit so we display output here!!!!!!!!
		}
?>
</div>
</center>
</form>
</body>
</html>
