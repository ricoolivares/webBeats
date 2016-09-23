<?php


function loadMainLayout_Header(){
	
	
	
	
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

	
//Start BODY TAG
echo "<body class='no-skin'>";			
		
		
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
				echo "		<small> <i class='fa fa-leaf'></i>  Ace Admin </small>";
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
							echo "<img class='nav-user-photo' src='../assets/avatars/user.jpg' alt='Jason''s Photo' />";
							echo "<span class='user-info'> ";
								echo "<small>Welcome,</small>";
								echo "Jason";
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
				echo "<li class=''>";
					echo "<a href='index.html'>";
						echo "<i class='menu-icon fa fa-tachometer'></i>";
						echo "<span class='menu-text'> Dashboard </span>";
					echo "</a>";

					echo "<b class='arrow'></b>";
				echo "</li>";

				echo "<li class=''>";
					echo "<a href='#' class='dropdown-toggle'>";
						echo "<i class='menu-icon fa fa-desktop'></i>";
						echo "<span class='menu-text'> UI &amp; Elements </span>";

						echo "<b class='arrow fa fa-angle-down'></b>";
					echo "</a>";

					echo "<b class='arrow'></b>";

					echo "<ul class='submenu'>";
						echo "<li class=''>";
							echo "<a href='#' class='dropdown-toggle'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";

								echo "Layouts";
								echo "<b class='arrow fa fa-angle-down'></b>";
							echo "</a>";

							echo "<b class='arrow'></b>";

							echo "<ul class='submenu'>";
								echo "<li class=''>";
									echo "<a href='top-menu.html'>";
										echo "<i class='menu-icon fa fa-caret-right'></i>";
										echo "Top Menu";
									echo "</a>";

									echo "<b class='arrow'></b>";
								echo "</li>";

								echo "<li class=''>";
									echo "<a href='mobile-menu-1.html'>";
										echo "<i class='menu-icon fa fa-caret-right'></i>";
										echo "Default Mobile Menu";
									echo "</a>";

									echo "<b class='arrow'></b>";
								echo "</li>";

								echo "<li class=''>";
									echo "<a href='mobile-menu-2.html'>";
										echo "<i class='menu-icon fa fa-caret-right'></i>";
										echo "Mobile Menu 2";
									echo "</a>";

									echo "<b class='arrow'></b>";
								echo "</li>";

								echo "<li class=''>";
									echo "<a href='mobile-menu-3.html'>";
										echo "<i class='menu-icon fa fa-caret-right'></i>";
										echo "Mobile Menu 3";
									echo "</a>";

									echo "<b class='arrow'></b>";
								echo "</li>";
							echo "</ul>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='typography.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Typography";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='elements.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Elements";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='buttons.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Buttons &amp; Icons";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='treeview.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Treeview";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='jquery-ui.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "jQuery UI";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='nestable-list.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Nestable Lists";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='#' class='dropdown-toggle'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";

								echo "Three Level Menu";
								echo "<b class='arrow fa fa-angle-down'></b>";
							echo "</a>";

							echo "<b class='arrow'></b>";

							echo "<ul class='submenu'>";
								echo "<li class=''>";
									echo "<a href='#'>";
										echo "<i class='menu-icon fa fa-leaf'></i>";
										echo "Item #1";
									echo "</a>";

									echo "<b class='arrow'></b>";
								echo "</li>";

								echo "<li class=''>";
									echo "<a href='#' class='dropdown-toggle'>";
										echo "<i class='menu-icon fa fa-pencil'></i>";

										echo "4th level";
										echo "<b class='arrow fa fa-angle-down'></b>";
									echo "</a>";

									echo "<b class='arrow'></b>";

									echo "<ul class='submenu'>";
										echo "<li class=''>";
											echo "<a href='#'>";
												echo "<i class='menu-icon fa fa-plus'></i>";
												echo "Add Product";
											echo "</a>";

											echo "<b class='arrow'></b>";
										echo "</li>";

										echo "<li class=''>";
											echo "<a href='#'>";
												echo "<i class='menu-icon fa fa-eye'></i>";
												echo "View Products";
											echo "</a>";

											echo "<b class='arrow'></b>";
										echo "</li>";
									echo "</ul>";
								echo "</li>";
							echo "</ul>";
						echo "</li>";
					echo "</ul>";
				echo "</li>";

				echo "<li class=''>";
					echo "<a href='#' class='dropdown-toggle'>";
						echo "<i class='menu-icon fa fa-list'></i>";
						echo "<span class='menu-text'> Tables </span>";

						echo "<b class='arrow fa fa-angle-down'></b>";
					echo "</a>";

					echo "<b class='arrow'></b>";

					echo "<ul class='submenu'>";
						echo "<li class=''>";
							echo "<a href='tables.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Simple &amp; Dynamic";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='jqgrid.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "jqGrid plugin";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";
					echo "</ul>";
				echo "</li>";
				
				echo "<li class='active open'>";
					echo "<a href='#' class='dropdown-toggle'>";
						echo "<i class='menu-icon fa fa-file-o'></i>";

						echo "<span class='menu-text'>";
							echo "Other Pages";

							echo "<!-- #section:basics/sidebar.layout.badge -->";
							echo "<span class='badge badge-primary'>5</span>";

							echo "<!-- /section:basics/sidebar.layout.badge -->";
						echo "</span>";

						echo "<b class='arrow fa fa-angle-down'></b>";
					echo "</a>";

					echo "<b class='arrow'></b>";

					echo "<ul class='submenu'>";
						echo "<li class=''>";
							echo "<a href='faq.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "FAQ";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='error-404.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Error 404";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='error-500.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Error 500";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class=''>";
							echo "<a href='grid.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Grid";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";

						echo "<li class='active'>";
							echo "<a href='blank.html'>";
								echo "<i class='menu-icon fa fa-caret-right'></i>";
								echo "Blank Page";
							echo "</a>";

							echo "<b class='arrow'></b>";
						echo "</li>";
					echo "</ul>";
				echo "</li>";
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
					
						echo "<!-- page content goes here -->";
					
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




function connectDB(){
	
	//Connect To Database
    $hostname='localhost';
    $username='root';
    $password='';
    $dbname='Intranet';
	
	$connection = mysqli_connect("localhost","root","","intranet") OR DIE('Unable to connect to database! Please try again later.');
	
	return $connection;

}


function readUser(){
	
	//Get DB connection
	//$conn = connectDB();
	
	$conn = mysqli_connect("localhost","root","","Intranet") OR DIE('Unable to connect to database! Please try again later.');
	
	
	//Read User
	$sql = 'Select UserName,Password,Email FROM it_catalog_users' OR DIE('Unable to connect to database! Please try again later.');
	$Rows = mysqli_query($conn, $sql);
	
	
	if ($row = mysqli_fetch_array($Rows)) {
		
		echo "UserName:".$row['UserName']."<br>";
		echo "Email:".$row['Email']."<br>";
		echo "Password:".$row['Password']."<br>";
		
		
	}
	
	
	//Close DB connection 
	mysqli_close($conn);
	
	
}







function cabeceraPagina($tit)
{
  echo "<h1 style=\"width:100%;background:#ffff00;text-aling:center\">$tit</h1>";
}

function piePagina($tit)
{
  echo "<p style=\"width:100%;background:#cccccc;text-aling:center\">$tit</p>";	
}
?>