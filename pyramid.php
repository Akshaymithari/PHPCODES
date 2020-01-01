<!--
     Hi I am TY CSE student
		     My name: Akshay Mithari
		  RollNumber:  224
 ProblemStatment: * pyramid program
Use of languages: PHP
          Status: All is well
-->

<?php
$no=" ";
for($i=0;$i<5;$i++){
 for($j=0;$j<=$i;$j++){
  echo'*';
  }
  echo'<br>';
}
echo'<br>';
echo'<br>';
for($i=1;$i<=6;$i++){
  for($j=1;$j<=6-$i;$j++)
    echo str_repeat("&nbsp",2); //............@  method repeat itself and &nbsp generates no brak space

  for($r=1;$r<=((2*$i)-1);$r++){
      echo"*";
  }
  echo'<br/>';
}
?>
