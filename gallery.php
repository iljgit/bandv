<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/gallery/control.php" ?>
    </head>
    <body onload="BandV.onload();" class="gallery">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(<?php echo(getGalleryBanner()); ?>);">
            <h1 id="title"><span class="title-background"><?php echo(getGalleryTitle()); ?></span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <?php echo(getGalleryBody()); ?>
                </div>

            </div>

            <div class="row mb">

                <div class="col-12 gallery">
                    <?php echo(getGallery()); ?>
                </div>

            </div>

            
            <?php
                $videos = getGalleryVideos();
                if ($videos) {
                    echo ('<div class="row" style="margin: 30px 0 20px 0">');
                    foreach($videos as $video) {
                        $src = $video['src'];
                        echo ("<div class='col-12'><h3 class='text-center'>{$video['title']}</h3>");
                        echo ("<div class='embed-responsive embed-responsive-16by9'>
                                <video controls><source src='{$src}' type='video/mp4'></video>
                        </div></div>");
                    }
                    echo('</div>');
                }
            ?>
            

            <div class="row mb">

                <div class="col-12">&nbsp;</div>

            </div>            
        </div><!--container-->
	     

         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>