<DOCTYPE! HTML>

<html>

<head>
<!-- Meta -->
<meta charset="UTF-8">
<meta name="description" content="Traditional Recipes from Zambia">
<meta name="keywords" content="Zambia, Southern Africa, Food, Recipes">
<meta name="author" content="Mphatso Simbao">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Inama | Zambian Recipes">

<title> Inama | Zambian Recipes</title>

<!-- CSS -->
<link href="css/csslider.css" rel="stylesheet"/> 
<link rel="shortcut icon" href="img/favicon.ico"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Java-->
<script>
function sidebarop() {
	document.getElementById("content").style.height = "100%";
    document.getElementById("sidebar").style.width = "100%";
}

function sidebarcl() {
	document.getElementById("content").style.height = "0%";
    document.getElementById("sidebar").style.width = "0%";
}

function mouseover() {
	document.body.style.backgroundColor = "#111c20";
	document.body.style.color = "#C5C3C6";
    document.getElementById("border").style.border = "solid #C5C3C6 10px";
}

function mouseend() {
	document.body.style.backgroundColor = "#ffffff";
    document.getElementById("border").style.border = "solid #333333 0px";
	document.body.style.color = "#333333";
}


</script>

</head>

<body>

<div onclick="sidebarop()" class="menu">

<p id="menup">Inama Zambian Recipes</p>
	
</div> 


<div id="sidebar" onclick="sidebarcl()">

					 <div id="content" onclick="sidebarcl()">
	<a href="index.php"><p><div class="item1 item">iseni</div></p></a>
	  <a href="recipes.php"><p><div class="item2 item">tulye</div></p></a>
   <a href="api.php"><p><div class="item3 item logo">inama</div></p></a>
	<a><p><div class="item4 item">bonse</div></p></a>
	
</div>

<div class="copyright">
	<p>Health is Awesome - <?php echo date("Y"); ?></p>
</div>


</div>
			
			<div class="intro">
			    
  <br>

<br>

<br>

		
		                	<h1 class="head" onmouseover="mouseover(this)" onmouseout="mouseend(this)">
		                    	thank you
		                	</h1>
			
			   	  <div class="intro_text">
				    <hr>
		            	<p>
			            	Please submit another wonderful piece
			            </p>
			       	<hr>
		            	<h3 class="share">
			            	<a href="form.php">
			            	- Share -
			            	</a>
			            </h3>
			        </div>
			
			</div>
		
</body>
</html>
