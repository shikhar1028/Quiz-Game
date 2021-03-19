<?php
session_start();
$aa=$_POST['a1'];
$bb=$_POST['a2'];
$cc=$_POST['a3'];
$dd=$_POST['a4'];
$ee=$_POST['a5'];
$tt=0;

if($aa=="longest")
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
echo "Correct Answer is longest railway station";
echo"<br>";
echo"<br>";
}
if($bb=="Patanjali")
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
echo "Correct Answer is Patanjali";
echo"<br>";
echo"<br>";
}
if($cc=="1893")
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
echo "Correct Answer is 1893";
echo"<br>";
echo"<br>";
}
if($dd=="Twelve")
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
echo "Correct Answer is Twelve Provinces (Subas)";
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
echo "Correct Answer is R.D. Banerjee and by D.R. Sahni";
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