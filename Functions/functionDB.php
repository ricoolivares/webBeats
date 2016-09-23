<?php


//Function Name: connIntranetDB()
//Description:  Function that create a connection with MySql database
//Author:		Dario Rico Olivares
//Date:			25/Julio/2016
//
//Parameter:	None
//Return:		Return a connection variable with Intranet Database
//
//Revision:	1.0 (25/Julio/2016) -- Creation function
function connIntranetDB(){	
	//Parameter to Connect To My Database: Intranet
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='Intranet';
	
	//Getting connection
	$connection = mysqli_connect("localhost","root","","intranet") OR DIE('Unable to connect to database! Please try again later.');
	
	//Return connection
	return $connection;
}


//Function Name: validateLogin($_userName, $_Password)
//Description:  Function that validateLogins
//Author:		Dario Rico Olivares
//Date:			25/Julio/2016
//
//Parameter:	_userName: string with the userName to be validated
//				_Password: string with the password to be validated
//Return:		Return an <EMPTY> string if user WAS found, else and errorMsg
//
//Revision:	1.0 (25/Julio/2016) -- Creation function
function validateLogin($_userName, $_Password){
	//Variable declaration
	$errorMsg = $sql = "";
	
	
	//1. Validate userName is not blank
	if($_userName == "" or $_userName == NULL){		
		$errorMsg = "Please enter a username";		
	}
				
	//2. Validate Password is not blank
	if ($errorMsg==""){
		if($_Password == "" or $_Password == NULL){
			$errorMsg = "Please enter a password";					
		}
	}
	
	//3. Validate user and password in Database
	if ($errorMsg==""){
	
		//Open Connection with database
		$conn = connIntranetDB();
				
		//Query for check if userName and Password exists!
		$sql = "Select UserName, Password FROM it_catalog_users WHERE UserName='" . $_userName . "' AND Password='" . $_Password . "'";
		$result = mysqli_query($conn, $sql);		
		$hits = mysqli_affected_rows($conn);
		
		//Check if user Exist
		if($hits < 1 ){
			//If user doesn't exists!
			$errorMsg = "UserName or Password is wrong!";		
		
		}
		
		
		//Close DB connection 
		mysqli_close($conn);
			

	
	}
	
	
	//Return result
	return $errorMsg;
			
}




