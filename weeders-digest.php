<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <?php
            $binfo = readSiteUpdate('burnside');
            $vinfo = readSiteUpdate('vinery');

            $bupdate = "(Awaiting update)";
            if (!$binfo['default']) {
                $bupdate = "(Updated {$binfo['dateStr']})";
            }

            $vupdate = "(Awaiting update)";
            if (!$vinfo['default']) {
                $vupdate = "(Updated {$vinfo['dateStr']})";
            }
        ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/header2.jpg); background-position: center bottom;">
            <h1 id="title"><span class="title-background">Weeder's Digest</span></h1>
        </div>

        <div class="container" id="pagebody">

            <div class="row mb mt-5 xjustify-content-md-center" id="home">
                <div class="col-12 mb-3">
                    <h2>Quick links</h2>
                    Links marked as <span style="color: darkred">external</span> are not maintained by the society and you follow them at your own risk.
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="burnside-site-update.php">
                        <div class="image" style='background-image: url(assets/img/index/burnside.jpg)'></div>Burnside site update <span class="updated"><?php echo($bupdate); ?></span>
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="vinery-site-update.php">
                        <div class="image" style='background-image: url(assets/img/index/vinery.jpg)'></div>Vinery site update <span class="updated"><?php echo($vupdate); ?></span>
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="society.php#committee">
                        <div class="image" style='background-image: url(/assets/img/society/committee.jpg)'></div>The society committee
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="society.php#documents">
                        <div class="image" style='background-image: url(/assets/img/society/documents.jpg)'></div>Important documents
                    </a>
                </div>
                
                <div class="col-12 col-md-6 quick">
                    <a href="blog.php">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/blog.jpg)'></div>Blogs - tips, recipes, ideas
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="photos.php">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/photos.jpg)'></div>Photo galleries
                    </a>
                </div>

                <!-- <div class="col-12 col-md-6 quick">
                    <a href="#calendar">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/calendar.jpg)'></div>Calendar
                    </a>
                </div> -->

                <!-- <div class="col-12 col-md-6 quick">
                    <a href="#noticeboard">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/noticeboard.jpg)'></div>Noticeboard
                    </a>
                </div> -->

                <div class="col-12 col-md-6 quick">
                    <a href="#store">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/store.jpg)'></div>The store
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="community.php">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/community.jpg)'></div>Community projects
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="#sustainable">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/cambridge-sustainable-food.jpg)'></div>Cambridge Sustainable Food
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="#links">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/links.jpg)'></div>Links to external sites
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="https://www.nhs.uk/conditions/coronavirus-covid-19" target="_blank">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/nhs.png)'></div>NHS Covid advice <span style="color: darkred; font-size: 0.8rem;">(external)</span>
                    </a>
                </div>

                <div class="col-12 col-md-6 quick">
                    <a href="https://www.nsalg.org.uk/news/covid19-information/" target="_blank">
                        <div class="image" style='background-image: url(/assets/img/weeders-digest/nsalg.jpg)'></div>NSALG Covid advice <span style="color: darkred; font-size: 0.8rem;">(external)</span>
                    </a>
                </div>

            </div>

            <?php echo(getWhatsNewList()); ?>
                                
            <div class="row mb mt-5 justify-content-md-center" id="xhome">

                <div class="col-12 mb-5 mt-2" style="border: 2px solid green; border-radius: 10px; padding: 10px;">
                    <img title="Joan - webmaster" src="/assets/img/weeders-digest/joan.jpg" class="img img-thumbnail img-responsive margin pull-right" style="width: 25%;">
                    <h2>Welcome to your Society site!</h2>
                    <p>For many years, <a title="Click to here to visit a page dedicated to Trevor Taylor" href="trevor-taylor.php">Trevor Taylor</a>, the Society's Honorary President, produced a regular allotment newsletter called Weeder’s Digest, 
                    which usually included growing tips, general allotment news and recipes.  Here is our equivalent.</p>
                    <p>
                    This page is an at-a-glance view of what is new, what is happening and, hopefully, what is interesting in the worlds of allotmenteering and of the Society.
                    If there is anything you think we should be talking about, or anything you would like to contribute, let us know.
                    </p>
                    <p>Follow the links on this page to keep up to date with what is going, look at our photo albums, get growing and cooking ideas, check out the store,
                    and much more.</p>
                    <p>Let us know what you think about the site and any suggestions you have about content.  Better still, send us an article or 
                    some photos.
                    </p>
                    <p>Email me, Joan, at <a id="webmasteremail" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                    <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'webmasteremail');"></i>
                    </p>
                </div>

                <!--?php echo(getWhatsNew()); ?-->

                <div  id="sustainable" class='col-12 col-md-4'><hr></div>

            </div>

            <div class="row mb mt-5" style="border: 2px solid green; border-radius: 10px; padding: 10px;">

                <div class="col-12">
                    <h2>Cambridge Sustainable Food</h2>
                    <p>
                        <img src="/assets/img/weeders-digest/cambridge-sustainable-food.jpg" class="img img-thumbnail float-right w-25 ml-2" alt="Cambridge Sustainable Food" />
                        <blockquote>Cambridge Sustainable Food is an innovative and growing partnership of public, private and community organisations in Cambridge 
                        and the surrounding villages. We work with each other to promote a vibrant local food system all along the supply chain and in our community.</blockquote>
                    </p>

                    <p>
                    CSF welcomes your surplus fruit and veg on behalf of the organisations they represent to keep their services running and support those struggling to access food. 
                    They are running their ‘Grow a Row’ campaign again this year. Click <a href="https://cambridgesustainablefood.org/allotmentvegdonations" target=_blank" >here</a> for more information.
                    </p>

                </div>

                <div  id="beanpoles" class='col-12 col-md-4'>&nbsp;</div>

            </div>

            <div class='row mb justify-content-md-center'><div class='col-12 col-md-4'><hr/></div></div>

            <!-- <div class="row mb">

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/weeders-digest/garden-jobs.jpg)'>Jobs to do</div>
                        <div class="card-body"><p>NSALG produces a list of jobs to think about each month:</p><?php echo(getNSALGJobs()); ?></div> 
                        <div class="card-footer">&nbsp;</div>
                    </div>
                </div>

            </div> -->
            
        </div><!--container-->

        <!-- <div id="calendar" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/calendar.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Calendar</span></h2>
        </div> -->

        <!-- Calendar -->
        <!-- <div class="container">
            <div class="row mb calendar-row">
                <div class="col-12">
                    <p>If you have any dates you would like us to put in the diary, email the 
                    <a id="webmasteremail2" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                    <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'webmasteremail2');"></i>
                    </p>
                </div> -->

                <!-- <div class="col-12 calendar-entry">
                    <table>
                        <tr>
                            <td><i class="far fa-calendar"></i></td>
                            <td>The Society's store at Burnside is open for online orders only. 
                                Click <a href="#store" title="Click to see store details">here</a> for more details.</td>
                        </tr>
                    </table>
                </div> -->

                <!--div class="col-12 calendar-entry">
                    <p><img src="/assets/img/weeders-digest/calendar/seed-potato.jpg" class="img img-thumbnail img-responsive img-pull-right" style="width: 25%;">
                        <span class="date">Sunday 26<sup>th</sup> January 10:00 - 12:00</span><br><span class="title">Seed Potato Collection</span>
                    </p>
                    <p>
                        Seed potatoes are due to be with us on Monday Jan 20th.  There will be an order collection morning, from the Burnside store on Sunday 26th 10:00 – 12:00.
                    </p>
                </div-->


            <!-- </div>
        </div> -->

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
                    <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'webmasteremail3');"></i>
                    <br><hr>
                    </p>
                </div>
            </div>

            <div class="row mb">

                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    
                    <img src="/assets/img/weeders-digest/links/cambridge-sustainable-food.jpg" class="img-thumbnail pull-right" style="height: 150px; margin-left: 10px; margin-bottom: 5px;" />
                    <h4>Cambridge Sustainable Food</h4>
                    Cambridge Sustainable Food welcomes your surplus fruit and veg to keep its services running and support those struggling to access food.
                    <br>
                    <a title="Visit the CSF web site" href="https://cambridgesustainablefood.org/allotmentvegdonations" target="ext">
                        <i>cambridgesustainablefood.org</i>
                    </a>

                    
                </div>

                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    
                    <img src="/assets/img/weeders-digest/links/childrensweek.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 5px;" />
                    <h4>Gardening for children</h4>
                    It can be difficult to keep the children entertained when you are on your plot.  However, this site is jam-packed with fun activities for little ones - 
                    guaranteed to keep them busy.<br>
                    <a title="Visit the Childrens Gardening Week site" href="http://www.childrensgardeningweek.co.uk/fun-things-to-do" target="ext">
                        <i>childrensgardeningweek.co.uk</i>
                    </a>

                    
                </div>

                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    
                    <img src="/assets/img/weeders-digest/links/bara_thumb2.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 5px;" />
                    <h4>Birdwood Area Residents' Association (BARA)</h4>
                    A really informative site about Birdwood Road in the South Of Cambridge, and the surrounding area - including Burnside.<br>
                    <a title="Visit the BARA web site at https://www.baracambridge.org" href="https://www.baracambridge.org" target="ext"><i>baracambridge.org</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                
                    <img src="/assets/img/weeders-digest/links/tvgarden.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 10px;" />
                    <h4>Allotment &amp; Gardens - Advice and useful information</h4>
                    Tips, tricks, self-help videos, recipes and more.  It includes an active forum -useful now that our own forum is off-line.<br><br>
                    <a title="Visit the allotment garden web site at http://www.allotment-garden.org/" href="http://www.allotment-garden.org/" target="ext"><i>allotment-garden.org</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                
                    <img src="/assets/img/weeders-digest/links/carrots.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 10px;" /><h4>Everything you always wanted to know about carrots, and more besides</h4>
                    Allegedly the world's first virtual museum of the carrot - and who are we to judge?<br><br>
                    <a title="Visit the carrot museum at http://www.carrotmuseum.co.uk/" href="http://www.carrotmuseum.co.uk/" target="ext"><i>carrotmuseum.co.uk</i></a>

                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">   
                    <h4>The National Allotment Society</h4>
                    <p><img src="/assets/img/weeders-digest/links/nsalg.gif" class="img-thumbnail pull-right" style="width: 50%; margin-left: 10px; margin-bottom: 10px;" />
                    The NSALG has an active site with all sorts of useful tips and advice.<br><br>
                    <a title="Visit NSALG at https://www.nsalg.org.uk/growing-advice/" href="https://www.nsalg.org.uk/growing-advice/" target="ext"><i>nsalg.org.uk</i></a>
                    </p>
                </div>
                    
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    <p><img src="/assets/img/weeders-digest/links/thirsty.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 10px;" /><h4>Two Thirsty Gardeners</h4>
                    Digging and swigging through the seasons.<br><br>
                    <a title="Visit the Two Thirsty Gardener's website at http://twothirstygardeners.co.uk/" href="http://twothirstygardeners.co.uk/" target="ext"><i>twothirstygardeners.co.uk</i></a>
                    </p>
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    <p><img src="/assets/img/weeders-digest/links/organicsite.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 10px;" /><h4>No Dig Organic Gardening</h4>
                    "Charles is an acclaimed innovator of no dig, organic growing since 1983, and since 2003 of new ways to crop salad leaves. His original, weed free methods give superb results in both small and large areas...."<br><br>
                    <a title="Learn all about No Dig at https://www.charlesdowding.co.uk/" href="https://www.charlesdowding.co.uk/" target="ext"><i>charlesdowding.co.uk</i></a>
                    </p>
                    
                </div>
                
                <div class="col-sm-12 col-md-6" style="padding-bottom: 10px; padding-top: 20px;">  
                    <p><img src="/assets/img/weeders-digest/links/blight.jpg" class="img-thumbnail pull-right" style="height: 100px; margin-left: 10px; margin-bottom: 10px;" /><h4>Blight Watch</h4>
                    Watching for and dealing with blight - recommended by Andy Kurdynowski.  
                    It’s free to register, and if you do you will get email warnings when there is a likelihood, or indeed instances, 
                    of blight in your chosen postcode area.<br><br>
                    <a target="_blank" title="Importsnt Blight Watch information at http://www.blightwatch.co.uk/" href="http://www.blightwatch.co.uk/">blightwatch.co.uk</a>
                    </p>
                </div>
            </div>

        </div>

        <!-- <div id="noticeboard" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/noticeboard.jpg); margin-top: 60px;">
            <h2 id="title"><span class="title-background">Notices</span></h2>
        </div -->

        <!-- Noticeboard -->
        <!-- <div class="container" style="margin-bottom: 40px;">
            <div class="row mb">
                <div class="col-12">
                    <p>This is the place for all your allotment-related needs and offers. These can be anything from help, to equipment, to sheds and greenhouses, through to plants and produce.</p>
                    <p>Email the 
                        <a id="webmasteremail4" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org">webmaster</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'webmasteremail4');"></i> 
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
               
            </div>

	    </div> -->

        <div id="store" class="container-fluid parallax banner" style="background-image: url(/assets/img/weeders-digest/store2.jpg); margin-top: 80px;">
                <h2 id="title"><span class="title-background">The Store - 2021</span></h2>
        </div>

        <!-- Links -->
        <div class="container">
            <div class="row mb">
                <div class="col-12">
                    <p>The Store is located at the Burnside entrance to the Burnside site. It was revamped in 2017.</p>
                    <p>The Store is open 10 - 12 Saturdays and Sundays in May, and Saturdays only in June and July.</p>
                    <p>If possible, please pay for items online - details available from the store.</p>
                </div>
            </div>

            <div class="row mb">
                <div class="col-12">
                    <h4>
                        Price list 2021
                    </h4>
                    <table style="border-spacing: 15px; border-collapse:separate;">
                        <tbody>
                        <!-- <tr class="sold"> -->
                            <tr ><td>Grow Organic 50L</td><td >&pound;7.50</td></tr>
                            <tr><td >Blended Farmyard Manure 40L</td><td >&pound;5.00</td></tr>
                            <tr ><td>Clover Multi-Purpose Compost 75L</td><td >&pound;5.50</td></tr>
                            <tr ><td>Melcourt All Purpose Peat Free Compost 50L</td><td >&pound;6.50</td></tr>
                            <tr ><td>Clover 4 Plant Grow-Bag</td><td >&pound;3.50</td></tr>
                            <tr><td >Miracle Gro All Purpose Liquid Plant Food 1L</td><td >&pound;4.00</td></tr>
                            <tr><td >Bird Netting (4m wide - per m)</td><td >&pound;1.50</td></tr>
                            <tr ><td>Standard Insect Mesh 1.3mm (3.6m wide - per m)</td><td >&pound;4.00</td></tr>
                            <tr ><td>Fine Insect Mesh 0.6mm (3.6m wide - per m)</td><td >&pound;5.00</td></tr>
                            <tr><td >MDPE pipe for netting loops (25mm - per m)</td><td >&pound;1.00</td></tr>
                            <tr><td >125gsm weed control fabric (4m wide – per m)</td><td >&pound;4.00</td></tr>
                            <tr><td >Garden twine (plastic)</td><td >&pound;2.50</td></tr>
                            <tr><td >6 inch weed fabric staples</td><td >20p ea</td></tr>
                            <tr><td >Tomorite tomato Feed 1L</td><td >&pound;3.50</td></tr>
                            <tr><td >Maxicrop Organic Tomato Feed 1L</td><td >&pound;6.25</td></tr>
                            <tr><td>Garden Twine (green)</td><td >&pound;1.75</td></tr>
                            <tr><td >Garden Twine (brown)</td><td >&pound;2.00</td></tr>
                            <tr ><td>Extra Thick Bamboo Canes 8ft</td><td >&pound;2.50 ea</td></tr>
                            <tr><td >Thick Bamboo Canes 8ft</td><td >80p ea</td></tr>
                            <tr><td >Bamboo Canes 6ft</td><td >40p ea</td></tr>
                            <tr><td >Bamboo Canes 4ft</td><td >25p ea</td></tr>
                            <tr><td >Permanent marker for plant labels</td><td >&pound;2.50</td></tr>
                            <tr><td >150mm white plant label x10</td><td >20p</td></tr>
                            <tr><td >17gsm Fleece (1.5m – per m)</td><td >20p</td></tr>
                            <tr><td >Rock Dust 20kg</td><td >&pound;10.00</td></tr>
                            <tr><td >Rock Dust 5kg</td><td >&pound;3.00</td></tr>
                            <tr><td >OSMO PRO 4 Organic Fertiliser 1kg</td><td >&pound;1.50</td></tr>
                            <tr><td >Fish, Blood and Bone 1kg</td><td >&pound;1.00</td></tr>
                            <tr><td >Chicken Pellets (6X) 1kg</td><td >&pound;1.50</td></tr>
                        </tbody>
                    </table>                    
                    
                </div>
            </div>
        </div>
        

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>