<!DOCTYPE html>
<?php session_start();

if(isset($_SESSION['login']))
{
		}else{
			header('location:index.php');}

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;  charset=utf-8">
		<title>2 Column Frames Layout &mdash; Right Menu</title>
		<style type="text/css">
	
		body{
			margin: 0;
			padding: 0;
			overflow: hidden;
			height: 100%; 
			max-height: 100%; 
			font-family:Sans-serif;
			line-height: 1.5em;
            background-image: url("https://ygoprodeck.com/wp-content/uploads/2017/08/bg_large.jpg"); background-position: left top; background-size: cover;}
		
		#nav{
            
			position: absolute;
			top: 0;
			bottom: 0; 
			right: 0;
			width: 230px; /* Width of navigation frame */
			height: 100%;
			overflow: hidden; /* Disables scrollbars on the navigation frame. To enable scrollbars, change "hidden" to "scroll" */
			background: #757575;
		}
		
		main{
			position: fixed;
			top: 0; 
			left: 0;
			right: 230px; /* Set this to the width of the navigation frame */
			bottom: 0;
			overflow: auto; 
			
          
		}
		
		.innertube{
			margin: 15px; /* Provides padding for the content */
		}
		
		p {
			color: #555;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: darkgreen;
			text-decoration: none;
		}
				
		/*IE6 fix*/
		* html body{
			padding: 0 230px 0 0; /* Set the second value to the width of the navigation frame */
		}
		
		* html main{ 
			height: 100%; 
			width: 100%; 
		}

		</style>
		
	</head>

    <body >
        
		<main style="margin: 5%;">
            <p style="margin: 3%; height: 1%; color:rgb(255, 0, 0);font-size:25px;" >Search Cards </p>

			<form 
			action="getCard.php">
			<input type="text" name = "busca" >
			<button type="submit">Buscar</button>
            


            >

            
		</main>
			
		<nav id="nav">
			<div class="innertube">
			
			
			<h3>Menu</h3>
			<ul>
				<li><a style="color:blue;" href="#">Decklist</a></li>
				<li> <?php if(isset($_SESSION['login']))
{ ?>	<a style="color:blue" href="LogOff.php"> <?php echo $_SESSION['usuario'];?> (sair)</a> <?php }?> </a></li>
				
				</ul>
				</div>
				</nav>
	
	</body>

</html>
