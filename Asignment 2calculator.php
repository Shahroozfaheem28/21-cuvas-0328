<form>
 
<center><div>
    <h1>.......Simple Claculator.......</h1><br>
    <input type="text" value="" name="no1"  required placeholder="Please Enter 1st Number"><br>
   <left> <select type="text" value="" name="Opera"  required placeholder="Please Enter Operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select><br></left>
       
    <input type="text" value="" name="no2"  required placeholder="Please Enter 1st Number"><br><br>
    <input type="submit" value="Submit" name="sub"><br>
    </div></center>
</form>
<?php

if (isset($_GET["sub"])){ 
$n1 = $_GET["no1"];
$n2 = $_GET["no2"];
$operator = $_GET["Opera"];

if($operator == '+')
{
    $result = $n1 + $n2;
echo "<center><h2>The sum of two number is:  $result</h2></center>";
}
elseif($operator == '-'){

$result = $n1 - $n2;
echo "<center><h2>The subtraction of two number is:  $result<center></h2>";
}
elseif($operator == '*'){

 $result = $n1 * $n2;
 echo "<center><h2>The Multiplication of two number is:  $result</center></h2>";
 }
 elseif($operator == '/')
 {
   $result = $n1 - $n2;
 echo "<center><h2>The Division of two number is:  $result</h2></center>";

 }
elseif($operator == '%')
 {
   $result = ($n1*100)/$n2;
 echo "<center><h2>The Percentage of this $n1 number is:  $result</h2></center>";
}
}
?>