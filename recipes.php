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
<link href="css/recipes.css" rel="stylesheet"/> 
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

<script>
    
    filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("container");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
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

<div class="holder">

<div id="myBtnContainer">
 
  | <a class="btn active" onclick="filterSelection('all')" href='#all' id='all'> Show all</a> |
   <a class="btn" onclick="filterSelection('1')" href='#fruit_vegetables' id='fruit_vegetables' > Fruit & Vegetables</a> |
  <a class="btn" onclick="filterSelection('2')" href='#fish_poultry' id='fish_poultry'> Fish & Poultry</a> |
   <a class="btn" onclick="filterSelection('3')" href='#roots_tubers' id='roots_tubers'> Roots & Tubers</a> |
  <a class="btn" onclick="filterSelection('4')" href='#drinks' id='drinks'> Drinks</a> |
   <a class="btn" onclick="filterSelection('5')" href='#cereals_grains' id='cereals_grains'> Cereals & Grains</a> |
   <a class="btn" onclick="filterSelection('6')" href='#legumes_pulses' id='legumes_pulses'> Legumes & Pulses</a> |
</div>



				<div class="polaroids"><?php include "display.php" ?></div>

</div>

</body>
</html>