//Function Name: displayLoginPage($_displayError)
//Description:  Function that display login Web Page
//Author:		Dario Rico Olivares
//Date:			30/Julio/2016
//
//Parameter:	_displayError:	String for display if was an error Authenticating user's credentials
//Return:		None
//
//Revision:	1.0 (30/Julio/2016) -- Creation function
function displayLoginPage($_displayError){
			
	echo "<div class='main-container'>";
	echo "<div class='main-content'>";
		echo "<div class='row'>";
			echo "<div class='col-sm-10 col-sm-offset-1'>";
				echo "<div class='login-container'>";
					echo "<div class='center'>";
						echo "<h1>";
							echo "<span class='white' id='id-text2'>  INTRANET </span>";
							echo "<img src='../assets/images/logoTCL2.png' class='msg-photo' width='75' height='50' />";
						echo "</h1>";
						echo "<h4 class='blue' id='id-company-text'>&copy TCL Moka Manufacturing S.A de C.V.</h4>";
					echo "</div>";

					echo "<div class='space-6'></div>";

					echo "<div class='position-relative'>";
						echo "<div id='login-box' class='login-box visible widget-box no-border'>";
							echo "<div class='widget-body'>";
								echo "<div class='widget-main'>";
									echo "<h4 class='header blue lighter bigger'>";
										echo "<i class='ace-icon fa fa-edit green'></i>";
										echo "Please Input your credentials";
									echo "</h4>";

									echo "<div class='space-6'></div>";

									
									echo "<form action='login.php'  method='POST'>";
										echo "<fieldset>";
											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='text' class='form-control' placeholder='Username' name='username' value='drico' />";
													echo "<i class='ace-icon fa fa-user'></i>";
												echo "</span>";
											echo "</label>";

											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='password' class='form-control' placeholder='Password' name='password' value='dreamer' />";
													echo "<i class='ace-icon fa fa-lock'></i>";
												echo "</span>";
											echo "</label>";

											echo "<div class='space'></div>";

											echo "<div class='clearfix'>";
												echo "<label class='inline'>";
													echo "<input type='checkbox' class='ace' />";
													echo "<span class='lbl'> Remember Me</span>";
												echo "</label>";

												echo "<button type='submit' class='width-35 pull-right btn btn-sm btn-primary' name='submit'>";
													echo "<i class='ace-icon fa fa-key'></i>";
													echo "<span class='bigger-110'>Login</span>";
												echo "</button>";
											echo "</div>";

											echo "<div class='space-4'></div>";
										echo "</fieldset>";
										
										if ($_displayError<>""){										
											echo "<h4 class='header red lighter medium'>";
												echo $_displayError;
											echo "</h4>";
										
										}
										
										
									
										
									echo "</form>";

									
								echo "</div><!-- /.widget-main -->";

								echo "<div class='toolbar clearfix'>";
									echo "<div>";
										echo "<a href='#' data-target='#forgot-box' class='forgot-password-link'>";
											echo "<i class='ace-icon fa fa-arrow-left'></i>";
											echo "I forgot my password";
										echo "</a>";
									echo "</div>";

									echo "<div>";
										echo "<a href='#' data-target='#signup-box' class='user-signup-link'>";
											echo "I want to register";
											echo "<i class='ace-icon fa fa-arrow-right'></i>";
										echo "</a>";
									echo "</div>";
								echo "</div>";
							echo "</div><!-- /.widget-body -->";
						echo "</div><!-- /.login-box -->";

						echo "<div id='forgot-box' class='forgot-box widget-box no-border'>";
							echo "<div class='widget-body'>";
								echo "<div class='widget-main'>";
									echo "<h4 class='header red lighter bigger'>";
										echo "<i class='ace-icon fa fa-key'></i>";
										echo "Retrieve Password";
									echo "</h4>";

									echo "<div class='space-6'></div>";
									echo "<p>";
										echo "Enter your email and to receive instructions";
									echo "</p>";

									echo "<form>";
										echo "<fieldset>";
											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='email' class='form-control' placeholder='Email' />";
													echo "<i class='ace-icon fa fa-envelope'></i>";
												echo "</span>";
											echo "</label>";

											echo "<div class='clearfix'>";
												echo "<button type='button' class='width-35 pull-right btn btn-sm btn-danger'>";
													echo "<i class='ace-icon fa fa-lightbulb-o'></i>";
													echo "<span class='bigger-110'>Send Me!</span>";
												echo "</button>";
											echo "</div>";
										echo "</fieldset>";
									echo "</form>";
								echo "</div><!-- /.widget-main -->";
								echo "</div><!-- /.widget-main -->";

								echo "<div class='toolbar center'>";
									echo "<a href='#' data-target='#login-box' class='back-to-login-link'>";
										echo "Back to login";
										echo "<i class='ace-icon fa fa-arrow-right'></i>";
									echo "</a>";
								echo "</div>";
							echo "</div><!-- /.widget-body -->";
						echo "</div><!-- /.forgot-box -->";

						echo "<div id='signup-box' class='signup-box widget-box no-border'>";
							echo "<div class='widget-body'>";
								echo "<div class='widget-main'>";
									echo "<h4 class='header green lighter bigger'>";
										echo "<i class='ace-icon fa fa-users blue'></i>";
										echo "New User Registration";
									echo "</h4>";

									echo "<div class='space-6'></div>";
									echo "<p> Enter your details to begin: </p>";

									echo "<form>";
										echo "<fieldset>";
											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='email' class='form-control' placeholder='Email' />";
													echo "<i class='ace-icon fa fa-envelope'></i>";
												echo "</span>";
											echo "</label>";

											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='text' class='form-control' placeholder='Username' />";
													echo "<i class='ace-icon fa fa-user'></i>";
												echo "</span>";
											echo "</label>";

											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='password' class='form-control' placeholder='Password' />";
													echo "<i class='ace-icon fa fa-lock'></i>";
												echo "</span>";
											echo "</label>";

											echo "<label class='block clearfix'>";
												echo "<span class='block input-icon input-icon-right'>";
													echo "<input type='password' class='form-control' placeholder='Repeat password' />";
													echo "<i class='ace-icon fa fa-retweet'></i>";
												echo "</span>";
											echo "</label>";

											echo "<label class='block'>";
												echo "<input type='checkbox' class='ace' />";
												echo "<span class='lbl'>";
													echo "I accept the";
													echo "<a href='#'>User Agreement</a>";
												echo "</span>";
											echo "</label>";

											echo "<div class='space-24'></div>";

											echo "<div class='clearfix'>";
												echo "<button type='reset' class='width-30 pull-left btn btn-sm'>";
													echo "<i class='ace-icon fa fa-refresh'></i>";
													echo "<span class='bigger-110'>Reset</span>";
												echo "</button>";

												echo "<button type='button' class='width-65 pull-right btn btn-sm btn-success'>";
													echo "<span class='bigger-110'>Register</span>";

													echo "<i class='ace-icon fa fa-arrow-right icon-on-right'></i>";
												echo "</button>";
											echo "</div>";
										echo "</fieldset>";
									echo "</form>";
								echo "</div>";

								echo "<div class='toolbar center'>";
									echo "<a href='#' data-target='#login-box' class='back-to-login-link'>";
										echo "<i class='ace-icon fa fa-arrow-left'></i>";
										echo "Back to login";
									echo "</a>";
								echo "</div>";
							echo "</div><!-- /.widget-body -->";
						echo "</div><!-- /.signup-box -->";
					echo "</div><!-- /.position-relative -->";

					echo "<div class='navbar-fixed-top align-right'>";
						echo "<br />";
						echo "&nbsp;";
						echo "<a id='btn-login-dark' href='#'>Dark</a>";
						echo "&nbsp;";
						echo "<span class='blue'>/</span>";
						echo "&nbsp;";
						echo "<a id='btn-login-blur' href='#'>Blur</a>";
						echo "&nbsp;";
						echo "<span class='blue'>/</span>";
						echo "&nbsp;";
						echo "<a id='btn-login-light' href='#'>Light</a>";
						echo "&nbsp; &nbsp; &nbsp;";
					echo "</div>";
				echo "</div>";
			echo "</div><!-- /.col -->";
		echo "</div><!-- /.row -->";
	echo "</div><!-- /.main-content -->";
echo "</div><!-- /.main-container -->";
	
			
			
			
			
}
	
	

