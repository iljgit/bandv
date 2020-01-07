<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/blog/newbie/2.jpg);">
            <h1 id="title">The Newbie Experience</h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <h1>New to Burnside (once upon a time)</h1><br><br>
                </div>
                <div class="col-12">
                    <img class="img-thumbnail img-responsive img-pull-right margin" style="width: 30%;" src="/assets/img/blog/newbie/1.jpg"/>
                    Things wouldn’t be the same without our plot now. We started on bonfire night 2016 and have enjoyed every digging, weeding, planting, watering, 
                    harvesting second of it. We were really impressed by the warm welcome and help we got from our “near neighbours”. 
                    Other plot holders helped with temporary shed space for spades and wellies, gifts of slabs for our shed base, unwanted tools and spare plants.
                </div>
                    
                <div class="col-12">
                    <img class="img-thumbnail img-responsive img-pull-left margin" style="width: 30%;" src="/assets/img/blog/newbie/2.jpg"/>
                    We cleared the plot and managed to get rid of a few weeds and dug it over twice before Spring. Then we replanted most things that we found on the plot including rhubarb, strawberries, bulbs and flowers. Three weeks later, life really changed with the arrival of the shed which now is a well-known venue for tea, biccies and fried egg butties.
                </div>
                    
                <div class="col-12"><img class="img-thumbnail img-responsive img-pull-right margin" style="width: 30%;" src="/assets/img/blog/newbie/108.jpg"/>So far there have been surprisingly few disappointments although we lost several soft fruit bushes and the flea beetles have gobbled our radishes, rocket and Pak choi. We’ve been really pleased with our first early potatoes, squashes, beans, chard seedlings found growing wild, black tomatoes and sunflowers. Challenged at first to know what to do with all the spuds and courgettes, we found this simple and tasty recipe for Briam which goes well with anything from roast chicken, baked fish or cheese (click <a href="http://allrecipes.co.uk/recipe/12157/briam--greek-potato-and-courgette-bake-.aspx" target="reipe">here</a>). 
                </div>
                    
                <div class="col-12"><img class="img-thumbnail img-responsive img-pull-left margin" style="width: 30%;" src="/assets/img/blog/newbie/101.jpg"/>After all the hard work we find that there’s no better way to spend an hour or two than watching the frogs in our little pond, our crops growing and the bees busy in the sunflowers.
                </div>
                    
                <div class="col-12"><p><i>Stella, Les &amp; Phil</i></p></div>
                </div>

            </div>
            
        </div><!--container-->
        
        <div class="container">
                                
            <div class="row mb">

                <div class="col-12">
                    <?php echo(getCarousel('/assets/img/blog/newbie')); ?>
                </div>

            </div>

        </div>


         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>