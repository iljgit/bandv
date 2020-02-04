<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
    </head>
    <body onload="BandV.onload();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/society/header.jpg); bacground-position: center top;">
            <h1 id="title"><span class="title-background">The Society</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

                <div class="col-12">
                    <p>
                    The Burnside and Vinery Road Allotment Society comprises every single allotment holder and associate member.  The Committee is made up of 
                    a dedicated team of volunters who put in a lot of time to make sure the Society runs smoothly and everyone can enjoy facilities which are the 
                    envy of many other associations.  If you feel you could contribute in any way, please don't hesitate to contact a member of the committee.
                    </p>
                </div>

            </div>
            
        </div>

        <div class="container">
            <div class="row mb">
                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/society/documents.jpg)'>Important Documents</div>
                        <div class="card-body">There aren't all that many documents to read, but there are some very important ones.  Please make sure you keep up to date.</div> 
                        <div class="card-footer"><a title="Click for important documents" href="#documents" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 blog-summary-card mx-auto">
                    <div class="card">
                        <div class='card-header' style='background-image: url(/assets/img/society/committee.jpg)'>The Committee</div>
                        <div class="card-body">Find out who is helping organise and run things on your behalf.</div> 
                        <div class="card-footer"><a title="Click for more about the committee" href="#committee" class='btn btn-success stretched-link'>More...</a></div>
                    </div>
                </div>

            </div>
        </div>

        <div id="documents" class="container-fluid parallax banner" style="background-image: url(/assets/img/society/documents.jpg); margin-top: 60px;">
            <h1 id="title"><span class="title-background">Important Documents</span></h1>
        </div>

        <div class="container">
            <div class="row mb">
                <div class="col-12">
                    <p>
                    Periodically, we like to keep the City Council up-to-date with what has been happening on our two sites.  
                                The following link will take you to the summary of a document which Penny sent in 2019 detailing 
                                the major highlights of the last ten years.
                    </p>
                    <p>
                        <a href="assets/docs/council-2019.pdf" target="doc" title="Click for the summary Penny sent to the Council in 2019">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p><span id="gdpr">GDPR (General Data Protection Regulation)</span>
                    </p>
                    <p>
                                <a href="assets/docs/Burnside and Vinery Allotments GDPR.pdf" target="doc" title="Click for our GDPR info">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p>Society Rules and Regulations
                    </p>
                    <p>
                                <a href="assets/docs/Allotment Rules.pdf" target="doc" title="Click for the Society's rules and regulations">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p>Constitution of the Burnside and Vinery Road Allotment Society
                    </p>
                    <p>
                                <a href="assets/docs/Constitution_15-10-2015.pdf" target="doc" title="Click for the Society's constitution">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p>Burnside Burn-bin Regulations
                    </p>
                    <p>
                                <a href="assets/docs/BurnBin.pdf" target="doc" title="Click for Burnside's burnbin regulations">
                                <button class="btn btn-xs btn-primary" style="width:90px">
                                    PDF
                                </button></a>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p>AGM Minutes
                    </p>
                    <p>
                                <select class="form-control inline" id="agm" style="width: auto; display: inline-block;">
                                    <option value="assets/docs/2019 AGM.pdf" selected>2019</option>
                                    <option value="assets/docs/2018 AGM.pdf">2018</option>
                                    <option value="assets/docs/2017 AGM.pdf">2017</option>
                                    <option value="assets/docs/2016 AGM.pdf">2016</option>
                                </select>&nbsp;
                                <button title="Click for a copy of the AGM minutes" class="btn btn-xs btn-primary inline" onclick="BandV.showFromSelect('agm');">PDF</button>
                    </p>
                    <hr>
                </div>

                <div class="col-12">
                    <p>
                        Society Accounts
                    </p>
                    <p>
                                <select class="form-control inline" id="accounts" style="width: auto; display: inline-block;">
                                    <option value="assets/docs/accounts2017.pdf" selected>2017</option>
                                </select>&nbsp;
                                <button title="Click for a copy of the Society's accounts" class="btn btn-xs btn-primary inline" onclick="BandV.showFromSelect('accounts');">PDF</button>
                    </p>
                    <hr>
                </div>

            </div>
        </div>

        <div id="committee" class="container-fluid parallax banner" style="background-image: url(/assets/img/society/committee.jpg); margin-top: 60px;">
            <h1 id="title"><span class="title-background">Your Committee</span></h1>
        </div>

        <div class="container">
        <div class="row mb">
                <div class="col-xs-12  col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Chair</h4><i>Penny Henderson - Burnside</i></p>
                    <blockquote class="blockquote">
                        <img title="Penny - Chair" class="img img-responsive img-rounded img-thumbnail pull-right margin" style="max-width: 40%;" src="/assets/img/society/committee/penny.jpg"/>
                        I took on my plot in 2012, 
                            I think, as a complete novice vegetable grower, and through regular and intensive effort, it is quite productive.<br>
                            I joined the committee in 2013.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="chairemail" title="chair@burnsideandvineryallotments.org" href="mailto:chair@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;chair</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'chairemail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6"  style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vice chair and Burnside site co-manager</h4><i>Andy Kurdynowski - Burnside</i></p> 
                    <blockquote class="blockquote">
                        <img title="Andy - Vice-chair, Store Manager, and Burnside Site Manager" class="img margin img-responsive img-rounded thumbnail-lg pull-right" style="max-width: 40%;" src="/assets/img/society/committee/andy.jpg"/>
                        I’ve had my plot on Burnside for about 15 years, starting as a complete allotment novice, and have been a member of the committee for much of that time. I am one of the two Burnside site managers, often spending too much time maintaining the site and not enough working my plot, but I do get enjoyment from both.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="viceemail" title="burnsidesitemanager@burnsideandvineryallotments.org" href="mailto:burnsidesitemanager@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;burnsidesitemanager</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'viceemail');"></i>
                    </p>
                </div>
            </div>

            <div class="row mb" style="margin-bottom: 10px;">
                <div class="col-xs-12 col-md-6">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Secretary, Treasurer and Burnside site co-manager</h4><i>Matthew Whitelegg - Burnside</i></p>
                    <blockquote class="blockquote">
                        <img title="Matthew - Treasurer, Secretary, and Burnside Site Manager" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/mattheww.jpg"/> 
                        I started on the allotment in the Spring of 2009. Since then we have enjoyed abundant crops of bindweed and mare’s tail. As well as tending the plot I have the role of Burnside site manager along with Andy K. Over the years this has involved letting out plots to new tenants and generally working on the site as a whole.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="treasureremail" title="treasurer@burnsideandvineryallotments.org" href="mailto:treasurer@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;treasurer</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'treasureremail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Vinery site manager</h4><i>Barry South - Vinery</i></p>
                    <blockquote class="blockquote">
                        <img title="Barry - Vinery Manager" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/barry.jpg"/> 
                        I’ve had a plot on the Vinery site since 2004 growing mostly fruit and veg that you can’t find easily in the supermarkets or that are just better eaten fresh. 
                        I’m keen to both reclaim the real definition of fresh and minimise food miles. 
                        Along with Alex and Suzy, I’m responsible for the management of the Vinery site.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="vineryemail" title="vinery@burnsideandvineryallotments.org" href="mailto:vinery@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;vinery</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'vineryemail');"></i>
                    </p>
                </div>
                
            </div>
            <div class="row mb" style="margin-bottom: 10px;">
                <div class="col-xs-12 col-md-6">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Webmaster</h4><i>Joan Bullock-Anderson - Burnside</i><br></p>
                    <blockquote class="blockquote">
                    <img title="Joan - webmaster" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/joan.jpg"/> 
                    I have had a half plot at Burnside since 2012. I still feel like a bit of a novice but I usually have the satisfaction of a glut 
                    from at least one crop per season. Anyone who wants to grow Jerusalem artichokes, please just ask!<br><br>
                    I joined the Committee in 2016 and currently have responsibility for maintenance of the website.
                    </blockquote>
                    <p class="large-text text-center">
                        <a id="webmasteremail" title="webmaster@burnsideandvineryallotments.org" href="mailto:webmaster@burnsideandvineryallotments.org"><i class="fas fa-envelope"></i>&nbsp;webmaster</a> 
                        <i title="Click to copy the email address to the clipboard" class="fas fa-clipboard" style="cursor: pointer; color: grey;" onclick="BandV.copyAddressToCB(this, 'webmasteremail');"></i>
                    </p>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Committee member</h4><i>Alex Considine Tong - Vinery</i></p>
                    <blockquote class="blockquote">
                    <img title="Alex - Committee Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/alexandra-tong.jpg"/> 
                    I have a half plot at Vinery which I took over in 2018 when it was covered in 6ft-tall weeds, and I joined the committee in 2019. 
                    I've been steadfastly growing veggies wherever I could since I was a child - especially radishes, lettuce and potatoes - 
                    and I love nothing more than pottering around the plot, looking for jobs to do and just enjoying being outside. 
                    </blockquote>
                </div>
                               
            </div>
            
            <div class="row mb" style="margin-bottom: 10px;">
                
                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Committee member</h4><i>Maxim Scheremetjew - Burnside</i></p>
                    <blockquote class="blockquote">
                    <img title="Maxim - Committe Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/max.jpg"/> 
                    I got a half plot for my partner's birthday in 2015 at Burnside, because we both love gardening and we got sick of starting from scratch every time we had to move house. Since then we've loved spending time outside on the plot, showing our two young kids how to grow different sorts of veggies. I joined the committee in 2017 to share my views on all the different topics with a key focus on the website.
                    </blockquote>
                </div>

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Committee member</h4><i>John McGill - Burnside</i></p>
                    <blockquote class="blockquote">
                        <img title="John - Committee Member" class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/johnmcgill.jpg"/>
                    I've had a plot at Burnside since about 2010 and have been on the committee since 2014. I've always found it a very friendly environment, with great collaboration among all other lot-holders.
                    </blockquote>
                </div>

            </div>
            <div class="row mb">                        

                <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                    <p style="margin-bottom: 10px;"><h4 class="text-primary">Committee member (non-voting)</h4><i>Suzy Ashworth - Associate member</i></p>
                    <blockquote class="blockquote">
                    <img  class="img margin img-responsive img-rounded img-thumbnail pull-right" style="max-width: 40%;" src="/assets/img/society/committee/suzy-ashworth.jpeg"/>
                    I joined the committee in 2019 as an associate member as I currently look after a small plot for a friend. 
                    I am one of those unusual people who loves globe artichokes! 
                    I also like growing flowers and unusual vegetables - anything that’s pretty or tasty, and preferably both.
                    </blockquote>
                </div>

            </div>

        </div>


         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>