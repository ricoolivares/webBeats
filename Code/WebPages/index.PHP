
<!DOCTYPE html>
<html>

<?php
	require_once("../Functions/functionDB.php");

	//Variables de perfil
	
	$userName ="Dario";
	$userPic = "drico.png";
	$skinName ="skin-1";
	
	
	//Load HYML Layouts in this order: Header, NavBar, SideBar and Footer
	displayHeadLayout();	
	displayNavBarLayout($skinName, $userName, $userPic );
	displaySideBarLayout();
	
		///Contenido de la pagina
		echo "Pagina Web Beats";
					
	
	
	displayFooterLayout();
	
	
	
	
	
?>
</html>