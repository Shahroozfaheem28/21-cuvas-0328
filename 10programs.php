<form>
 
<center><div>
    <h1>.......09 programes in Simple Claculator.......</h1><br>
    <input type="text" value="" name="no1"  required placeholder="Please Enter 1st Number"><br>
    <select type="text" value="" name="Opera"  required placeholder="Please Enter Operator">
        <option value="select">select</Sect></option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
        <option value="%d">%d</option>
        <option value="x̄">x̄</option>
        <option value="<"><</option>
        <option value=">">></option>




    </select><br>
       
    <input type="text" value="" name="no2"  required placeholder="Please Enter 1st Number"><br><br>
    <input type="submit" value="Submit" name="sub"><br>
    </div></center>
</form>
<?php

if (isset($_GET["sub"])){ 
$n1 = $_GET["no1"];
$n2 = $_GET["no2"];
$operator = $_GET["Opera"];
/*1= Adding*/

if($operator == '+')
{
    $result = $n1 + $n2;
echo "<center><h2>The sum of two number is:  $result</h2></center>";
}
/*2= Subtraction*/
elseif($operator == '-'){

$result = $n1 - $n2;
echo "<center><h2>The subtraction of two number is:  $result<center></h2>";
}
/*3= Multiplication*/
elseif($operator == '*'){

 $result = $n1 * $n2;
 echo "<center><h2>The Multiplication of two number is:  $result</center></h2>";
 }
 /*4= Division*/
 elseif($operator == '/')
 {
   $result = $n1 - $n2;
 echo "<center><h2>The Division of two number is:  $result</h2></center>";

 }
 /*5= Percantage*/
elseif($operator == '%')
 {
   $result = ($n1*100)/$n2;
 echo "<center><h2>The Percentage of this $n1 number is:  $result</h2></center>";
}
/*6= Modules*/
elseif($operator == '%d')
 {
   $result = $n1%$n2;
 echo "<center><h2>The Modules of this $n1 number is:  $result</h2></center>";
}
/*7= Average*/
elseif($operator == 'x̄')
 {
   $result = ($n1+$n2 )/2;
 echo "<center><h2>The Average of this $n1 number is:  $result</h2></center>";
}
/*8= Less*/
elseif($operator == '<')
 {
   $result = ($n1<$n2 );
 echo "<center><h2>The Less then this $n1 number is:  $result</h2></center>";
}
/*9= Greater*/
elseif($operator == '>')
 {
   $result = ($n1>$n2 );
 echo "<center><h2>The Greater then this $n1 number is:  $result</h2></center>";
}

 

else{
  echo"<center><h2>Please enter Operator.......</center></h2>";
}
}
?>