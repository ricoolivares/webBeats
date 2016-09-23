<?php


function loadMain(){
	
	
//Start BODY TAG
echo "<body>";			
		
        echo   " <h1>  Despliegue de registros. </h1>";		
        
        readMainMenu();
		
echo "</body>";
	
	
	
}




function connectDB(){
	
	//Connect To Database
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='Intranet';
	
	//$connection = mysqli_connect("localhosta","root","","intranet") OR DIE('Unable to connect to database! Please try again later.');
	$connection = mysqli_connect($hostname,$username,$password,$dbname);
    
     if (mysqli_connect_errno())
      {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          DIE('Unable to connect to database! Please try again later.');
      }
   
    
    
	
	return $connection;

}


function readMainMenu(){	
	//Variable declaration
	$i=$j=$actualLevel=$nextLevel=$differenceLevel=$totalRows=$totalRows2=$typeTag=0;
    $sql=$menuID=$menuName=$menuType="";
    $webOptions = array();
	$pileTags = array();
	
	
	
	//Get DB connection
	$conn = connectDB();
	
	
	//Read WebMenus
	$sql = 'SELECT OptionID, OptionName, ActLevel, MenuType, Level1,' . 
	               'Level2, Level3, Level4, Description, WebMenuID, Icon ' . 
	       'FROM it_cat_menustemp ' .
		   'ORDER BY OptionID';
                       		
	$Rows = mysqli_query($conn, $sql);
	 
	
	//Fill vector with Query result
    while ($row = mysqli_fetch_array($Rows, MYSQLI_BOTH)) {
		$webOptions[] = $row; 		
	}
		
	
    
    //Display webMenus
    $totalRows = count($webOptions);
    if ($totalRows>0) {
		
		
    
        //Display WebOptions  vector 
        for ($i = 0; $i <  ($totalRows); $i++) {
            //Getting Menu information from Vector
			$menuID = $webOptions[$i]['OptionID'];
			$menuName = $webOptions[$i]['OptionName'];
			$menuType = $webOptions[$i]['MenuType'];
			
			//If last Record
			if ($i==($totalRows-1)){
				//---Logic if is Last Record
				
				//Not has Submenu (Display single Tag)
				$typeTag = 0;	//SingleMenu 
				displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags);
				
				//Empty PILE				
				$j = 0;
				$totalRows2 = count($pileTags);
				while ($j<$totalRows2){
				   //Extract & print Tag from PILE
					echo array_pop($pileTags) . "</BR>";										                    
					$j = $j + 1;
				}			 
				
			
			}
			else{
				//---Logic if NOT Last Record
				
				
				//Get actual and Next Level Number
				$actualLevel = $webOptions[$i]['ActLevel'];
				$nextLevel = $webOptions[$i+1]['ActLevel'];
				
				
				//Check typeTags according the Level state
				if ($nextLevel == $actualLevel) {
					//Not has Submenu (Display single Tag)
					$typeTag = 0;	//SingleMenu 
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags);
					
					
				}
				elseif ($nextLevel > $actualLevel) {
					//Begin submenu (OPEN Tag)
					$typeTag = 1;	//OpenSubmenu 
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags);
					
				}
				else {
					//Last submenu (CLOSE Tag)
					$typeTag = 2;	//CloseSubmenu 
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags);
				}
				
				
			   //Check difference between levels
			   // Positive difference means Jump from High Level to Less Level (Correct)
			   // Negative difference means Jump from Less Level to High Level (Incorrect if difference is more than 1)
			   $differenceLevel  = $actualLevel - $nextLevel;
			   if ($differenceLevel > 0){
				   //Positive difference (Close the jumped TAGS)
				   $j = 1;
				   while ($j<$differenceLevel){
					   //Extract & print Tag from PILE
						echo array_pop($pileTags) . "</BR>";										                    
						$j = $j + 1;
				   }			   
			   }
			   else{
				   //Negative difference
				   //Display error message if difference is more than 1
				   if (abs($differenceLevel)>1){				   
						echo " !!!Se encontro inconsistencia en el menu!!!!!   </BR>";					
				   }
				   
			   }
		   	
			}
			
			 
        }//End For cicle (Display WebOptions  vector )
		
		
        echo "Total:".count($webOptions);
                    
    }
    else {
        echo "No se encontraron registros!!!";
    }
    
	//Close DB connection 
	mysqli_close($conn);
	
}



function displayTag($menuID, $menuName, $menuType, $typeTag, array &$pileTags){    
    switch ($typeTag) {
        case 0:
            //Single Option (Open&Close TAG)              
            switch ($menuType) {
                case 'MENU':                    
					$result = $menuID . "--> UL: LI: " .$menuName . " :LI :UL";
					echo $result . "</BR>";
                    break;
					
               case 'SUB':
                    $result = $menuID . "--> UL: LI: " .$menuName . " :LI :UL";
					echo $result . "</BR>";
                    break; 
					
               case 'OPT':
                    $result = $menuID . "--> LI: " .$menuName . ":LI";
					echo $result . "</BR>";
                    break;                           
            }
              
            break;
            
       case 1:
           //Open SubMenu (Open TAG)
           switch ($menuType) {
                case 'MENU':                    
					$result = $menuID . "--> UL: LI: " .$menuName . " :LI";
					echo $result . "</BR>";
					
					//Add Tag to PILE
					array_push($pileTags," :UL ");
                    break;
					
               case 'SUB':                    
					$result = $menuID . "--> UL: LI: " .$menuName . " :LI";
					echo $result . "</BR>";
					
					//Add Tag to PILE
					array_push($pileTags," :UL ");
                    break;     
					              
            }            
            break;
           
       case 2:
            //Close SubMenu (Close TAG)
            switch ($menuType) {
                case 'MENU':
                    $result = $menuID . "--> UL: LI: " .$menuName . " :LI :UL";
					echo $result . "</BR>";
					
					//Extract & print Tag from PILE
					echo array_pop($pileTags) . "</BR>";										
                    break;
					
               case 'SUB':
                    $result = $menuID . "--> UL: LI: " .$menuName . " :LI :UL";
					echo $result . "</BR>";
					
					//Extract & print Tag from PILE
					echo array_pop($pileTags) . "</BR>";										
                    break;      
					
               case 'OPT':
                    $result = $menuID . "--> LI: " .$menuName . " :LI";
					echo $result . "</BR>";
					
					//Extract & print Tag from PILE
					echo array_pop($pileTags) . "</BR>";										
                    break;                           
            }
            break;
                
    }
    
    
}






?>