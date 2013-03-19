<?php 
if(isset($_GET['b']))
	$static_bracket = true;
else
	$static_bracket = false;
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <!--<meta name="viewport" content="width=device-width" />-->

  <title>March Madness - Daily Bruin</title>
  <link rel="shortcut icon" href="images/favicon.ico"> 

  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/styles.css">

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
 
  <script src="js/foundation.min.js"></script>


  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/scripts.js"></script>


</head>
<body>
	<?php 
	// We only want to load the FB stuff if we are planning on letting
	// the user save
	if(!$static_bracket):?>
		<!-- Facebook Header -->
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    // init the FB JS SDK
	    FB.init({
	      appId      : '269701246422391', // App ID from the App Dashboard
	      status     : true, // check the login status upon init?
	      cookie     : true, // set sessions cookies to allow your server to access the session?
	      xfbml      : true  // parse XFBML tags on this page?
	    });
	    
	    // Additional initialization code such as adding Event Listeners goes here
	    FB.getLoginStatus(function(response) {
	    	if(response.status === 'connected')
	    	{
				testAPI();
	            document.getElementById('FBconnect').src="images/FBconnectgrey.png";
	            document.getElementById('FBlink').onclick = function() { return 0; };
	            setPermalink();
	    	}
	    });
	  };

		function login() {
		    FB.login(function(response) {
		        if (response.authResponse) {
		            // connected
		            testAPI();
		            document.getElementById('FBconnect').src="images/FBconnectgrey.png";
		            document.getElementById('FBlink').onclick = function() { return 0; };
		            setPermalink();
		            
		        } else {
		            // cancelled
		        }
		    });
		}

	function testAPI() {
    FB.api('/me', function(response) {
        document.getElementById('FBmessage').innerHTML='Good to see you,</br>' + response.name + '.' + 
        '<span class="fb-logout">Not you? <a href="#" id="fb-logout-button">Logout of Facebook.</a>';
        initLogoutButton();
        setBracket();
    });
}
	
	  // Load the SDK's source Asynchronously
	  // Note that the debug version is being actively developed and might 
	  // contain some type checks that are overly strict. 
	  // Please report such bugs using the bugs tool.
	  (function(d, debug){
	     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
	     ref.parentNode.insertBefore(js, ref);
	   }(document, /*debug*/ false));
	</script>
	<?php endif; ?>

  <!-- Text Banner -->
  
  <header id="header" class="row">
  	<div class="twelve columns text-center" id="headerblock">
  		<div class="row">
  			<div class="large-4 large-offset-4 columns">
  				<p><img src="images/basketballheadertext.png" /></p>
  			</div>
  			<div class="large-4 text-right columns">
	  			<a href="bracket-print.pdf" class="tiny button" target="_blank">Download printable PDF bracket</a>
	  			<div id="share-link"></div>
  			</div>
	  		</div>
  		</div>
  	</div>
  </header>
  
  <!-- Navigation bar -->
  
	<div id="separatorbar">
	</div>
  
  <!-- Body of everything-->
  
  <div class="row vanilla">
	  	  
	  <!-- left column -->
	  <!-- midwest -->
	  <div class="large-3 columns outercolumns">
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-1', 'images/midwest/louisville_card.png');">
	  			<img src="images/midwest/louisville_card.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Louisville">(1) Louisville</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="North Carolina A&T/Liberty">(16) NCAT/LIB</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-1', 'images/midwest/ncat_lib.png');">
	  			<img src="images/midwest/ncat_lib.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div id="Stop1" class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-2', 'images/midwest/colorado_state_rams.png');">
	  			<img src="images/midwest/colorado_state_rams.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Colorado State">(8) Colorado State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Missouri">(9) Missouri</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-2', 'images/midwest/missou_tigers.png');">
	  			<img src="images/midwest/missou_tigers.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-3', 'images/midwest/ok_state.png');">
	  			<img src="images/midwest/ok_state.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Oklahoma State">(5) Oklahoma State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Oregon">(12) Oregon</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-3', 'images/midwest/oregon.png');">
	  			<img src="images/midwest/oregon.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-4', 'images/midwest/saint_louis.png');">
	  			<img src="images/midwest/saint_louis.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Saint Louis">(4) Saint Louis</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="New Mexico State">(13) New Mexico St.</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-4', 'images/midwest/new_mex_state_aggies.png');">
	  			<img src="images/midwest/new_mex_state_aggies.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-5', 'images/midwest/memphis_tigers.png');">
	  			<img src="images/midwest/memphis_tigers.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Memphis">(6) Memphis</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Middle Tennessee State University/St. Mary's">(11) MTSU/STM</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-5', 'images/midwest/midd_tennessee_smc.png');">
	  			<img src="images/midwest/midd_tennessee_smc.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-6', 'images/midwest/mich_state.png');">
	  			<img src="images/midwest/mich_state.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Michigan State">(3) Michigan State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Valparaiso">(14) Valparaiso</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-6', 'images/midwest/valparaiso_crusaders.png');">
	  			<img src="images/midwest/valparaiso_crusaders.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-7', 'images/midwest/creighton_blue_jays.png');">
	  			<img src="images/midwest/creighton_blue_jays.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Creighton">(7) Creighton</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Cincinnati">(10) Cincinnati</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-7', 'images/midwest/cincinnati_bearcats.png');">
	  			<img src="images/midwest/cincinnati_bearcats.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-8', 'images/midwest/duke_alt.png');">
	  			<img src="images/midwest/duke_alt.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Duke">(2) Duke</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Albany">(15) Albany</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-8', 'images/midwest/albany.png');">
	  			<img src="images/midwest/albany.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>


	  	<!-- west -->
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-9', 'images/west/gonzaga_bulldogs.png');">
	  			<img src="images/west/gonzaga_bulldogs.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Gonzaga">(1) Gonzaga</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Southern University">(16) Southern University</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-9', 'images/west/southern_univ.png');">
	  			<img src="images/west/southern_univ.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-10', 'images/west/pittsburgh.png');">
	  			<img src="images/west/pittsburgh.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Pittsburgh">(8) Pittsburgh</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Wichita State">(9) Wichita State</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-10', 'images/west/wichita_state.png');">
	  			<img src="images/west/wichita_state.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-11', 'images/west/wisconsin.png');">
	  			<img src="images/west/wisconsin.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Wisconsin">(5) Wisconsin</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Mississippi">(12) Mississippi</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-11', 'images/west/ole_miss.png');">
	  			<img src="images/west/ole_miss.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-12', 'images/west/kansas_state.png');">
	  			<img src="images/west/kansas_state.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Kansas State">(4) Kansas State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Boise State/La Salle">(13) BSU/La Salle</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-12', 'images/west/boise_state_la_salle.png');">
	  			<img src="images/west/boise_state_la_salle.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-13', 'images/west/arizona.png');">
	  			<img src="images/west/arizona.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Arizona">(6) Arizona</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Belmont">(11) Belmont</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-13', 'images/west/belmont_bruins.png');">
	  			<img src="images/west/belmont_bruins.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-14', 'images/west/new_mexico.png');">
	  			<img src="images/west/new_mexico.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="New Mexico">(3) New Mexico</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Harvard">(14) Harvard</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-14', 'images/west/harvard.png');">
	  			<img src="images/west/harvard.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-15', 'images/west/notre_dame.png');">
	  			<img src="images/west/notre_dame.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Notre Dame">(7) Notre Dame</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Iowa State">(10) Iowa State</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-15', 'images/west/iowa_state.png');">
	  			<img src="images/west/iowa_state.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	<div class="schoolvsschool borderright borderbot">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-16', 'images/west/ohio_state.png');">
	  			<img src="images/west/ohio_state.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Ohio State">(2) Ohio State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Iona">(15) Iona</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-16', 'images/west/iona.png');">
	  			<img src="images/west/iona.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  </div>
	  
	  <div class="large-1 columns middlecolumns">
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-1', getInnerImage.call(this));">
	  			<img id="1-1" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-1', getInnerImage.call(this));">
	  			<img id="1-2" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-2', getInnerImage.call(this));">
	  			<img id="1-3" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-2', getInnerImage.call(this));">
	  			<img id="1-4" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-3', getInnerImage.call(this));">
	  			<img id="1-5" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-3', getInnerImage.call(this));">
	  			<img id="1-6" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-4', getInnerImage.call(this));">
	  			<img id="1-7" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-4', getInnerImage.call(this));">
	  			<img id="1-8" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-5', getInnerImage.call(this));">
	  			<img id="1-9" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-5', getInnerImage.call(this));">
	  			<img id="1-10" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>	
    	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-6', getInnerImage.call(this));">
	  			<img id="1-11" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-6', getInnerImage.call(this));">
	  			<img id="1-12" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-7', getInnerImage.call(this));">
	  			<img id="1-13" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-7', getInnerImage.call(this));">
	  			<img id="1-14" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-8', getInnerImage.call(this));">
	  			<img id="1-15"src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-8', getInnerImage.call(this));">
	  			<img id="1-16" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  </div>
	  
	  <!-- 4/8 matches -->
	  
	  <div class="large-1 columns middlecolumns">
	  		<div class="bracketicon">
	  			<img src="images/halfsquare.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/halfsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-1', getInnerImage.call(this));">
	  			<img id="2-1" class="borderleft borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-1', getInnerImage.call(this));">
	  				<img id="3-1"  class="borderleft borderbot" onclick="" src="images/square.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-1', getInnerImage.call(this));">
	  				<img id="2-2" class="borderleft bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-2', getInnerImage.call(this));">
	  				<img id="2-3" class="borderleft borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-1', getInnerImage.call(this));">
	  				<img id="3-2"  class="borderleft bordertop" onclick="" src="images/square.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-2', getInnerImage.call(this));">
	  				<img id="2-4" class="borderleft bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-3', getInnerImage.call(this));">
	  				<img id="2-5" class="borderleft borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-2', getInnerImage.call(this));">
	  				<img id="3-3"  class="borderleft borderbot" onclick="" src="images/square.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-3', getInnerImage.call(this));">
	  				<img id="2-6" class="borderleft bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-4', getInnerImage.call(this));">
	  				<img id="2-7" class="borderleft borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-2', getInnerImage.call(this));">
	  				<img id="3-4"  class="borderleft bordertop" onclick="" src="images/square.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-4', getInnerImage.call(this));">
	  				<img id="2-8" class="borderleft bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  </div>
	  
	  <!-- center -->
	  
	  <div class="large-2 columns text-center middlecolumns">
	  	<div style="height:11em">
	  		<?php if(!$static_bracket): ?>
	  		<a href="javascript:void(0)" id="FBlink" onclick="login();">
	  			<img id="FBconnect" src="images/FBconnect.png" />
	  		</a>
		  	<?php else: ?>
		  		<div id="bracket-name">
			  		<a href="index.php">Click here to create your own bracket</a>
			  	</div><!-- end div#bracket-name -->
		    <?php endif; ?>
	  		<span id="FBmessage"></span>
		</div>
	  	<div>
		  	<div class="middleicon left">
		  		<a href="javascript:void(0)" onclick="changeImage('5-1', getInnerImage.call(this));">
	  			<img id="4-1" class="borderleft borderbot" src="images/square.png" />
		  		</a>
	  		</div>
	  		<div class="middleicon right">
	  			<a href="javascript:void(0)" onclick="changeImage('5-1', getInnerImage.call(this));">
	  			<img id="4-3" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<span class="clear">
	  		</span>
	  	</div>
  		<div class="text-center" style="height:5em">
	  		<div class="middletwo">
	  			<a href="javascript:void(0)" onclick="changeImage('6-1', getInnerImage.call(this));">
	  			<img id="5-1" class="borderright borderleft" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	
	  	<div style="height:12em">
	  		<div>
	  			<img id="6-1" src="images/centersquare.png" style="width:100%"/>
	  		</div>
	  	</div>
	  	<div style="height:2em">
	  	</div>
	  	<div style="height:4em">
	  		<div class="middletwo">
	  			<a href="javascript:void(0)" onclick="changeImage('6-1', getInnerImage.call(this));">
	  			<img id="5-2" class="borderright borderleft" src="images/square.png" />
	  			</a>
	  		</div>
	  	</div>
	  	<div class="middleicon left">
  			<a href="javascript:void(0)" onclick="changeImage('5-2', getInnerImage.call(this));">
  			<img id="4-2" class="borderleft bordertop" src="images/square.png" />
  			</a>
  		</div>
  		<div class="middleicon right">
  			<a href="javascript:void(0)" onclick="changeImage('5-2', getInnerImage.call(this));">
  			<img id="4-4" class="bordertop borderright" src="images/square.png" />
  			</a>
  		</div>
	  </div>
	  
	  <!-- 4/8 matches -->
	  
	  <div class="large-1 columns middlecolumns">
	  		<div class="bracketicon">
	  			<img src="images/halfsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/halfsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-5', getInnerImage.call(this));">
	  			<img id="2-9" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-3', getInnerImage.call(this));">
	  			<img id="3-5" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-5', getInnerImage.call(this));">
	  			<img id="2-10" class="bordertop borderright" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-6', getInnerImage.call(this));">
	  			<img id="2-11" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-3', getInnerImage.call(this));">
	  			<img id="3-6" class="borderright bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-6', getInnerImage.call(this));">
	  			<img id="2-12" class="bordertop borderright" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-7', getInnerImage.call(this));">
	  			<img id="2-13" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-4', getInnerImage.call(this));">
	  			<img id="3-7" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-7', getInnerImage.call(this));">
	  			<img id="2-14" class="bordertop borderright" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-8', getInnerImage.call(this));">
	  			<img id="2-15" class="borderright borderbot" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('4-4', getInnerImage.call(this));">
	  			<img id="3-8" class="borderright bordertop" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/fullsquare.png" />
	  		</div>
	  		<div class="bracketicon">
	  			<a href="javascript:void(0)" onclick="changeImage('3-8', getInnerImage.call(this));">
	  			<img id="2-16" class="bordertop borderright" src="images/square.png" />
	  			</a>
	  		</div>
	  </div>
	  
	  <div class="large-1 columns outcolumns">
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-9', getInnerImage.call(this));">
	  			<img id="1-17" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-9', getInnerImage.call(this));">
	  			<img id="1-18" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-10', getInnerImage.call(this));">
	  			<img id="1-19" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-10', getInnerImage.call(this));">
	  			<img id="1-20" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-11', getInnerImage.call(this));">
	  			<img id="1-21" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-11', getInnerImage.call(this));">
	  			<img id="1-22" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-12', getInnerImage.call(this));">
	  			<img id="1-23" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-12', getInnerImage.call(this));">
	  			<img id="1-24" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-13', getInnerImage.call(this));">
	  			<img id="1-25" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-13', getInnerImage.call(this));">
	  			<img id="1-26" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-14', getInnerImage.call(this));">
	  			<img id="1-27" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-14', getInnerImage.call(this));">
	  			<img id="1-28" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-15', getInnerImage.call(this));">
	  			<img id="1-29" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-15', getInnerImage.call(this));">
	  			<img id="1-30" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<div class="bracketlist">
	  		<div class="bracketicon borderbot">
	  			<a href="javascript:void(0)" onclick="changeImage('2-16', getInnerImage.call(this));">
	  			<img id="1-31" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	<span class="clear"></span>
	  	<div class="bracketlist">
	  		<div class="bracketicon ">
	  			<a href="javascript:void(0)" onclick="changeImage('2-16', getInnerImage.call(this));">
	  			<img id="1-32" src="images/square.png" />
	  			</a>
	  		</div>
	  		<div class="bracketicon">
	  			<img src="images/2vs1.png" />
	  		</div>
	  	</div>
	  	
	  </div>
	  
	  <!-- right column -->
	  
	  <div class="large-3 columns outercolumns">
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-17', 'images/south/kansas.png');">
	  			<img src="images/south/kansas.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Kansas">(1) Kansas</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Western Kentucky">(16) Western Kentucky</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-17', 'images/south/w_kentucky.png');">
	  			<img src="images/south/w_kentucky.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-18', 'images/south/nc.png');">
	  			<img src="images/south/nc.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="North Carolina">(8) North Carolina</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Villanova">(9) Villanova</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-18', 'images/south/villanova.png');">
	  			<img src="images/south/villanova.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-19', 'images/south/vcu_rams.png');">
	  			<img src="images/south/vcu_rams.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Virginia Commonwealth University">(5) VCU</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Akron">(12) Akron</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-19', 'images/south/akron.png');">
	  			<img src="images/south/akron.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-20', 'images/south/mich.png');">
	  			<img src="images/south/mich.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Michigan">(4) Michigan</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="South Dakota State">(13) South Dakota St.</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-20', 'images/south/south_dakota_st.png');">
	  			<img src="images/south/south_dakota_st.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-21', 'images/south/ucla.png');">
	  			<img src="images/south/ucla.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="University of California, Los Angeles">(6) UCLA</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Minnesota">(11) Minnesota</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-21', 'images/south/minnesota.png');">
	  			<img src="images/south/minnesota.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-22', 'images/south/florida_gators.png');">
	  			<img src="images/south/florida_gators.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Florida">(3) Florida</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Northwestern State">(14) Northwestern St.</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-22', 'images/south/northwestern_state.png');">
	  			<img src="images/south/northwestern_state.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-23', 'images/south/san_diego_state.png');">
	  			<img src="images/south/san_diego_state.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="San Diego State">(7) San Diego State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Oklahoma">(10) Oklahoma</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-23', 'images/south/ok.png');">
	  			<img src="images/south/ok.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-24', 'images/south/georgetown.png');">
	  			<img src="images/south/georgetown.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Georgetown">(2) Georgetown</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Florida Gulf Coast">(15) Florida Gulf Coast</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-24', 'images/south/fla_gulf_coast.png');">
	  			<img src="images/south/fla_gulf_coast.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-25', 'images/east/indiana_hoosiers.png');">
	  			<img src="images/east/indiana_hoosiers.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Indiana">(1) Indiana</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="LIU Brooklyn/James Madison">(16)LIU/JMU</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-25', 'images/east/liu_jamesmad.png');">
	  			<img src="images/east/liu_jamesmad.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-26', 'images/east/ncstate.png');">
	  			<img src="images/east/ncstate.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="North Carolina State">(8) NC State</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Temple">(9) Temple</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-26', 'images/east/temple.png');">
	  			<img src="images/east/temple.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-27', 'images/east/unlv.png');">
	  			<img src="images/east/unlv.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Univeristy of Nevada, Las Vegas">(5) UNLV</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="University of California, Berkeley">(12) California</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-27', 'images/east/cal_bears.png');">
	  			<img src="images/east/cal_bears.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-28', 'images/east/syracuse_orange.png');">
	  			<img src="images/east/syracuse_orange.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Syracuse">(4) Syracuse</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Montana">(13) Montana</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-28', 'images/east/montana.png');">
	  			<img src="images/east/montana.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-29', 'images/east/butler.png');">
	  			<img src="images/east/butler.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Butler">(6) Butler</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Bucknell">(11) Bucknell</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-29', 'images/east/bucknell.png');">
	  			<img src="images/east/bucknell.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-30', 'images/east/marquette.png');">
	  			<img src="images/east/marquette.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Marquette">(3) Marquette</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Davidson">(14) Davidson</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-30', 'images/east/davidson.png');">
	  			<img src="images/east/davidson.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-31', 'images/east/illinois_alt.png');">
	  			<img src="images/east/illinois_alt.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Illinois">(7) Illinois</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Colorado">(10) Colorado</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-31', 'images/east/colorado_buffalo.png');">
	  			<img src="images/east/colorado_buffalo.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>
	  	
	  	<div class="schoolvsschool borderbot borderleft">
	  		<div class="schoolimageblock left">
	  			<a href="javascript:void(0)" onclick="changeImage('1-32', 'images/east/miami.png');">
	  			<img src="images/east/miami.png" />
	  			</a>
	  		</div>
	  		<div class="schooltextblock left">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Miami">(2) Miami</span>
	  		</div>
	  		<div class="schoolvs left">
	  			<img src="images/vs.png" />
	  		</div>
	  		<div class="schooltextblock right">
	  			<span data-tooltip class="has-tip" data-width="10em" title="Pacific">(15) Pacific</span>
	  		</div>
	  		<div class="schoolimageblock right">
	  			<a href="javascript:void(0)" onclick="changeImage('1-32', 'images/east/pacific_tigers.png');">
	  			<img src="images/east/pacific_tigers.png" />
	  			</a>
	  		</div>
	  		<span class="clear"></span>
	  	</div>

  </div>
	  
   </div><!-- end div.row.vanilla -->