//Function Name: loadHeadHtml()
//Description:  Function that display HTML head of web template
//Author:		Dario Rico Olivares
//Date:			30/Julio/2016
//
//Parameter:	None
//Return:		None
//
//Revision:	1.0 (30/Julio/2016) -- Creation function
function loadHeadHtml(){
	
	echo "<head>";		
	echo "<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />";
	echo "<meta charset='utf-8' />";
	echo "<title> Intranet TMSA </Title> ";
	echo "<meta name='description' content='' />";
	echo "<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />";
	echo "<!-- bootstrap & fontawesome -->";
	echo "<link rel='stylesheet' href='../assets/css/bootstrap.min.css' />";
	echo "<link rel='stylesheet' href='../assets/css/font-awesome.min.css' />";
	echo "<!-- page specific plugin styles -->";
	echo "<!-- text fonts -->";
	echo "<link rel='stylesheet' href='../assets/css/ace-fonts.css' />";
	echo "<!-- ace styles -->";
	echo "<link rel='stylesheet' href='../assets/css/ace.min.css' />";
	echo "<!--[if lte IE 9]>";
	echo "         <link rel='stylesheet' href='../assets/css/ace-part2.min.css' />";
	echo "<![endif]-->";
	echo "<link rel='stylesheet' href='../assets/css/ace-skins.min.css' />";
	echo "<link rel='stylesheet' href='../assets/css/ace-rtl.min.css' />";
	echo "<!--[if lte IE 9]>";
	echo "        <link rel='stylesheet' href='../assets/css/ace-ie.min.css' />";
	echo "<![endif]-->";
	echo "<!-- inline styles related to this page -->";
	echo "<!-- ace settings handler -->";
	echo "<script src='../assets/js/ace-extra.min.js'></script>";
	echo "<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->";
	echo "<!--[if lte IE 8]>";
	echo "     <script src='../assets/js/html5shiv.js'></script>";
	echo "     <script src='../assets/js/respond.min.js'></script>";		
	echo "<![endif]-->";			
	echo "</head>";
	
}


