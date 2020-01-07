<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "inc/header.php" ?>
        <?php include "blog/control.php" ?>
        <?php include "gallery/control.php" ?>
        <meta name="description" content="Cambridge’s Burnside and Vinery Rd Allotment Society manages two, well-run allotment sites in the south of the City. Friendly communities and great facilities.">
    </head>
    <body onload="BandV.onload(); BandV.manageBlogs();">
        <?php include "inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(assets/img/blog/header.jpg);">
            <h1 id="title"><span class="title-background">Burnside and Vinery Blog</span></h1>
        </div>

        <div class="container" id="pagebody">
            <div class="row">
                <div class="col-12">
                    Here you can find all sorts of articles from tips to recipes, to news of society members.  Just choose a date or a category to limit the number of blogs shown.
                </div>
            </div>
            <div class="row affix" style="margin-bottom: 20px;">
                <div class="col-12 affix-holder">
                    <form class="form-horizontal">
                        <div class="form-group form-inline">
                            <label for="blogdate" class="">Date&nbsp;</label>&nbsp;
                            <select class="form-control" id="blogdate" onchange="BandV.manageBlogs();"><?php echo(getBlogDateList()); ?></select>

                            <label for="blogcategory" class="" style="margin-left: 20px;">Category&nbsp;</label>&nbsp;
                            <select class="form-control" id="blogcategory" onchange="BandV.manageBlogs();"><?php echo(getBlogCategoryList()); ?></select>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row" style="margin-bottom: 40px; margin-top: 20px;">
                <?php echo(getBlogs()); ?>
            </div>
                            
        </div><!--/container -->

        
        <?php include "inc/footer.php" ?>
    </body>
</html>