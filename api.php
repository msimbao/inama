<DOCTYPE! HTML>

<html>

<head>
<!-- Meta -->
<meta charset="UTF-8">
<meta name="description" content="Traditional Recipes from Zambia">
<meta name="keywords" content="Zambia, Southern Africa, Food, Recipes">
<meta name="author" content="Mphatso Simbao">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="Inama API">

<title> Inama API</title>

<!-- CSS -->
<link href="css/api.css" rel="stylesheet"/> 


<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>




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
	document.getElementById("holder").style.backgroundColor = "transparent";
	document.getElementById("sheath").style.opacity = "0";
}

function mouseend() {
	document.body.style.backgroundColor = "#ffffff";
	document.body.style.color = "#333333";
	document.getElementById("holder").style.backgroundColor = "white";
		document.getElementById("sheath").style.opacity = "1";
	
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


    
<div id="holder">
    
    <div class="small"  onmouseover="mouseover(this)" onmouseout="mouseend(this)">
        <div>a<b>pi</b> to <b>hel</b>p p<b>ut</b> <b>t</b>h<b>e</b></div>
        <div> t<b>he</b> fo<b>od</b> pu<b>zzle</b></div>
        <div>ba<b>ck</b> tog<b>eth</b>er</div>
        
       <hr class="hr1"> 
       
       <div style="font-family:Lato" class="scroll">SCROLL</div>
        
    </div>
    
    
<div id="sheath">   
    <button class="accordion"><div style="border-left:4px solid #e57373;padding-left:5px;height:24px;float:left;">Introduction</div></button>
<div class="panel" style="text-align:left;">
  <p>The main aim of inama is to be an application that can be used to build other application. There's not a lot of online data concerned with health or nutrition related to Zambian lifestyles, diseases, nutrition and food. Inama hopes to address some of these problems and provide the public with material and tools to find out more regardless of where in the world they are. We are starting with recipes to keep things simple, but will hopefully go beyond that soon as we build the api.</p>
  
  <h3 style="color:#e57373;">
      What is an api anyway?
  </h3>
  
    <p>
        API means Application Programming Interface. It allows you to communicate with our database so that you can add your own data or take as much as you need from us. 
    </p>
    
     <h3 style="color:#e57373;">
      Do I need an API key?
  </h3>
  
    <p>
       You can start using it right away. As we update the site we might include API keys amongst other things.
    </p>
    
     <h3 style="color:#e57373;">
      How can i view the output?
  </h3>
  
    <p>
      The output is in JSON format and it is easier to view if you install the <a href="https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh?hl=en-US" color="#ffe082"><u>JSON Viewer</u></a> plugin for chrome or other programmes.
    </p>
    
</div>

    <button class="accordion"><div style="border-left:4px solid #cddc39;padding-left:5px;height:24px;float:left;">Get all Recipes</div></button>
<div class="panel">
    <div class="inner">
  <p><b style="color:#d4e157;">GET </b><p>
      
  <p>api/recipes/read.php/</p>
  <p>Loads a list of Recipes and their information</p>
    <br>
  <h3 style="color:#9575cd;">Paremeter</h3>
  <p>none</p>
  <br>

  <h3 style="color:#9575cd;">Example</h3>
  <p>inamarecipes.000webhostapp.com/api/recipes/read.php</p>
   <br>

  <h3 style="color:#9575cd;">Result</h3>
   <br>
  <pre>
    {
    "id": 1,
    "full_name": "Mphatso Simbao",
    "email": "msimbao@macalester.edu",
    "Location": "Zambia",
    "recipe_name": "Fritters",
    "traditional_name": "Fitumbuwa",
    "servings": "2",
    "prep_time": "10 minutes",
    "cooking_time": "10 minutes",
    "category": "Grains & Cereals",
    "special_1": "Vegetarians",
    "ingredients": "1 Cup flour..",
    "method": "1. Break eggs..",
    "date": "2018-01-21 04:58:56",
    "tags": ["home", "green"]
    }
  </pre>
  
  </div>
</div>

<button class="accordion"><div style="border-left:4px solid #cddc39;padding-left:5px;height:24px;float:left;">Get all Categories</div></button>
<div class="panel">
  <p> Coming Soon!</p>
</div>

<button class="accordion"><div style="border-left:4px solid #64b5f6;padding-left:5px;height:24px;float:left;">Update Recipes</div></button>
<div class="panel">
  <p>Coming Soon</p>
</div>

<button class="accordion"><div style="border-left:4px solid #ba68c8;padding-left:5px;height:24px;float:left;">Search Recipes</div></button>
<div class="panel">
  <p>Coming Soon</p>
</div>

</div>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
    
</div>

</body>
</html>
