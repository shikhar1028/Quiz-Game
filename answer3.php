<?php
session_start();
$aa=$_POST['a1'];
$bb=$_POST['a2'];
$cc=$_POST['a3'];
$dd=$_POST['a4'];
$ee=$_POST['a5'];
$tt=0;

if($aa=="largest")
{
echo "Your First Answer is corrrect";
echo"<br>";
echo"<br>";
$tt=$tt+1;
}
else
{
echo "Your First Answer is wrong";
echo"<br>";
echo "Correct Answer is relatively easy to support in software";
echo"<br>";
echo"<br>";
}
if($bb=="Ashwins")
{
echo "Your Second Answer is corrrect";
echo"<br>";
echo"<br>";
$tt=$tt+1;
}
else
{
echo "Your Secong Answer is wrong";
echo"<br>";
echo "Correct Answer is Operating System";
echo"<br>";
echo"<br>";
}
if($cc=="1878")
{
echo "Your Third Answer is corrrect";
echo"<br>";
echo"<br>";
$tt=$tt+1;
}
else
{
echo "Your Third Answer is wrong";
echo"<br>";
echo "Correct Answer is Accessories";
echo"<br>";
echo"<br>";
}
if($dd=="Eight")
{
echo "Your Fourth Answer is corrrect";
echo"<br>";
echo"<br>";
$tt=$tt+1;
}
else
{
echo "Your Fourth Answer is wrong";
echo"<br>";
echo "Correct Answer is Windows NT";
echo"<br>";
echo"<br>";
}
if($ee=="Banerjee")
{
echo "Your Fifth Answer is corrrect";
echo"<br>";
echo"<br>";
$tt=$tt+1;
}
else
{
echo "Your Fifth Answer is wrong";
echo"<br>";
echo "Correct Answer is WinZip";
echo"<br>";
echo"<br>";
}
echo "<h1>Your Score Is $tt</h1>";
echo"<br>";
if($tt=="1")
{
echo "<h1>You have Poor General Knowledge.</h1>";
}
echo"<br>";
if($tt=="2")
{
echo "<h1>You have Bad General Knowledge.</h1>";
}
echo"<br>";
if($tt=="3")
{
echo "<h1>You have Good General Knowledge.</h1>";
}
echo"<br>";
if($tt=="4")
{
echo "<h1>You have Strong General Knowledge.</h1>";
}
echo"<br>";
if($tt=="5")
{
echo "<h1>You have very Strong General Knowledge.</h1>";
}
echo"<br>";
echo "<a href='mainpage.php'>click here to go back</a>";
?>