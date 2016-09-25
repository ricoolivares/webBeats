<?php




//Function Name: gameExistDB
//Description:  Function that check if Game is already in Database 
//Author:		Dario Rico Olivares
//Date:			16/August/2016
//
//Parameters:	LeagueID: ID of league to search
//				TeamIDLoc: ID of team local to search
//				TeamIDVis: ID of team visit to search
//				datePlayed: date of played game
//Return:		found: True if found, false if not found
//
//Revision:	1.0 (14/August/2016) -- Creation function

Function gameExistDB($_LeagueID, $_TeamIDLoc,$_TeamIDLoc, $_datePlayed){
	
	//Value to return
	$found = false;		
	$sql =  "SELECT LeagueID FROM beats_gamesdata  WHERE LeagueID'" . $_LeagueID . "' AND TeamIDLoc='" . $_TeamIDLoc . 
					"' AND TeamIDVis='" . $_TeamIDVis . "' AND DatePlayed='" . $_datePlayed . "'";
	
	       
        //Open Connection with database
	$conn = connBeatsDB();
        

        

	//Search in Database
	$queryResult = mysqli_query($conn, $sql);

	if ($queryResult){
		
			$rowData = mysqli_fetch_array($queryResult);
			
			//If found information
			if ($rowData) {
				$found = true;		
			}				
	}	
	//Close DB connection 
	mysqli_close($conn);
	 	
	
	//Return result
	return ($found);	
	
}

//Function Name: gameExistVector
//Description:  Function that check if Game is already in Vector GAME
//Author:		Dario Rico Olivares
//Date:			16/August/2016
//
//Parameters:	Games: reference for the vector Games
//				LeagueID: String of ID of league to search
//				TeamIDLoc: String of ID of team local to search
//				TeamIDVis: String of ID of team visit to search
//				datePlayed: date of played game
//Return:		found: True if found, false if not found
//
//Revision:	1.0 (14/August/2016) -- Creation function

Function gameExistVector(&$_Games, $_LeagueID, $_TeamIDLoc,$_TeamIDLoc, $_datePlayed){
	
	//Value to return
	$found = false;
	
	foreach($Games as $tmpGame){
		//Check if found game
		//if ($tmpGame->mLeagueID == $_LeagueID OR $tmpGame->mTeamIDLoc == $_TeamIDLoc OR	$tmpGame->mTeamIDVis == $_TeamIDVis OR	$tmpGame->mdatePlayed == $_datePlayed OR) 
                //if ($found = true)
                if ($tmpGame->mLeagueID == $_LeagueID OR $tmpGame->mTeamIDLoc == $_TeamIDLoc OR	$tmpGame->mTeamIDVis == $_TeamIDVis OR	$tmpGame->mdatePlayed == $_datePlayed) 
                {              
                    	$found = true;
                }
			
		
		
	}
	
	//Return result
	return($found);
	
}

//Function Name: getTeamID
//Description:  Function that get a TeamID for a given Team and LeagueID
//Author:		Dario Rico Olivares
//Date:			14/August/2016
//
//Parameter:	_Team: String with the Name of the Team
//				_LeagueID: String of the LeagueID
//Return:		Return an string with teamID, if not found return an error with string
//
//Revision:	1.0 (14/August/2016) -- Creation function
function getTeamID($_Team, $_LeagueID){
	//Variable declaration
	$_TeamID = $sql =   "";
	
	
	//Convert string to UTF-8 code (League cames from Excel's cell with different format)
	$_Team = utf8_decode($_Team);	
	
	
	//Query for check if League Exists
	$sql =  "SELECT TeamID FROM beats_catalog_teams  WHERE Team='" . $_Team . "' AND LeagueID='" . $_LeagueID . "'";
	
	//Open Connection with database
	$conn = connBeatsDB();

	//Search in Database
	$queryResult = mysqli_query($conn, $sql);

	if ($queryResult){
		
			$rowData = mysqli_fetch_array($queryResult);
			
			//If found information
			if ($rowData) {
				mysqli_data_seek ($queryResult, 0);
				$_TeamID = $rowData['TeamID'];					
			}
			else{
				$_TeamID = "No se encontro TeamID for -->" . $_Team;		
			}
	
	
	
	}

	
	//Close DB connection 
	mysqli_close($conn);
	 
	
	//Return result
	return $_TeamID;
			
}

