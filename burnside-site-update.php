<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "inc/header.php" ?>
        <?php
            $info = readSiteUpdate('burnside');
        ?>
    </head>
    <body onload="BandV.onload();">
        <?php include "inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(assets/img/index/burnside.jpg); background-position: bottom center;">
            <h1 id="title"><span class="title-background">Burnside Site Update</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">
                <div class="col-12" style="padding-bottom: 20px;">
                    <h2>Here is the latest news from the Burnside site manager<br><i style="font-size: 60%;">Updated <?php echo($info['dateStr']); ?> </i></h2>
                </div>

                <div class="col-12" style="padding-bottom: 20px;">
                    <h4 style="color: blue;">Plots</h4>
                    As at <?php echo($info['dateStr']); ?> there <?php echo($info['waitinglist'] === 1 ? 'was one person' : 'were ' . $info['waitinglist'] . ' people'); ?> 
                    on the waiting lists and <?php echo($info['pendingplots'] === 1 ? 'one plot' : $info['pendingplots'] . ' plots'); ?> being prepared for letting.
                </div>

                <div class="col-12" style="padding-bottom: 20px;">
                    <h4 style="color: blue;">What's coming up?</h4>
                    <?php echo($info['planned']); ?>
                </div>

                <div class="col-12" style="padding-bottom: 20px;">
                    <h4 style="color: blue;">What's happened recently?</h4>
                    <?php echo($info['past']); ?>
                </div>

                <div class="col-12" style="padding-bottom: 20px;">
                    <h4 style="color: blue;">Site issues</h4>
                    <?php echo($info['issues']); ?>
                </div>

                <div class="col-12" style="padding-bottom: 20px;">
                    <h4 style="color: blue;">Site managers</h4>
                    <p>Burnside has two site managers: Andy Kurdynowski and Matthew Whitelegg.</p>
                    <p>If you have any thoughts, questions or suggestions, or you would like to get involved with their activities on the site, you can email them at 
                        <a id="sitemanager" title="burnsidesitemanager@burnsideandvineryallotments.org" href="mailto:burnsidesitemanager@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;burnsidesitemanager</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-copy" onclick="BandV.copyAddressToCB(this, 'sitemanager');"></i>
                    </p>
                </div>

                <div class="col-12  d-flex justify-content-around">
                    <figure class="figure">
                        <img src="assets/img/committee/andy.jpg" class="figure-img img-fluid rounded" alt="Andy Kurdynowski"  style="height: 250px;">
                        <figcaption class="figure-caption text-center">Andy Kurdynowski</figcaption>
                    </figure>

                    <figure class="figure">
                        <img src="assets/img/committee/mattheww.jpg" class="figure-img img-fluid rounded" alt="Matthew Whitelegg"  style="height: 250px;">
                        <figcaption class="figure-caption text-center">Matthew Whitelegg</figcaption>
                    </figure>
                </div>
            </div>
	 		
                            
         </div><!--/container -->

        <?php include "inc/footer.php" ?>
    </body>
</html>