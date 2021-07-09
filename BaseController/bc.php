
<?php 


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "nellawoka9";
$db = "basedb";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error); }
$sql =("INSERT INTO `basecontroller` (L,R,F,B,S) values (?,?,?,?,?)");
$L = $_POST['left'];
$R = $_POST['right'];
$F = $_POST['forward'];
$B = $_POST['back'];
$S = $_POST['start']; 
if(isset($_POST['start'])){
$sql= ("insert into `basecontroller` VALUES ('','','','','$S')");
    echo $_POST['start'];}
if(isset($_POST['right'])){  
$sql= ("insert into `basecontroller` VALUES ('','$R','','','')");
echo $_POST['right'];}
if(isset($_POST['left'])){
$sql= ("insert into `basecontroller` VALUES ('$L','','','','')");
echo $_POST['left'];}    
if(isset($_POST['forward'])){
$sql= ("insert into `basecontroller` VALUES ('','','$F','','')");
echo $_POST['forward'];}
if(isset($_POST['back'])){
$sql= ("insert into `basecontroller` VALUES ('','','','B','')");
echo $_POST['back']; 
    }
    function CloseCon($conn)
 {
 $conn -> close();
 }
?>