//Function Name: loadNavBarLayout()
//Description:  Function that display NavBar Layout template
//Author:		Dario Rico Olivares
//Date:			30/Julio/2016
//
//Parameter:	skinName:	String with the skin of web template
//				userName:	String with user Name
//				userPic:	String with user Picture
//Return:		None
//
//Important Notes:		This function open BODY tag of HTML template
//
//
//Revision:	1.0 (30/Julio/2016) -- Creation function
function loadNavBarLayout($_skinName, $_userName, $_userPic){
	
	
//Start BODY TAG
echo "<body class=" . $_skinName . ">";			
	
		
	//<!--Start:#section:basics/navbar.layout -->
	echo "<!-- #section:basics/navbar.layout -->";
	echo "<div id='navbar' class='navbar navbar-default'>";
		echo "<script type='text/javascript'>";
		echo "     try{ace.settings.check('navbar' , 'fixed')}catch(e){}";
		echo "</script>";
		
		//<!--Start: #section:navbar-container -->
		echo "<div class='navbar-container' id='navbar-container'>";
		
		
			//<!--Start:#section:basics/sidebar.mobile.toggle -->
			echo "<!-- #section:basics/sidebar.mobile.toggle -->";
			echo "<button type='button' class='navbar-toggle menu-toggler pull-left' id='menu-toggler'>";
				echo "<span class='sr-only'>Toggle sidebar</span>";
				echo "<span class='icon-bar'></span>";
				echo "<span class='icon-bar'></span>";
				echo "<span class='icon-bar'></span>";					
			echo "</button>";
			//<!--End:/section:basics/sidebar.mobile.toggle -->
			
			
			//<!--Start:# section:basics/sidebar.mobile.toggle -->
			echo "<!-- /section:basics/sidebar.mobile.toggle -->";
			echo "<div class='navbar-header pull-left'>";				
				
				echo "<!-- #section:basics/navbar.layout.brand -->";
				//<!-- #section:basics/navbar.layout.brand -->
				echo "<a href='#' class='navbar-brand'>";
				
				echo "		<img src='../assets/images/logoTCL2.png' class='msg-photo' width='43' height='28' />";
				echo "		<small>  TMSA Intranet </small>";
				
				echo "</a>";
				echo "<!-- /section:basics/navbar.layout.brand -->";
				echo "<!-- #section:basics/navbar.toggle -->";
				echo "<!-- /section:basics/navbar.toggle -->";
			
			echo "</div>";
			//<!--End:# section:basics/sidebar.mobile.toggle -->
			
			
				
			//<!--Start-- #section:basics/navbar.dropdown -->
			echo "<!-- #section:basics/navbar.dropdown -->";				
			echo "<div class='navbar-buttons navbar-header pull-right' role='navigation'>";
				echo "<ul class='nav ace-nav'>";
									
					//<!--Start-- Section:basics/navbar.user_menu -->
					echo "<!-- #section:basics/navbar.user_menu -->";
					echo "<li class='light-blue'>";
						echo "<a data-toggle='dropdown' href='#' class='dropdown-toggle'>";													
							$_userPic = "../assets/avatars/" . $_userPic;
							echo "<img class='nav-user-photo' src=" . $_userPic . " alt= " . $_userName ."''s Photo' />";
							echo "<span class='user-info'> ";
								echo "<small>Welcome,</small>";
								echo $_userName;
							echo "</span>";
							echo "<i class='ace-icon fa fa-caret-down'></i>";
						echo "</a>";
							
						echo "<ul class='user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close'>";
							echo "<li> <a href='#'> <i class='ace-icon fa fa-cog'></i> Settings </a> 	</li>";
							echo "<li> <a href='profile.html'> <i class='ace-icon fa fa-user'></i> Profile </a> </li>";
							echo "<li class='divider'></li>";
							echo "<li> <a href='#'> <i class='ace-icon fa fa-power-off'></i> 	Logout  </a> </li>";
						echo "</ul>";
					echo "</li>";
					echo "<!-- /section:basics/navbar.user_menu -->";
					//<!-- End-- Section:basics/navbar.user_menu -->	
					
				echo "</ul>";
			echo "</div>";				
			echo "<!-- /section:basics/navbar.dropdown -->";
			//<!--End-- #section:basics/navbar.dropdown -->	
	
		  
			
					
		echo "</div>";		
		//<!--End: #section:navbar-container -->
	
	echo "</div>";	
	echo "<!-- /section:basics/navbar.layout -->";
	//<!--End-- #section:basics/navbar.layout -->
		
		
		
}


