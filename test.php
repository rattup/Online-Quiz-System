<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/quiz/login.html');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quizdb');
?>
<html>


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">

#demo{text-align: center;
  font-size: 30px;
  margin-top: 0px;}
#VIP{margin-left:6px; color:blue; float:left;}
#IP{margin-left:600px;color:blue;float:left;}
	a{text-decoration:none;}

  
 
#z{background-color:orange;font-style:italic;margin-top:10px;width=100%;height=70px;padding-right=200px;}
.a{width:100%;height:250px;background-color:pink;padding:50px; padding-left:300px;}
h1{color:green;}
.b{width:100%;height:250px;background-color:pink;padding:50px; padding-left:300px;}
.c{width:100%;height:250px;background-color:pink;padding:50px; padding-left:300px;}
.e{width:100%;height:250px;background-color:pink;padding:50px; padding-left:300px;}
.f{width:100%;height:250px;background-color:pink;padding:50px; padding-left:300px;}

#button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:600px;
}
h2{color:red;}

</style>



</head>
<body>

<p  id="demo">
</div>

<script>

var time=new Date(new Date().getTime() + 0.033*60*60*1000).toLocaleTimeString(); 

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

today = mm + '/' + dd + '/' + yyyy;

// Set the date we're counting down to
 
var countDownDate = new Date(today+" "+time).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    window.location.replace("http://localhost/quiz/result.php");
  }
}, 1000);
</script>




<br/>
<br/>
<br/>
<div id="d">
<h1 id="z" align="center">WELCOME TO QUIZ-MANIA </h1>
</div>
<h1 id="VIP"> <?php echo "welcome"."  " .$_SESSION['username']; ?></h1>
<h1 id="IP"> <a href="logout.php"> Logout</a></h1>
<br/>
</br>
<marquee> <h2>all questions are carrying 1 marks each. there is no negative marking....all the best</h2></marquee>


<form  id="f" action="result.php" method="post">
<div class="a">


<h1>1.<?php $res=mysqli_query($con,'select * from question where qid=1');$r=mysqli_fetch_array($res); echo $r['question'];?></h1>
<table>
<tr><td><h2>a. <?php $res=mysqli_query($con,'select *  from answer where aid=1');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="1" value="1"></td>
</tr>
<tr>
<td><h2>b. <?php $res=mysqli_query($con,'select *  from answer where aid=2');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="1" value="2"></td>
</tr>
<tr>
 <td><h2>c. <?php $res=mysqli_query($con,'select *  from answer where aid=3');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td><td><input type="radio" name="1" value="3"></td>
</tr>
<tr>
<td><h2>d. <?php $res=mysqli_query($con,'select *  from answer where aid=4');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="1" value="4"></td>
</tr>

</table>
<br/>
<br/>

</div>
<br/>
<br/>
<div class="b">


<h1>2. <?php $res=mysqli_query($con,'select * from question where qid=2');$r=mysqli_fetch_array($res); echo $r['question'];?></h1>
<table>
<tr>

<td><h2>a. <?php $res=mysqli_query($con,'select *  from answer where aid=5');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="2" value="5"></td>
</tr>
<tr>
<td><h2>b. <?php $res=mysqli_query($con,'select * from answer where aid=6');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="2" value="6"></td>
</tr>
<tr>
<td><h2>c. <?php $res=mysqli_query($con,'select * from answer where aid=7');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="2" value="7"></td>
</tr>
<tr>
<td><h2>d. <?php $res=mysqli_query($con,'select * from answer where aid=8');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="2" value="8"></td>
</tr>

</table>
<br/>
<br/>

</div>
<br/>
<br/>
<div class="c">


<h1>3. <?php $res=mysqli_query($con,'select * from question where qid=3');$r=mysqli_fetch_array($res); echo $r['question'];?></h1>
<table>
<tr>

<td><h2>a. <?php $res=mysqli_query($con,'select * from answer where aid=9'); $r=mysqli_fetch_array($res);echo $r['answer'];?></h2></td> <td><input type="radio" name="3" value="9"></td>
</tr>
<tr>
<td><h2>b. <?php $res=mysqli_query($con,'select * from answer where aid=10');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="3" value="10"></td>
</tr>
<tr>
<td><h2>c. <?php $res=mysqli_query($con,'select * from answer where aid=11'); $r=mysqli_fetch_array($res);echo $r['answer'];?></h2></td> <td><input type="radio" name="3" value="11"></td>
</tr>
<tr>
<td><h2>d. <?php $res=mysqli_query($con,'select * from answer where aid=12');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="3" value="12"></td>
</tr>

</table>
<br/>
<br/>

</div>
<br/>
<br/>
<div class="e">


<h1>4. <?php $res=mysqli_query($con,'select * from question where qid=4');$r=mysqli_fetch_array($res); echo $r['question'];?></h1>
<table>
<tr>

<td><h2>a. <?php $res=mysqli_query($con,'select * from answer where aid=13');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="4" value="13"></td>
</tr>
<tr>
<td><h2>b. <?php $res=mysqli_query($con,'select * from answer where aid=14');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="4" value="14"></td>
</tr>
<tr>
<td><h2>c. <?php $res=mysqli_query($con,'select * from answer where aid=15');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="4" value="15"></td>
</tr>
<tr>
<td><h2>d. <?php $res=mysqli_query($con,'select * from answer where aid=16');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="4" value="16"></td>
</tr>

</table>
<br/>
<br/>

</div>
<br/>
<br/>
<div class="f">


<h1>5. <?php $res=mysqli_query($con,'select * from question where qid=5');$r=mysqli_fetch_array($res); echo $r['question'];?></h1>
<table>
<tr>

<td><h2>a. <?php $res=mysqli_query($con,'select * from answer where aid=17');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="5" value="17"></td>
</tr>
<tr>
<td><h2>b. <?php $res=mysqli_query($con,'select * from answer where aid=18');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="5" value="18"></td>
</tr>
<tr>
<td><h2>c. <?php $res=mysqli_query($con,'select * from answer where aid=19');$r=mysqli_fetch_array($res); echo $r['answer'];?></h2></td> <td><input type="radio" name="5" value="19"></td>
</tr>
<tr>
<td><h2>d. <?php $res=mysqli_query($con,'select * from answer where aid=20'); $r=mysqli_fetch_array($res);echo $r['answer'];?></h2></td> <td><input type="radio" name="5" value="20"></td>
</tr>

</table>


</div>
<br/>
<br/>
<input type="submit" value="submit" id="button" >

<form>
</body>
</html>

