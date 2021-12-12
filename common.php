<?php
function generateVacancies() {
    include_once("dbConnect.php");

    $counter = 0;
	
	echo "<div class=\"container\">";
	
	//This loop controls the Y axis 
    for( $y = 0; $y<3; $y++ ) {
            
			//Opens a vertical row
			echo "<div class=\"row mb-5\">";
		
			//This loop handles the X axis
			
			for( $x = 0; $x<3; $x++ ) {
				
				//Counter increments by 1
				++$counter;
				
				
	//Variables - "gen" variables are set up to search through the db. idFound tells the website when it HAS been found.
	//Variables - counter is the target variable and increases as the loop iterates. 
    $genQuery = "SELECT * FROM cards"; 
    $genResult = mysqli_query($conn, $genQuery); 
    $genRows = mysqli_num_rows($genResult);
	$idFound = false;
	
				while($genRow = mysqli_fetch_assoc($genResult)) {
			
					if ( $genRow['Vacancy_ID'] == $counter ) {
						$genRecord = $genRow;
						$idFound = true;
								
					}	
				}
						
				//Generating the Card and grabbing the information from the database, inserting it into the card.
				echo "<div class=\"col-md-6 col-lg-4 mb-4\">
					<div class=\"property-entry h-100\">
					<a href=\"property-details.html\" class=\"property-thumbnail\">   
					<img src=\"images/placeholderSmall.png\" alt=\"Image\" class=\"img-fluid\">
					</a>
						<div class=\"p-4 property-body\">
							<h2 class=\"property-title\"><a href=\"property-details.html\">",$genRecord["Job_Title"],"</a></h2>
							<span class=\"property-location d-block mb-3\"><span class=\"property-icon icon-room\"></span>",$genRecord["Location"],"</span>
							<strong class=\"property-price text-primary mb-3 d-block text-black\">£",$genRecord["Salary"],"</strong>
							<ul class=\"property-specs-wrap mb-3 mb-lg-0\">
								<li>
									<span class=\"property-specs\">Post Date</span>
									<span class=\"property-specs-number\">",$genRecord["Post_Date"],"</span>
						
								</li>
								<li>
									<span class=\"property-specs\">Type</span>
									<span class=\"property-specs-number\">",$genRecord["Job_Type"],"</span>
                    
								</li>
								<li>
									<span class=\"property-specs\">ID</span>
									<span class=\"property-specs-number\">",$genRecord["Vacancy_ID"],"</span>
                    
								</li>
							</ul>

						</div>
					</div>
				</div>";
				
				
			}

			//Closes row
			echo "</div>";
			
				
        }
		
		//We close the main container 
		echo "</div>";

	}	
?>