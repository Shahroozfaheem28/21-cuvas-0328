<style>
 .frm{
        background-color: skyblue;
       
        border: 3px solid black ;
       padding-left: 150px;
       width: 400px;
        height: 850px;
    
    }
 .tbl1{
    background-color: silver;
        width: 300px;
        height: 300px;
        border: 3px solid black ;
        text-align: center;
        font-size: large;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        
        
    }
    .tbl2{
    background-color: silver;
        width: 300px;
        height: 300px;
        border: 3px solid black ;
        text-align: center;
        font-size: large;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        
    }
   
   

</style>
<form method="get" class="frm">
<table border="1" class="tbl1">
               <h1> Registration Form     </h1>
            <tr><td><label >Name</label></td><td> <input type="text" name="name" required > </td></tr>
            <tr><td><label >Father Name</label></td><td> <input type="text" name="fname" required > </td></tr>
            <tr><td><label >Email</label></td><td> <input type="text" name="email" required> </td></tr>
            <tr><td><label >CNIC</label></td><td> <input type="text" name="cnic" required> </td></tr>
            <tr><td><input type="submit" value="Register" name="sub"></td></tr><br><br>

</form>
</table>
<table border="1" class="tbl2">

<?php
if(isset($_GET['sub'])){ 
$n1 = $_GET['name'];
$n2 = $_GET['fname'];
$n3 = $_GET['email'];
$n4 = $_GET['cnic'];
$n5 = $_GET['sub'];
if($n5 == "Register"){
echo" <h1>Results</h1>";
echo "<tr><td>Name</td><td> $n1 </td></tr>";
echo "<tr><td>Father Name</td><td> $n2 </td></tr>";
echo "<tr><td>Email</td><td> $n3 </td></tr>";
echo "<tr><td>CNIC</td><td> $n4 </td></tr>";
}

}
?>
</table>