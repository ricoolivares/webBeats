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
				
	//<!--Start:#1 section:basics/navbar.layout -->	
	echo "<div class='navbar' id='navbar'>";
	echo "<div class='navbar-container' id='navbar-container'>";
	
		echo "<!-- navbar goes here -->";
		
		echo "<div class='navbar-buttons navbar-header pull-right'>";
		  echo "<ul class='nav ace-nav'>";

			echo "<li class='light-blue'>";

			 echo "<a data-toggle='dropdown' class='dropdown-toggle' href='#'>";
			   echo "<i class='ace-icon fa fa-tasks'></i>";
			   echo "<span class='badge'>5</span>";
			 echo "</a>";

			 echo "<ul class='dropdown-menu dropdown-navbar dropdown-menu-right dropdown-caret dropdown-close'>";
			   echo "<li class='dropdown-header'>";
				 echo "title text";
			   echo "</li>";

			   echo "<li>";
				 echo "item#1.";
			   echo "</li>";
			   echo "<li>";
				 echo "item#2.";
			   echo "</li>";

			  echo "<li class='dropdown-footer'>";
				echo "bottom text or link";
			  echo "</li>";
			echo "</ul>";

		   echo "</li>";
		   

		   echo "<li>";
			echo "Another button and dropdown";
		   echo "</li>";
		   
		  echo "</ul>";
		echo "</div>";
		
		
	echo "</div><!-- /.navbar -->";	
	echo "</div><!-- /.navbar -->";	
	//<!--End:#1 section:basics/navbar.layout -->	
	
	
	echo "<div class='main-container' id='main-container'>"	;		
		
		//<!--Start:#2 section:SideBar -->	
		echo "<div class='sidebar responsive' id='sidebar'>";
		
			echo "<!-- SideBar goes here -->";
			
			
			
			
			
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
	echo"window.jQuery || document.write('<script src='../assets/js/jquery1x.min.js'>'+'<'+'/script>');";
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