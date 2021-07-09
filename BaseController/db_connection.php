
<?php


if(isset($_POST['right'])){
    echo $_POST['right'];}
if(isset($_POST['left'])){  
    echo $_POST['left'];}
if(isset($_POST['forward'])){  
    echo $_POST['forward'];}
if(isset($_POST['back'])){  
    echo $_POST['back'];}
if(isset($_POST['stop'])){ 
    echo "Have a good day <3!"; 
    $conn -> close();}
?>
