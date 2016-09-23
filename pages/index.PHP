
<!DOCTYPE html>
<html>

<?php
	require_once("../Functions/functionDB.php");

	//Variables de perfil
	
	$userName ="Dario";
	$userPic = "drico.png";
	$skinName ="skin-1";
	
		
	
	
	
	
	//Load header HTML
	loadHeadHtml();	
	loadNavBarLayout($skinName, $userName, $userPic );
	loadSideBarLayout();
	
		///Contenido de la pagina
		echo "Pagina index add anything!!!";
					
	
	
	loadFooterLayout();
	
	
	
	
	
	
	
	
	
	
?>
</html>