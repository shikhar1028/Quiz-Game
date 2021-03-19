<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Quiz MainPage </title>
<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: lightblue;
}
button { 
       background-color: blue; 
       width: 100%;
        color: orange; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 button:hover { 
        opacity: 0.7; 
    }    
   
 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body>  
    <center> <h1 style=color:black>Welcome to the Quiz</h1> </center>
    <center> <h1 style=color:blue>Select your difficulty level</h1> </center>
    <center> <h1 style=color:blue>Easy Level</h1> </center> 
	<div class="container">
	<form method="POST" action="quiz1.html">
	<center><input type="submit" value="Start Quiz"></center>
	</form>
        </div>
  <br>
  <br>
    <center> <h1 style=color:blue>Medium Level</h1> </center> 
	<div class="container">
	<form method="POST" action="quiz2.html">
	<center><input type="submit" value="Start Quiz"></center>
	</form>
        </div>  
  <br>
  <br>
  <center> <h1 style=color:blue>Hard Level</h1> </center> 
	<div class="container">
	<form method="POST" action="quiz3.html">
	<center><input type="submit" value="Start Quiz"></center>
	</form>    
        </div>
  <br>
  <br>   
</body>   
</html>