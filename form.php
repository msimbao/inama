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

<title> Inama Submission Form</title>

<!-- CSS -->
<link href="css/form.css" rel="stylesheet"/> 


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
}

function mouseend() {
	document.body.style.backgroundColor = "#ffffff";
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

<div class="holder" onmouseover="mouseover(this)" onmouseout="mouseend(this)">
			<form action="process.php" method="post" enctype="multipart/form-data">

				<fieldset class="card" >
					<legend  >
						Your details
					</legend>
							<p>my full <label for="full_name">name</label> is...</p>
							<p>
								<input type="text" name="full_name" id="full_name" minlength="3" placeholder="Your Name" required>
							</p>
						
				
						<p>my
							<label for="email">email address</label> is...</p>
						<p>
								<input type="email" name="email" id="email" placeholder="Your Email" required>
						</p>
						
						<p>I am from... </p>
						<p>
								<input type="text" name="location" id="location" placeholder="City" required>
						</p>
	
				</fieldset>
				
				<fieldset class="card">
					<legend >
						The Recipe
					</legend>
						<p> My 
							<label for="recipe_name">
								recipe
							</label> is...</p>
							
							<p>
								<input type="text" name="recipe_name" id="recipe_name" minlength="3" placeholder="Title" required>  ,
							</p>
							
							<p> it is traditionally called... </p>
							<p>
								<input type="text" name="traditional_name" id="" minlength="3" placeholder="(Optional)">  ,
							</p>
				
						
						<p>it is about...</p>
						<p>
								<textarea maxlength="200" form="myform" rows="5" cols="48" name="description" id="description" wrap="physical" placeholder="Short Description" required></textarea>
						</p>
						
						<p>
							<label for="servings">number of Servings:</label> </p>
							</p>
								<input type="number" name="servings" id="servings" minlength="3" placeholder="2" required>  ,
							</p>
							
							<p> 
							<label for="prep_time">preparation Time:</label></p>
							<p>
								<input type="text" name="prep_time" id="prep_time" minlength="3" placeholder="1 hour" required>  ,
							</p>
							
							<p> 
							<label for="cooking_time">cooking Time:</label> </p>
							<p>
								<input type="text" name="cooking_time" id="cooking_time" minlength="3" placeholder="5 minutes" required>  ,
							</p>
	
				</fieldset>
				
				<fieldset>
					<legend> 
						details
					</legend>
				
				<p>The
						<label for="category">category</label> is
							<div class="dropdown">
								<select name="category"  placeholder="" required>
									<option value="1">Fruit & Vegetables</option>
									<option value="2">Fish & Poultry</option>
									<option value="3">Roots & Tubers</option>
									<option value="4">Drinks</option>
									<option value="5">Cereals & Grains</option>
									<option value="6">Legumes & Pulses</option>
								</select>
							</div>
						</p>
						
						<p>recommended for;</p>
						<p> </p>
							<p>
							    <div class="dropdown">
								<select type="text" name="special_1" placeholder="" >
									<option value="1">Vegans </option>
									<option value="2">Diabetics</option>
									<option value="3">Anaemics</option>
									<option value="4">Celiacs </option>
									<option value="5">Vegetarians</option>
									<option value="6">Non-dairy consumers</option>
									<option value="7">Hypertensive</option>
									<option value="8">Hallal eaters</option>
									<option value="9">Nut allergies</option>
								</select>
								</div>
						</p>
						
				</fieldset>
				
				<fieldset >
					<legend  >
						Image
					</legend>
					
			        	<div class="output_image_preview">
				            <img id="output_image"/>
			            	    <input type="file"  id="file" class="inputfile" name="myimage" onchange="preview_image(event)" accept="image/*">
			                	<label class="inputlabel" for="file">
			                	
			                	        Change Image
			                
			                	</label>
			        	</div>
				
				</fieldset>
				
				<fieldset class="card">
					<legend >
						Parts
					</legend>
						<p> You have to use: </p>
							<p><i>(Place each on a new line)</i></p>
							<p>
								<textarea maxlength="200" form="myform" rows="3" cols="48" name="ingredients" id="ingredients" wrap="physical" placeholder="e.g 1 cup flour...."required></textarea>
						    </p>
							
				</fieldset>
				
				<fieldset class="card">
					<legend >
						Method
					</legend>
						<p>(Place each step on a new line)</p>
						<p>
							<textarea form="myform" rows="5" cols="60" type="text" name="method" id="method" wrap="physical" placeholder="e.g 1. Cut the Onions...."></textarea>
						
						</p>
	
				</fieldset>
				
				<p>
					<input type="submit" id="submit" name="submit" value="Send">
				</p>

			</form>
	</div>
</body>
</html>