//Function Name: loadSideBarLayout()
//Description:  Function that display SideBar Layout template
//Author:		Dario Rico Olivares
//Date:			30/Julio/2016
//
//Parameter:	skinName:	String with the skin of web template
//				userName:	String with user Name
//				userPic:	String with user Picture
//Return:		None
//
//Important Notes:		This function open div main-Container tag of HTML template
//
//
//Revision:	1.0 (30/Julio/2016) -- Creation function
function loadSideBarLayout(){
	require_once("../Functions/functionDB.php");
	
	
	echo "<div class='main-container' id='main-container'>"	;		
		
		//<!--Start:#2 section:SideBar -->	
		echo "<div class='sidebar responsive' id='sidebar'>";
			echo "<script type='text/javascript'>";
			echo "     try{ace.settings.check('sidebar' , 'fixed')}catch(e){}";
			echo "</script>";
			
			//<!--Start:#2a section:SideBar-Shurcuts -->				
			echo "<div class='sidebar-shortcuts' id='sidebar-shortcuts'>";
				echo "<div class='sidebar-shortcuts-large' id='sidebar-shortcuts-large'>";
					echo "<button class='btn btn-success'>";
						echo "<i class='ace-icon fa fa-signal'></i>";
					echo "</button>";
					echo "<button class='btn btn-info'>";
						echo "<i class='ace-icon fa fa-pencil'></i>";
					echo "</button>";
					echo "<!-- #section:basics/sidebar.layout.shortcuts -->";
					echo "<button class='btn btn-warning'>";
						echo "<i class='ace-icon fa fa-users'></i>";
					echo "</button>";
					echo "<button class='btn btn-danger'>";
						echo "<i class='ace-icon fa fa-cogs'></i>";
					echo "</button>";
					echo "<!-- /section:basics/sidebar.layout.shortcuts -->";
				echo "</div>";

				echo "<div class='sidebar-shortcuts-mini' id='sidebar-shortcuts-mini'>";
					echo "<span class='btn btn-success'></span>";
					echo "<span class='btn btn-info'></span>";
					echo "<span class='btn btn-warning'></span>";
					echo "<span class='btn btn-danger'></span>";
				echo "</div>";
				
			echo "</div>";
			//<!--End: /2a section:SideBar-Shurcuts -->	
			
			
			//<!--Start:#2b section:SideBar-NAVLIST -->				
			echo "<ul class='nav nav-list'>";
				
				 readMainMenu();
				 
				 
			echo "</ul>";
			//<!--End:/2b section:SideBar-NAVLIST -->	


			echo "<div class='sidebar-toggle sidebar-collapse' id='sidebar-collapse'>";
				echo "<i class='ace-icon fa fa-angle-double-left' data-icon1='ace-icon fa fa-angle-double-left' data-icon2='ace-icon fa fa-angle-double-right'></i>";
			echo "</div>";

			echo "<script type='text/javascript'>";
			echo "     try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}";
			echo "</script>";
				
			
			
		echo "</div><!-- /.sidebar -->";	
		//<!--End:#2 section:SideBar -->

	echo "<div class='main-content'>";
			
			//<!--Start:#3 section:Breadcums -->	
			echo "<div class='breadcrumbs'>";

				echo "<!-- Breadcums goes here -->";
			
			echo "</div><!-- /.breadcrumbs -->";	
			//<!--Fin:#3 section:Breadcums -->	
			
			
			
			//<!--Start:#4 Page-Content -->	
			echo "<div class='page-content'>";
				
				echo"<!-- setting box goes here if needed -->";

				echo "<div class='row'>";
					echo "<div class='col-xs-12'>";
					
		
}

