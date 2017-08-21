<?php 
include "simple_html_dom.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Web Scraper</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    
    <script src="assets/js/modernizr.custom.js"></script>
       
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">web scraper</a>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Web Scraping</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Web Scraping tools are specifically developed for extracting information from websites. They are also known as web harvesting tools or web data extraction tools. These tools are useful for anyone trying to collect some form of data from the Internet.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" action="index.php" method="POST">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="url">Url</label>
								<input type="text" class="form-control" name="url" placeholder="URL">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label for="h1">Naslov H1</label>
								<input type="checkbox" id="h1" name="h1" value="h1">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<label for="h2">Naslov H2</label>
								<input type="checkbox" id="h2" name="h2" value="h2">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".3s">
								<label for="h3">Naslov H3</label>
								<input type="checkbox" id="h3" name="h3" value="h3">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".4s">
								<label for="a">Poveznica < a ></label>
								<input type="checkbox" id="a" name="a" value="a">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".6s">
								<label class="sr-only" for="class">class</label>
								<input type="text" id="class" class="form-control" name="class" placeholder="class">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".7s">
								<label class="sr-only" for="id">id</label>
								<input type="text" id="id" class="form-control" name="id" placeholder="id">
							</div>
							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".8s">Scrape</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->

	    


	<?php 

	if (isset($_POST["url"])) {
		$url = $_POST["url"];
		echo '
		<section class="pfblock pfblock-gray" id="url">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">url:</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    '. $url .'
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
				</div>

			</div>

		</section>
		';
		// Create DOM from URL or file
		$html = file_get_html($url);
	}

	if (isset($_POST["h1"])) {
		// Find all H1
		echo '
		<section class="pfblock pfblock-gray" id="h1">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">All H1:</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    ';

        foreach($html->find('H1') as $element) 
		       echo $element->plaintext . '<br>';

        echo '
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
				</div>

			</div>

		</section>
		';
		
	}

	if (isset($_POST["h2"])) {
		// Find all H2
		echo '
		<section class="pfblock pfblock-gray" id="h2">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">All H2:</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    ';

        foreach($html->find('H2') as $element) 
		       echo $element->plaintext . '<br>';
		   
        echo '
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
				</div>

			</div>

		</section>
		';
	}

	if (isset($_POST["h3"])) {
		echo '
		<section class="pfblock pfblock-gray" id="h3">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">All H3:</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    ';

        foreach($html->find('H3') as $element) 
		       echo $element->plaintext . '<br>';
		   
        echo '
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
				</div>

			</div>

		</section>
		';
	}

	if (isset($_POST["a"])) {
		// Find all links
		echo '
		<section class="pfblock pfblock-gray" id="a">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">All a (links):</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    ';

        foreach($html->find('a') as $element) 
		       echo $element->href . '<br>';
		   
        echo '
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
				</div>

			</div>

		</section>
		';
	}

	if (isset($_POST["class"])) {
		// Find all class
		$class = $_POST["class"];
		if (!($class == "")) {
			echo '
			<section class="pfblock pfblock-gray" id="class">
			
				<div class="container">
				
					<div class="row skills">
						
						<div class="row">

	                        <div class="col-sm-6 col-sm-offset-3">

	                            <div class="pfblock-header wow fadeInUp">
	                                <h2 class="pfblock-title">class: .'.$class.'</h2>
	                                <div class="pfblock-line"></div>
	                                <div class="pfblock-subtitle">
	                                    ';

	        foreach($html->find(".".$class) as $element) 
			       echo $element->plaintext . '<br>';
			   
	        echo '
	                                </div>
	                            </div>

	                        </div>

	                    </div><!-- .row -->
					</div>

				</div>

			</section>
			';
		}
	}

	if (isset($_POST["id"])) {
		// Find all id
		$id = $_POST["id"];
		if (!($id == "")) {
			echo '
			<section class="pfblock pfblock-gray" id="id">
			
				<div class="container">
				
					<div class="row skills">
						
						<div class="row">

	                        <div class="col-sm-6 col-sm-offset-3">

	                            <div class="pfblock-header wow fadeInUp">
	                                <h2 class="pfblock-title">id: #'.$id.'</h2>
	                                <div class="pfblock-line"></div>
	                                <div class="pfblock-subtitle">
	                                    ';

	        foreach($html->find("#".$id) as $element) 
			       echo $element->plaintext . '<br>';
			   
	        echo '
	                                </div>
	                            </div>

	                        </div>

	                    </div><!-- .row -->
					</div>

				</div>

			</section>
			';
		}
	}




?>









	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#contact"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->
<?php /* */ ?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>
