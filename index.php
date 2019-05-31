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
    document.getElementById("border").style.border = "solid #C5C3C6 7px";
    
}

function mouseend() {
	document.body.style.backgroundColor = "#ffffff";
    document.getElementById("border").style.border = "solid #333333 0px";
	document.body.style.color = "#333333";

}

function over() {
    document.body.style.backgroundImage = "none";
}

function under() {
    	document.body.style.backgroundImage = "url(../img/food.png)";
}



</script>

</head>

<body>
    
<div class="loading">
</div>

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

   <div class="csslider">
        <input type="radio" name="slides" id="slides_1" checked />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />
        <input type="radio" name="slides" id="slides_N" />
        <ul>
            <li>
			
			
		<div id="border"></div>
			
			<div class="intro">
			
			<div class="intro_text">
			<hr>
			
			<p>
				<h3><q>Inama</q></h3> means meat. 
			</p>
			
			<p>
				the food we eat is our <q> meat </p>
			</p>
			
			<hr>
			</div>
			<h1 class="head" onmouseover="mouseover(this)" onmouseout="mouseend(this)">
			inama 
			</h1>
			
				<div class="intro_text">
				<hr>
			<p>
				Come help Preserve our the memories of our beloved Zambian meals.
			</p>
				<hr>
			<h3 class="share">
				<a href="form.php">
				- Share -
				</a>
			</h3>
			</div>
			
			</div>
			</li>
		
			<!--Slide 2-->
			
            <li >
            <div class="holder">
            <div class="poems">
	            <div class="large" onmouseover="over(this)" onmouseout="under(this)">
	               	<h1 class="headers color"  >
		                lets
		           	</h1>
		           	
		           	<div class="small">
		           	    <p> God has given us many ways</p>
		           	    <p> to cook and obtain food</p>
		           	    <p> that gratifies an <u>unperverted appetite.</u></p>
		           	    <p></p>
		           	    <img src="img/cow.png" width="180px"/>
		           	</div>
		           	
		        </div>
		   
		           	
		        <div class="large"  onmouseover="over(this)" onmouseout="under(this)">
		            
		           	<h1 class="headers color color2" style="animaiton-delay:0.3s" >
		                eat
		           	</h1>
		           	
		           	 	<div class="small">
		           	         <p> the products of the earth</p>
		           	         <p> - a <b>bountiful variety</b> - are</p>
		           	         <p> both palatable and nutritous.</p>
		           	            <p></p>
		           	    <img src="img/apple.png" width="180px"/>
		            	</div>
		           	
		        </div>
	
		        
		        <div class="large" onmouseover="over(this)" onmouseout="under(this)">
		           	
		           	<h1 class="headers color color3"  style="animaiton-delay:0.7s">
		               	healthier
		           	</h1>
		           	
		           	<div class="small">
		           	    <p> So let food be prepared and eaten</p>
		           	    <p> to be <b>appetizing and beneficial</b></p>
		           	    <p> <i>Ellen White</i>. <q>Counsels on Food & Diet</q>.</p>
		           	    <p></p>
		           	    <img src="img/hut.png" width="180px"/>
		           	</div>
		           	
	            </div>
	            
	            </div>
	            
	            <h3 class="recipes">
				<a href="recipes.php">
				- recipes -
				</a>
			</h3>
	          </div>  
	        
			</li>
			
				<!--Mid slide-->
			
			
			
			<!--Slide 3-->
			
            <li>
			
	<div class="intro">
					<div class="intro_text">
					
			
			<p>
				<h3><q>Inama</q></h3> means meat. 
				<p>we eat together while talking</p>
			</p>
			
			<hr>
			</div>
				
	            <div class="contact_holder">
					<h1 class="contact_head" onmouseover="mouseover(this)" onmouseout="mouseend(this)">
						landeni 
					</h1>
                </div>
				
				<div class="intro_text contact_text">
				<hr>
					<p>
						msimbao@macalester.edu
					</p>
					
				<div class="inner">
					<p>
						+469-508-0076
					</p>
			
					<p>
					<a href="https://www.facebook.com/awesomehealth.co/" class="fa fa-facebook"></a>
					<a href="" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-google"></a></p>
					</p>
				</div>
				
			</div>
					
			</li>
           
        </ul>
        <div class="arrows">
            <label class="pulse" for="slides_1"></label>
            <label class="pulse" for="slides_2"></label>
            <label class="pulse" for="slides_3"></label>
      
        </div>
        <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
      
            </div>
        </div>
    </div>
</body>
</html>
