<!DOCTYPE html>
<?php session_start();

if(isset($_SESSION['login']))
{
		}else{
			header('location:index.php');}

?>
<html>
	<?php

	  $url = "http://localhost/Projeto/yugioh/funcoes/CardDetails.php??";
	  parse_url($url, PHP_URL_QUERY);
	  $_SERVER['QUERY_STRING'];
	
	
	    $Details = $_SERVER['QUERY_STRING'];
	    $Details;
		
			$api_url = "https://db.ygoprodeck.com/api/v7/cardinfo.php?$Details" ;
			$json_data = file_get_contents($api_url);
			$response_data = json_decode($json_data);
			$cards = $response_data->data;
			foreach($cards as $carta)
				{$carta->name;
		 			$carta->card_images[0]->image_url_small; }
	?>

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
		}
		
		#nav{
			position: absolute;
			top: 0;
			bottom: 0; 
			right: 0;
			width: 230px; /* Width of navigation frame */
			height: 100%;
			overflow: hidden; /* Disables scrollbars on the navigation frame. To enable scrollbars, change "hidden" to "scroll" */
			background: #eee;
		}
		
		main{
			position: fixed;
			top: 0; 
			left: 0;
			right: 230px; /* Set this to the width of the navigation frame */
			bottom: 0;
			overflow: auto; 
			background: #fff;
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
	
	<body>
		<main>
			<div class="innertube">
				

				<h1> <?php echo $carta->name  ?>  </h1>
				
				<img src ="<?php echo $carta->card_images[0]->image_url ?>"  style="width:30%">
				
			</div>
  <p style="text-align: center"> <?php echo $carta->desc    ?> </p>

		</main>
		<nav id="nav">
		  	<div class="innertube">
			
			<h3>CARTA DETALHES </h3>
			<ul>
        <li> Archetype:  <?php echo $carta->archetype ?? 'None' ?> </li>
				<li> Attribute:  <?php echo $carta->attribute ?? 'None' ?> </li>
				<li> Type: <?php echo $carta->race  ?? 'None' ?> </li>
				<li> Level/Rank/Rating: <?php echo $carta->level ??  $carta->linkval ?? 'None' ?> </li>
				<li> Desc: <?php echo  $carta->type  ?? 'None' ?> </li>
				<li> Price: <?php echo $carta->card_prices[0]->tcgplayer_price ?? '' ?>$ </li>
			</ul>
			<h3>Botão de Adicionar</h3>
			<ul>
      <p>
        <form action = "Registrar.php" method="POST"  >
        <input type="hidden" name="username" value="<?php echo $carta->name ?>" >
        <input type="hidden" name="password" value="<?php echo $carta->id  ?>" >
        <input type="hidden" name="id" value="<?php echo  $carta->card_prices[0]->tcgplayer_price ?>">
        <button class="button">Adicionar </button>
       </form>
       </div>    
    </p>
      </li>
	  <li> <?php if(isset($_SESSION['login'])){ ?> <a style="color:blue" href="LogOff.php">
			<?php echo $_SESSION['usuario'];?> (sair)</a>	<?php }?>	</a></li>
				<li><a href="#">Go to Decklist </a></li>
				<li><a href="pesquisa.php">Back to the Seach Page </a></li>

			</ul>
			</div>
		</nav>
	
	</body>
</html>
