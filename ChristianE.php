<!DOCTYPE html>
<html lang="en" version="-//W3C//DTD XHTML 1.1//EN" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <title>Alta and Alten Christensen Family webiste</title>
    <meta name="description" content="Tribute to Alten and Alta Christensen" />
    <meta name="keywords" conetent="Christensens, Alta, Alten" />
    <!--[if IE]>
	   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<![endif]-->
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="language" content="eng" />
    <meta name="twoCharacterCode" content="en" />
    <meta name="ccLoadPolicy" content="0" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/styles.css" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	<script type="text/javascript">

		$(document).ready(function() {
			document.title = $(".name").text() + ' | Alta and Alten Christensen Family';
		});

	</script>
    
    <script src="scripts/main.js" type="text/javascript"></script>
    
    <!--[if lt IE 9]>
        <style>.our_people #ldsgh-button a { background: none !important; }</style>
        <link rel="stylesheet" href="/bc/assets/build/v07142014/css/core/eng.css"/>
        <script src="//edge.mormoncdn.org/bc/assets/js/lib/respond.js"> </script>
    <![endif]-->
    <script type="text/javascript">
        var _sf_startpt = (new Date()).getTime();
    </script>
    <!--[if lt IE 9]>
	   <script src="//html5shiv.googlecode.com/svn/trunk/html5.js">;</script>
	   <script>MO_IS_OLD_IE = true;</script>
	<![endif]-->
</head>

<body class="our_people profile">
    <div id="header-wrapper" class="">
        <header itemscope="" itemtype="http://schema.org/WPHeader">
            <div class="logo-wrapper">
                <h2 itemprop="author" itemscope="" itemtype="http://schema.org/Organization">
					<a href="/">
						<img class="family-logo" src="images/logo.png" />
					</a>
				</h2>
            </div>
            <div class="util__wrapper" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
            </div>
        </header>
    </div>
	
    <!-- start of main section wrap -->
    <div class="wrap">
        <section id="main">
			
			<!-- Display portrait image on secondary bio page -->
            <section id="content" class="profileContent">
				<?php

					// Set directory
					$imageDir = 'HomePage/homeImages';
					$file_display = array( 'jpg','jpeg','png','gif');
					$dir_contents = scandir($imageDir);

					// Get url
					$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    // Get path from url
					$bioName = parse_url($url, PHP_URL_PATH);

                    // Trim '/' and file extension from url path
                    $withoutExt = ltrim(preg_replace('/\\.[^.\\s]/', '', $bioName), '/');

                    $cousinName = $withoutExt;

					// Loop through each image file in image directory (imageDir)
					foreach($dir_contents as $file) {
					 	$foundmatch = false;
					 	$file_type = strtolower(end(explode('.', $file)));
					 	if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {

					  		// Start building html structure on homepage
					  		$filenameonly = preg_replace('/.[^.]*$/', '', $file);

							if ($filenameonly == $cousinName) {
								// Generate random number used for images (cacheing)
								$timestamp = rand(1, 32000);
					
								echo '<img class="secondaryPic" src="' . $imageDir . '/' . $file . '?timestamp=' . $timestamp . '" alt="' . $filenameonly . '" itemprop="image" />';
							}
							else {
							}
						}
					}

				?>
				
				<!-- Brief intro on secondary bio page -->
                <section id="intro" class="portrait" itemprop="headline" itemscope="" itemtype="http://schema.org/Person">
					<?php

						// Set directory
						$shortBioDir = 'HomePage/shortBios';
                        $longBioDir = 'HomePage/longBios';

                        // Get url
						$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        // Get path from url
						$bioName = parse_url($url, PHP_URL_PATH);

                        // Trim '/' and file extension from url path
                        $withoutExt = ltrim(preg_replace('/\\.[^.\\s]{3,4}$/', '', $bioName), '/');

                        $cousinName = $withoutExt;

						// Build description from text file in shortBioDir
						$fh = fopen($shortBioDir.'/'.$cousinName.'.txt','r');
						while ($line = fgets($fh)) {
							$description = $line;
						}

                        fclose($fh);

						preg_match('/"name">(.*?)</', $description, $match);
						$introName = $match[1];

						preg_match('/"description">(.*?)</', $description, $match);
						$introBriefBio = $match[1];

						echo '<h1 itemprop="name" class="name">'.$introName.'</h1><aside class="summary" style="white-space:pre-line" itemprop="description">'.$introBriefBio.'</aside>';

					?>
                </section>

				<!-- About Me and What Matters Most to Me sections -->
                <span itemprop="about">
                    <section id="about_me">
                        <h3>About Me</h3>
                        <?php

                            // Build description from text file in longBioDir
                            $fh = fopen($longBioDir.'/'.$cousinName.'.txt','r');
                            while ($line = fgets($fh)) {
                                $extendedBio = $line;
                            }

                            fclose($fh);

                            preg_match('/class="aboutMe">(.*?)<p class="whatMatters">/', $extendedBio, $match);
                            $aboutMe = $match[1];

                            echo $aboutMe;
                        ?>
                    </section>
                    
                    <section id="what_matters_most_to_me">
                        <h3>What matters most to me</h3>
                        <?php
                            preg_match('/<p class="whatMatters">(.*?)<span>/', $extendedBio, $match);
                            $whatMattersMost = $match[1];

                            echo $whatMattersMost;
                        ?>
                    </section>
				</span>
            </section>
        </section>
    </div>
	
    <!-- end of main section wrap -->
    <div class="footer_wrap">
        <div id="footer-wrapper">
            <footer itemscope="" itemtype="http://schema.org/WPFooter">
                <div class="footer-bottom">
                    <div class="clear"></div>
                    <p class="legal">Christensen Family © 2014<span></span>
                        <br clear="none" />
                    </p>
                    
                    <div class="clear"></div>
                </div>
            </footer>
        </div>
    </div>
	
    <script src="//edge.mormoncdn.org/bc/assets/build/v09052014/js/public-core.min.js" xml:space="preserve">
    </script>
    <script src="//edge.mormoncdn.org/bc/assets/build/v09052014/js/profile.min.js" xml:space="preserve"></script>
    <div></div>
</body>

</html>