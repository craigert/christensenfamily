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
<!--
                <div class="chat-profile-mobile-block group">
                    <div class="mobile-block util__block open-mobile-menu">
                        <span class="icon-reorder"></span>
                    </div>
                    <div class="chat-block util__block">
                        <a class="util__link" itemprop="url" href="/chat">
                            <span class="icon-chat"></span>
                            <span class="util__label">Chat</span>
                        </a>
                    </div>
                    <div class="divider">|</div>
                    <div class="profile-block util__block">
                        <div class="util__link profile-menu-toggle">
                            <span class="icon-profile"></span>
                            <span class="util__label" itemprop="url">Profile</span>
                        </div>
                        <ul class="util__submenu">
                            <li>
                                <a href="/create" itemprop="url">Create a Profile</a>
                            </li>
                            <li>
                                <a href="/profile" itemprop="url">Edit Your Profile</a>
                            </li>
                            <li>
                                <a class="util__last-link" href="/profile/view-your-profile" itemprop="url">View Your Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
-->
                <div class="search__group">
<!--
                    <div class="search-block util__block">
                        <a class="util__link" href="/searchresults">
                            <span class="icon-search"></span>
                            <span class="icon-close"></span>
                        </a>
                    </div>
                    <form id="search_form" class="icon-search search_form" rel="/searchresults" method="get" enctype="application/x-www-form-urlencoded">
                        <input class="site_search" id="siteSearch" name="query" type="text" placeholder="SEARCH" />
                        <input type="submit" value="" />
                    </form>

                    <div class="editContent">edit</div>
                    <div class="saveContent">save</div>
-->
                </div>
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
<!--
                    <h1 itemprop="name" class="name">Edit Me</h1>
                    <aside class="summary" style="white-space:pre-line" itemprop="description">Edit Me</aside>
-->
                </section>
<!--
                <section id="video">
                    <aside id="video-aside" class="video" style="opacity: 100;">
                        <div class="video-player video-player-group " data-youtubeid="COWoC_dldQs" data-brightcoveid="2165292887001" data-href="COWoC_dldQs2165292887001" data-width="640" data-height="390"></div>
                    </aside>
                    <aside id="image-aside" style="display:none;">
                        <img width="640" height="360" src="" alt="Craig Boren" title="Craig Boren" />
                    </aside>
                    <ul>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_preplay-mormon.jpg" index="1" data-path="" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_01_thumb-mormon.jpg" index="2" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_01-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_02_thumb-mormon.jpg" index="3" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_02-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_03_thumb-mormon.jpg" index="4" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_03-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_04_thumb-mormon.jpg" index="5" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_04-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_05_thumb-mormon.jpg" index="6" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_05-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_06_thumb-mormon.jpg" index="7" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_06-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                        <li class="galleria">
                            <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_07_thumb-mormon.jpg" index="8" data-path="/bc/static/img/people/eng/portraits/portrait_detail/sarahg/Sarah-Gill_07-mormon.jpg" width="74" height="65" title="Craig Boren" alt="Craig Boren" />
                        </li>
                    </ul>
                    <div class="clear"></div>
                </section>
-->

				<!-- About Me and What Matters Most to Me sections -->
                <span itemprop="about">
<!--                <section id="about_me" class="editable">-->
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
                    
<!--                <section id="what_matters_most_to_me" class="editable">-->
                    <section id="what_matters_most_to_me">
                        <h3>What matters most to me</h3>
                        <?php
                            preg_match('/<p class="whatMatters">(.*?)<span>/', $extendedBio, $match);
                            $whatMattersMost = $match[1];

                            echo $whatMattersMost;
                        ?>
                    </section>
<!--
                    <section id="how_i_live_my_faith">
                        <h3>How I live my faith</h3>
                        <p style="white-space:pre-line">I live a very normal life, I work 5 days a week and enjoy spending time with friends and family. But every Sunday morning I attend church and every day I try to read from the Book of Mormon and pray to God. 

                        I love being part of a church community and really enjoy spending time with other church members. I currently serve as the financial clerk in my local ward.</p>
                </section>--></span>

            </section>
        </section>
    </div>
    <!-- end of main section wrap -->
    <div class="footer_wrap">
        <div id="footer-wrapper">
            <footer itemscope="" itemtype="http://schema.org/WPFooter">
                <div class="footer-bottom">
                    <div class="social-wrapper">
                        <a class="social icon-facebook" href="http://www.facebook.com/Mormon">
                            <span title="Facebook"></span>
                        </a>
                        <a class="social icon-twitter" href="http://twitter.com/#!/mormonorg">
                            <span title="twitter"></span>
                        </a>
                        <a class="social icon-youtube" href="http://www.youtube.com/user/Mormon">
                            <span title="youtube"></span>
                        </a>
                        <a class="social icon-google" href="https://plus.google.com/+Mormon">
                            <span title="Google Plus"></span>
                        </a>
                        <a class="social icon-instagram" target="_blank" href="http://instagram.com/mormonorg">
                            <span title="Instagram"></span>
                        </a>
                    </div>
                    <div class="clear"></div>
                    <p class="legal">Christensen Family © 2014<span></span>
                        <br clear="none" />
                    </p>
                    
                    <div class="clear"></div>
                </div>
            </footer>
        </div>
    </div>
    <input type="hidden" id="profileId" name="profileId" value="7MNQ" />
    <input type="hidden" id="cc_lang" name="cc_lang" value="en" />
    <input type="hidden" id="cc_load" name="cc_load" value="0" />
    <input type="hidden" id="excludedQuestionId" name="excludedQuestionId" value="15310974724212971207" />
    <script src="//edge.mormoncdn.org/bc/assets/build/v09052014/js/public-core.min.js" xml:space="preserve">
        ;
    </script>
    <script type="text/javascript" xml:space="preserve">
        $(function () {
            var e = $("meta[property='omni:title']").attr("content") || "No Title Set";
            var t = ($("meta[property='omni:channel']").attr("content") || "No Channel Set on Page: " + e).replace("'", "");
            var n = ($("meta[property='omni:language']").attr("content") || "No Language Set on Page: " + e).replace("'", "");
            var r = $("meta[property='omni:pageType']").attr("content") || "";

            s.channel = t;
            s.pageName = s.channel + ": " + e;
            s.prop35 = n;
            s.eVar35 = n;
            if (r !== "") {
                s.pageType = r;
            }
            s.campaign = moGetParameterByName('cid');
            try {
                s.prop36 = searchText;
                s.eVar36 = searchText;
            } catch (u) {}
        });

        _satellite.pageBottom();
    </script>
    <script src="//edge.mormoncdn.org/bc/assets/build/v09052014/js/profile.min.js" xml:space="preserve"></script>
    <div></div>
</body>

</html>