<div class="row" id="row-credit">
	<span>Interactive bracket by Calvin Chan, Daniel Duan, and Forrest Lee. &copy; Daily Bruin 2013. All rights reserved. <a href="http://dailybruin.com/contact-us/">Contact us.</a></span>
</div><!-- end div#row-credit -->
   <!-- Joyride guides -->
   <ol class="joyride-list" data-joyride data-options="cookieMonster: true">
  <li data-id="FBconnect" data-text="Next" data-options="tipAnimation:fade">
    <p>Welcome. Sign in to Facebook to automatically save your progress from now on.</p>
  </li>
  <li data-id="Stop1" data-text="Next" data-options="tipAnimation:fade">
    <p>Choose a school to start creating your bracket.</p>
  </li>
  <li data-id="1-2" data-button="Next" data-options="tipAnimation:fade">
    <p>Advance each school by clicking their logos.</p>
  </li>
  <li data-id="3-1" data-button="Finish" data-options="tipAnimation:fade">
    <p>So and and so forth. Enjoy!</p>
  </li>
  </ol>

  
<script>
$(document).foundation();
</script>

<script type="text/javascript">
<?php if(!$static_bracket): ?>
	$(document).foundation('joyride', 'start');
<?php else: 
	// We need to make sure the user can't modify the look of the bracket
?>
	$(document).ready(function(){
		$('.schoolimageblock > a').attr('onclick','').unbind('click');
		$('.bracketicon > a').attr('onclick','').unbind('click');
		setBracket(<?php echo $_GET['b']; ?>);
	});
<?php endif; ?>

</script>
</body>
</html>
