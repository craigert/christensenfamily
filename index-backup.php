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
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/styles.css" />
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

<body class="our_people">
    <div id="header-wrapper" class="">
        <header itemscope="" itemtype="http://schema.org/WPHeader">
            <div class="logo-wrapper">
                <h2 itemprop="author" itemscope="" itemtype="http://schema.org/Organization">
<a href="/eng">
<span itemprop="name" class="org-name">The Church of Jesus Christ of Latter-Day Saints</span>
<img class="church-logo" itemprop="logo" src="//edge.mormoncdn.org/bc/static/img/LDS_Logos/eng/eng_logo.svg" alt="logo"/>
 </a>
</h2>
            </div>
            <div class="util__wrapper" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
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
                <div class="search__group">
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
                </div>
            </div>
        </header>
    </div>
    <div class="wrap">
        <section id="main" class="portraits">
            <section id="content">
                <article class="people_content">
                    <h1>I'm a Christensen</h1>
                    <p>While our backgrounds and experiences are diverse, we share a deep commitment to Jesus Christ, to each other, and our neighbors. Watch these stories of faith in the everyday lives of Mormons. You can also <a href="http://www.mormons.org">meet Mormons here</a>.</p>
                    <section id="portrait_gallery">
                        <ul class="related-portraits">

                            <?php

                                $imageDir = 'HomePage/homeImages';
                                $shortBioDir = 'HomePage/shortBios';
                                $longBioDir = 'HomePage';
                                $file_display = array('jpg', 'jpeg', 'png', 'gif');

                                $dir_contents = scandir($imageDir);

                                foreach (glob("*.*") as $filename) {
                                    $mainfilenameonly = preg_replace('/.[^.]*$/', '', $filename);
                                    $mainfilenames[] = $mainfilenameonly;
                                }

                                foreach ($dir_contents as $file) {
                                    $foundmatch = false;
                                    $file_type = strtolower(end(explode('.', $file)));

                                    if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
                                        echo '<li itemscope="" itemtype="http://schema.org/Person">';
                                        $filenameonly = preg_replace('/.[^.]*$/', '', $file);
                                        
                                        $fh = fopen($shortBioDir.'/'.$filenameonly.'.txt','r');
                                        while ($line = fgets($fh)) {
                                          $description = $line;
                                        }
                                        
                                        fclose($fh);
                                        
                                        foreach($mainfilenames as $val) {
                                            if ($val == $filenameonly) {
                                                $foundmatch = true;
                                            }
                                        }
                                        
                                        if (!$foundmatch) {
                                            copy('bioTemplate.php',$filenameonly.'.php');
                                        }
                                        
//                                        if (!$foundmatch) {
//                                            $newfile = fopen($filenameonly.'.php','w');
//                                            
//                                            $bio = fopen($longBioDir."/".'newBio.txt','r');
//                                            while ($newline = fgets($bio)) {
//                                                $newBioPage = $newline;
//                                            }
//                                            
//                                            fwrite($bio, $newBioPage);
//                                            
//                                            fclose($bio);
//                                            
//                                            fclose($newfile);
//                                        }
                                        
                                        $timestamp = rand(1,32000);
                                        
                                        echo '<a href="'.$filenameonly.'"><img src="'.$imageDir.'/'.$file.'?timestamp='.$timestamp.'" alt="'. $filenameonly. '" itemprop="image" />'.$description.'</a>';
                                    
                                    }
                                }

                            ?>
                            
                            <?php
                            //    $files = glob("images/mainImages/*.*");
                             //   for ($i=1; $i<count($files); $i++)
                            //    {
                             //       $num = $files[$i];
                             //       echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
                             //       }
                            ?>
                            
<!--
                            <li itemscope="" itemtype="http://schema.org/Person">
                                <a href="/joy">
                                    <img src="//edge.mormoncdn.org/bc/static/img/people/eng/portraits/portrait_detail/joy/Joy-Monahan_carousel-mormon.jpg" width="100%" alt="Who Are The Mormons - Hi I'm Joy" itemprop="image" />
                                    <div>
                                        <h2 itemprop="name">Hi I'm Joy</h2>
                                        <p class="intro" itemprop="description">I grew up in Hawaii. I believe that a little salt water cures almost anything and I'm a Mormon.</p>
                                        <p class="icon-arrow-right read_more">Read Joy's Profile</p>
                                    </div>
                                </a>
                            </li>
-->

                        </ul>
                    </section>
                </article>
            </section>
    </div>
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
    <script src="//edge.mormoncdn.org/bc/assets/build/v07142014/js/public-core.min.js" xml:space="preserve">
    </script>
    <script src="//edge.mormoncdn.org/bc/assets/build/v07142014/js/people.min.js" xml:space="preserve"></script>
    <div></div>
</body>

</html>