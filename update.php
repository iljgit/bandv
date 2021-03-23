<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/decoupled-document/ckeditor.js"></script>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/header.php" ?>
        <?php
          function geturi($n) {
            // get the parameters
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $ret = $_POST[$n];
            }
            else {
                $ret = $_GET[$n];
            }
            
            $ret = $ret . "";
            
            $ret = str_replace("\n", "<br>", $ret);
            
            return urldecode($ret . "");
          }

          $site = geturi('site');
          $values = readSiteUpdate($site);

          $script = "<script>
            const values = {
          ";

          foreach($values as $key => $value) {
            $val = str_replace("'", "\'", $value);
            $script .= "{$key}: '{$val}',\n";
          }

          $script .= "};
          </script>";

          echo($script);

        ?>
        <script>
        const editors = {};

        function setEditors() {
          let nodes = document.querySelectorAll( '.editor' );
          for (const n of nodes) {
            DecoupledEditor
            .create( n )
            .then( editor => {
                    // console.log( editor );
                    editors[n.getAttribute('id')] = editor;
                    const toolbarContainer = document.querySelector( '#toolbar-' + n.getAttribute('id') );
                    if (toolbarContainer) {
                      toolbarContainer.appendChild( editor.ui.view.toolbar.element );
                    }
            } )
            .catch( error => {
                    console.error( error );
            } );
          }
        }

        function  setValues() {
          for (const key in values) {
            let el = document.getElementById(key);
            if (el) {
              let val = values[key];
              val = val.replace(/<br>/g, '\n');
              if (['dateStr', 'issues', 'pending', 'past', 'planned'].includes(key)) {
                el.innerHTML = val;
              }
              else {    
                el.value = val;
              }
            }
          }
        };

        function updateSite() {
            var doIt = true, mfields = ['username', 'password', 'waitinglist', 'pendingplots'], fields = ['issues', 'planned', 'past'], field, i, 
            msg = document.getElementById('message'), url = 'updatesite.php', delim = '?', fname, button = document.getElementById('submitbutton');
            
            if ($(button).hasClass('disabled')) {
                return;
            }
            
            // check for any missing fields
            for (i = 0; i < mfields.length; i++) {
                field = '#' + mfields[i];
                fname = mfields[i];
                let val = ['issues', 'past', 'planned'].includes(fname) ? editors[fname].getData() : $(field).val();
                val = val.trim();
                if (val.length === 0) {
                    $(field).parent().addClass('has-error');
                    doIt = false;
                }
                else {
                    $(field).parent().removeClass('has-error');
                    url += delim + fname + '=' + encodeURIComponent(val);
                    delim = '&';
                }
            }
            
            // can we send it
            if (doIt) {
                // add in the other fields
                for (i = 0; i < fields.length; i++) {
                    field = '#' + fields[i];
                    fname = fields[i];
                    $(field).parent().removeClass('has-error');
                    let val = ['issues', 'past', 'planned'].includes(fname) ? editors[fname].getData() : $(field).val();
                    url += delim + fname + '=' + encodeURIComponent(val.trim());
                    delim = '&';
                }
                
                $.ajax({
                    type: "GET",
                    url: url,
                    data: ''
                })
                .done(function(data){
                  if (data === 'OK') {
                    const now = new Date();
                    const year = now.getFullYear();
                    const day = now.getDate();
                    const month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'][now.getMonth()];
                    document.getElementById('dateStr').innerHTML = `${day} ${month} ${year}`;
                    PFModal.showStaticPopup({type: 'siteupdateok'});
                    
                  }
                  else {
                    PFModal.showStaticPopup({type: 'siteupdatefail', msg: data});
                  }
                });
            }
            else {
                PFModal.showStaticPopup({type: 'siteupdatefail'});
                $(msg).addClass('text-danger');
            }
        };
    </script>
    </head>
    <body onload="BandV.onload(); PFModal.init(); setValues(); setEditors();">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/menu.php" ?>

        <!-- Banner image -->
        <div class="container-fluid parallax banner" style="background-image: url(/assets/img/update/header.jpg); background-position: bottom center">
            <h1 id="title"><span class="title-background">Update your site details</span></h1>
        </div>

        <div class="container" id="pagebody">
                                
            <div class="row mb" id="home">

              <div class="col-12">
                <h4>Record updates for your site</h4>
                <p><i>Last updated <span id="dateStr"></span></i></p>
                <div class="hline"></div>
                  <p class="large-text">Fields highlighed in <span style="color: red">red</span> are mandatory.</p>
                  <span role="form">
                    <div class="form-group required">
                      <label for="username">Your username</label>
                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                    </div>
                    <div class="form-group required">
                      <label for="password">Your password</label>
                      <input type="password" class="form-control" id="password"  required>
                    </div>

                    <div class="form-group required">
                      <label for="waitinglist">Number on waiting list</label>
                      <input type="text" class="form-control" id="waitinglist" placeholder="Number on waiting list" required>
                    </div>

                    <div class="form-group required">
                      <label for="pendingplots">Plots being prepared</label>
                      <input type="text" class="form-control" id="pendingplots" placeholder="Number of plots being prepared" required>
                    </div>

                    <div class="form-group">
                      <label for="planned">Planned activities</label>
                      <div id="toolbar-planned"></div>
                      <div class="form-control editor" id="planned" placeholder="Planned activities" style="width: 100%; height: 150px; border: 1px solid silver;"></div>
                    </div>

                    <div class="form-group">
                      <label for="past">Recent activities</label>
                      <div id="toolbar-past"></div>
                      <div class="form-control editor" id="past" placeholder="Recent activities" style="width: 100%; height: 150px; border: 1px solid silver;"></div>
                    </div>

                    <div class="form-group">
                      <label for="issues">Site issues</label>
                      <div id="toolbar-issues"></div>
                      <div class="form-control editor" id="issues" placeholder="Site issues" style="width: 100%; height: 150px; border: 1px solid silver;"></div>
                    </div>

                    <button title="Click to send your details" id="submitbutton" onclick="updateSite();" class="btn btn-success">Submit</button>
                    <br>
                    <br>
                    <h4 id="message"></h4>
                    <br>
                  </span>
              </div>
	 		

        </div>

      </div>
	 
	 <!-- MODAL -->
	 <div class="container">
            <div class="modal fade" id="modaldialogue" role="dialog">
                <div class="modal-dialog">		  
                    <div class="modal-content">
                            <div class="modal-header">
                                <button id="modalcross" type="button" class="close" data-dismiss="modal" style="color: red; opacity: 0.5;">×</button>
                                <h4 class="modal-title" id="modaltitle">Modal Header</h4>
                            </div>
                            <div class="modal-body" id="modalbody">
                            </div>
                            <div class="modal-footer" id="modalfooter">
                                <div class="row">
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal" id="modalbutton1">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default center-block" data-dismiss="modal" id="modalbutton2">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default center-block" data-dismiss="modal" id="modalbutton3">Close</button>
                                        </div>
                                        <!--div class="col-xs-1">&nbsp;</div-->
                                        <div class="col-xs-3">
                                                <button type="button" class="btn btn-default pull-right" data-dismiss="modal" id="modalbutton4">Close</button>
                                        </div>
                                </div>
                            </div>
                    </div>			
                </div>
            </div>
	</div>
	
	<!-- MODAL POPUP -->
	<div class="container">
	  <div class="modal fade" id="popupdialogue" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" id="popupheader">
            <h4 class="modal-title" id="popupheadercontent">Modal Header</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          <div class="modal-body" id="popupbody">
            <p class="large-text">Some text in the modal.</p>
          </div>
          <div class="modal-footer" id="popupfooter">
            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
          </div>
        </div>
      
      </div>
	  </div>
	</div>
	
	<div class="modal-backdrop fade in" style="display: none;"></div>

	     

         <?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/footer.php" ?>
     </body>
 </html>