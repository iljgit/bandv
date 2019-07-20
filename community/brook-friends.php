<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The Burnside and Vinery Rd allotment is proud to support the work of the Friends of the Brook: Cherry Hinton Brook which runs alongside one side of Burnside.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="shortcut icon" href="/assets/ico/favicon.ico">

    <title>Friends of Cherry Hinton Brook – Burnside & Vinery</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    
    <link rel="stylesheet" href="/assets/css/blueimp-gallery.min.css">

    <!-- Custom styles for this template -->
    <style>
        <?php
            $page = file_get_contents('../assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include "../menu_snippet.html" ?>
    
	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h1>FRIENDS OF CHERRY HINTON BROOK</h1>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <h1>Friends of Cherry Hinton Brook</h1>
                    <p class="large-text">
                    <img class="img-thumbnail img-responsive pull-left margin" style="width: 30%;" src="/community/images/brook1.jpg"/>As most Burnside allotments plotholders know, particularly those who use the Burnside gate, Cherry Hinton Brook runs along the north side of the allotments, alongside Snakey Path and Burnside itself. The brook rises in Cherry Hinton at Giant’s Grave, just across from the Robin Hood pub, and flows through Cherry Hinton Hall, where it has been formed into a lake, and then proceeds to join up with Coldham’s Brook on Coldham’s Common, and eventually disperses into Ditton Fields. Much of the water is lost en route into various drainage ditches so there is no direct outflow into the Cam as there would once have been.</p>
                    
                    <p class="large-text">
Nevertheless it is, essentially, a healthy chalk stream, a very rare habitat, and it is extremely rich in wildlife: water voles (a species that is very threatened in most parts of England); fish (stickleback, bullheads, perch and roach); and birds, ranging from the aquatic (mallard duck, moorhen, and indeed the occasional swan and egret) to the more aerial – kingfishers are often seen darting along the surface and little egrets visit in the winter months.
                    </p>
                    
                    <p class="large-text">
                    <img class="img-thumbnail img-responsive pull-right margin" style="width: 30%;" src="/community/images/brook2.jpg"/>
It is also popular with people. Passers-by are frequently seen lingering, photographing and/or feeding the ducks.  The brook provides a “green corridor” from the countryside into the site and, all in all, it can be considered an important local asset.
                    </p>
                    
                    <p class="large-text">
Taking on a safe-keeping role for the brook are the Friends of Cherry Hinton Brook (FCHB), a local group with members coming from the surrounding area. The group’s activities, mainly carried out by volunteers, include:<ul class="large-text">
<li>maintaining the appearance of the brook, for instance by removing litter;</li>
<li>wildlife habitat improvement: current activities including the installation of flow deflectors at certain locations (including two at the end of Burnside, close to the allotments gate).  These are made from logs which are tied to each side of the brook and kept in place with gravel. By narrowing the brook, they speed up the flow of water and thus disperse the mud and silt. In some places you can now see the natural streambed;</li>
<li>raising public awareness of the brook’s wildlife importance (for example with the siting of information boards);</li>
<li>assessment of and comment on development proposals and local plans that might impact the brook and its surroundings.</li>
</ul>
                    </p>
                    
                    <p class="large-text">
FCHB works closely with Cambridge City Council, Rivercare (a programme run by Keep Britain Tidy to maintain waterways in East Anglia) and the Cambridge Natural History Society.
FCHB is always keen on making contact with anyone interested in the brook and its environment, and gives a warm welcome to anyone wishing to become a member or who would like to receive the regular newsletter.  The website is: <a href="http://www.friendsofcherryhintonbrook.org.uk/" target="_blank">http://www.friendsofcherryhintonbrook.org.uk/</a>
                    </p>
                    
                    <p class="large-text">
By the way, the Burnside and Vinery Road Allotments already has an affiliation of sorts with FCHB as its brook-cleaning equipment is kept in the Burnside store.
                    </p>
                    
                    <p><i>John McGill, Burnside</i></p>
                    
                </div>
            </div>
                        
        </div>
	 
	
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "../footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/retina-1.1.0.js"></script>
        <script src="/assets/js/blueimp-gallery.min.js"></script>

  <script>
    var i, el, els;
    els = document.getElementsByName('links');
    for (i = 0; i < els.length; i++) {
        el = els[i];
        el.onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    }
    </script>  
  </body>
</html>
