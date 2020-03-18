<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/header.jpg); background-position: bottom left;">
            <h1 id="title"><span class="title-background">Weeder's Digest</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12" style="border: 2px solid red; border-radius: 10px; padding: 10px; margin-bottom: 60px;">
                    <img title="Joan - webmaster" src="/assets/img/weeders-digest/joan.jpg" class="img img-thumbnail img-responsive margin pull-right" style="width: 25%;">
                    <h2>Welcome to your society site!</h2>
                    <p>Follow the links on this page to keep up to date with what is going, look at our photo albums, get growing and cooking ideas, check out the store,
                    and much more.</p>
                    <p>Let us know what you think about the site and any suggestions you have about content.  Better still, send us an article or 
                    some photos.
                    </p>
                    <p>Email me, Joan, at <a id="webmasteremail" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                    <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'webmasteremail');"></i>
                    </p>
                </div>

                <div class="col-12">
                <p>For many years, <a title="Click to here to visit a page dedicated to Trevor Taylor" href="trevor-taylor.php">Trevor Taylor</a>, the Society's Honorary President, produced a regular allotment newsletter called Weeder’s Digest, 
                which usually included growing tips, general allotment news and recipes.  Here is our equivalent.</p>
                <p>
                This page is an at-a-glance view of what is new, what is happening and, hopefully, what is interesting in the world of allotmenteering and of the Society.
                  If there is anything you think we should be talking about, or anything you would like to contribute, let us know.
                </p>
                </div>

            </div>

            <?php echo(getWhatsNew()); ?>

            <div class="row mb">

                <div class="col-12">
                    <h2>Hayley Wood Nature Reserve is having a Sale</h2>
                </div>

                <div class="col-12 col-md-6">
                    <img src="assets/img/weeders-digest/beanpoleadvert.jpg" class="img img-responsive img-thumbnail" style="width: 100%" alt="beanpole advert" title="beanpole, pea stick, and plant sale 2020" />
                </div>

                <div class="col-12 col-md-6">
                    <img src="assets/img/weeders-digest/beanpoleadvertprice.jpg" class="img img-responsive img-thumbnail" style="width: 100%" alt="beanpole advert price" title="beanpole, pea stick, and plant sale 2020 price" />
                </div>

            </div>

            <div class='row mb justify-content-md-center'><div class='col-12 col-md-4'><hr/></div></div>

            <div class="row mb">

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/society.jpg)'>Society</div>
                        <div class="card-body para-highlight">
                            <p>The Society page contains important documentation and details of your committee representatives.</p>
                        </div> 
                        <div class="card-footer"><a href="society.php" title="What's on the calendar" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/blog.jpg)'>Blogs</div>
                        <div class="card-body para-highlight">
                            <p>Tips, recipes, personal experiences - all here</p>
                        </div> 
                        <div class="card-footer"><a href="blog.php" title="What's on the calendar" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/photos.jpg)'>Photos</div>
                        <div class="card-body para-highlight">
                            <p>We always like to record events, people, plots, and the changing of the seasons in photographs. 
                            If you have any you'd like to display, let the webmaster know.</p>
                        </div> 
                        <div class="card-footer"><a href="photos.php" title="What's on the calendar" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/calendar.jpg)'>Calendar</div>
                        <div class="card-body para-highlight">
                            <!--p><?php echo(getDaysToGo('2020-03-29'));?> until British Summer Time starts.</p-->
                            <p style="color: red;">This year's AGM, scheduled for Wednesday 22<sup>nd</sup> April, is <b>cancelled</b> due to concerns over coronavirus</p>
                            <p>Burnside Store Re-opening, Sunday 26<sup>th</sup> April, 10am </p>
                        </div> 
                        <div class="card-footer"><a href="#calendar" title="What's on the calendar" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/noticeboard.jpg)'>Noticeboard</div>
                        <div class="card-body">This is the place for all your allotment-related needs and offers: 
                        help, equipment, sheds and greenhouses, plants and produce.</div> 
                        <div class="card-footer"><a href="#noticeboard" title="See what is on the noticeboard" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/garden-jobs.jpg)'>There's always something to do</div>
                        <div class="card-body"><p>NSALG produces a list of jobs to think about each month:</p><?php echo(getNSALGJobs()); ?></div> 
                        <div class="card-footer">&nbsp;</div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/store.jpg)'>Store</div>
                        <div class="card-body">The society runs a store from spring to early summer selling allotment essentials at low prices.</div> 
                        <div class="card-footer"><a href="#store" title="Read about the Store" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/links.jpg)'>External Links</div>
                        <div class="card-body">We are always happy to provide links to external sites which are likely to be of interest to our members.</div> 
                        <div class="card-footer"><a href="#links" title="Useful links to other sites" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/community.jpg)'>Community projects</div>
                        <div class="card-body">The Society is delighted to be able to offer its support to a variety of community, charitable and academic projects.
                        We are always open to new ideas.</div> 
                        <div class="card-footer"><a href="community.php" title="Community projects" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

            </div>
            
        </div><!--container-->

        <div id="calendar" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/calendar.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Calendar</span></h2>
        </div>

        <!-- Calendar -->
        <div class="container">
            <div class="row mb calendar-row">
                <div class="col-12">
                    <p>If you have any dates you would like us to put in the diary, email the 
                    <a id="webmasteremail2" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                    <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'webmasteremail2');"></i>
                    </p>
                </div>

                <div class="col-12 calendar-entry">
                    <table>
                        <tr>
                            <td><i class="far fa-calendar"></i></td>
                            <td style="color: red;">This year's AGM, scheduled for Wednesday 22<sup>nd</sup> April, is <b>cancelled</b> due to concerns over coronavirus</td>
                        </tr>
                        <tr>
                            <td><i class="far fa-calendar"></i></td>
                            <td>The Society's store at Burnside will re-open on Sunday April 26<sup>th</sup> at 10a.m.</td>
                        </tr>
                    </table>
                </div>

                <!--div class="col-12 calendar-entry">
                    <p><img src="/assets/img/weeders-digest/calendar/seed-potato.jpg" class="img img-thumbnail img-responsive img-pull-right" style="width: 25%;">
                        <span class="date">Sunday 26<sup>th</sup> January 10:00 - 12:00</span><br><span class="title">Seed Potato Collection</span>
                    </p>
                    <p>
                        Seed potatoes are due to be with us on Monday Jan 20th.  There will be an order collection morning, from the Burnside store on Sunday 26th 10:00 – 12:00.
                    </p>
                </div-->


            </div>
        </div>

        <div id="links" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/links.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">External Links</span></h2>
        </div>

        <!-- Links -->
        <div class="container">
            <div class="row mb">
                <div class="col-12">
                    <p>
                    The following are links to external web sites.  Clicking on a link will open a new page and take you automatically to the site. 
                    We do not monitor these links and you follow them at your own risk.  Please let us know if you think that a link is inappropriate.
                    </p>
                    <p>
                    If you have a favourite site which you think would interest others, please email 
                    <a id="webmasteremail3" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                    <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'webmasteremail3');"></i>
                    <br><hr>
                    </p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                    
                    <img src="/assets/img/weeders-digest/links/bara_thumb2.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 5px;" />
                    <h4>Birdwood Area Residents' Association (BARA)</h4>
                    A really informative site about Birdwood Road in the South Of Cambridge, and the surrounding area - including Burnside.<br>
                    <a title="Visit the BARA web site at https://www.baracambridge.org" href="https://www.baracambridge.org" target="ext"><i>baracambridge.org</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                
                    <img src="/assets/img/weeders-digest/links/tvgarden.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 10px;" />
                    <h4>Allotment &amp; Gardens - Advice and useful information</h4>
                    Tips, tricks, self-help videos, recipes and more.  It includes an active forum -useful now that our own forum is off-line.<br><br>
                    <a title="Visit the allotment garden web site at http://www.allotment-garden.org/" href="http://www.allotment-garden.org/" target="ext"><i>allotment-garden.org</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                
                    <img src="/assets/img/weeders-digest/links/carrots.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 10px;" /><h4>Everything you always wanted to know about carrots, and more besides</h4>
                    Allegedly the world's first virtual museum of the carrot - and who are we to judge?<br><br>
                    <a title="Visit the carrot museum at http://www.carrotmuseum.co.uk/" href="http://www.carrotmuseum.co.uk/" target="ext"><i>carrotmuseum.co.uk</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">   
                    <h4>The National Allotment Society</h4>
                    <p><img src="/assets/img/weeders-digest/links/nsalg.gif" class="img-thumbnail pull-left" style="width: 50%; margin-right: 10px; margin-bottom: 10px;" />
                    The NSALG has an active site with all sorts of useful tips and advice.<br><br>
                    <a title="Visit NSALG at https://www.nsalg.org.uk/growing-advice/" href="https://www.nsalg.org.uk/growing-advice/" target="ext"><i>nsalg.org.uk</i></a>
                    </p>
                </div>
                    
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                    <p><img src="/assets/img/weeders-digest/links/thirsty.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 10px;" /><h4>Two Thirsty Gardeners</h4>
                    Digging and swigging through the seasons.<br><br>
                    <a title="Visit the Two Thirsty Gardener's website at http://twothirstygardeners.co.uk/" href="http://twothirstygardeners.co.uk/" target="ext"><i>twothirstygardeners.co.uk</i></a>
                    </p>
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                    <p><img src="/assets/img/weeders-digest/links/organicsite.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 10px;" /><h4>No Dig Organic Gardening</h4>
                    "Charles is an acclaimed innovator of no dig, organic growing since 1983, and since 2003 of new ways to crop salad leaves. His original, weed free methods give superb results in both small and large areas...."<br><br>
                    <a title="Learn all about No Dig at https://www.charlesdowding.co.uk/" href="https://www.charlesdowding.co.uk/" target="ext"><i>charlesdowding.co.uk</i></a>
                    </p>
                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 10px;">  
                    <p><img src="/assets/img/weeders-digest/links/blight.jpg" class="img-thumbnail pull-left" style="height: 100px; margin-right: 10px; margin-bottom: 10px;" /><h4>Blight Watch</h4>
                    Watching for and dealing with blight - recommended by Andy Kurdynowski.  
                    It’s free to register, and if you do you will get email warnings when there is a likelihood, or indeed instances, 
                    of blight in your chosen postcode area.<br><br>
                    <a target="_blank" title="Importsnt Blight Watch information at http://www.blightwatch.co.uk/" href="http://www.blightwatch.co.uk/">blightwatch.co.uk</a>
                    </p>
                </div>
            </div>

        </div>

        <div id="noticeboard" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/noticeboard.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Notices</span></h2>
        </div>

        <!-- Noticeboard -->
        <div class="container" style="margin-bottom: 40px;">
            <div class="row mb">
                <div class="col-12">
                    <p>This is the place for all your allotment-related needs and offers. These can be anything from help, to equipment, to sheds and greenhouses, through to plants and produce.</p>
                    <p>Email the 
                        <a id="webmasteremail4" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'webmasteremail4');"></i> 
                        to post a notice, 
                    including what it is you are offering or want, a price, if appropriate, and how you may be contacted.  Attach a photo if you would like that to be shown.</p>
                </div>
            </div>
	 
            <div class="row mb">

                <div class="col-12 col-lg-4">                    

                    <div class="quote-container postit">
                        <i class="pin"></i>
                        <blockquote class="note general">
                            <div class="title">
                                <div style="font-size: 80%; width: 100%;">
                                    <span class="pull-left">Burnside Store</span><span class="pull-right">29/04/2019</span>
                                </div><br>Hand-made aprons
                            </div>
                            <img class="img-responsive img-thumbnail" style="width: 100%;" src="assets/img/weeders-digest/notices/aprons.jpg" />
                            Aprons, lovingly hand-made by Jill from Burnside.  Available from the Store for a minimum donation of &pound;3
                        </blockquote>
                    </div>                    

                </div>
                
                <div class="col-12 col-lg-4">                    

                    <div class="quote-container postit">
                        <i class="pin"></i>
                        <blockquote class="note general">
                            <div class="title">
                                <div style="font-size: 80%; width: 100%;">
                                    <span class="pull-left">Burnside Store</span><span class="pull-right">14/07/2018</span>
                                </div><br>For sale
                            </div>
                            <img class="img-responsive img-thumbnail" style="width: 100%;" src="assets/img/weeders-digest/notices/yellowbucket.jpg" />
                            Yellow plastic trug - new. £9.50
                        </blockquote>
                    </div>                    
                    
                </div>
                
                <div class="col-12 col-lg-4">                    

                    <div class="quote-container postit">
                        <i class="pin"></i>
                        <blockquote class="note general">
                            <div class="title">
                                <div style="font-size: 80%; width: 100%;">
                                    <span class="pull-left">Burnside Store</span><span class="pull-right">14/07/2018</span>
                                </div><br>For sale
                            </div>
                            <img class="img-responsive img-thumbnail" style="width: 100%;" src="assets/img/weeders-digest/notices/foldingbarrow.jpg" />
                            Folding barrow - as new. £20
                        </blockquote>
                    </div>                    
                    
                </div>
                
                <div class="col-12 col-lg-4">                    

                    <div class="quote-container postit">
                        <i class="pin"></i>
                        <blockquote class="note general">
                            <div class="title">
                                <div style="font-size: 80%; width: 100%;">
                                    <span class="pull-left">Burnside Store</span><span class="pull-right">14/07/2018</span>
                                </div><br>For sale
                            </div>
                            <img class="img-responsive img-thumbnail" style="width: 100%;" src="assets/img/weeders-digest/notices/greenbarrow.jpg" />
                            Large wheelbarrow - puncture-free tyre - new. £63
                        </blockquote>
                    </div>                    
                    
                </div>
                
                <div class="col-12 col-lg-4">                    

                    <div class="quote-container postit">
                        <i class="pin"></i>
                        <blockquote class="note general">
                            <div class="title">
                                <div style="font-size: 80%; width: 100%;">
                                    <span class="pull-left">Burnside Store</span><span class="pull-right">14/07/2018</span>
                                </div><br>For sale
                            </div>
                            <img class="img-responsive img-thumbnail" style="width: 100%;" src="assets/img/weeders-digest/notices/blackbarrow.jpg" />
                            Builder's wheelbarrow - new. £50
                        </blockquote>
                    </div>                    
                    
                </div>
               
            </div>

	    </div>

        <div id="store" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/store.jpg); margin-top: 80px;">
                <h2 id="title"><span class="title-background">The Store</span></h2>
        </div>

        <!-- Links -->
        <div class="container">
            <div class="row mb">
                <div class="col-12">
                    <h3>The Store will re-open on Sunday 26<sup>th</sup> April at 10a.m.</h3>
                    <br>
                    <p>The store is located at the Burnside entrance to the Burnside site. It was revamped in 2017. 
                    It sells essential supplies on weekend mornings during the spring and early summer months and is for the use of Burnside and Vinery Road tenants. 
                    It is staffed by volunteers.</p>
                    <p>
                        For more information email the
                        <a id="storeemail" title="store@burnsideandvineryallotments.org" href="mailto:store@burnsideandvineryallotments.org"></span>store manager</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'storeemail');"></i>
                    </p>
                </div>
            </div>

            <div class="row mb" style="color: #a0a0a0;">
                <div class="col-12">
                    <h4>
                        Burnside Store Price list 2019 - we are awaiting the price list for 2020
                    </h4>
                    <table style="border-spacing: 15px; border-collapse:separate;">
                        <tbody>
                            <tr><td  valign="top">Grow Organic 50L</td><td  valign="top">&pound;6.00</td></tr>
                            <tr><td  valign="top">Multi-Purpose Compost 75L</td><td  valign="top">&pound;5.50</td></tr>
                            <tr><td  valign="top">Peat Free Organic Compost 60L</td><td  valign="top">&pound;6.00</td></tr>
                            <tr><td  valign="top">Tomorite Giant Deep Grow-Bag</td><td  valign="top">&pound;4.00</td></tr>
                            <tr><td  valign="top">Bird Netting (4m wide - per m)</td><td  valign="top">&pound;1.50</td></tr>
                            <tr><td  valign="top">Standard Insect Mesh1.3mm (3.6m wide - per m)</td><td  valign="top">&pound;4.00</td></tr>
                            <tr><td  valign="top">Fine Insect Mesh 0.6mm (3.6m wide - per m)</td><td  valign="top">&pound;4.50</td></tr>
                            <tr><td  valign="top">MDPE pipe for netting loops (25mm - per m)</td><td  valign="top">&pound;1.00</td></tr>
                            <tr><td  valign="top">Organic Slug Killer 650g</td><td  valign="top">&pound;4.00</td></tr>
                            <tr><td  valign="top">125gsm weed control fabric (4m wide – per m)</td><td  valign="top">&pound;4.00</td></tr>
                            <tr><td  valign="top">Garden twine (plastic)</td><td  valign="top">&pound;2.50</td></tr>
                            <tr><td  valign="top">9 inch weed fabric staples</td><td  valign="top">25p ea</td></tr>
                            <tr><td  valign="top">Tomorite tomato Feed 1lt</td><td  valign="top">&pound;3.50</td></tr>
                            <tr><td  valign="top">Maxicrop Organic Tomato Feed 1lt</td><td  valign="top">&pound;6.25</td></tr>
                            <tr><td  valign="top">Garden Twine (green)</td><td  valign="top">&pound;1.75</td></tr>
                            <tr><td  valign="top">Garden twine (brown)</td><td  valign="top">&pound;2.00</td></tr>
                            <tr><td  valign="top">Extra Thick Bamboo Canes 8ft</td><td  valign="top">&pound;2.50</td></tr>
                            <tr><td  valign="top">Thick Bamboo Canes 8ft</td><td  valign="top">80p ea</td></tr>
                            <tr><td  valign="top">Bamboo Canes 6ft</td><td  valign="top">40p ea</td></tr>
                            <tr><td  valign="top">Bamboo Canes 4ft</td><td  valign="top">25p ea</td></tr>
                            <tr><td  valign="top">Security clutch screws – prevent shed hinge removal</td><td  valign="top">10p ea</td></tr>
                            <tr><td  valign="top">Permanent marker for plant labels</td><td  valign="top">&pound;2.50</td></tr>
                            <tr><td  valign="top">150mm white plant label x10</td><td  valign="top">20p</td></tr>
                            <tr><td  valign="top">17gsm Fleece (1.5m – per m)</td><td  valign="top">20p ea</td></tr>
                            <tr><td  valign="top">30gsm Fleece (3m – per m)</td><td  valign="top">50p ea</td></tr>
                            <tr><td  valign="top">Rock Dust 20kg</td><td  valign="top">&pound;10.00</td></tr>
                            <tr><td  valign="top">Rock Dust 5kg</td><td  valign="top">&pound;3.00</td></tr>
                            <tr><td  valign="top">OSMO PRO 4 Organic fertiliser 1kg</td><td  valign="top">&pound;1.50</td></tr>
                            <tr><td  valign="top">Fish, Blood and Bone 1kg</td><td  valign="top">&pound;1.00</td></tr>
                            <tr><td  valign="top">Chicken Pellets (6X) 1kg</td><td  valign="top">&pound;1.50</td></tr>
                        </tbody>
                    </table>                    
                    
                </div>
            </div>
        </div>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>