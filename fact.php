<!--
     Hi I am TY CSE student
		     My name: Akshay Mithari
		  RollNumber:  224
 ProblemStatment: Finding a factorial of a number
           Logic:  Multiply Entered number by it previous number until number becomes 1
Use of languages: HTML,PHP,Javascript,CSS
          Status: All is well
-->

<?php
if(isset($_POST["send"]))  //....................isset method Returns TRUE if send exists and has any value other than NULL. FALSE otherwise.
{
	$no=$_POST["no"];   //..........................HERE WE USE $_POST BEACUSE HTMLform RETURNS DATA THROUGH POST METHOD
	$n=$no;
	$result=1;
	while($no!=1){
		$result=$result*$no;
		$no--;

	}
}
?>
<html>
<head>
<script>
function my(){
	document.getElementById("text1").focus(); //.........................to get focus
}
function my1(){
	document.getElementById("text1").blur(); //..........................to loss focus this is not works BEACUSE we provid onload event for body
}
</script>
</head>
<body onload="my()"> <!-- WE USE JAVASCRIPT TO GET FOCUS ON TEXTBOX AFTER LOADING THE PAGE THIS IS POSSIBLE BEACUSE OF ONLOAD EVENT-->

<center style="border-radius:10px; border-style:solid; width:50%; height:250px; margin-left:25%;margin-top:5%;">
<br>
<br>
<br>
<p style="font-family: fantasy; margin-top:-20px;">FACTORIAL OF A NO</p>
<form action=" " method="post"> <!--............................action is not filled so code runs on same page -->
<input type="text" id="text1" style="border-top:none; border-left:none; border-right:none; border-bottom-color:black;border-radius: 5px;text-align:center; outline:none;" name="no" value="<?php if(isset($n))echo $n;?>">
<!-- AFTER CLICKING ON SUBMIT BUTTON WE LOST OUR ENTER VALUE FROM TEXTBOX SO WE USE PHP TO GET THAT VALUE IN TEXTBOX  USING VALUE ATTRIBUTE -->
<br>
<br>
<input type="submit" value="submit" style="background-color:green;border-radius:5px;color:white; font-weight:10;border:none;width:100px;" name="send" onsubmit="my1()">
<!-- onsubmit event is provided here but it is not working BEACUSE of onload event in line no 35 -->
<?php
    if(isset($result)){
				echo'<p style="font-family: Monospace; font-weight: light; font-size:15; margin-top:70px; margin-top:100px;background-color:#d4ff32;margin-right:200px">FACTORIAL OF  '.$n. ' IS '.$result.' </p>';
		}
?>
</form>
</center>
</body>
</html>
