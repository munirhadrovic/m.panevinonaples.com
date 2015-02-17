<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
            $(function(){
                $('#menu-seo1').slicknav({
                    prependTo:'#navigation-menu-seo1'
                });
            });
            $(function(){
                $('#menu-seo2').slicknav({
                    prependTo:'#navigation-menu-seo2'
                });
            });
            $(function(){
                $('.newpage').slicknav({
                    prependTo:'.navigation-newpage'
                });
            });
            $(function(){
                $('.newpage1').slicknav({
                    prependTo:'.navigation-newpage1'
                });
            });

			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>

		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Powered By <a href="http://mobilegrows.com" rel="external">MOBILEGROWS</a> | <a href="http://www.panevinonaples.com/" rel="external">Desktop Site</a></h1>
		</div>

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/08.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/03.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/05.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/06.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/07.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/09.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/10.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/11.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/12.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/13.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/14.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn velikodugme ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn velikodugme ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>

				<div data-role="collapsible-set">
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="left" data-collapsed-icon="carat-d" data-expanded-icon="carat-u">
					   <h3>Our Menu</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage1" data-transition="<?php echo $transitionefect ?>">Antipasti (Caldi-Hot)</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage1" data-transition="<?php echo $transitionefect ?>">Antipasti (Fredi-Cold)</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage1" data-transition="<?php echo $transitionefect ?>">Insalate (Salad)</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage2" data-transition="<?php echo $transitionefect ?>">Pasta</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage2" data-transition="<?php echo $transitionefect ?>">Homemade Pasta</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage4" data-transition="<?php echo $transitionefect ?>">Pollo (Chicken)</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage4" data-transition="<?php echo $transitionefect ?>">Vitello (Veal)</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage4" data-transition="<?php echo $transitionefect ?>">Parmigiana</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage3" data-transition="<?php echo $transitionefect ?>">Seafood (Frittu Di Mare)</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>">Specials of the Night</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="http://www.panevinonaples.com/menu%20complete.pdf" data-transition="<?php echo $transitionefect ?>">View our Printable Menu</a>
                    </div>
				</div>
                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></div>
                    </div>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                        <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>">Specials of the Night</a></div>
                    </div>

                    <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                      <div class="ui-block-a buttons-semir"><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
                    </div>

                    <section>
                        <h1>Established 1996</h1>
                    </section>
          </div>

        </div>

		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- home about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>">Specials of the Night</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
						</ul>
					</section>
					<img src="img/slider-images/08.jpg" alt="SLider" class="images-mobile">
                    <section>
                        <h1>Panevino Ristorante</h1>
                        <h5>8853 N.Tamiami Trail</h5>
                        <h5>Naples, Florida</h5>

                        <hr>

                        <h1>For reservation & information</h1>
                        <h5> Call: 239-514-8655</h5>

                        <hr>

                        <h1>Hours</h1>
                        <h5>All days from 5 PM to 10PM</h5>

                        <hr>
                    </section>

				</div>

			</div>	
				
				
		</div>
		<!-- home about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Specials of the Night</a></li>
							</ul>
					</section>
                    <img src="img/contact-us.jpg" alt="SLider" class="images-mobile">
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
        <!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page seo specials ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                            </ul>
					</section>

                    <a href="#popupOssobucco" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Ossobucco.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupOssobucco" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Ossobucco.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Ossobucco</b></p>
                    <p><i>a High Veal Shank served with Homemade Gnocchi pasta in a Barolo Wine Sauce with Mushrooms</i></p>
                    <hr>

                    <a href="#popupFish" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Fish-Francese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFish" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Fish-Francese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Fish Francese</b></p>
                    <p><i>a Fish Eg-battered, Pan-Fried, and then sauteed in a Lemon-White Wine Sauce</i></p>
                    <hr>

                    <a href="#popupFish-Livornese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Fish-Livornese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFish-Livornese" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Fish-Livornese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Fish Livornese</b></p>
                    <p><i>a broiled fish topped with Capers, Olives and Onions sauteed in a Light Marinara Sauce</i></p>
                    <hr>

                    <a href="#popupDover-Sole" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Dover-Sole.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupDover-Sole" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Dover-Sole.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Dover Sole</b></p>
                    <p><i>Whole fish broiled, served with sliced potatoes in a Lemon white Wine and garlic sauce,
                        deboned at the table and served on a bed of mix field green salad</i></p>
                    <hr>

                    <a href="#popupSeafood-Salad" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Seafood-Salad.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSeafood-Salad" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Seafood-Salad.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Seafood Salad</b></p>
                    <p><i>Octopus with Chopped Celery and sliced Onions topped with a Shrimp, fresh Lemon,
                            touch of Olive Oil dressing served on a bed of mix field green salad</i></p>
                    <hr>

                    <a href="#popupSpredini-Romano" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Spredini-Romano.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSpredini-Romano" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Spredini-Romano.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Spredini Romano</b></p>
                    <p><i>Two egg-battered Slices of Bread, Pan-Fried and stuffed with Mozzarela sauteed in a
                            Light Marinara Sauce</i></p>
                    <hr>

                    <a href="#popupMussels-Luciano" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Mussels-Luciano.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupMussels-Luciano" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Mussels-Luciano.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Mussels Luciano</b></p>
                    <p><i>Mussels sauteed in a White Wine and Garlic Oil Sauce with Herbs & Spices</i></p>
                    <hr>

                    <a href="#popupPasta-Bolognese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Pasta-Bolognese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPasta-Bolognese" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Pasta-Bolognese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pasta Bolognese</b></p>
                    <p><i>Homemade Meat sauce made of lean ground Veal with sliced Mushrooms and a Touch of Cream
                            served With Homemade Pasta</i></p>
                    <hr>

                    <a href="#popupVeal-Chop-Capricioza" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Veal-Chop-Capricioza.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVeal-Chop-Capricioza" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Veal-Chop-Capricioza.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Veal Chop Capricioza</b></p>
                    <p><i>Pounded Veal Chop, breaded, Pan-Fried and topped with TriColor Salad, Onions,
                        Chopped Tomatoes, and Diced Mozzarella in a Lemon-Olive Oil dressing</i></p>
                    <hr>

                    <a href="#popupVeal-chop-contandina" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/veal-chop-contandina.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVeal-chop-contandina" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/veal-chop-contandina.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Veal Chop Contandina</b></p>
                    <p><i>Rock of Veal Chop grilled and topped with sauted Sliced Potatoes,
                        Onions, Mushrooms and Mixed Bell Peppers</i></p>
                    <hr>

                    <a href="#popupPortabella-roasted-peppers" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Portabella-roasted-peppers.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPortabella-roasted-peppers" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Portabella-roasted-peppers.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Portabello & Roasted Peppers</b></p>
                    <p><i>Portabello Mushrooms and Roasted Peppers sauteed in a touch of Balsamic vinegarette
                        served on a bed of mix green salad</i></p>
                    <hr>

                    <a href="#popupSalmon-Oreganeta" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Salmon-Oreganeta.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSalmon-Oreganeta" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Salmon-Oreganeta.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Salmon Oreganeta</b></p>
                    <p><i>With Alaskan Salmon with bread-crumbs, grilled and served on a bed of Saunted Spinach in Garlic-Oil,
                            topped with a touch of Lemon-White Wine sauce</i></p>
                    <hr>

                    <a href="#popupLobster-Tail-Marechiara" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/Lobster-Tail-Marechiara.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupLobster-Tail-Marechiara" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/Lobster-Tail-Marechiara.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Lobster Tail Marechiara</b></p>
                    <p><i>Lobster tail served with clams, mussels, shrimps, linguine pasta in lite marinara sauce</i></p>
                    <hr>

				</div>
			</div>
		
		</div>
        <!--page specials ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- seopage1 antipasti ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="seopage1" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo1">
                        <ul id="menu-seo1" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                        </ul>
                    </section>


                        <a href="#popupCaesar" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Caesar-Salad.jpg" alt="Paris, France" style="width:50%"></a>
                            <div data-role="popup" id="popupCaesar" data-overlay-theme="b" data-theme="b" data-corners="false">
                                <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Caesar-Salad.jpg" style="max-height:512px;" alt="Paris, France">
                            </div>
                                <p><b>Caesar Salad...................$ 6.95</b></p>
                                <p><i>traditional ceasar saladtraditional</i></p>
                                <hr>

                        <a href="#popupPanevino" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Panevino-Salad.jpg" alt="Paris, France" style="width:50%"></a>
                        <div data-role="popup" id="popupPanevino" data-overlay-theme="b" data-theme="b" data-corners="false">
                            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Panevino-Salad.jpg" style="max-height:512px;" alt="Paris, France">
                        </div>
                        <p><b>Panevino Salad.............................$ 7.95</b></p>
                        <p><i>tomato,arugula,endive,and radicchio</i></p>
                        <hr>

                        <a href="#popupSpinach" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Spinach-Salad.jpg" alt="Paris, France" style="width:50%"></a>
                        <div data-role="popup" id="popupSpinach" data-overlay-theme="b" data-theme="b" data-corners="false">
                            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Spinach-Salad.jpg" style="max-height:512px;" alt="Paris, France">
                        </div>
                        <p><b>Spinach Salad....................$ 7.95</b></p>
                        <p><i>with mushrooms and bacon, balsamic vinagratte</i></p>
                        <hr>

                        <a href="#popupRughetta" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Rughetta-Salad.jpg" alt="Paris, France" style="width:50%"></a>
                        <div data-role="popup" id="popupRughetta" data-overlay-theme="b" data-theme="b" data-corners="false">
                            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Rughetta-Salad.jpg" style="max-height:512px;" alt="Paris, France">
                        </div>
                        <p><b>Rughetta Salad.............................$ 8.95</b></p>
                        <p><i>arugula, tomatoes and shaved parmigiano, balsamic</i></p>
                        <hr>

                    <a href="#popupCaprese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Caprese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCaprese" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Caprese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Caprese......................$ 9.95</b></p>
                        <p><i>homemade fresh mozzarella, tomatoes and roasted peppers</i></p>
                        <hr>

                    <a href="#popupBruschetta" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Bruschetta-Pomodoro.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupBruschetta" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Bruschetta-Pomodoro.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Bruschetta Pomodoro...................$ 6.50</b></p>
                        <p><i>toasted bread with chopped tomato and basil on top</i></p>
                        <hr>

                    <a href="#popupFormaggio" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Bruschetta-Formaggio.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFormaggio" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Bruschetta-Formaggio.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Bruschetta Formaggio..................$ 6.95</b></p>
                        <p><i>toasted bread with melted gorgonzola and goat chesese on top</i></p>
                        <hr>

                    <a href="#popupCalamari" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Calamari-Friti.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCalamari" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Calamari-Friti.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Calamari Fritti.................$ 9.95</b></p>
                        <p><i>fried squid</i></p>
                        <hr>

                    <a href="#popupCozze" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Cozze-alla-Arrabiata.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCozze" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Cozze-alla-Arrabiata.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Cozze alla Arrabiata............$ 9.95</b></p>
                        <p><i>mussels with spicy marinara sauce</i></p>
                        <hr>

                    <a href="#popupClams" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Clams-Casino.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupClams" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Clams-Casino.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Clams Casino...............$ 9.95</b></p>
                        <p><i>clams with italian bacon in a lemon white wine sauce</i></p>
                        <hr>

                    <a href="#popupVongole" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Vongole-Posillipo.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVongole" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Vongole-Posillipo.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Vongole posilipo................$ 9.95</b></p>
                        <p><i>clams in lite tomato sauce</i></p>
                        <hr>

                    <a href="#popupCarpaccio" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCarpaccio" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Carpaccio........................$ 9.95</b></p>
                        <p><i>thin sliced raw filet mignon with arugula, shaved parmigiano cheese</i></p>
                        <hr>

                    <a href="#popupTartufo" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio-con-Tartufo_1.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupTartufo" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio-con-Tartufo_1.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Carpaccio con Tartufo.....$ 10.95</b></p>
                        <p><i>thin sliced raw filet mignon with arugufa and truffle oil</i></p>
                        <hr>

                    <a href="#popupMozzarella" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio-e-Mozzarella.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupMozzarella" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Carpaccio-e-Mozzarella.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Carpaccio e Mozzarella......$ 9.95</b></p>
                        <p><i>thin sliced raw filet mignon with arugola topped with fresh mozzarella</i></p>
                        <hr>

                    <a href="#popupBresaola" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/bresaola.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupBresaola" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/bresaola.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Bresaola......................$ 10.95</b></p>
                        <p><i>thin sliced dry smoked filet mignon with arugula, shaved parmigiano cheese</i></p>
                        <hr>

                    <a href="#popupCoctail" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/antipastisalad/Coctail-di-Gamberi.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCoctail" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/antipastisalad/Coctail-di-Gamberi.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Coctail di Gamberi.............$ 11.95</b></p>
                        <p><i>shrimp coctail</i></p>
                        <hr>



                </div>
            </div>

        </div>
        <!--page antipasti ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page pasta///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="seopage2" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo2">
                        <ul id="menu-seo2" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                        </ul>
                    </section>

                    <a href="#popupSpaghetti" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Spaghetti-with-garlic-and-olive-oil.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSpaghetti" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" style="max-height:100%;" src="img/slider-images/pasta/Spaghetti-with-garlic-and-olive-oil.jpg">
                    </div>
                    <p>
                        <b>Spaghetti with garlic and olive oil...................................$12.95</b></p>
                    <p><i>extra virgin olive oil and garlic</i></p>

                    <hr>

                    <a href="#popupArrabiata" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Penne-alla-Arrabiata2.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupArrabiata" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Penne-alla-Arrabiata2.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Penne alla Arrabiata.........$ 13.95</b></br>
                        <i>spicy marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupMarinara" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Marinara.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupMarinara" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Marinara.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Spaghetti Marinara.......$ 13.95</b></br>
                        <i>marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupVodka" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Penne-Alla-Vodka.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVodka" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Penne-Alla-Vodka.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Penne alla Vodka..........$ 15.95</b></br>
                        <i>flambe with vodka,tomato sauce and touch cream</i>
                    </p>
                    <hr>

                    <a href="#popupMeatballs" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Meatballs.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupMeatballs" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Meatballs.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Spaghetti Meatballs...........$ 16.95</b></br>
                        <i>meatballs marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupCarbonara" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Carbonara.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCarbonara" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Spaghetti--Carbonara.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Spaghetti Carbonara.........$ 16.95</b></br>
                        <i>a light cream sauce with italian bacon</i>
                    </p>
                    <hr>

                    <a href="#popupRigatono" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Rigatoni-della-Nona.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupRigatoni" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Rigatoni-della-Nona.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Rigatoni della Nona.........$ 17.95</b></br>
                        <i>with egplant,fresh mozarela,basil and tomato sauce</i>
                    </p>
                    <hr>

                    <a href="#popupSausage" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Penne--con-Sausage.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSausage" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Penne--con-Sausage.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Penne con Sausage.........$ 16.95</b></br>
                        <i>Penne con Sausage,tomato and fresh basil</i>
                    </p>
                    <hr>

                    <a href="#popupLinguine" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Linguine-White-Clam-Sauce.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupLinguine" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Linguine-White-Clam-Sauce.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Linguine White Clam Sauce.$ 17.95</b></br>
                        <i>linguine with white clam sauce</i>
                    </p>
                    <hr>

                    <a href="#popupAmatriciana" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Rigatoni--Amatriciana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupAmatriciana" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Rigatoni--Amatriciana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Rigatoni Amatriciana..........$ 17.95</b></br>
                        <i>with italian bacon,onion and light marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupSanRemo" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Penne--con-Sausage.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSanRemo" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Penne--con-Sausage.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Penne alla San Remo.......$ 17.95</b></br>
                        <i>with italian prosciutto,mushrooms and tomato sauce</i>
                    </p>
                    <hr>

                    <a href="#popupPrimavera" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Capellini--Primavera.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupprimavera" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Capellini--Primavera.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Cepellini Primavera.......$ 17.95</b></br>
                        <i>mix vegetable,tomato and touc of cream/add <br> Shrimp $3.00</i>
                    </p>
                    <hr>

                    <a href="#popupSorentino" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Gnocchi-Sorrentino.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSorentino" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Gnocchi-Sorrentino.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Gnocchi Sorentino.......$ 16.95</b></p>
                        <p><i>homemade gnocchi,tomato and fresh mozzarella</i></p>
                    <hr>

                    <a href="#popupPesto" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Gnocchi-Pesto.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPesto" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Gnocchi-Pesto.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Gnocchi Pesto........$ 16.95</b></p>
                        <p><i>homemade gnocchi,basic garlic,olive oil,pine nuts, cream based</i></p>
                    <hr>

                    <a href="#popupAlfredo" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Fettuccine-Alfredo.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupAlfredo" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Fettuccine-Alfredo.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Fettuccine Alfredo........$ 16.95</b></p>
                        <p><i>fettuccine with alfredo sauce/add shrimp or chicken, $3.00</i></p>
                    <hr>

                    <a href="#popupTravesano" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Paglia-e-Fieno-Trevisana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupTravesano" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Paglia-e-Fieno-Trevisana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Paglia e Fieno Travesano......$ 17.95</b></p>
                        <p><i>radicchio,peas,prosciuto and a light cream sauce</i></p>
                    <hr>

                    <a href="#popupFungi" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Pappardelle-e-Fungi.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFungi" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Pappardelle-e-Fungi.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pappardelle e Fungi....$ 17.95</b></p>
                        <p><i>mushrooms,saute olive oil,garlic and parmagiano cheese</i></p>
                    <hr>

                    <a href="#popupGaeta" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Fusilli-Gaeta.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupGaeta" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Fusilli-Gaeta.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Fusilli Gaeta......$ 18.95</b></p>
                        <p><i>tricolor fusilli ewith chicken,mushrooms,olives,onion, gaeta sauce with touch of marinara sauce</i></p>
                    <hr>

                    <a href="#popupPanevino" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Lasagna-alla-Panevino.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPanevino" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Lasagna-alla-Panevino.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Lassagna alla Panevino......$ 16.95</b></p>
                        <p><i>homemade gnocchi,basic garlic,olive oil,pine nuts, cream based</i></p>
                    <hr>

                    <a href="#popupRavioli" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pasta/Cheese-Ravioli_2.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupRavioli" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pasta/Cheese-Ravioli_2.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                        <p><b>Cheese Ravioli.........$ 16.95</b></p>
                        <p><i>ravioli filled with cheese,topped with pink sauce</i></p>

                    <hr>

                </div>
            </div>

        </div>
        <!--page pasta///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- page 4 chicken /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="seopage4" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage1">
                        <ul class="newpage1 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                        </ul>
                    </section>
                    <a href="#popupPaliard" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Palliard.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPaliard" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Palliard.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Paillard...........$ 15.95</b></p>
                    <p><i>grilled chicken, on bed of tricolor salad</i></p>
                    <hr>

                    <a href="#popupPicata" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Piccata.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPicata" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Piccata.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Piccata...........$ 16.95</b></p>
                    <p><i>chicken scalopini sauced in a white wine, lemon sauce with capres</i></p>
                    <hr>

                    <a href="#popupPanevino" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Panevino.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPanevino" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Panevino.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Panevino...........$ 17.95</b></p>
                    <p><i>chicken scalopini sauteed with artichoke, mushrooms and marsala wine sauce</i></p>
                    <hr>

                    <a href="#popupCardinale" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Cardinale.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCardinale" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Cardinale.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Cardinale...........$ 18.95</b></p>
                    <p><i>chicken topped with roasted peppers, melted mozzarella and mushrooms brown sauce</i></p>
                    <hr>

                    <a href="#popupSorrentino" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Sorrentino.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSorrentino" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Sorrentino.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Sorrentino...........$ 16.95</b></p>
                    <p><i>chicken topped with prosciutto, eggplant, mozzarella, white wine sauce</i></p>
                    <hr>

                    <a href="#popupMarsala" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Marsala.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupMarsala" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Marsala.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Marsala...........$ 17.95</b></p>
                    <p><i>chicken scalopini sauteed with mushrooms and marsala wine sauce</i></p>
                    <hr>

                    <a href="#popupFrancese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Francese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFrancese" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Francese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Francese...........$ 18.95</b></p>
                    <p><i>chicken scalopini dipped in the eggs and sauteed in lemon white wine sauce</i></p>
                    <hr>

                    <a href="#popupCacciatore" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Chicken-Cacciatore-1.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCacciatore" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Chicken-Cacciatore-1.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Cacciatore...........$ 19.95</b></p>
                    <p><i>chunks of chicken sauteed with mushrooms, peppers, onions and lite tomato sauce</i></p>
                    <hr>

                    <a href="#popupVitello" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Piccata.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitello" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Piccata.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Piccata...........$ 18.95</b></p>
                    <p><i>veal scalopini sauceed in a white lemon sauce and capers</i></p>
                    <hr>

                    <a href="#popupVitelloMarsala" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Marsala.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloMarsala" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Marsala.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Marsala...........$ 19.95</b></p>
                    <p><i>veal scalopini sauceed with mushrooms, and marsala wine sauce</i></p>
                    <hr>

                    <a href="#popupVitelloQuattro" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Quattro-Stelle.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloQuattro" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Quattro-Stelle.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Quattro Stelle...........$ 20.95</b></p>
                    <p><i>veal scalopini sauteed with asparagus, artichokes, bell peppers, mushrooms and marsala wine sauce</i></p>
                    <hr>

                    <a href="#popupVitelloGenovese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Genovese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloQuattro" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Genovese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Genovese.............$ 20.95</b></p>
                    <p><i>veal scalopini topped with eggplant, melted fresh mozzarella, pesto sauce and touch of cream</i></p>
                    <hr>

                    <a href="#popupVitelloChampagne" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Champagne.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloChampagne" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Champagne.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Champagne.............$ 19.95</b></p>
                    <p><i>veal scalopini topped with eggplant, melted fresh mozzarella, pesto sauce and touch of cream</i></p>
                    <hr>

                    <a href="#popupVitelloSaltimbocca" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Saltimbocca.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloSaltimbocca" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Saltimbocca.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Saltimbocca..............$ 19.95</b></p>
                    <p><i>veal scalopini, mushrooms, prosciutto, spinach and white wine</i></p>
                    <hr>

                    <a href="#popupVitelloFrancese" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Francese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloFrancese" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Francese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Vitello Francese..............$ 21.95</b></p>
                    <p><i>veal scalopini dipped in the eggs and sauceed with lemon white wine sauce</i></p>
                    <hr>

                    <a href="#popupCostolettaDi" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Costoletta-Di-Vitello-Royale.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCostolettaDi" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Costoletta-Di-Vitello-Royale.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Costoletta Di Vitello Royale........$ 29.95</b></p>
                    <p><i>grilled veal chop with asparagus, mushrooms and barolo wine sauce</i></p>
                    <hr>

                    <a href="#popupFilettoDi" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Filetto-Di-Bue.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFilettoDi" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Filetto-Di-Bue.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Filetto Di Bue........$ 29.95</b></p>
                    <p><i>grilled filet mignon with mushrooms,asparagus and barolo wine sauce</i></p>
                    <hr>

                    <a href="#popupEggplantParmigiana" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Eggplant-Parmigiana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupEggplantParmigiana" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Eggplant-Parmigiana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Eggplant Parmigiana........$ 16.95</b></p>
                    <p><i>breaded eggplant with tomato sauce, melted mozzarella on top, served with side pasta marinara</i></p>
                    <hr>

                    <a href="#popupPolloParmigiana" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Pollo-Parmigiana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPolloParmigiana" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Pollo-Parmigiana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Pollo Parmigiana........$ 18.95</b></p>
                    <p><i>breaded chicken with tomato sauce, melted mozzarella on top, served with side pasta marinara</i></p>
                    <hr>

                    <a href="#popupVitelloParmagiana" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Vitello-Parmagiana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupVitelloParmagiana" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Vitello-Parmagiana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Veal Parmagiana........$ 19.95</b></p>
                    <p><i>breaded veal with tomato sauce, and melted mozzarella on top served with side pasta marinara</i></p>
                    <hr>

                    <a href="#popupShrimpParmigiana" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/pollo/Shrimp-Parmigiana.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupShrimpParmigiana" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/pollo/Shrimp-Parmigiana.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p><b>Shrimp Parmigiana........$ 22.95</b></p>
                    <p><i>breaded shrimp's with tomato sauce, melted mozzarella on top served with side pasta marinara</i></p>
                    <hr>

                </div>
            </div>

        </div>
        <!-- page 4 chicken /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!-- page 3 seafood /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="seopage3" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage">
                        <ul class="newpage hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                        </ul>
                    </section>

                    <a href="#popupScampi" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Shrimp-Scampi.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupScampi" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Shrimp-Scampi.jpg" style="max-height:512px;">
                    </div>
                    <p>
                        <b>Shrimp Scampi........$19.95</b></br>
                        <i>linguine topped with shrimp sauce and garlic, <br> white and wine sauce</i>
                    </p>
                    <hr>

                    <a href="#popupShrimp" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Shrimp-Arrabiata.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupShrimp" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Shrimp-Arrabiata.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Shrimp Arrabiata..........$ 19.95</b></br>
                        <i>linguine topped with shrimp and spicy marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupCalamari" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Linguine-con-Calamari.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupCalamari" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Linguine-con-Calamari.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Linguine con Calamari...................$ 19.95</b></br>
                        <i>calamar with marinara sauce</i>
                    </p>
                    <hr>

                    <a href="#popupSauce" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Sea-Scalops-Vodka-sauce.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupSauce" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Sea-Scalops-Vodka-sauce.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Sea Scallops Votka Sauce...................$ 24.95</b></br>
                        <i>linguine topped with Sea Scallops,flambe with votka, <br> tomato sauce and touch of cream</i>
                    </p>
                    <hr>

                    <a href="#popupPositato" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Linguine-Positano.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupPositato" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Linguine-Positano.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Linguine Positato........$ 24.95</b></br>
                        <i>linguine with clams,mussels,shrimp,calamari, <br> and lite tomato sauce</i>
                    </p>
                    <hr>

                    <a href="#popupRed" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Linguine-Red-Clam-Sauce.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupRed" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Linguine-Red-Clam-Sauce.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Linguine Red Clam Sauce...................$ 17.95</b></br>
                        <i>linguine with red  clam sauce</i>
                    </p>
                    <hr>

                    <a href="#popupWith" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Linguine-White-Clam-Sauce.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupWith" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Linguine-White-Clam-Sauce.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Linguine With Clam Sauce...................$ 17.95</b></br>
                        <i>linguine with clam sauce</i>
                    </p>
                    <hr>

                    <a href="#popupFish" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slider-images/seafood/Fish-Francese.jpg" alt="Paris, France" style="width:50%"></a>
                    <div data-role="popup" id="popupFish" data-overlay-theme="b" data-theme="b" data-corners="false">
                        <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img class="popphoto" src="img/slider-images/seafood/Fish-Francese.jpg" style="max-height:512px;" alt="Paris, France">
                    </div>
                    <p>
                        <b>Fish of the day........Market Price</b></br>
                    </p>
                    <hr>

                </div>
            </div>
        </div>
        <!-- page 3 seafood /////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page succes ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>

        <!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
        <!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////


		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