function loadIndexPage(){
	
		echo "Pagina index add anything!!!";
					

		
	
	
	
}

function loadFooterLayout(){
	
	
						echo "</div><!-- /.col -->";
				echo "</div><!-- /.row -->";

			echo "</div><!-- /.page-content -->";
			//<!--Fin:#4 Page-Content -->	
	  	  
		echo "</div><!-- /.main-content -->";	
	
	
	echo "</div><!-- /.main-container -->";
	
	
	
	//<!-- basic scripts -->		
	echo"<!-- basic scripts -->";
	echo"<!--[if !IE]> -->";
	echo"<script type='text/javascript'>";
		echo"window.jQuery || document.write(\"<script src='../assets/js/jquery.min.js'>\"+\"<\"+\"/script>\");";
	echo"</script>";		
	echo"<!-- <![endif]-->";		

	echo"<!--[if IE]>";
	echo"<script type='text/javascript'>";
		echo"window.jQuery || document.write(\"<script src='../assets/js/jquery.min.js'>\"+\"<\"+\"/script>\");";
	echo"</script>";
	echo"<![endif]-->";

	echo"<script type='text/javascript'>";		
		echo"if('ontouchstart' in document.documentElement) document.write(\"<script src='../assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");";
	echo"</script>";
	echo"<script src='../assets/js/bootstrap.min.js'></script>";

	echo"<!-- page specific plugin scripts -->";
	echo"<!-- ace scripts -->";
	echo"<script src='../assets/js/ace-elements.min.js'></script>";		
	echo"<script src='../assets/js/ace.min.js'></script>";

	echo"<!-- inline scripts related to this page -->";
	echo"<link rel='stylesheet' href='../assets/css/ace.onpage-help.css' />";
	echo"<link rel='stylesheet' href='../docs/assets/js/themes/sunburst.css' />";
	echo"<script type='text/javascript'> ace.vars['base'] = '..'; </script>";
	echo"<script src='../assets/js/ace/ace.onpage-help.js'></script>";		
	echo"<script src='../docs/assets/js/rainbow.js'></script>";		
	echo"<script src='../docs/assets/js/language/generic.js'></script>";
	echo"<script src='../docs/assets/js/language/html.js'></script>";
	echo"<script src='../docs/assets/js/language/css.js'></script>";
	echo"<script src='../docs/assets/js/language/javascript.js'></script>";


		
echo "</body>";
	
}

function readMainMenu(){	
	//Variable declaration
	$i=$j=$actualLevel=$nextLevel=$differenceLevel=$totalRows=$totalRows2=$typeTag=0;
    $sql=$menuID=$menuName=$menuType=$menuLink=$menuIcon=$tmpStr="";
	$hasSubmenu=false;
    $webOptions = array();
	$pileTags = array();
	
	
	
	//Get DB connection
	$conn = connIntranetDB();
	
	
	//Read WebMenus
	$sql = 'SELECT OptionID, OptionName, ActLevel, MenuType, Level1,' . 
	               'Level2, Level3, Level4, Description, WebMenuID, Icon, Link ' . 
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
			$menuIcon = $webOptions[$i]['Icon'];
			$menuLink = $webOptions[$i]['Link'];
			
			
			//If last Record
			if ($i==($totalRows-1)){
				//---Logic if is Last Record
				
				//Not has Submenu (Display single Tag)
				$typeTag = 0;	//SingleMenu 
				$hasSubmenu = false;
				displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags, $hasSubmenu, $menuIcon, $menuLink);
				
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
					$hasSubmenu = false;
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags, $hasSubmenu, $menuIcon, $menuLink);
					
					
				}
				elseif ($nextLevel > $actualLevel) {
					//Begin submenu (OPEN Tag)
					$typeTag = 1;	//OpenSubmenu 
					$hasSubmenu = TRUE;
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags, $hasSubmenu, $menuIcon, $menuLink);
					
				}
				else {
					//Last submenu (CLOSE Tag)
					$typeTag = 2;	//CloseSubmenu 
					$hasSubmenu = false;
					displayTag($menuID, $menuName, $menuType, $typeTag, $pileTags, $hasSubmenu, $menuIcon, $menuLink);
				}
				
				
			   //Check difference between levels
			   // Positive difference means Jump from High Level to Less Level (Correct)
			   // Negative difference means Jump from Less Level to High Level (Incorrect if difference is more than 1)
			   $differenceLevel  = $actualLevel - $nextLevel;
			   if ($differenceLevel > 0){
				   //Positive difference (Close the jumped TAGS)
				   $j = 1;
				   while ($j<=$differenceLevel){
					   //Extract & print Tag from PILE
					   $tmpStr = array_pop($pileTags);
                       echo $tmpStr . " ";
                       $tmpStr = array_pop($pileTags);
                       echo $tmpStr . " ";
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
		
		            
    }
    else {
        echo "No se encontraron registros!!!";
    }
    
	//Close DB connection 
	mysqli_close($conn);
	
}

