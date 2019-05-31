<?php
require 'database.php';

$conn    = Connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM recipes ORDER BY RAND() LIMIT 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '<section  tabindex="2" onclick="open" class="container '.$row['category'].'">
        
                        	<div   tabindex="1" class="expansion" onclick="close">
                        	 
                        	    <div>
                        	        	<img class="display_image" height="280px" width="match parent" src="data:image/jpeg;base64,'.base64_encode( $row['imagetmp'] ).'"/>
                        	    </div>
                        	    
                        	    <div>
                        	    	<h3> '.$row['recipe_name'].' </h3>
                        	    	
                        	    	<p>  '.$row['method'].' </p>
                        	        
                        	    </div>
				
			            	</div>
		
				<div id="card">
			
				<figure class="front">
	
		
		<img class="display_image" height="280px" width="match parent" src="data:image/jpeg;base64,'.base64_encode( $row['imagetmp'] ).'"/>
		<div class="title">
		
		<h3> '.$row['recipe_name'].' </h3>
		
		</div>
		</figure>
		
		<figure class="back">
		<p>
			 '.$row['description'].'
		</p>
		
		<p>Prep Time: <b> '.$row['prep_time'].' </b>
			</p>
			
			<p>Cooking Time: <b> '.$row['cooking_time'].' </b>
			</p>

		</figure>
		</div>
		
		</section>';
    }
    echo "</section>";
} else {
    echo "0 results";
}

$conn->close();
?>
