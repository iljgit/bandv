<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "inc/header.php" ?>
        <?php include "gallery/control.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include "inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(assets/img/photos/header.jpg);">
            <h1 id="title"><span class="title-background">Photo Albums</span></h1>
        </div>

        <div class="container" id="pagebody">
            <div class="row">
                <div class="col-12">
                    A picture paints a thousand words - and it's always good to talk.  If you have any pictures of your plot, your site or events, please let us have them. 
                    We don't promise to show them all, but we do like to keep up to date with what is going on.
                </div>
            </div>

            <?php echo(getAlbums()); ?>
                            
        </div><!--/container -->

        
        <?php include "inc/footer.php" ?>
    </body>
</html>