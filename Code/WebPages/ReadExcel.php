
<!DOCTYPE html>
<head <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<html>


<?php
 

/** Error reporting */
error_reporting(E_ALL);

date_default_timezone_set('America/Tijuana');

/** PHPExcel_IOFactory */
$pathExcelFile = $_SERVER['DOCUMENT_ROOT'];
$pathExcelFile .= "/WebBeats/assets/excel/TemplateGames3.xlsx";
//require_once dirname(__FILE__) . '..\Plugins\PHPExcel\IOFactory.php';
//
//
//
//require_once dirname(__FILE__) . '..\Plugins\PHPExcel\IOFactory.php';
//require_once dirname(__FILE__) . '/webBeats/Code/Functions/functionsBeats.php';

require_once("../Plugins/PHPExcel/IOFactory.php");
require_once("../Functions/functionDB.php");





//Variable declaration
$sheetnames = array('Hoja1','Hoja2'); 
$inputFileType = 'Excel2007'; 
$inputFileName = $pathExcelFile;
$Games = new ArrayObject();





/**  Create a new Reader of the type defined in $inputFileType  **/ 
$objReader = PHPExcel_IOFactory::createReader($inputFileType); 
/**  Advise the Reader of which WorkSheets we want to load  **/ 
$objReader->setLoadSheetsOnly($sheetnames); 
/**  Load $inputFileName to a PHPExcel Object  **/ 
$objPHPExcel = $objReader->load($inputFileName);


//Reading file and sent to table
$objWorksheet = $objPHPExcel->getActiveSheet();
// Get the highest row number and column letter referenced in the worksheet
$highestRow = $objWorksheet->getHighestRow(); // e.g. 10
$highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
// Increment the highest column letter
$highestColumn++;

//



//Go throw all rows
for ($row = 1; $row <= $highestRow; ++$row) {
	
	//Check if actual row is not empty	
	$actualCell = $objWorksheet->getCell('A' . $row)->getValue();
	$emptyRow = ($actualCell == "" ? $emptyRow + 1 : 0);
	
	
	//If found row with data, evaluate it!
	if ($actualCell<>""){
		
		//check what type of Cell is at actual row
		if (strrpos($actualCell, 'odos') >0){
			$cellType = 0;			//Cell is a DATE
		}
		elseif (is_numeric($actualCell)){
			$cellType = 2;			//Cell is a GAME
		}
		else{
			$cellType = 1;			//Cell is a LEAGUE
		}
		
		
		switch ($cellType){
			//Cell is a DATE
			case 0:		
				//Getting date
				$row = $row + 6;				
				$actualCell = $objWorksheet->getCell('A' . $row)->getValue();								
				$miDate = gettingDate($actualCell);
				
				//echo date( "h:i:s",$miDate) . "</br>";
				//echo date( $miDate) . "</br>";				
				break;
				
				
				
			//Cell is a LEAGUE
			case 1:
				//$actualCell = $objWorksheet->getCell('A' . $row)->getValue();
				//$miLeague = $actualCell
				$miLeague = $objWorksheet->getCell('A' . $row)->getValue();				
				if ($row==15)
					$row=15;
				
				$miLeagueID = getLeagueID($miLeague);
				//Search LeagueID					
			
				break;
				
				
				
			//Cell is a GAME
			case 2:
				
				$cell = $objWorksheet->getCellByColumnAndRow('A', $row);
				$miTime = PHPExcel_Style_NumberFormat::toFormattedString($cell->getCalculatedValue(), 'hh:mm:ss');							
				$miTeamLoc = $objWorksheet->getCell('B' . $row)->getValue();
				$miTeamVis = $objWorksheet->getCell('C' . $row)->getValue();
				$miResul = $objWorksheet->getCell('D' . $row)->getValue();
				
				$miResul2 = getResult($miResul, "LOCAL") . "<->" . getResult($miResul, "VISITA");
				$miResLoc = getResult($miResul, "LOCAL");
				$miResVis = getResult($miResul, "VISITA");
				
				$miCuoLoc = $objWorksheet->getCell('E' . $row)->getValue();
				$miCuoEmp = $objWorksheet->getCell('F' . $row)->getValue();
				$miCuoVis = $objWorksheet->getCell('G' . $row)->getValue();
				
				$miGame = new GAME();
				
				if ($row==16){
					//ECHO   "Row:". $row . "</BR>";
				}
				
				$miGame->mLeague = $miLeague;
				$miGame->mLeagueID = $miLeagueID;				
				$miGame->mDate = $miDate;
				$miGame->mTime = $miTime;
				
				$miGame->mTeamLoc = $miTeamLoc;
				$miTeamIDLoc = getTeamID($miTeamLoc, $miLeagueID);
				$miGame->mTeamIDLoc = $miTeamIDLoc;
				
				
				$miGame->mTeamVis = $miTeamVis;
				$miTeamIDVis = getTeamID($miTeamVis, $miLeagueID);
				$miGame->mTeamIDVis = $miTeamIDVis;
				
				$miGame->mResLoc = $miResLoc;
				$miGame->mResVis = $miResVis;
				$miGame->mCuoLoc = $miCuoLoc;
				$miGame->mCuoEmp = $miCuoEmp;
				$miGame->mCuoVis = $miCuoVis;				
				
				//If coutes are valid (Numeric)  Add Game to Vector
				if (is_Numeric($miCuoLoc)){
						$Games->Append($miGame);
				}
			 

				break;
			
			
		}
		
		
		
		
		
	}//End if $actualCell<> ""  
		
		
}

echo "Total items:" . count($Games) . " </BR>";
		
		foreach($Games as $tmpGame)
			echo $tmpGame->mLeagueID . "--[" . $tmpGame->mCuoLoc .  "--" . $tmpGame->mCuoVis . "]   --(" . $tmpGame->mTeamIDLoc . "-" . $tmpGame->mTeamIDVis .   ")</BR>";			


?>



</html>