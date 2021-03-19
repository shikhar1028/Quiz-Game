<?php
session_start();
$aa=$_POST['a1'];
$bb=$_POST['a2'];
$cc=$_POST['a3'];
$dd=$_POST['a4'];
$ee=$_POST['a5'];
$tt=0;

if($aa=="size")
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
echo "Correct Answer is You can set different size for each recycle bin";
echo"<br>";
echo"<br>";
}
if($bb=="Kakshivat")
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
echo "Correct Answer is You can restore any files in recycle bin if you ever need";
echo"<br>";
echo"<br>";
}
if($cc=="1900")
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
echo "Correct Answer is Control panel";
echo"<br>";
echo"<br>";
}
if($dd=="Ten")
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
echo "Correct Answer is All of the above";
echo"<br>";
echo"<br>";
}
if($ee=="Mortimer")
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
echo "Correct Answer is W3C";
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