//Function Name: getLeagueID
//Description:  Function that get and LeagueID given a League
//Author:		Dario Rico Olivares
//Date:			14/August/2016
//
//Parameter:	_League: String with the Name of the League
//Return:		Return an string with leagueID, if not found return an error with string
//
//Revision:	1.0 (14/August/2016) -- Creation function
function getLeagueID($_League){
	//Variable declaration
	$leagueID = $sql =  "";
	
	
	//Convert string to UTF-8 code (League cames from Excel's cell with different format)
	$_League = utf8_decode($_League);	
	
	
	//Query for check if League Exists
	$sql =  "SELECT LeagueID FROM beats_catalog_leagues  WHERE League='" . $_League . "'";
	
	//Open Connection with database
	$conn = connBeatsDB();

	//Search in Database
	$queryResult = mysqli_query($conn, $sql);		
	$rowData = mysqli_fetch_array($queryResult);

	//If found information
	if ($rowData) {
		mysqli_data_seek ($queryResult, 0);
		$leagueID = $rowData['LeagueID'];					
	}
	else{
		$leagueID = "No se encontro LeagueID for -->" . $_League;		
	}
	 
	
	
	
	
	//Close DB connection 
	mysqli_close($conn);
	 
	
	//Return result
	return $leagueID;
			
}


//Function Name: gettingDate
//Description:  Function that receive  a string with this format (10/08 Mi), the function parse the string
//				and return a valid date on this format (08/10/2016)
//Author:		Dario Rico Olivares
//Date:			14/August/2016
//
//Parameter:	_tmpStr: String to be parsed and converted
//Return:		Return an string with valid Date
//
//Revision:	1.0 (14/August/2016) -- Creation function
Function gettingDate($_tempStr){	
	//Getting Day		
	$pos1 = strrpos($_tempStr, "/", 1);
	$dayStr = Trim(substr($_tempStr, 0, $pos1 ));
	
	//Getting Month
	$pos2 = strrpos($_tempStr, " ", $pos1 + 1);		
	$monthStr = Trim(substr($_tempStr, $pos1 + 1, $pos2 - $pos1));
		   
	//Getting Year
	$yearStr = "2016";
	
	$result = $monthStr . "/" . $dayStr . "/" . $yearStr;
	
	//Returning the Final Date
	return ($result);
	
}


//Function Name: getResult
//Description:  Function that receive  a string with this format (3 : 2), the function parse the string
//				and return an integer that indicates the total of goals of the game: Left part are Local's goals  
//				and right part are Visitants's goals
//Author:		Dario Rico Olivares
//Date:			14/August/2016
//
//Parameter:	_tmpStr: String to be parsed and converted
//				_type:	String that indicate what goal needs to be obtained (LOCAR or VISIT)
//Return:		Return an integer that indicates total of Goals, if Goal not found, return -1 values
//
//Revision:	1.0 (14/August/2016) -- Creation function
Function getResult($_tempStr, $_type){
	
	//Default Value for result
	$result = - 1;
	
	//Getting Goals		
	$pos = strrpos($_tempStr, ":", 1);
	
	//If found result (:)
	if ($pos>0){			
		if ($_type=="LOCAL"){				
			//Get Local's Goals from Left part 
			$result = Trim(substr($_tempStr, 0, $pos - 2 ));								                								
		}
		else{
			//Get Visit's Goals from Right part 
			$result = Trim(substr($_tempStr, $pos+1, 20));								                								
		}
		
	}
	
	
	//Returning the Final Result
	return ($result);
	
	
}
	

//Class Name: 	GAME
//Description:  Class for store information of games, this class (structure) contains general information of the game.
//				This class is used for create a VECTOR for temporally store all the games obtanied from Excel template
//Author:		Dario Rico Olivares
//Date:			16/August/2016
//
//
//Revision:	1.0 (16/August/2016) -- Creation function	
class GAME {
		public $mLeague;			
		public $mLeagueID;			
		public $mDate;			
		public $mTime;
		public $mTeamLoc;
		public $mTeamIDLoc;			
		public $mTeamVis;
		public $mTeamIDVis;
		public $mResLoc;
		public $mResVis;
		public $mCuoLoc;
		public $mCuoEmp;
		public $mCuoVis;					
	}
	
        
//Function Name: connBeatsDB()
//Description:  Function that create a connection with MySql database
//Author:		Dario Rico Olivares
//Date:			25/Julio/2016
//
//Parameter:	None
//Return:		Return a connection variable with BEATS Database
//
//Revision:	1.0 (25/Julio/2016) -- Creation function
function connBeatsDB(){	
	//Parameter to Connect To My Database: Intranet
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='Intranettest';
	
	//Getting connection
	$connection = mysqli_connect($hostname,$username,$password,$dbname) OR DIE('Unable to connect to database! Please try again later.');
	
	
	//Return connection
	return $connection;
}

?>