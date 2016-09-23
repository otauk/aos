<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Academy of Skills">
    <link rel="icon" href="favicon.ico">

    <title>Academy of Skills</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




  </head>

<body>
	<div  class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo">
				</div>
			</div>
		</div>

		<!-- Jumbotron -->
		<div class="row">

			<div class="video">
				<iframe  style="height: 100%; width:100%; border: none;" src="https://www.youtube.com/embed/4UzntuKB9yk" frameborder="0" allowfullscreen></iframe>
			</div>

		</div>
		<!-- C T A  -->
	    <div class="row">
		    <div class="cta" >
				<div class="col-md-6 col-xs-6" id="folder1">
					<a href="mehr.php"><div class="cta_btn " id="opener1"></div></a>
			    </div >
			    <div class="col-md-6 col-xs-6"  id="folder2">
					<div class="cta_btn expand2" id="opener2" openid="2"></div>
			    </div>
			</div>
			<div class="col-md-12 col-xs-12">
		    	<div  id="exp1" data-id="1" class="information">
			    	<div class="col-md-6">
			    	<p>
				    	Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert.
			    	</p>
			    	<p>
				    	Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert. Hier kommt der Text. Schön das es Sie interessiert.
			    	</p>
			    	</div>
			    	<div class="col-md-6">
				    	<form name="mehr" method="post">
					    	<input type="text" placeholder="Max" class="textfield">
					    	<input type="text" placeholder="Mustermann" class="textfield">
							<input type="text" placeholder="max.musterman@mail.de" class="textfield">
							<button type="submit" class="form_btn">Abschicken</button>
						</form>
			    	</div>
		    	</div>
				<div  id="exp2" data-id="2" class="information">
			    	<div class="col-md-6">
				    	<p>
					    	Oh, das ist aber schade! Warum denn nicht? Oh, das ist aber schade! Warum denn nicht?Oh, das ist aber schade! Warum denn nicht?Oh, das ist aber schade! Warum denn nicht?Oh, das ist aber schade! Warum denn nicht?Oh, das ist aber schade! Warum denn nicht?
				    	</p>
			    	</div>
			    	<div class="col-md-6">
				    	<form name="nein" method="post">
					    	<div class='ck-button'><label><input name='nope' type='radio' value='1' required="required" checked><span>Doof</span></label></div>

					    	<div class='ck-button'><label><input name='nope' type='radio' value='2' required="required" ><span>Ne</span></label></div>

					    	<div class='ck-button'><label><input name='nope' type='radio' value='3' required="required" ><span>Danke</span></label></div>
					    	<div class="clearfix"></div>
							<hr class="pinkline"/>
							<button type="submit" class="form_btn">Meinung äußern</button>
						</form>
			    	</div>
		    	</div>
		    </div>
	    </div>

	    <!-- Footer  -->
	    <div class="row  footer">
		    <div class="col-md-12">
					<div class="col-md-6 footer_cont">
						<h1>Impressum</h1>
						<p>
							Sebastian Pütz<br>
							Up-Performances<br>
							Musterstr. 12<br>
							12345 Berlin<br>
						</p>

					</div>
					<hr class="mobile">
					<div class="col-md-6">
						<h1>Newsletter</h1>
						<form name="newsletter" method="post">
							<input type="text" placeholder="max.musterman@mail.de" class="textfield">
							<button type="submit" class="form_btn">Abschicken</button>
						</form>
					</div>
		    </div>

	    </div>
	</div>




    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/expander.js"></script>

    <script>


  	     $(function() {
    $( "#folder2" ).accordion({
	    collapsible:true,
	    active:false,
	    heightStyle: "content"
    });
  });
	 </script>

  </body>
</html>