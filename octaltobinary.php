<!--
     Hi I am TY CSE student
		     My name: Akshay Mithari
		  RollNumber:  224
 ProblemStatment: OCTAL T DECIMAL
Use of languages: HTML,PHP,Javascript,CSS
          Status: All is well
-->
<?php
if(isset($_POST["send"]))  //....................isset method Returns TRUE if send exists and has any value other than NULL. FALSE otherwise.
{
	$no=$_POST["no"];   //..........................HERE WE USE $_POST BEACUSE HTMLform RETURNS DATA THROUGH POST METHOD
	$n=$no;
	$result="";
  $base=0;
  $re=0;
	  $re1=0;
  $i=$no;
  $no2=0;
  while($i!=0){
        $no1=$no%10;
        $no=$no/10;
        $re=pow(8,$base);
        $r=$no1*$re;
        $no2=$r+$no2;
        $base++;
        $i=intval($no);
   }
while($no1>=1){
	$re1=$no1%2;
	$result=strval($re1).$result;
	$no1=$no1/2;
}

}
?>
<html>
<head>
<script>
function my(){
	document.getElementById("text1").focus(); //.........................to get focus
}
</script>
</head>
<body onload="my()"> <!-- WE USE JAVASCRIPT TO GET FOCUS ON TEXTBOX AFTER LOADING THE PAGE THIS IS POSSIBLE BEACUSE OF ONLOAD EVENT-->

<center style="border-radius:10px; border-style:solid; width:50%; height:250px; margin-left:25%;margin-top:5%;">
<!--WE USE CENTER TAG TO ALIGN ALL FORM CONNTENTS AT MIDDLE-->
<br>
<br>
<br>
<p style="font-family: fantasy; margin-top:-20px;">OCTAL TO BINARY CONVERTOR</p>
<form action=" " method="post"> <!--............................action is not filled so code runs on same page -->
<input type="text" id="text1" style="border-top:none; border-left:none; border-right:none; border-bottom-color:black;border-radius: 5px;text-align:center; outline:none;" name="no" value="<?php if(isset($n))echo $n;?>">
<!-- AFTER CLICKING ON SUBMIT BUTTON WE LOST OUR ENTER VALUE FROM TEXTBOX SO WE USE PHP TO GET THAT VALUE IN TEXTBOX  USING VALUE ATTRIBUTE -->
<br>
<br>
<input type="submit" value="submit" style="background-color:green;border-radius:5px;color:white; font-weight:10;border:none;width:100px;" name="send">
<?php
    if(isset($result)){
				echo'<p style="font-family: Monospace; font-weight: light; font-size:15; margin-top:70px; margin-top:100px;background-color:#d4ff32;margin-right:200px">FACTORIAL OF  '.$n. ' IS '.$result.' </p>';
		}
?>
</form>
</center>
</body>
</html>