function displayTag($menuID, $menuName, $menuType, $typeTag, array &$pileTags, $hasSubmenu,$menuIcon, $menuLink){    
    
	$result = "";
	
	//Single Option (Open&Close TAG)              
	switch ($menuType) {
		case 'MENU':                    
			if ($hasSubmenu){
				//Has submenu
				$result = "<li class=''> ";
				$result = $result . "<a href='#' class='dropdown-toggle'> " ;				
				$result = $result .  "<i class='" . $menuIcon . "'></i> ";
				$result = $result .  "<span class='menu-text'>" . $menuName . "</span> ";
				$result = $result .  "<b class='arrow fa fa-angle-down'></b> ";
				$result = $result .  "</a> ";
				$result = $result .  "<b class='arrow'></b> ";				
				$result = $result .  "<ul class='submenu'>";
				
				//Two Tags were opened, so add to pileTags for future closing				
				array_push($pileTags,"  </ul> ");
				array_push($pileTags," </li> ");
				  
				
			}
			else{				
				//Not has submenu
				$result = "<li class=''> ";
				$result = $result . "<a href='" . $menuLink . "'> " ;
				$result = $result .  "<i class='" . $menuIcon . "'></i> ";
				$result = $result .  "<span class='menu-text'>" . $menuName . "</span> ";
				$result = $result .  "</a> ";
				$result = $result .  "<b class='arrow'></b> ";
				$result = $result .  "</li> ";				
				
			}
			
			echo $result;
			break;
			
	   case 'SUB':						
			if ($hasSubmenu){
				//Has submenu
				$result = "<li class=''> ";
				$result = $result . "<a href='#' class='dropdown-toggle'> " ;				
				$result = $result .  "<i class='" . $menuIcon . "'></i> ";
				$result = $result .   $menuName . "  ";
				$result = $result .  "<b class='arrow fa fa-angle-down'></b> ";
				$result = $result .  "</a> ";
				$result = $result .  "<b class='arrow'></b> ";				
				$result = $result .  "<ul class='submenu'>";
				
				//Two Tags were opened, so add to pileTags for future closing				
				array_push($pileTags,"  </ul> ");
				array_push($pileTags," </li> ");
				  
				
			}
			else{				
				//Not has submenu
				$result = "<li class=''> ";
				$result = $result . "<a href='" . $menuLink . "'> " ;
				$result = $result .  "<i class='" . $menuIcon . "'></i> ";
				$result = $result .   $menuName . "  ";
				$result = $result .  "</a> ";
				$result = $result .  "<b class='arrow'></b> ";
				$result = $result .  "</li> ";				
				
			}
			
			echo $result;
			break; 
			
	   case 'OPT':
			if ($hasSubmenu){
				//Has submenu
				$result = "Error configuracion de menus incorrecta!!!  ";				
			}
			else{				
				//Not has submenu
				$result = "<li class=''> ";
				$result = $result . "<a href='" . $menuLink . "'> " ;
				$result = $result .  "<i class='" . $menuIcon . "'></i> ";
				$result = $result .   $menuName . "  ";
				$result = $result .  "</a> ";
				$result = $result .  "<b class='arrow'></b> ";
				$result = $result .  "</li> ";				
				
			}
			
			
			echo $result;
			break;                           
	}
			
}


?>