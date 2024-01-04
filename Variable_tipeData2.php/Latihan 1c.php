<div class="box1">
<div class="boxed-text1">
<?php
$a = "A";
echo"$a";
?>
</div>
<br>

<div class="boxed-text2">
<?php
$a = "A";
echo"$a" ;
?>
</div>

<div class="boxed-text2">
<?php
$b = "B";
echo"$b" ;
?>
</div>
<br>

<div class="boxed-text3">
<?php
$a = "A";
echo$a ;
?>
</div>
<div class="boxed-text3">
<?php
$b = "B";
echo$b;
?>
</div>
<div class="boxed-text3">
<?php
$c = "C";
echo$c;
?>
</div>
</div>
<style>
    .box1{
        border: 10px solid blueviolet;
        padding: 10px;
        margin: 10px;
        width: 50%;
    }
    

    .boxed-text1{
        background-color: lightgray;
        display : inline-block;
        border: 5px solid darkgray;
        padding: 10px;
        margin: 10px;
        width: 100px;
        height: 100px;
        text-align: center;
        font-size: 50px;
        
    }
   
    

    .boxed-text2{
        background-color: lightgray;
        display : inline-block;
        border: 5px solid darkgray;
        padding: 10px;
        margin: 10px;
        width: 100px;
        height: 100px;
        text-align: center;
        font-size: 50px;
        
    }
    .boxed-text3{
        background-color: lightgray;
        display : inline-block;
        border: 5px solid darkgray;
        padding: 10px;
        margin: 10px;
        width: 100px;
        height: 100px;
        text-align: center;
        font-size: 50px;
        
    }
    
</style>