 <?php
session_start();
require  'dbcon.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<style>

.{
	margin:0;
	padding:0;
	box-sizing: border-box;
}

body{
	 font-family: montserrat;
}

.h4{
	font-family: sans-serif;
}

nav{
    background: grey;
    height: 100px;
    width: 100%;
}

label.logo{
	color: white;
	font-size: 35px;
	line-height: 80px;
	padding:  100px;
	font-weight: bold;
}

nav ul{
	float: right;
	margin-right: 60px;

}


nav ul li{
	display: inline-block;
	line-height: 80px;
	margin: 0 6px;
	
}


nav ul li a{
	text-decoration: none;
	color: white;
	font-size: 20px;
	padding: 6px 14px;
	text-transform: uppercase;
	
	
}

a.active,a:hover{
	background: greenyellow;
	transition: .10s;
}

.checkbtn {
	 font-size: 30px;
	 color: whitesmoke;
	 float: right;
	 line-height: 80px;
	 margin-right: 40px;
}

#check{
	display: none;
}

@media (max-width: 952px){
	label.logo{
		font-size: 30xp;
		padding-left: 50px;
	}

	nav ul li a{
		font-size: 19px;
	}
}
@media (max-width: 858px){
	.ckeckbtn{
		display: block;
	}
	ul{
		position: fixed;
		width: 50%;
		height: 100vh;
		background:grey;
		top: 100px;
		right: 100%;
		text-align: center; 
		transition: all.8s;
	}
     
     nav ul li {
         display: block;
         margin: 50px 0;
         line-height: 30px;
     }

     nav ul li a{
     	font-size: 20px;
		
     }

     a:hover,a.active {

     	 background: none;
     	 color: olive ;
     }

     #check:checked ~ ul{
     	left: 0;
     }
}


.{
	margin: 0;
	padding: 0;

}

section{
	background:url(1.jpg) ; 
	background-size: cover;
	height: calc(100vh - 80px);
}



</style>
<body>
    <nav>
    	<input type="checkbox" id="check">
    	<label for="check" class="checkbtn">
    		<i class="fas fa-bars"></i>
    	</label>
    	<label class="logo">Delta</label>

    	<ul>
    		<li><a href="student-create.php" >Registration</a></li>
    		<li><a href="records.php" >Records</a></li>
    		<li><a href="#">About</a></li>
			
			
</ul>

    </nav>
  
<section>
</section>
</body>
</html>	