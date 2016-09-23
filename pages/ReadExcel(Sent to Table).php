
<!DOCTYPE html>
<html>


<?php
 

/** Error reporting */
error_reporting(E_ALL);

date_default_timezone_set('America/Tijuana');

/** PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/../Classes/PHPExcel/IOFactory.php';




//Variable declaration
$sheetnames = array('Hoja1','Hoja2'); 
$inputFileType = 'Excel2007'; 
$inputFileName = 'TemplateGames2.xlsx'; 





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

echo '<table>' . "\n";
for ($row = 1; $row <= $highestRow; ++$row) {
    echo '<tr>' . PHP_EOL;
    for ($col = 'A'; $col != $highestColumn; ++$col) {
        
		
		$cellData = $objWorksheet->getCell($col . $row)->getValue() ;
		
		if (is_numeric($cellData) and ($col=='A')){
			//echo '<td>' . $cellData . '</td>' . PHP_EOL;
			//echo '<td>' . decimal_to_time($cellData) . '</td>' . PHP_EOL;
			
			$cell = $objWorksheet->getCellByColumnAndRow($col, $row);
			$cell_value = PHPExcel_Style_NumberFormat::toFormattedString($cell->getCalculatedValue(), 'hh:mm:ss');
			//echo $cell_value;

			echo '<td>' . $cell_value . '</td>' . PHP_EOL;

		}
		else{
				echo '<td>' . $cellData . '</td>' . PHP_EOL;
		}
		
		
		
		

		
		
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;


/*
echo date('H:i:s') , " Load from Excel2007 file" , PHP_EOL;
$callStartTime = microtime(true);



$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
echo 'Call time to read Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , PHP_EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , PHP_EOL;

 
echo date('H:i:s') , " Write to Excel5 format" , PHP_EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', __FILE__) , PHP_EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , PHP_EOL;

// Echo done
echo date('H:i:s') , " Done writing file" , PHP_EOL;
*/

?>

</html>