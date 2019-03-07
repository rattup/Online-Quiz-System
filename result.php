<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/quiz/login.html');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">


</head>
<body>
<div>
<h1 id="d1" align="center">QUIZ-RESULT </h1>
</div>
<br/>
<br/>
<h1 id="heading"><a  href='logout.php' >Logout</a></h1>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdb');
$counter= count($_POST);
$marks=0;
for($i=1;$i<=5;$i++)
{
$q="select * from question where qid=$i";
$t=mysqli_query($con,$q);
$a=mysqli_fetch_array($t);

if(isset($_POST["$i"]))
{
if($a['ansid']==$_POST["$i"])
$marks++;
}

}
?>

<table>
<tr>
<td colspan="5"><h1><?php echo "Questions attempted by you :"." $counter ";?> </h1></td>

</tr>
<tr>
<td colspan="5"> <h1><?php echo "Total marks="." $marks"; ?></h1></td>
</tr>
</table>
<br/>
</br>



</br>
</body>
</html>