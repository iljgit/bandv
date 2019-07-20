<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Important dates in the Burnside and Vinery allotment society calendar.  Events, volunteering days, store openings, and burn-bins, and a link to the BBC site for monthly jobs.">
    <meta name="author" content="">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1000000">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Allotment society calendar - Burnside and Vinery Cambridge</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>

    <!-- Custom styles for this template -->
    <style>
        <?php
            $page = file_get_contents('assets/css/style.css');
            echo $page;
        ?>
    </style>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fullcalendar.min.css" rel="stylesheet">
    <link href="assets/css/fullcalendar.print.css" media="print"  rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <!--script src="assets/js/events.js"></script>
    <script src="assets/js/news2.js"></script-->
    <script>
        <?php
            $page = file_get_contents('assets/js/events.js');
            echo $page;
        ?>
    </script>
    <script>
        <?php
            $page = file_get_contents('assets/js/news2.js');
            echo $page;
        ?>
    </script>
    
    <?php
        $url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}/{$_SERVER['REQUEST_URI']}";
        $query = parse_url($url, PHP_URL_QUERY);
        parse_str($query, $params);
        
        $op = '<script>var urlparams = {';
        foreach ($params as $key => $value) {
            $op .= '"' . $key . '": "' . $value . '", ';
        }
        $op .= '};</script>';
        
        echo($op);
    ?>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--script src="assets/js/modernizr.js"></script-->
    <script>
        $(document).ready(function() {
                var evs = events.events, event, i, d = new Date(), y, m, lookups, defDate = new Date();
                
                lookups = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                
                // add in the NSA
                d.setDate(1, 0, 0, 0, 0);
                d.setMonth(d.getMonth() - 11);
                
                for (i = -11; i < 13; i++) {
                    m = lookups[d.getMonth()];
                    
                    event = {
                        id: 'NSA' + i,
                        title: 'National Allotment Society - Jobs for ' + m + '...',
                        start: d.toString(),
                        forceURL: 'https://www.nsalg.org.uk/growing-advice/monthly-advice/' + m.toLowerCase() +'/',
                        allDay: true
                    };
                    
                    evs.push(event);
                    
                    d.setMonth(d.getMonth() + 1);
                }
                
                
                // process the lot
                
                for (i = 0; i < evs.length; i++) {
                    event = evs[i];
                
                    if (event.forceURL) {
                        event.xurl = event.forceURL;
                        event.target = '_blank';
                        event.className = 'pointer';
                    }
                    else if (event.newsid) {
                        event.xurl = 'news.php?select=' + event.newsid;
                        event.target = '_self';
                        event.className = 'pointer';
                    }
                    else {
                        event.xurl = undefined;
                        event.target = undefined;
                    }
                    
                }
                
                // did we request a date
                if (urlparams.select) {
                    defDate = new Date(urlparams.select);
                    console.log(urlparams.select);
                }
                
		// populate the calendar
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listMonth'
			},
			defaultView: 'listMonth',
			defaultDate: (defDate).toDateString(),
			timeFormat: 'H:mm',
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			eventClick: function(calEvent, jsEvent, view) {
                            if (calEvent.xurl) {
                                window.open(calEvent.xurl, calEvent.target);
                            }
			},
                        eventRender: function(event, element) {
                            $(element).tooltip({title: event.title, placement: 'bottom'});
                            if (event.className) {
                                $(element).addClass(event.className);
                            }
                            
                        },
                        allDayText: '',
                        views: {
                            week: { // name of view
                                columnFormat: 'ddd D/MM'
                                // other view-specific options here
                            }
                        },
			events: events.events
		});
		
	});
    </script>
  </head>

  <body xonload="w3IncludeHTML();">

    <!-- Fixed navbar -->
    <?php include "menu_snippet.html" ?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h1>ALLOTMENT SOCIEY CALENDAR</h1>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	 <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div id="calendar" style="min-height: 500px; margin-bottom: 40px;"></div>
                </div>
            </div>
	 </div>
	 
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <?php include "footer_snippet.html" ?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
	<!--script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script-->


  </body>
</html>
