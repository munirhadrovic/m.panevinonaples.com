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
            });$(function(){
                $('.newpage2').slicknav({
                    prependTo:'.navigation-newpage2'
                });
            });$(function(){
                $('.newpage3').slicknav({
                    prependTo:'.navigation-newpage3'
                });
            });$(function(){
                $('.newpage4').slicknav({
                    prependTo:'.navigation-newpage4'
                });
            });$(function(){
                $('.newpage5').slicknav({
                    prependTo:'.navigation-newpage5'
                });
            });$(function(){
                $('.newpage6').slicknav({
                    prependTo:'.navigation-newpage6'
                });
            });$(function(){
                $('.newpage7').slicknav({
                    prependTo:'.navigation-newpage7'
                });
            });$(function(){
                $('.newpage8').slicknav({
                    prependTo:'.navigation-newpage8'
                });
            });$(function(){
                $('.newpage9').slicknav({
                    prependTo:'.navigation-newpage9'
                });
            });$(function(){
                $('.newpage10').slicknav({
                    prependTo:'.navigation-newpage10'
                });
            });$(function(){
                $('.newpage11').slicknav({
                    prependTo:'.navigation-newpage11'
                });
            });$(function(){
                $('.newpage13').slicknav({
                    prependTo:'.navigation-newpage13'
                });
            });$(function(){
                $('.newpage14').slicknav({
                    prependTo:'.navigation-newpage14'
                });
            });$(function(){
                $('.newpage15').slicknav({
                    prependTo:'.navigation-newpage15'
                });
            });$(function(){
                $('.newpage16').slicknav({
                    prependTo:'.navigation-newpage16'
                });
            });$(function(){
                $('.newpage17').slicknav({
                    prependTo:'.navigation-newpage17'
                });
            });$(function(){
                $('.newpage18').slicknav({
                    prependTo:'.navigation-newpage18'
                });
            });$(function(){
                $('.newpage19').slicknav({
                    prependTo:'.navigation-newpage19'
                });
            });$(function(){
                $('.newpage20').slicknav({
                    prependTo:'.navigation-newpage20'
                });
            });$(function(){
                $('.newpage21').slicknav({
                    prependTo:'.navigation-newpage21'
                });
            });$(function(){
                $('.newpage22').slicknav({
                    prependTo:'.navigation-newpage22'
                });
            });$(function(){
                $('.newpage23').slicknav({
                    prependTo:'.navigation-newpage23'
                });
            });$(function(){
                $('.newpage24').slicknav({
                    prependTo:'.navigation-newpage24'
                });
            });$(function(){
                $('.newpage25').slicknav({
                    prependTo:'.navigation-newpage25'
                });
            });$(function(){
                $('.newpage26').slicknav({
                    prependTo:'.navigation-newpage26'
                });
            });$(function(){
                $('.newpage12').slicknav({
                    prependTo:'.navigation-newpage12'
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
		    <h1>Powered By <a href="http://mobilegrows.com" rel="external">MOBILEGROWS</a> | <a href="http://www.discoverccs.org/" rel="external">Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slider01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slider03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slider04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slider05.jpg" alt="">
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
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>Services</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#home" data-transition="<?php echo $transitionefect ?>">Services</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>">Psychatric Evaluation</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage1" data-transition="<?php echo $transitionefect ?>">Medication Management</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage2" data-transition="<?php echo $transitionefect ?>">Individual Psychotherapy</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage3" data-transition="<?php echo $transitionefect ?>">Family Therapy</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage4" data-transition="<?php echo $transitionefect ?>">Marital Therapy</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage5" data-transition="<?php echo $transitionefect ?>">School Consultation</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage6" data-transition="<?php echo $transitionefect ?>">Occupational Psychiatry</a>
                    </div>
					<div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
					   <h3>Resources</h3>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage8" data-transition="<?php echo $transitionefect ?>">CCS New Patient Forms</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage9" data-transition="<?php echo $transitionefect ?>">Family Resources</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage10" data-transition="<?php echo $transitionefect ?>">Student Resources</a>
					   <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage11" data-transition="<?php echo $transitionefect ?>">Careers in Mental Health</a>

					</div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>Contact</h3>
                        <a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage12" data-transition="<?php echo $transitionefect ?>">Lombard Main Office</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage13" data-transition="<?php echo $transitionefect ?>">Oak Park Office</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage14" data-transition="<?php echo $transitionefect ?>">Melrose Park Office</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage15" data-transition="<?php echo $transitionefect ?>">River Forest Office</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage16" data-transition="<?php echo $transitionefect ?>">CCS Provider Hours</a>

                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>Blog</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage18" data-transition="<?php echo $transitionefect ?>">Dr. Martinez</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage19" data-transition="<?php echo $transitionefect ?>">Articles</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage20" data-transition="<?php echo $transitionefect ?>">Medical Students</a>
                    </div>
                    <div data-role="collapsible" data-theme="<?php echo $theme ?>" data-content-theme="<?php echo $theme ?>" data-iconpos="right" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                        <h3>About</h3>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage21" data-transition="<?php echo $transitionefect ?>">About US</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage22" data-transition="<?php echo $transitionefect ?>">Our Mission</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage23" data-transition="<?php echo $transitionefect ?>">Professional Staff</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage24" data-transition="<?php echo $transitionefect ?>">Provider Hours</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage25" data-transition="<?php echo $transitionefect ?>">What is an Advanced Practitioner Nurse (APN)?</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage26" data-transition="<?php echo $transitionefect ?>">Testimonials</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage28" data-transition="<?php echo $transitionefect ?>">Circle of Friends</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage29" data-transition="<?php echo $transitionefect ?>">Medical Student Rotation</a>
                        <a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#seopage30" data-transition="<?php echo $transitionefect ?>">CCS Magazine</a>

                    </div>

				</div>

		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 services///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
							<li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
						</ul>
					</section>
					<img src="img/slider-images/slider05.jpg" alt="SLider" class="images-mobile">
                    <div class="post-11 page type-page status-publish hentry" id="post-11">
                        <h2>Services</a></h2>
                        <p class="postmeta">October 28th, 2014</p>
                        <div class="the_content">
                            <p><strong>Comprehensive Clinical Services (CCS)</strong></p>
                            <p>Comprehensive Clinical Services provides the most reliable services to help the people in need. We have a large selection of services our medical center provides for all patient types. Our mission is to heal your symptoms and help you take a better path for your health being.</p>
                            <hr>
                            <p><strong>Psychiatric Evaluation (CCS)</strong><br>
                                A medical doctor specializing in psychiatry considers all physical and chemical conditions that may cause or contribute to an individual’s illness. Additionally, this physician will assess emotional and social factors, such as: attitudes, work, school, family, habits and beliefs. This is done by interviewing the identified patient and loved ones, or any others where permission is obtained. Records from other treating physicians, school, empolyers, etc., may be very helpful in understaning the case. The psychiatrist will consider medical, psychological, social, cultural, and spiritual needs in order to establish treatment recommendations. The psychiatrist discusses treatments options with the patient and works to empower the patient to make decisions about treatment.</p>
                            <hr>
                            <p><strong>Medication Management (CCS)</strong><br>
                                At CCS, our philosophy is to use the least amount of medicine possible. Before medications are prescribed, a medical work up will be evaluated. This includes orders such as the review of physical examinations or medical progress notes, blood test, and imaging studies. Once medications are deemed necessary and in the persons best interest, the advantages and disadvantages of treatment options will be discussed with the patients, including the discussion of no treatment at all. If the patient’s wishes coincide with the professional recommendations treatments will then be prescribed. Above everything else, CCS professionals safety and respect for individual choice is the goal.</p>
                            <hr>
                            <p><strong>Individual Psychotherapy (CCS)</strong><br>
                                A mental health professional, such as psychologists, a social workers, or a professional counselors work with individuals towards further individual growth and development. This can be achieved through various therapeutic modalities and schools of thought. At CCS, our professionals specializing in psychotherapy have training in Cognitive Behavioral Therapy, Supportive Psychotherapy, Adelrian Psychology, Gestalt Psychotherapy, and Insight Oriented Psychotherapy. All human beings have potential for further development. CCS staff work with individuals of all levels of functioning to strive for higher ground and “A Fuller Existence.”</p>
                            <hr>
                            <p><strong>Marital Therapy (CCS)</strong><br>
                                Relationships are often times at the core of individual satisfaction with life. However, they are often times difficult manage. With individual nuances, personalities and temperaments affecting our relationships, it is fair to say that most of us feel challanged by our individual relationships. Couples therapy focuses on improving communication, respect, conflict mediation, and conflict resolution. Other topics may include, changing habits, managing finances, short and long term goals, prioritization and compromise.</p>
                            <hr>
                            <p><strong>Family Therapy (CCS)</strong><br>
                                All parents wish to raise healthy, happy, and productive children. Finding the balance in creating trust, initiative and autonomy, and identity in our children is not easy. At CCS, we work with families on improving communication, discipline, rules, roles, responsibility, rewards, consequences. We work parents to review and optimize parenting techniques. The family dynamics are explored and openly discussed to create greater unity and less resistance.</p>
                            <hr>
                            <p><strong>School Consultation (CCS)</strong><br>
                                CCS professionals have years of experiencing in working with schools to address issues such as, mental health awareness, safety, and bullying. CCS has worked with schools in refining policies and procedures as well as performing individual assessment to targeted students. Trainings on various topics such as childhood development, mental health issues, parenting, and managing ADHD in the classroom have been delivered at various school districts throughout the metro Chicago area to different groups of students, parents and school staff.</p>
                            <hr>
                            <p><strong>Occupational Psychiatry (CCS)</strong><br>
                                The number and complexity of psychiatric conditions at the workplace have a significant impact on employers and benefit-management organizations. Occupational psychiatrists help employers and organizations manage such impact efficiently and keep it from overwhelming their financial and human resources.</p>
                            <hr>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
					

				</div>

			</div>	
				
				
		</div>
		
		<!-- page 2 services ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                                <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                                <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                                <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
							</ul>
					</section>

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
<!-- page seo psychiatric evaluation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                                <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                                <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                            </ul>
					</section>
                    <img src="img/slider-images/slider01.jpg" alt="SLider" class="images-mobile">
                    <div class="post-24 page type-page status-publish hentry" id="post-24">
                        <h2>Psychiatric Evaluation</a></h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><strong><span><strong>Psychiatric Evaluation (CCS)</strong></span></strong></p>
                            <p><span>A medical doctor specializing in psychiatry considers all physical and chemical conditions that may cause or contribute to an individual’s illness. Additionally, this physician will assess emotional and social factors, such as: attitudes, work, school, family, habits and beliefs. This is done by interviewing the identified patient and loved ones, or any others where permission is obtained. Records from other treating physicians, school, employers, etc., may be very helpful in understanding the case. The psychiatrist will consider medical, psychological, social, cultural, and spiritual needs in order to establish treatment recommendations. The psychiatrist discusses treatments options with the patient and works to empower the patient to make decisions about treatment. </span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
					
				</div>
			</div>
		
		</div>
<!--page seo psychiatric evaluation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page medication///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage1" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo1">
                        <ul id="menu-seo1" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider02.jpg" alt="SLider" class="images-mobile">
                    <div class="post-26 page type-page status-publish hentry" id="post-26">
                        <h2>Medication Management</a></h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><span><strong>Medication Management (CCS)</strong></span></p>
                            <p><span>At CCS, our philosophy is to use the least amount of medicine possible. Before medications are prescribed, a medical work up will be evaluated. This includes orders such as the review of physical examinations or medical progress notes, blood testing, and imaging studies. Once medications are deemed necessary and in the persons best interest, the advantages and disadvantages of treatment options will be discussed with the patients, including the discussion of no treatment at all. If the patient’s wishes coincide with the professional recommendations, treatments will then be prescribed. Above everything else, CCS professionals value and strive to maintain the&nbsp;safety of&nbsp;and respect for individual’s choices.</span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page medication///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page Individual Psychotherapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage2" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-seo2">
                        <ul id="menu-seo2" class="hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider03.jpg" alt="SLider" class="images-mobile">
                    <div class="post-28 page type-page status-publish hentry" id="post-28">
                        <h2>Individual Psychotherapy</a></h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><span><strong>Individual Psychotherapy (CCS)</strong></span></p>
                            <p><span>Mental health professionals, such as psychologists, social workers&nbsp;and professional counselors work with individuals towards further individual growth and development. This can be achieved through various therapeutic modalities and schools of thought. At CCS, our professionals specializing in psychotherapy have training in Cognitive Behavioral Therapy, Supportive Psychotherapy, Adelrian Psychology, Gestalt Psychotherapy, and Insight Oriented Psychotherapy. All human beings have potential for further development. CCS staff work with individuals of all levels of functioning to strive for higher ground and “A Fuller Existence.” </span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page Individual Psychotherapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Family Therapy///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage3" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage">
                        <ul class="newpage">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider04.jpg" alt="SLider" class="images-mobile">
                    <div class="post-32 page type-page status-publish hentry" id="post-32">
                        <h2>Family Therapy</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><span><strong>Family Therapy (CCS)</strong></span></p>
                            <p><span>All parents wish to raise healthy, happy, and productive children. Finding the balance in creating trust, initiative and autonomy, and identity in our children is not easy. At CCS, we work with families on improving communication, discipline, rules, roles, responsibility, rewards and&nbsp;consequences. We work with parents to review and optimize parenting techniques. The family dynamics are explored and openly discussed to create greater unity and&nbsp;minimize resistance.</span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page Family Therapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Marital Therapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage4" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage1">
                        <ul class="newpage1 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider06.jpg" alt="SLider" class="images-mobile">
                    <div class="post-112 page type-page status-publish hentry" id="post-112">
                        <h2>Marital Therapy</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><span><strong>Marital Therapy (CCS)</strong></span></p>
                            <p><span>Relationships are oftentimes at the core of an&nbsp;individual’s satisfaction with life. However, they are oftentimes difficult to&nbsp;manage. With individual nuances, personalities and temperaments affecting our relationships, it is fair to say that most of us feel challenged by our individual relationships. Couples therapy focuses on improving communication, respect, conflict mediation, and conflict resolution. Other topics may include, changing habits, managing finances, short and long term goals, prioritization and compromise.</span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page Marital Therapy ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page School Consultation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage5" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage2">
                        <ul class="newpage2 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider07.jpg" alt="SLider" class="images-mobile">
                    <div class="post-34 page type-page status-publish hentry" id="post-34">
                        <h2>School Consultation</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><span><strong>School Consultation (CCS)</strong></span></p>
                            <p><span>CCS professionals have years of experience in working with schools to address issues such as, mental health awareness, safety, and bullying. CCS has worked with schools in refining policies and procedures as well as performing individual assessment&nbsp;of targeted students. Training on various topics such as childhood development, mental health issues, parenting, and managing ADHD in the classroom have been delivered at various school districts throughout the metro Chicago area to different groups of students, parents and school staff.</span></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page School Consultation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!--page Occupational ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage6" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage3">
                        <ul class="newpage3 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider08.jpg" alt="SLider" class="images-mobile">
                    <div class="post-3112 page type-page status-publish hentry" id="post-3112">
                        <h2>Occupational Psychiatry</h2>
                        <p class="postmeta">October 19th, 2013</p>
                        <div class="the_content">
                            <p>The number and complexity of psychiatric conditions at the workplace have a significant impact on employers and benefit-management organizations. Occupational psychiatrists help employers and organizations manage such impact efficiently and keep it from overwhelming their financial and human resources.</p>
                            <p><a href="http://www.discoverccs.org/wp-content/uploads/2013/10/Dr.-Rigaud.jpg"><img class="alignleft  wp-image-3119" alt="Dr. Rigaud" src="http://www.discoverccs.org/wp-content/uploads/2013/10/Dr.-Rigaud-225x300.jpg" width="97" height="130"></a>Dr. Marie-Claude Rigaud is a Board Certified Psychiatrist specializing in occupational mental health.&nbsp;She is a nationally recognized and published author in the scientific and academic areas of Workplace Psychiatry, Disability and Managed Behavioral care. She is a Distinguished Life Fellow of the American Psychiatric Association (APA) and a former Delegate of the American Medical Association (AMA) House of Delegates.<strong> </strong></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;Dr. Rigaud offers the following services:</p>
                            <h4>Clinical Occupationally-focused Services</h4>
                            <ul>
                                <li>Behavioral/Mental Fitness for Duty evaluations.</li>
                                <li>Peer-to-Peer reviews with attending psychiatrist or other mental health professionals as needed</li>
                                <li>Consultations with employers on Return-to-Work Strategies and Job Accommodations.</li>
                                <li>Independent Medical/Psychiatric Examinations.</li>
                                <li>FMLA Verification</li>
                                <li>Workshop on Workplace Violence Prevention</li>
                            </ul>
                            <h4>Organizational/Managerial Services</h4>
                            <ul>
                                <li>Psychiatric Disability Prevention and Management</li>
                                <li>Consultation on ADA Compliance</li>
                                <li>Consultative Assistance to Disability Managers</li>
                            </ul>
                            <h4>Diagnostic Evaluations</h4>
                            <ul>
                                <li>Independent Medical Evaluation</li>
                                <li>Fitness for Duty Evaluation</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>To find out more about our Occupational Psychiatry services or to schedule an appointment, please call us at <a href="http://www.discoverccs.org/?page_id=63">630-261-1210</a>.</p>
                            <p>___________________________________________________________________________________________</p>
                            <h4>Links</h4>
                            <ul>
                                <li><a href="http://rigaudassociates.com/bio.html">Dr. Rigaud’s website</a></li>
                                <li><a href="http://www.rebatism.org/">Rebati Sante Mentale, Inc. (a non-profit mental health organization in Haiti) </a></li>
                            </ul>
                            <p>&nbsp;</p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page Occupational ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page resource ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage7" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage4">
                        <ul class="newpage4 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider09.jpg" alt="SLider" class="images-mobile">
                    <div class="post-13 page type-page status-publish hentry" id="post-13">
                        <h2>Resources</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p>Comprehensive Clinical Services provides some of the best resources for patients, families and students alike. We want to educate our visitors by providing them with the top notch information we can provide. We want you to be educated about your health because our main mission is for you to be healthy and live a healthy life.</p>
                            <ul>
                                <li><span style="color: #04274f;"><a href="http://www.discoverccs.org/?page_id=846"><strong>IMHPAC</strong></a></span></li>
                                <li><span style="color: #04274f;"><a title="Family Resources" href="http://www.discoverccs.org/?page_id=171"><strong>Family Resources</strong></a></span></li>
                                <li><span style="color: #04274f;"><a href="http://www.discoverccs.org/?page_id=51"><strong>Student Resources</strong></a><a href="../../pod_casts_ccs.html"><strong><br>
                                            </strong></a></span></li>
                            </ul>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page resource ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page CCS New Patient Forms ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage8" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage5">
                        <ul class="newpage5 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_1.png" alt="SLider" class="images-mobile">
                    <div class="post-2603 page type-page status-publish hentry" id="post-2603">
                        <h2>CCS New Patient Forms</h2>
                        <p class="postmeta">March 4th, 2013</p>
                        <div class="the_content">
                            <p>These are the forms new patients have to fill out during their first visit to the CCS office. Please feel free to print and fill them out before your arrival. Thank you.</p>
                            <ol>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/CREDIT-GUARANTEE-FOR.pdf">Credit Guarantee Form</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/Notice-of-Privacy-Practices.pdf">Notice of Privacy Practices</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/Late-Arrival-and-Cancellation.pdf">Late Arrival and Cancellation</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/Patient-Information.pdf">Patient Information</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/Financial-Agreement.pdf" target="_blank">Financial Agreement</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/09/Authorization-for-use-or-release-of-information.pdf" target="_blank">Authorization For Use Or Release Of Information</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/CCS-Patient-History.pdf" target="_blank">Patient History Sheet</a></li>
                            </ol>
                            <h2 class="GrayLine"></h2>

                            </div>
                            <div style="clear:both;"></div>

                            <!-- Fast Secure Contact Form plugin 4.0.19 - end - FastSecureContactForm.com -->

                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>

        <!--page CCS New Patient Forms ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Family Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage9" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage6">
                        <ul class="newpage6 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_2.png" alt="SLider" class="images-mobile">
                    <div class="post-171 page type-page status-publish hentry" id="post-171">
                        <h2><a href="http://www.discoverccs.org/?page_id=171" rel="bookmark" title="Permanent Link to Family Resources">Family Resources</a></h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <div><strong><a href="http://urbanext.illinois.edu/espanol/index.html" target="_blank">Espanol-Recursos de Extension</a></strong></div>
                            <div><strong><a href="http://parenting-ed.org/parent-handouts.asp" target="_blank">Helpful Parenting Handouts</a></strong></div>
                            <div><strong><a href="http://www.who.int/en/" target="_blank">World Health Organization</a></strong></div>
                            <div><strong><a href="http://www.who.int/en/" target="_blank">World Health Organization</a></strong></div>
                            <div><strong><a href="http://www.nami.org/" target="_blank">National Alliance on Mental Illness</a></strong></div>
                            <div><strong><a href="http://www.psych.org/" target="_blank">General Psychiatry</a></strong></div>
                            <div><strong><a href="http://www.nacbt.org/" target="_blank">Cognitive Behavioral Therapy</a></strong></div>
                            <div>
                                <div><strong><a href="http://www.nlm.nih.gov/medlineplus/" target="_blank">Medline Plus</a></strong></div>
                                <div><strong><a href="http://www.apa.org" target="_blank">American Psychiatric Association</a></strong></div>
                                <div><strong><a href="http://www.aacap.org/" target="_blank">American Academy of Child and Adolescent Psychiatry</a></strong></div>
                                <div style="text-indent: 20px;"><a title="AACAP Facts for Families" href="http://www.aacap.org/cs/root/facts_for_families/facts_for_families"><strong>- Facts for Families</strong></a></div>
                                <div><strong><a href="http://www.dbsawest.com/" target="_blank">Depression and Bipolar Support Alliance</a></strong></div>
                                <div><strong> <a href="http://www.chadd.org/" target="_blank">CHADD – Children and Adults with ADHD</a></strong></div>
                                <div><strong> <a href="http://www.healthyminds.org/" target="_blank">HealthyMinds.org – American Psychiatric Association</a></strong></div>
                                <div><strong> <a href="http://www.nmha.org/" target="_blank">Mental Health America</a></strong></div>
                                <div><strong><a href="http://www.discoverccs.org/wp-content/uploads/2011/05/DevelopmentalChart3.pdf" target="_blank">Child Development Chart—First Five Years by Harold Ireton, PH.D.</a></strong></div>
                                <div><strong><a href="http://www.discoverccs.org/wp-content/uploads/2011/05/child_development_chart.pdf" target="_blank">Child Development Chart</a></strong></div>
                                <div><strong><a href="http://www.cdc.gov/ncbddd/jump/child.html" target="_blank">Child Development and Parenting</a></strong></div>
                            </div>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                </div>

            </div>
        </div>

        </div>

        <!--page Family Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Student Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage10" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage7">
                        <ul class="newpage7 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_3.png" alt="SLider" class="images-mobile">
                    <div class="post-51 page type-page status-publish hentry" id="post-51">
                        <h2>Student Resources</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <div>
                                <div><a href="http://www.discoverccs.org/documents/MedicalStudentDataForm.pdf" target="_blank"><strong>&nbsp;</strong></a></div>
                                <hr></div>
                            <p><strong>SCHOLARSHIPS:</strong><br>
                                <strong>HACU-CLASE</strong><br>
                                Hispanic Association of Colleges and Universities (HACU)- Coors Light Academic Success in Education Award (CLASE)<br>
                                Contact:<br>
                                8415 Datapoint Drive, Suite 400<br>
                                San Antonio, TX 78229<br>
                                (210)576-3208<br>
                                <a href="http://www.hacu.net/">www.hacu.net</a><br>
                                All scholarship recipients MUST meet all of the following criteria:<br>
                                1.&nbsp;&nbsp;&nbsp;&nbsp; Demonstrate financial need</p>
                            <p>2.&nbsp;&nbsp;&nbsp;&nbsp; Meet the specified criteria for the scholarship to which they are applying 3.&nbsp;&nbsp;&nbsp;&nbsp; Be attending a HACU-member institution (excluding international members) at the time applications are completed and scholarship awards are made.<a href="http://www.hacu.net/hacu/HACU%27s_Members_EN.asp"> http://www.hacu.net/hacu/HACU’s_Members_EN.asp</a> this link will provide you with a listing for HACU member institutions</p>
                            <p><strong>Poetry Contest</strong><br>
                                The International Library of Poetry<br>
                                One Poetry Plaza<br>
                                Owings Mills, MD 21117<br>
                                (410)356-2000<br>
                                <a href="http://www.poetry.com/">www.poetry.com</a><br>
                                Deadline: on-going<br>
                                *open to all poets- call or check website for updated information<br>
                                *can also submit your poem online</p>
                            <p><strong>Hispanic Higher Education Scholarship Fund</strong><br>
                                The Neuman Building<br>
                                3575 Quakerbridge Road, Suite 102<br>
                                Mercerville, NJ 08619<br>
                                Phone: (609) 838-5488 ext.205<br>
                                Fax: (609) 838-5489<br>
                                Contact: Henry Acosta<br>
                                Deadline: Contact for details<br>
                                *Applicant must be an undergraduate student who is bilingual and interested in pursuing a master’s degree in Social Work from a New Jersey university</p>
                            <p><strong>Davis-Putter Scholarship Fund</strong><br>
                                Davis-Putter Scholarship Fund<br>
                                Contact: Jan Phillips (Secretary)<br>
                                P.O. Box 7307<br>
                                New York, NY 10116-7307<br>
                                <a href="http://www.davisputter.org/">www.davisputter.org</a><br>
                                Deadline: Postmarked by April 1<sup>st</sup> of every year<br>
                                *Open to graduate or undergraduate students<br>
                                *Must demonstrate financial need<br>
                                *Must demonstrate participation in expanding civil rights, economic justice, and international solidarity<br>
                                *Visit website for more details</p>
                            <p><strong>Institute for Humane Studies (HIS)- Humane Studies Fellowship</strong><br>
                                Institute for Humane Studies (HIS)- Humane Studies Fellowship<br>
                                3301 North Fairfax Drive, Suite 440<br>
                                Arlington, VA 22201<br>
                                (703) 993-4880 or (800) 697-8799<br>
                                <a href="mailto:his@gmu.edu">his@gmu.edu</a> or <a href="http://www.theihs.org/">www.theihs.org</a><br>
                                Deadline: see website<br>
                                *available for undergraduate or graduate study in the U.S or abroad. Open to students interested in the classical liberal tradition</p>
                            <p><strong>Tylenol Scholarships</strong><br>
                                Contact: Tylenol Scholarships<br>
                                Citizen’s Scholarship Foundation of America, Inc.<br>
                                1505 Riverview Road<br>
                                P.O. Box 88<br>
                                St. Peter, MN 56082<br>
                                <a href="http://www.tylenol.com/">http://www.tylenol.com</a><br>
                                Requirements:<br>
                                *Must be undergraduate or graduate with at least one more year of education remaining<br>
                                *Must demonstrate leadership in community and school<br>
                                *Intend of majoring in a health-related field</p>
                            <p><strong>Hispanic Scholarship Fund:</strong><br>
                                <strong>College Grants and Scholarships for Students of Hispanic / Latino Heritage</strong><br>
                                <strong>55 Second Street Suite 1500</strong><br>
                                <strong>San Francisco, CA 94105</strong><br>
                                <strong>1-877-HSF-INFO</strong><br>
                                <a href="http://www.hsf.net/"><strong>http://www.hsf.net/</strong></a><br>
                                <strong>Requirements:</strong><br>
                                *Have a minimum 3.0 cumulative GPA on a 4.0 scale (or the equivalent)<br>
                                *Be a U.S. citizen OR legal permanent resident with a valid permanent resident card or passport stamped I-551<br>
                                *Be pursuing or plan to pursue your first undergraduate or graduate degree<br>
                                *Must apply for federal financial aid using the <a href="http://www.fafsa.ed.gov/">Free Application for Federal Student Aid</a> (FAFSA)<br>
                                *Plan to enroll full-time as an undergraduate or graduate student in a degree seeking program at a U.S. accredited institution in the U.S., Puerto Rico, U.S. Virgin Islands, or Guam in the<br>
                                upcoming academic year.</p>
                            <p><strong>Congressional Hispanic Caucus Institute Scholarship Award</strong><br>
                                Congressional Hispanic Caucus Institute<br>
                                911 2<sup>nd</sup> Street, NE<br>
                                Washington, DC 20002<br>
                                Telephone: 202-543-1771<br>
                                <a href="http://www.chci.org/chciyouth/scholarship/scholarship.htm">www.chci.org/chciyouth/scholarship/scholarship.htm</a>.<br>
                                Requirements:<br>
                                *Consistent active participation in public and/or community service activities<br>
                                *Demonstrated financial need<br>
                                *Good writing skills<br>
                                *Full-time enrollment in an accredited community college, four-year university, or graduate/professional program during the period for which scholarship is requested<br>
                                *U.S. citizenship or legal permanent residency</p>
                            <p><strong>Neuroscience Scholars Program (NSP)</strong><br>
                                The NSP of the Society for Neuroscience is a three-year fellowship designed to enhance career development and professional networking opportunities for undergraduate, graduate, and postdoctoral minority students in neuroscience.<br>
                                Requirements:<br>
                                *Be citizen or permanent residents of the United States<br>
                                *Be enrolled in a degree-granting program. Past fellowship recipients are not eligible to apply<br>
                                Application Date: Typically June of each year.<br>
                                For more information and to complete application go to:<br>
                                <a href="http://www.sfn.org/index.cfm?pagename=NeuroscienceScholars_Main&amp;section=professionalDevelopment">http://www.sfn.org/index.cfm?pagename=NeuroscienceScholars_Main&amp;section=professionalDevelopment</a></p>
                            <p><strong>Other Scholarship Websites to visit:</strong><br>
                                <a href="http://www.fastweb.com/">www.fastweb.com</a><br>
                                <a href="http://www.collegematch.com/">www.collegematch.com</a></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                    </div>
                </div>

            </div>
        </div>

        </div>

        <!--page Student Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Student Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage11" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage8">
                        <ul class="newpage8 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider01.jpg" alt="SLider" class="images-mobile">
                    <div class="post-130 page type-page status-publish hentry" id="post-130">
                        <h2>Careers in Mental Health</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p>What do I want to be when I grow up? I’m sure this is a question we all have asked ourselves since childhood. To this day, I still ask myself the same question. Hello. My name is Carolina Chaidez. Thank you for taking the time to visit this page. This particular webpage is the product of my internship at CCS. I am a recent college graduate with a Bachelors of Arts in Psychology. Like many, I now ask myself, “I have my B.A., now what?” I have come far in my education, why go on? Well, I hear that by continuing my education I will learn more skills, have better job opportunities, higher income potential, and I will become a more knowledgeable individual.</p>
                            <p>I came to CCS with the idea that I wanted a career in mental health, but I am unsure of what exact path to take. Not knowing what you want to do for the rest of your life can be unnerving, but your strengths and interests can help lead you in some direction. Like some, I have always had an interest in working with children and adolescents from various backgrounds. The fact that I am also bilingual is important and I am happy because I intend on keeping up with my Spanish in whatever field I ultimately choose. Other interests that I have are music and art. What could I possibly do with that? Well, there are a few options, such as an Art and or Music Therapy. So, even though I may not know what I would like to do with my degree in psychology, there are several different vocations to choose from. I have heard of therapists, psychologists, psychiatrists, counselors, etc., but it all means the same to the non-professional. CCS has opened its doors and has invited me to start writing about what I learn and to put together this project for the benefit of others; that is, for those of you who find themselves in my same shoes.</p>
                            <p>I encourage you to read on, send me your questions, and follow with me as we learn about careers and ourselves, as we all try to discover our true passions, likes and dislikes. I am hoping this information will help us all make decisions during these very important years of our formation.</p>
                            <p>I have my B.A in Psychology, now what? Psychology is a very broad field of study. One is able to further their career by continuing ones’ education by going for a Masters Degree, a Ph.D., an M.D., or J.D.. I would now like to share with you what I learned about the differences between a psychologist, psychiatrist, counselor, and therapist because by knowing the differences, you can better decide what type of degree to obtain. They all seem like the same thing, but they have enormous differences. What I have learned thus far is…</p>
                            <p><strong><span id="more-130"></span>What is a Psychologist?</strong></p>
                            <p>Dr. Mozdzierz, PhD, a Psychologist at CCS, explains that “a Psychologist collaborates with human beings to solve problems, and with people who have problems with themselves and or others. They are a consultant; they have the knowledge of human behavior, maturation, perception, learning, neural biology, emotions.” Psychologists may work with people and conduct research. A psychologist can spend their time in research, which adds to their knowledge of behavior and develops new ways of understanding behavior, and helps people and institutions change their behavior, structure, or functions. Psychologists may also spend more time working with people, studying them by examining records of what they have done or by talking with them in order to help them modify their behavior, change the methods of their organizations, or put their resources to better use (Super and Super, 5).</p>
                            <p>A type of Psychologist is a School Psychologist; they have functioned as Clinical Psychologists in an educational setting. They are concerned with problems of adjustment, mental health, and school achievement, primarily in elementary schools (Super and Super, 45).</p>
                            <p><em>Where Psychologists work:</em><br>
                                - Colleges and Universities<br>
                                - Private Practice<br>
                                - Hospital and clinics<br>
                                - Public Schools and other nonprofit organizations<br>
                                - Business and Industry<br>
                                - Government Agencies</p>
                            <p>Want to find out more, check this source:</p>
                            <p>Super, Charles M., &amp; Donald E. Super, Ph.D. (2001). Opportunities in Psychology Careers.</p>
                            <p>VGM Career Books.</p>
                            <p><strong><!--more-->What is a Psychiatrist?</strong></p>
                            <p>A Psychiatrist is a physician who specializes in psychology and is certified in treating mental disorders. As part of their evaluation of the patient, psychiatrists are one of a select few mental health professionals who may prescribe psychiatric medication, conduct physical examinations, and order and interpret laboratory tests and/or brain imaging studies. Psychiatrists can also go through training to conduct psychotherapy, psychoanalysis, and/or cognitive behavioral therapy. After having the opportunity to speak to, Dr. Daniel Martinez, M.D (medical doctor), a Psychiatrist at CCS, explained to me that, “a Psychiatrist is a medical doctor that specializes in the brain, emotions, and behavior. A Psychiatrist is a doctor that prescribes medicine that helps improve brain function. They evaluate and detect problems, such as neurochemical problems from brain chemistry, emotional, behavioral, social and maybe even cultural or spiritual problems.”</p>
                            <p>Dr. Martinez explains that, “as a Psychiatrist, it is difficult convincing people that there are many conditions that are very treatable with various medications, and the fact that there are people who think that psychiatrists only work with ‘crazy people’.” Seeing a psychiatrist doesn’t mean your crazy.</p>
                            <p><strong><!--more-->What is a Counselor?</strong></p>
                            <p>A counselor gives and provides counsel and advise. A counselor serves as a guide to ones self. Counselors assist people with personal, family, educational, mental health, and career problems. Their duties vary greatly depending on their occupational specialty, which is determined by the setting in which they work and the population they serve. To become a counselor requires years of education and supervision, just like any other mental health career or any other career at that.</p>
                            <p>A counselor is also an L.C.P.C, a Licensed Clinical Professional Counselor. To become an L.C.P.C you need a masters in psychology or a field that involves counseling. Maria Valdez, L.C.P.C at CCS, got her masters in Counseling Psychology at Northern Illinois University. Ms. Valdez mentioned that NIU offers areas you can get your masters in, they are, School Counseling, Clinical Counseling, and Higher Education Counseling. Just know that programs vary by school. She explained to me that as an L.C.P.C, you look more at the pathology of an individual, what the problem is, how it can be fixed, and what resources can be use. As an L.C.P.C she added that the treatment plan is to look at the problem, attack it, and go from there. Maria told me, “every case brings something new, even from week to week”.</p>
                            <p>This goes for all mental health careers, “The more a client sees you and the more comfortable they become, the more they communicate with you.” – M.V.- L.C.P.C</p>
                            <p><em>Where Counselors work:</em><br>
                                - Schools / Colleges<br>
                                - Private Practice<br>
                                - Community Health Organization<br>
                                - Hospitals</p>
                            <p><em>Counselor Types:</em></p>
                            <p>School Counselors (Elementary/High School) help students evaluate their abilities, interests, talents, and personalities to develop realistic academic and career goals. Career Counselor<br>
                                Rehabilitation Counselors help people deal with personal, social, and vocational effects of disabilities<br>
                                Mental Health Counselors work with individuals, families, and groups to address and treat mental and emotional disorders and to promote mental health.<br>
                                Substance Abuse and Behavioral Disorder Counselors help people who have problems with alcohol, drugs, gambling, and eating disorders.</p>
                            <p>To read more about Counselors take a look at the U.S. Department of Labor Statistics, Bureau of Labor Statistics: Occupational Outlook Handbook, 2008-09 Edition.</p>
                            <p>Another mental health career that is semi-similar to a counselor is and L.C.S.W, a Licensed Clinical Social Worker.</p>
                            <p><em>What is a Social Worker?</em></p>
                            <p>A social worker assists people by helping them cope with issues in their everyday lives, from their social to emotional functioning. They work to help individuals deal with their relationships, and solve personal and family problems. After speaking with Rachel Mikula, L.C.S.W at CCS, she explained that, “As a social worker, the environment dictates what you may deal with and how to respond to situations.” She also explained to me that social workers work to advance the social conditions of a community, especially of the disadvantaged, by providing counseling, guidance, and assistance in the form of social services; i.e., better the community, improve conditions of the poor, and/or promote welfare of children.</p>
                            <p><em>Where Social Workers can work:</em></p>
                            <p>- Community Mental Health Centers<br>
                                - Hospital<br>
                                - Schools<br>
                                - Non-for Profit Organizations / Community Organizations<br>
                                - Churches<br>
                                - Private Clinics (once licensed)<br>
                                - At CCS I spoke to Deepak Santhiraj who has been working/interning along side Dr. Martinez at CCS, and who is working on finishing his Masters of Social Work and close to becoming an L.C.S.W, and he provided me with these websites, which I found very informational. If you are interested in social work, please check these out.</p>
                            <p>socialworkers.com</p>
                            <p>www.naswdc.org</p>
                            <p><strong><!--more-->What is a Therapist?</strong></p>
                            <p>A therapist works to help address the issues of those with emotional difficulties or mental health issues. There are different types of therapists, and each works in a particular type of therapy. Therapists can work to help guide patients to become social and build confidence. They can work in hospitals, nursing homes, community mental health centers or other health facilities and agencies.</p>
                            <p>To give you an idea here are a few types of Therapists that I have come across in my research: (roles and responsibilities may overlap)<br>
                                - Music Therapy: Musical therapy is a creative treatment that uses music for therapy purposes, such as singing or playing instrument with or for client. Music can draw out a response from, for example a child who previously didn’t respond to other kinds of stimulus. As in Art, Dance, and Play therapies, these forms of therapy allow the individual to express themselves in a way that they were not capable of doing in previous treatments.<br>
                                - Recreational Therapy: a therapist plans activities that will improve the physical, mental, and emotional health of patients. Activities may include sports, art, dance, music.<br>
                                Play Therapy: Like music, dance, and art, play therapy is similar to these types of therapies for playing also allows a client to express themselves, their emotions through playing with toys or games. I.e. Dolls, puppets, board games, playing in sandbox. Etc.<br>
                                Occupational Therapy: Occupational therapy allows the therapist to use a productive or creative activity in the treatment or rehabilitation of physically or emotionally disabled individuals. It is a therapy based on engagement in meaningful activities of daily life, especially to enable or encourage a client’s participation in activities no matter their impairments or limitations in physical or mental functions.<br>
                                - Speech/ Language Therapist: Speech therapy is intended to correct a disorder of speech. A Speech/Language therapist is a therapist that works with clients on language development and or pronouncing sounds. They can work in hospitals, rehabilitation centers, schools, clinics, private practice.</p>
                            <p>Thus far in my past internships and observations I have learned that no two clients are the same. Expressing one self through art, dance, sports, music, etc. helps a person stay in touch with their feelings and guides them to self-assess their own emotions. I found that different therapy types are not all suitable for every client and therefore it is the therapist’s responsibility to use a variety of therapeutic interventions to help their clients with relaxation training techniques, behavior modification and management, counseling, and meditation. Therapists work to accommodate the client in finding the right therapy type, whether it is through verbal communication, dancing, drawing, playing/listening to music, playing, etc.</p>
                            <p>I may have not included many types of therapy an individual can get into, but these were a few that I have researched myself and have looked into.</p>
                            <p>I am hoping you have found the information that I have provided useful, if I have not included something that you were interested in, feel free to let me know, post comments. If you are still interested in learning more about a counselor, psychiatrist, therapist, or psychologist I have provided resources that I myself found very useful, and maybe you may find them to be interesting, useful, and hopefully helpful. Feel free to check them out.</p>
                            <p><strong><!--more-->Helpful Resources:</strong></p>
                            <p>Talking to the real Professional in the field (very useful)</p>
                            <p>Perry, Philip A. (1996). Opportunities in Mental Health Careers. Lincolnwood, IL: VGM Career Horizons , NTC Publishing Group.</p>
                            <p>Super, PhD, Charles M. and Donald E. Super, Ph.D. (2001). Opportunities in Psychology Careers. Lincolnwood, IL: VGM Career Books.</p>
                            <p>Occupational Outlook Handbook, 2008-09 Edition</p>
                            <p>www.bls.gov/oco</p>
                            <p>This particular website provides you with different types of jobs. I found this to be useful and informational as well. The Occupational Outlook Handbook tells you:</p>
                            <p>- the training and education needed<br>
                                - earnings<br>
                                - expected job prospects<br>
                                - what workers do on the job<br>
                                - working conditions</p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                    </div>

                </div>
            </div>

        </div>
        </div>

        </div>

        <!--page Student Resources ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Lombard Main Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage12" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage9">
                        <ul class="newpage9 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider02.jpg" alt="SLider" class="images-mobile">
                    <div class="post-63 page type-page status-publish hentry" id="post-63">
                        <h2>Lombard Main Office</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <p><img style="margin-left: 0px; margin-right: 20px;" title="ccsbuilding-mini" alt="ccs building" src="http://www.discoverccs.org/wp-content/uploads/2011/11/ccsbuilding-mini.jpg" width="250" height="166" align="left"></p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p><strong>Main Office</strong><br> Highland Medical Center<br> 2340 S. Highland Ave., Suite 300<br> Lombard, IL 60148 (<a title="View Map" href="http://maps.google.com/maps?q=2340+S.+Highland+Ave.,+Suite+300+Lombard,+IL+60148">Map</a>)<br> Tel: (630) 261-1210<br> Fax: (630) 261-1211</p>
                            <p>&nbsp;<strong>Office Hours</strong></p>
                            <ul>
                                <li>Monday: 9am-5pm</li>
                                <li>Tuesday: 9am-7pm</li>
                                <li>Wednesday: 9am-7pm</li>
                                <li>Thursday: 9am-7pm</li>
                                <li>Friday: 9am-6pm</li>
                                <li>Saturday: 8am-4pm</li>
                                <li>Sunday: Closed</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>We invite you to read the information available in our site such as our <a title="Read our Mission, Vision &amp; Philosophy" href="../?page_id=628">vision, mission and philosophy</a>, to meet our <a title="Meet our Professional staff" href="../?cat=11">professional staff</a>, and to contact us at <strong>(630) 261-1210</strong> with any questions, comments or to make an appointment.</p>
                            <p>To view our provider hours, <a href="http://www.discoverccs.org/?p=2487">click here</a>.</p>
                            <h2 class="GrayLine">&nbsp;</h2>
                            <h4>Contact us</h4>


                            <!-- Fast Secure Contact Form plugin 4.0.19 - begin - FastSecureContactForm.com -->
                            <div style="clear:both;"></div>
                            <p>We respect your privacy and would like to remind you to not share any medical conditions or personal questions via this form. </p>
                            <div id="FSContact1" style="width:375px;">
                                <form action="http://www.discoverccs.org/?page_id=63#FSContact1" id="fscf_form1" method="post">

                                    <div id="fscf_required1">
                                        <span style="text-align:left;">*</span> <span style="text-align:left;">indicates required field</span>
                                    </div>


                                    <div id="fscf_div_clear1_0" style="clear:both;">
                                        <div id="fscf_div_field1_0" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_name1">Name:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_name1" name="full_name" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_1" style="clear:both;">
                                        <div id="fscf_div_field1_1" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_email1">Email:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_email1" name="email" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_2" style="clear:both;">
                                        <div id="fscf_div_field1_2" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_field1_2">Subject:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_field1_2" name="subject" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_3" style="clear:both;">
                                        <div id="fscf_div_field1_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_field1_3">Message:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <textarea style="text-align:left; margin:0; width:99%; max-width:250px; height:120px;" id="fscf_field1_3" name="message" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>

                                    <div style="text-align:left; padding-top:5px;">
                                    </div>
                                    <div id="fscf_captcha_image_div1" style="width:250px; height:65px; padding-top:2px;">
                                        <img id="fscf_captcha_image1" style="border-style:none; margin:0; padding:0px; padding-right:5px; float:left;" src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix=XLdmbi4a7NTK2Lyv" width="175" height="60" alt="CAPTCHA Image" title="CAPTCHA Image">
                                        <input id="fscf_captcha_prefix1" type="hidden" name="fscf_captcha_prefix1" value="XLdmbi4a7NTK2Lyv">
                                        <div id="fscf_captcha_refresh1">
                                            <a href="#" rel="nofollow" title="Refresh Image" onclick="fscf_captcha_refresh('1','/wp-content/plugins/si-contact-form/captcha','http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix='); return false;">
                                                <img src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/images/refresh.png" width="22" height="20" alt="Refresh Image" style="border-style:none; margin:0; padding:0px; vertical-align:bottom;" onclick="this.blur();"></a>
                                        </div>
                                    </div>

                                    <div id="fscf_captcha_field1" style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_captcha_code1">CAPTCHA Code:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <input style="text-align:left; margin:0; width:50px;" type="text" value="" id="fscf_captcha_code1" name="captcha_code">
                                    </div>

                                    <div id="fscf_submit_div1" style="text-align:left; padding-top:2px;">
                                        <input type="submit" id="fscf_submit1" style="cursor:pointer; margin:0;" value="Submit">
                                    </div>

                                    <input type="hidden" name="fscf_submitted" value="0">
                                    <input type="hidden" name="fs_postonce_1" value="779b32e7ef31768ee413a192d5da10be,1423231180">
                                    <input type="hidden" name="si_contact_action" value="send">
                                    <input type="hidden" name="form_id" value="1">
                                    <input type="hidden" name="mailto_id" value="1">

                                </form>
                            </div>
                            <div style="clear:both;"></div>

                            <!-- Fast Secure Contact Form plugin 4.0.19 - end - FastSecureContactForm.com -->

                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                    </div>

                </div>

            </div>
        </div>

        </div>
        </div>

        </div>

        <!--page Lombard Main Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Oak Park Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage13" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage10">
                        <ul class="newpage10 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider03.jpg" alt="SLider" class="images-mobile">
                    <div class="post-65 page type-page status-publish hentry" id="post-65">
                    <h2>Oak Park Office</h2>
                    <p class="postmeta">October 28th, 2014</p>
                    <div class="the_content">
                    <p><img style="margin-left: 0px; margin-right: 20px;" title="ccsbuilding-mini" alt="ccs building" src="http://www.discoverccs.org/wp-content/uploads/2014/04/Oak-Park-Office-Photo.jpg" width="250" height="166" align="left"></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><span><strong>Oak Park Office</strong></span><br> 1101 Lake Street, Suite 302<br> Oak Park, IL 60301 (<a href="https://www.google.com/maps/place/1101+Lake+St/@41.888396,-87.802652,17z/data=!3m1!4b1!4m2!3m1!1s0x880e34c58f232abb:0x413f763cbf5bd751">map</a>) <br> Tel: (630) 261-1210<br> Fax: (630) 261-1211</p>
                    <div>
                        <p>Come enjoy our new Oak Park office! Enjoy a cup of coffee or water. Relax and read while you wait.</p>
                    </div>
                    <div>
                        <p>Phone or Tablet charging stations available!</p>
                        <p><strong>Provider Hours:</strong></p>
                    </div>
                    <table width="570" border="0" cellspacing="0" cellpadding="0">
                        <colgroup>
                            <col width="219">
                            <col width="200">
                            <col width="64">
                            <col width="23">
                            <col width="64"> </colgroup>
                        <tbody>
                        <tr>
                            <td height="20"><a title="Daniel B. Martinez, MD" href="http://www.discoverccs.org/?p=999">Daniel B. Martinez, MD</a></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="20">&nbsp;</td>
                            <td>Tuesday</td>
                            <td align="right">2:30 PM</td>
                            <td>to</td>
                            <td align="right">5:30 PM</td>
                        </tr>
                        <tr>
                            <td height="20">Erin Petrusic, APN</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="20">&nbsp;</td>
                            <td>Wednesday</td>
                            <td align="right">9:00 AM</td>
                            <td>to</td>
                            <td align="right">5:00 PM</td>
                        </tr>
                        <tr>
                            <td height="20">&nbsp;</td>
                            <td>Saturday (1st &amp; 3rd)</td>
                            <td align="right">10:00 PM</td>
                            <td>to</td>
                            <td align="right">4:00 PM</td>
                        </tr>
                        <tr>
                            <td height="20">Eloisa Rosales, LCSW</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="20">&nbsp;</td>
                            <td>Saturday</td>
                            <td align="right">9:00 AM</td>
                            <td>to</td>
                            <td align="right">6:00 PM</td>
                        </tr>
                        </tbody>
                    </table>
                    <div>
                        <p>&nbsp;</p>
                        <p><strong>Services Provided:</strong></p>
                        <ul>
                            <li>Psychiatric Medication Management</li>
                            <li>Psychotherapy</li>
                            <li>All ages served including children, adolescents and older adults</li>
                        </ul>
                    </div>
                    <div>&nbsp;</div>
                    <div>
                        <p><strong>Payment:</strong></p>
                        <ul>
                            <li>Insurance – We accept original Medicare and Blue Cross/Blue Shield</li>
                            <li>Self-payment (If you have an out-of-network benefit, we will help you with that)</li>
                            <li>Checks, credit/debit cards and cash accepted</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><strong>Public Transportation</strong>: We are right at the end of the Green line “L” train stop, and the Metra station, Pace and CTA buses are very nearby.&nbsp;&nbsp;</p>
                    </div>
                    <div>
                        <p><strong>Parking</strong>: Parking is $1.00/hour on the street lots. There is also a village parking garage across the street, in which parking is free for the first hour.</p>
                    </div>
                    <div>
                        <p><strong>Attractions</strong>: There are many shopping, dining and entertainment options in the area. There is a Whole Foods and Trader Joe’s within two blocks of the office and the Lake Cinemas is just down the street. Whatever your taste in food is, great restaurants are available.&nbsp; Come for your psychiatric or psychotherapy services at our office and stay in the area to enjoy.&nbsp;</p>
                    </div>
                    <div>
                        <p>&nbsp;</p>
                        <p><strong>To make an appointment, call</strong>: (630) 261-1210</p>
                        <p>&nbsp;</p>
                    </div>
                    <div>
                        <h2>Contact us</h2>
                    </div>
                    <div>
                        <div class="GrayLine">&nbsp;</div>
                    </div>
                    <div>


                        <!-- Fast Secure Contact Form plugin 4.0.19 - begin - FastSecureContactForm.com -->
                        <div style="clear:both;"></div>
                        <p>We respect your privacy and would like to remind you to not share any medical conditions or personal questions via this form. </p>
                        <div id="FSContact1" style="width:375px;">
                            <form action="http://www.discoverccs.org/?page_id=65#FSContact1" id="fscf_form1" method="post">

                                <div id="fscf_required1">
                                    <span style="text-align:left;">*</span> <span style="text-align:left;">indicates required field</span>
                                </div>


                                <div id="fscf_div_clear1_0" style="clear:both;">
                                    <div id="fscf_div_field1_0" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_name1">Name:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0;" type="text" id="fscf_name1" name="full_name" value="">
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_1" style="clear:both;">
                                    <div id="fscf_div_field1_1" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_email1">Email:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0;" type="text" id="fscf_email1" name="email" value="">
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_2" style="clear:both;">
                                    <div id="fscf_div_field1_2" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_field1_2">Subject:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <input style="text-align:left; margin:0;" type="text" id="fscf_field1_2" name="subject" value="">
                                        </div>
                                    </div>
                                </div>

                                <div id="fscf_div_clear1_3" style="clear:both;">
                                    <div id="fscf_div_field1_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                        <div style="text-align:left; padding-top:5px;">
                                            <label style="text-align:left;" for="fscf_field1_3">Message:<span style="text-align:left;">*</span></label>
                                        </div>
                                        <div style="text-align:left;">
                                            <textarea style="text-align:left; margin:0; width:99%; max-width:250px; height:120px;" id="fscf_field1_3" name="message" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>

                                <div style="text-align:left; padding-top:5px;">
                                </div>
                                <div id="fscf_captcha_image_div1" style="width:250px; height:65px; padding-top:2px;">
                                    <img id="fscf_captcha_image1" style="border-style:none; margin:0; padding:0px; padding-right:5px; float:left;" src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix=XKVxigwPHD2U9eG6" width="175" height="60" alt="CAPTCHA Image" title="CAPTCHA Image">
                                    <input id="fscf_captcha_prefix1" type="hidden" name="fscf_captcha_prefix1" value="XKVxigwPHD2U9eG6">
                                    <div id="fscf_captcha_refresh1">
                                        <a href="#" rel="nofollow" title="Refresh Image" onclick="fscf_captcha_refresh('1','/wp-content/plugins/si-contact-form/captcha','http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix='); return false;">
                                            <img src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/images/refresh.png" width="22" height="20" alt="Refresh Image" style="border-style:none; margin:0; padding:0px; vertical-align:bottom;" onclick="this.blur();"></a>
                                    </div>
                                </div>

                                <div id="fscf_captcha_field1" style="text-align:left; padding-top:5px;">
                                    <label style="text-align:left;" for="fscf_captcha_code1">CAPTCHA Code:<span style="text-align:left;">*</span></label>
                                </div>
                                <div style="text-align:left;">
                                    <input style="text-align:left; margin:0; width:50px;" type="text" value="" id="fscf_captcha_code1" name="captcha_code">
                                </div>

                                <div id="fscf_submit_div1" style="text-align:left; padding-top:2px;">
                                    <input type="submit" id="fscf_submit1" style="cursor:pointer; margin:0;" value="Submit">
                                </div>

                                <input type="hidden" name="fscf_submitted" value="0">
                                <input type="hidden" name="fs_postonce_1" value="5c44b31176912c6ce9983e3b23b56263,1423231263">
                                <input type="hidden" name="si_contact_action" value="send">
                                <input type="hidden" name="form_id" value="1">
                                <input type="hidden" name="mailto_id" value="1">

                            </form>
                        </div>
                        <div style="clear:both;"></div>

                        <!-- Fast Secure Contact Form plugin 4.0.19 - end - FastSecureContactForm.com -->

                    </div>
                    </div><!-- /the_content -->
                    <p class="details"></p>
                    </div>
                    </div>
                </div>

            </div>

        </div>
        </div>

        </div>
        </div>

        </div>

        <!--page Oak Park Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Melrose Park Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage14" data-role="page" data-theme="<?php echo $theme ?>">
        <div data-role="main" class="ui-content" >
        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
        <section class="navigation-newpage11">
            <ul class="newpage11 hidden">
                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
            </ul>
        </section>
            <img src="img/slider-images/slider04.jpg" alt="SLider" class="images-mobile">
            <div class="post-2476 page type-page status-publish hentry" id="post-2476">
                <h2>Melrose Park Office</h2>
                <p class="postmeta">February 21st, 2013</p>
                <div class="the_content">
                    <p><strong>Melrose Park Office</strong><br>
                        Our Lady of Mt. Carmel Church<br>
                        1115 North 23rd Avenue<br>
                        Melrose Park, IL 60160 (<a title="Melrose Park Location" href="http://maps.google.com/maps?q=1115 North 23rd Avenue Melrose Park IL 60160">map</a>)</p>
                    <p>To make an appointment, call: (630) 261-1210</p>
                    <p>To view our provider hours, <a href="http://www.discoverccs.org/?p=2487">click here</a>.</p>
                    <h2 class="GrayLine"></h2>
                    <h4>Contact us</h4>


                    <!-- Fast Secure Contact Form plugin 4.0.19 - begin - FastSecureContactForm.com -->
                    <div style="clear:both;"></div>
                    <p>We respect your privacy and would like to remind you to not share any medical conditions or personal questions via this form. </p>
                    <div id="FSContact1" style="width:375px;">
                        <form action="http://www.discoverccs.org/?page_id=2476#FSContact1" id="fscf_form1" method="post">

                            <div id="fscf_required1">
                                <span style="text-align:left;">*</span> <span style="text-align:left;">indicates required field</span>
                            </div>


                            <div id="fscf_div_clear1_0" style="clear:both;">
                                <div id="fscf_div_field1_0" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                    <div style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_name1">Name:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <input style="text-align:left; margin:0;" type="text" id="fscf_name1" name="full_name" value="">
                                    </div>
                                </div>
                            </div>

                            <div id="fscf_div_clear1_1" style="clear:both;">
                                <div id="fscf_div_field1_1" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                    <div style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_email1">Email:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <input style="text-align:left; margin:0;" type="text" id="fscf_email1" name="email" value="">
                                    </div>
                                </div>
                            </div>

                            <div id="fscf_div_clear1_2" style="clear:both;">
                                <div id="fscf_div_field1_2" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                    <div style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_field1_2">Subject:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <input style="text-align:left; margin:0;" type="text" id="fscf_field1_2" name="subject" value="">
                                    </div>
                                </div>
                            </div>

                            <div id="fscf_div_clear1_3" style="clear:both;">
                                <div id="fscf_div_field1_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                    <div style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_field1_3">Message:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <textarea style="text-align:left; margin:0; width:99%; max-width:250px; height:120px;" id="fscf_field1_3" name="message" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>

                            <div style="text-align:left; padding-top:5px;">
                            </div>
                            <div id="fscf_captcha_image_div1" style="width:250px; height:65px; padding-top:2px;">
                                <img id="fscf_captcha_image1" style="border-style:none; margin:0; padding:0px; padding-right:5px; float:left;" src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix=fPcNGb5TxnPkkPCh" width="175" height="60" alt="CAPTCHA Image" title="CAPTCHA Image">
                                <input id="fscf_captcha_prefix1" type="hidden" name="fscf_captcha_prefix1" value="fPcNGb5TxnPkkPCh">
                                <div id="fscf_captcha_refresh1">
                                    <a href="#" rel="nofollow" title="Refresh Image" onclick="fscf_captcha_refresh('1','/wp-content/plugins/si-contact-form/captcha','http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix='); return false;">
                                        <img src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/images/refresh.png" width="22" height="20" alt="Refresh Image" style="border-style:none; margin:0; padding:0px; vertical-align:bottom;" onclick="this.blur();"></a>
                                </div>
                            </div>

                            <div id="fscf_captcha_field1" style="text-align:left; padding-top:5px;">
                                <label style="text-align:left;" for="fscf_captcha_code1">CAPTCHA Code:<span style="text-align:left;">*</span></label>
                            </div>
                            <div style="text-align:left;">
                                <input style="text-align:left; margin:0; width:50px;" type="text" value="" id="fscf_captcha_code1" name="captcha_code">
                            </div>

                            <div id="fscf_submit_div1" style="text-align:left; padding-top:2px;">
                                <input type="submit" id="fscf_submit1" style="cursor:pointer; margin:0;" value="Submit">
                            </div>

                            <input type="hidden" name="fscf_submitted" value="0">
                            <input type="hidden" name="fs_postonce_1" value="8137fd2e488b1374fe855fe1fee77f81,1423231444">
                            <input type="hidden" name="si_contact_action" value="send">
                            <input type="hidden" name="form_id" value="1">
                            <input type="hidden" name="mailto_id" value="1">

                        </form>
                    </div>
                    <div style="clear:both;"></div>

                    <!-- Fast Secure Contact Form plugin 4.0.19 - end - FastSecureContactForm.com -->

                </div><!-- /the_content -->
                <p class="details"></p>
            </div>
        </div>
        </div>
        </div>

        </div>

        </div>
        </div>

        </div>
        </div>

        </div>

        <!--page Melrose Park Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page River Forest Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage15" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage12">
                        <ul class="newpage12 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider05.jpg" alt="SLider" class="images-mobile">
                    <div class="post-2499 page type-page status-publish hentry" id="post-2499">
                        <h2>River Forest Office</h2>
                        <p class="postmeta">February 22nd, 2013</p>
                        <div class="the_content">
                            <p><strong>River Forest Office</strong><br>
                                St. Vincent’s<br>
                                1530 Jackson<br>
                                River Forest IL 60305 (<a title="River Forest Office Location" href="http://maps.google.com/maps?q=1530 Jackson+River Forest+IL+60305">map</a>)</p>
                            <p>To make an appointment, call: (630) 261-1210</p>
                            <p>To view our provider hours, <a href="http://www.discoverccs.org/?p=2487">click here</a>.</p>
                            <h2>Contact us</h2>


                            <!-- Fast Secure Contact Form plugin 4.0.19 - begin - FastSecureContactForm.com -->
                            <div style="clear:both;"></div>
                            <p>We respect your privacy and would like to remind you to not share any medical conditions or personal questions via this form. </p>
                            <div id="FSContact1" style="width:375px;">
                                <form action="http://www.discoverccs.org/?page_id=2499#FSContact1" id="fscf_form1" method="post">

                                    <div id="fscf_required1">
                                        <span style="text-align:left;">*</span> <span style="text-align:left;">indicates required field</span>
                                    </div>


                                    <div id="fscf_div_clear1_0" style="clear:both;">
                                        <div id="fscf_div_field1_0" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_name1">Name:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_name1" name="full_name" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_1" style="clear:both;">
                                        <div id="fscf_div_field1_1" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_email1">Email:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_email1" name="email" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_2" style="clear:both;">
                                        <div id="fscf_div_field1_2" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_field1_2">Subject:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <input style="text-align:left; margin:0;" type="text" id="fscf_field1_2" name="subject" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="fscf_div_clear1_3" style="clear:both;">
                                        <div id="fscf_div_field1_3" style="clear:left; float:left; width:99%; max-width:550px; margin-right:10px;">
                                            <div style="text-align:left; padding-top:5px;">
                                                <label style="text-align:left;" for="fscf_field1_3">Message:<span style="text-align:left;">*</span></label>
                                            </div>
                                            <div style="text-align:left;">
                                                <textarea style="text-align:left; margin:0; width:99%; max-width:250px; height:120px;" id="fscf_field1_3" name="message" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>

                                    <div style="text-align:left; padding-top:5px;">
                                    </div>
                                    <div id="fscf_captcha_image_div1" style="width:250px; height:65px; padding-top:2px;">
                                        <img id="fscf_captcha_image1" style="border-style:none; margin:0; padding:0px; padding-right:5px; float:left;" src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix=5kpQ6nfTAam5KMf5" width="175" height="60" alt="CAPTCHA Image" title="CAPTCHA Image">
                                        <input id="fscf_captcha_prefix1" type="hidden" name="fscf_captcha_prefix1" value="5kpQ6nfTAam5KMf5">
                                        <div id="fscf_captcha_refresh1">
                                            <a href="#" rel="nofollow" title="Refresh Image" onclick="fscf_captcha_refresh('1','/wp-content/plugins/si-contact-form/captcha','http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/securimage_show.php?prefix='); return false;">
                                                <img src="http://www.discoverccs.org/wp-content/plugins/si-contact-form/captcha/images/refresh.png" width="22" height="20" alt="Refresh Image" style="border-style:none; margin:0; padding:0px; vertical-align:bottom;" onclick="this.blur();"></a>
                                        </div>
                                    </div>

                                    <div id="fscf_captcha_field1" style="text-align:left; padding-top:5px;">
                                        <label style="text-align:left;" for="fscf_captcha_code1">CAPTCHA Code:<span style="text-align:left;">*</span></label>
                                    </div>
                                    <div style="text-align:left;">
                                        <input style="text-align:left; margin:0; width:50px;" type="text" value="" id="fscf_captcha_code1" name="captcha_code">
                                    </div>

                                    <div id="fscf_submit_div1" style="text-align:left; padding-top:2px;">
                                        <input type="submit" id="fscf_submit1" style="cursor:pointer; margin:0;" value="Submit">
                                    </div>

                                    <input type="hidden" name="fscf_submitted" value="0">
                                    <input type="hidden" name="fs_postonce_1" value="b99be518f41baa7a914f65d3b39656fd,1423231701">
                                    <input type="hidden" name="si_contact_action" value="send">
                                    <input type="hidden" name="form_id" value="1">
                                    <input type="hidden" name="mailto_id" value="1">

                                </form>
                            </div>
                            <div style="clear:both;"></div>

                            <!-- Fast Secure Contact Form plugin 4.0.19 - end - FastSecureContactForm.com -->

                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>

        </div>
        <!--page River Forest Office ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page CCS Provider Hours ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage16" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage14">
                        <ul class="newpage14 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider06.jpg" alt="SLider" class="images-mobile">
                    <div class="post-2487 page type-page status-publish hentry" id="post-2487">
                    <h2>CCS Provider Hours</h2>
                    <p class="postmeta">January 6th, 2015</p>
                    <div class="the_content">
                    <p>This is our updated list of provider hours. If you have any questions, don’t hesitate to call us at <strong>(630) 261-1210</strong>. For general office hours, <a href="http://www.discoverccs.org/?p=2081">click here</a>.</p>
                    <table border="0" width="570" cellspacing="0" cellpadding="0">
                    <colgroup>
                        <col width="219">
                        <col width="200">
                        <col width="64">
                        <col width="23">
                        <col width="64"> </colgroup>
                    <tbody>
                    <tr>
                        <td height="20"><a title="Daniel B. Martinez, MD" href="http://www.discoverccs.org/?p=999">Daniel B. Martinez, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday (Oak Park)</td>
                        <td align="right">2:30 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday (2nd &amp; 4th)</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Samina Khattak, MD" href="http://www.discoverccs.org/?p=1017">Samina Khattak, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20">Kenneth G. Busch, MD</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Aamir Safdar, MD" href="http://www.discoverccs.org/?p=1001">Aamir Safdar, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">4:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">3:00 PM</td>
                        <td>to</td>
                        <td align="right">5:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">12:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3218">Craig Kestenberg, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">11:00 AM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3175">Alonso Cardenas, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">3:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20">Marian Glenn, Rn, APN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">5:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">4:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="&quot;20”">Erin Petrusic, RN, APN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday (Oak Park)</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday (Oak Park) (1st &amp; 3rd)</td>
                        <td align="right">10:00 PM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3070">Blair M. Brown, PsyD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Maria Valdez, LCPC" href="http://www.discoverccs.org/?p=1011">Maria Valdez. LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">12:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:30 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Rachel Mikula, LCSW" href="http://www.discoverccs.org/?p=1340">Rachel Mikula, LCSW</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">1:30 PM</td>
                        <td>to</td>
                        <td align="right">8:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">2:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Mercedes Cisneros-Watson, LCPC" href="http://www.discoverccs.org/?p=1040">Mercedes Cisneros-Watson, LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">8:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">8:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">11:00 AM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Ralph Romero, LCPC" href="http://www.discoverccs.org/?p=1021">Ralph Romero, LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday at CCS – Melrose Park</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Fr. Michael Garcia, OP, LCSW" href="http://www.discoverccs.org/?p=1079">Fr. Michael Garcia, OP, LCSW</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday at CCS – St. Vincent’s</td>
                        <td align="right">3:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">11:00 AM</td>
                    </tr>
                    <tr>
                        <td height="20">Eloisa Rosales, LCSW</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    </tbody>
                    </table>
                    </div><!-- /the_content -->
                    <p class="details"></p>
                    </div>
                    </div>

                </div>
            </div>

        </div>
        <!--page CCS Provider Hours ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage17" data-role="page" data-theme="<?php echo $theme ?>">
        <div data-role="main" class="ui-content" >
        <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
        <section class="navigation-newpage15">
            <ul class="newpage15 hidden">
                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
            </ul>
        </section>
            <img src="img/slider-images/slider07.jpg" alt="SLider" class="images-mobile">
            <div id="the_loop">
                <p class="address"><a href="http://www.discoverccs.org/" title="Home">Comprehensive Clinical Services, P.C.</a> » <a href="http://www.discoverccs.org/?cat=12/">blog</a></p>
                <div class="post-2294 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured category-testimonials" id="post-2294">
                    <h2>The End Of The Four Year Journey</a></h2>
                    <p class="postmeta">April 24th, 2012</p>
                    <div class="the_content">
                        <img width="110" height="165" src="http://www.discoverccs.org/wp-content/uploads/2012/04/testimony.jpg" class="attachment-230x165 wp-post-image" alt="The End Of The Four Year Journey">              <p>By Martha
                            Four year seems like a long time. A lot can happen and a lot can change, especially people. At the start of my journey, I was miserable. I felt lost and like I was all alone in the world. All that angers and sadness had built up from years of bullying and the harsh words of my peers. That’s when I began cutting. I never really understood why I did that, maybe it was … <a href="http://www.discoverccs.org/?p=2294">Read entire article »</a></p>
                    </div><!-- /the_content -->
                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=12" title="View all posts in blog" rel="category">blog</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a>, <a href="http://www.discoverccs.org/?cat=60" title="View all posts in Testimonials" rel="category">Testimonials</a></p>
                </div><!-- /post -->
                <div class="post-2181 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-dr-martinez category-featured" id="post-2181">
                    <h2><a href="http://www.discoverccs.org/?p=2181" rel="bookmark" title="Permanent Link toSupport For HB 5290: Bullying Prevention bill">Support For HB 5290: Bullying Prevention bill</a></h2>
                    <p class="postmeta">March 31st, 2012 | <a href="http://www.discoverccs.org/?p=2181#respond" title="Comment on Support For HB 5290: Bullying Prevention bill">Add a Comment</a></p>
                    <div class="the_content">
                        <img width="230" height="151" src="http://www.discoverccs.org/wp-content/uploads/2012/03/kids.jpg" class="attachment-230x165 wp-post-image" alt="Support For HB 5290: Bullying Prevention bill">              <p>We would like to share this news shared with us by Meryl Camin Sosa, Esq., Executive Director, of the Illinois Psychiatric Society.
                            The Illinois HB 5290 – Bullying Prevention bill is a step toward improving public policy on bullying.
                            It is very important to continue improving Illinois’ policies on bullying.&nbsp; Too many children are bullied and end up in in-patient units and therapeutic schools throughout Illinois (as well as nationally).&nbsp; Even though this bill is not as … <a href="http://www.discoverccs.org/?p=2181">Read entire article »</a></p>
                    </div><!-- /the_content -->
                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=12" title="View all posts in blog" rel="category">blog</a>, <a href="http://www.discoverccs.org/?cat=37" title="View all posts in Dr. Martinez" rel="category">Dr. Martinez</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                </div><!-- /post -->
                <div class="post-2153 post type-post status-publish format-standard has-post-thumbnail hentry category-adhd category-blog category-dr-martinez category-featured" id="post-2153">
                    <h2><a href="http://www.discoverccs.org/?p=2153" rel="bookmark" title="Permanent Link toADHD, Stimulant Medications and Cardiac Risk">ADHD, Stimulant Medications and Cardiac Risk</a></h2>
                    <p class="postmeta">February 20th, 2012 | <a href="http://www.discoverccs.org/?p=2153#respond" title="Comment on ADHD, Stimulant Medications and Cardiac Risk">Add a Comment</a></p>
                    <div class="the_content">
                        <img width="230" height="165" src="http://www.discoverccs.org/wp-content/uploads/2012/02/medicinepills.png" class="attachment-230x165 wp-post-image" alt="ADHD, Stimulant Medications and Cardiac Risk">              <p>Approximately 5% of children suffer from ADHD.  With so many kids with this condition, a large part of a child psychiatrist’s practice can be devoted to treating ADHD.  As with all other psychiatric conditions, it is critically important to rule out general medical issues that can be causing or worsening the psychiatric symptoms.
                            Physical examinations and screen tests (including labs) are very important in excluding these conditions. Additionally, making sure that medications are going … <a href="http://www.discoverccs.org/?p=2153">Read entire article »</a></p>
                    </div><!-- /the_content -->
                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=46" title="View all posts in ADHD" rel="category">ADHD</a>, <a href="http://www.discoverccs.org/?cat=12" title="View all posts in blog" rel="category">blog</a>, <a href="http://www.discoverccs.org/?cat=37" title="View all posts in Dr. Martinez" rel="category">Dr. Martinez</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                </div><!-- /post -->
                <div class="post-2143 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-dr-martinez category-featured category-medical-research tag-telemedicine tag-telepsychiatry" id="post-2143">
                    <h2><a href="http://www.discoverccs.org/?p=2143" rel="bookmark" title="Permanent Link toTelepsychiatry and the Future of Medicine">Telepsychiatry and the Future of Medicine</a></h2>
                    <p class="postmeta">February 9th, 2012 | <a href="http://www.discoverccs.org/?p=2143#respond" title="Comment on Telepsychiatry and the Future of Medicine">Add a Comment</a></p>
                    <div class="the_content">
                        <img width="118" height="165" src="http://www.discoverccs.org/wp-content/uploads/2012/02/telepyschiatry.jpg" class="attachment-230x165 wp-post-image" alt="Telepsychiatry and the Future of Medicine">              <p>Three years ago I started practicing telemedicine by taking care of patients approximately 120 west of Chicago over highly secure/encrypted internet connections.  I have found success and gratification in caring for patient through this technology, especially because I have been accessible to individuals in rural Illinois.
                            As a member of the  IL Psychiatric Society Telepsychiatry Committee, we know there is lots of work to do with this new form of practicing medicine.  … <a href="http://www.discoverccs.org/?p=2143">Read entire article »</a></p>
                    </div><!-- /the_content -->
                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=12" title="View all posts in blog" rel="category">blog</a>, <a href="http://www.discoverccs.org/?cat=37" title="View all posts in Dr. Martinez" rel="category">Dr. Martinez</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a>, <a href="http://www.discoverccs.org/?cat=49" title="View all posts in Medical Research" rel="category">Medical Research</a></p>
                </div><!-- /post -->
                <div class="post-2132 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-featured tag-psychiatry" id="post-2132">
                    <h2><a href="http://www.discoverccs.org/?p=2132" rel="bookmark" title="Permanent Link toPsychiatry H &amp; P">Psychiatry H &amp; P</a></h2>
                    <p class="postmeta">January 18th, 2012 | <a href="http://www.discoverccs.org/?p=2132#respond" title="Comment on Psychiatry H &amp; P">Add a Comment</a></p>
                    <div class="the_content">
                        <img width="165" height="165" src="http://www.discoverccs.org/wp-content/uploads/2010/12/document.png" class="attachment-230x165 wp-post-image" alt="Psychiatry H &amp; P">              <p>Identifying Information:

                            Age
                            Ethnic racial background
                            Marital status + number of years couple has been together
                            Home lived + number of years
                            School attended+ place worked-how many years

                            Chief complaint: “patient’s own words.”
                            HPI

                            1st time pt ever saw a psychiatrist
                            Mention the top 5/6 things you want us to discuss today because the last thing I want to do is waste your time
                            5 things that must be ruled out in psychiatry:

                            Mood (Depression, Mania, Anxiety)
                            Psychosis
                            Substance use
                            ± Suicidal Ideations (SI)àplan/intent?
                            ±Homicidal Ideation (HI)
                            Legal problem issues
                            Tobacco use
                            Major … <a href="http://www.discoverccs.org/?p=2132">Read entire article »</a></p>
                    </div><!-- /the_content -->
                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=12" title="View all posts in blog" rel="category">blog</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                </div><!-- /post -->
                <div class="navigation">
                    <div class="left"></div>
                    <div class="right"><a href="http://www.discoverccs.org/?cat=12&amp;paged=2">Next Page »</a></div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page Blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Dr. Daniel Martinez ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage18" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage16">
                        <ul class="newpage16 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider08.jpg" alt="SLider" class="images-mobile">
                    <div class="post-3444 post type-post status-publish format-standard hentry category-dr-martinez category-featured" id="post-3444">
                        <h2>Dr. Martinez and Tony Join Rush-Oak Park Hospital</h2>
                        <p class="postmeta">May 1st, 2014</p>
                        <div class="the_content">
                            <p>Dr. Daniel Martinez and Alan “Tony” Amberg, our psychiatric nurse practitioner, finalized their credentialing to the private medical staff of Rush Oak Park Hospital.&nbsp; Located walking distance from our new Oak Park location, Rush Oak Park is part of Rush University Medical Center and offers many top flight medical and surgical services.&nbsp; However, they have no inpatient psychiatric unit or staff.&nbsp; Dr. Dan and Tony have already been at work consulting on and seeing patients from the medical floors, ICU and Emergency Room.&nbsp; Tony also just passed his Advanced Cardiac Life Support (ACLS) at Rush Oak Park Hospital.&nbsp;
                                … <a href="http://www.discoverccs.org/?p=3444">Read entire article »</a></p>
                        </div><!-- /the_content -->
                        <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=37" title="View all posts in Dr. Martinez" rel="category">Dr. Martinez</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>

        </div>
        <!--page Dr. Daniel Martinez ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page articles ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage19" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage17">
                        <ul class="newpage17 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider09.jpg" alt="SLider" class="images-mobile">
                    <div class="post-3416 post type-post status-publish format-standard has-post-thumbnail hentry category-articles category-featured" id="post-3416">
                        <h2>Bill Giving Psychologists RX Authority Puts Patients at Risk</h2>
                        <p class="postmeta">May 14th, 2014</p>
                        <div class="the_content">
                            <img width="163" height="165" src="http://www.discoverccs.org/wp-content/uploads/2014/05/Rx-Pic-298x300.jpg" class="attachment-230x165 wp-post-image" alt="Bill Giving Psychologists RX Authority Puts Patients at Risk">              <p>State legislation has been considering a bill, called RxP, that would give psychologists the authority to prescribe medications even though they have no medical training. Proponents of the bill say that RxP will improve access to mental health services in Illinois, but opponents of the bill, including Dr. Martinez, disagree. In an op-ed in the Illinois Observer about the issue, Dr. Martinez states that it is “dangerous to dilute the quality of care [due to … <a href="http://www.discoverccs.org/?p=3416">Read entire article »</a></p>
                        </div><!-- /the_content -->
                        <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=62" title="View all posts in Articles" rel="category">Articles</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page articles ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page medical students ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage20" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage18">
                        <ul class="newpage18 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage21" data-transition="<?php echo $transitionefect ?>">About</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_1.png" alt="SLider" class="images-mobile">
                    <div class="post-3014 post type-post status-publish format-standard hentry category-medical-student-presentations category-medical-students" id="post-3014">
                        <h2>Bath Salts Intoxication Presentation</h2>
                        <p class="postmeta">August 5th, 2013</p>
                        <div class="the_content">
                            <p>This is a presentation on Bath Salts Intoxication by medical student Justina Samuel.
                                … <a href="http://www.discoverccs.org/?p=3014">Read entire article »</a></p>
                        </div><!-- /the_content -->
                        <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=66" title="View all posts in Medical Student Presentations" rel="category">Medical Student Presentations</a>, <a href="http://www.discoverccs.org/?cat=18" title="View all posts in Medical Students" rel="category">Medical Students</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page medical students ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page ABOUT US ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage21" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage19">
                        <ul class="newpage19 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_2.png" alt="SLider" class="images-mobile">
                    <div class="post-2 page type-page status-publish hentry" id="post-2">
                        <h2>About</h2>
                        <p class="postmeta">October 25th, 2010</p>
                        <div class="the_content">
                            <p><strong>ABOUT US</strong></p>
                            <p>Welcome to Comprehensive  Clinical Services. At Comprehensive Clinical Services, we treat  children, adolescent, as well as adults. Our staff members are  specialized in treating conditions that appear throughout the age  spectrum. Some of the most common disorders include:</p>
                            <p><strong>Childhood Disorders:</strong> Attention Deficit Hyperactivity  Disorder (ADHD), Learning Disorders, Autism, Conduct Disorders,  Separation Anxiety Disorder, Communication Disorders</p>
                            <p><strong>Anxiety:</strong> Obsessive-Compulsive Disorder, Posttaumatic Stress Disorder, Social Phobia</p>
                            <p><strong>Psychosis:</strong> Schizophrenia, Delusional Disorder</p>
                            <p><strong>Addictions:</strong> Alcoholism, Drug Addiction, Pathological Gambling, Court order for driving under the influence</p>
                            <hr><strong>OUR MISSION</strong> is to empower society by helping  individuals, of all ages, attain their fullest potential through their  individual expression of well-being. We seek to fulfill our mission by  taking into consideration the medical, psychological, sociological,  cultural, and spiritual aspects of the person/patient. We want to  instill hope in every patient by providing comprehensive mental health  assessments and various support services. Also, by using a  strength-based model, the patient is supported towards healing,  recovery, and a fuller existence.<br>
                            <hr>
                            <p><strong>OUR VISION</strong> is to build a service environment that  promotes safety, openness, warmth, and peace. Through a calming and  inviting space and a competent, respectful, and sensitive staff, the  mission of empowerment will be fostered. Our task is to deliver a  service line that encompasses the needs for attaining mental health and  well-being. Our philosophy follows a comprehensive assessment free of  preconceived agendas followed by concrete recommendations. At CCS we  believe there are five aspects of the individual that need to be  assessed:</p>
                            <p><strong>BIOLOGICAL:</strong> A board certified psychiatrist will  consider all physical and chemical conditions that may cause or  contribute to the individual’s illness. Using medication and physical  treatments, the physician seeks to help the individual restore mind and  body well-being.</p>
                            <p><strong>PSYCHOLOGICAL:</strong> A licensed psychotherapist works to  help the individual better understand how a person thinks and feels  about himself/herself. Once clients understand their feelings and  thoughts, they are encouraged to change their behaviors and attitudes.</p>
                            <p><strong>SOCIOLOGICAL:</strong> A mental health professional must also  help individuals evaluate and make necessary changes in the environment  that will promote inner peace and well-being. Since human beings are  social by nature, their relationships will influence their inner life  and mental health.</p>
                            <p><strong>CULTURAL:</strong> The areas where we live, the ethnic groups  that we come from, and the level of education we achieve, all influence  our thoughts about ourselves and the world we live in. For this reason,  exploring backgrounds, identities, and disabilities are essential for  all individuals seeking greater self-awareness and an improved  existence.</p>
                            <p><strong>SPIRITUAL:</strong> At CCS, discovering a person’s values and  belief systems is often instrumental in achieving sound mental health.  The mental health professionals at CCS will encourage and assist  individuals to further develop the sense of self and purpose in life.</p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page ABOUT US ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Our Mission ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage22" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage20">
                        <ul class="newpage20 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/Screenshot_3.png" alt="SLider" class="images-mobile">
                    <div class="post-628 page type-page status-publish hentry" id="post-628">
                        <h2>Mission, Vision & Philosophy</h2>
                        <p class="postmeta">November 21st, 2010</p>
                        <div class="the_content">
                            <p><strong>Our Mission</strong> is to empower society by helping individuals, of all ages, attain their fullest potential through their individual expression of well-being.</p>
                            <p><strong>Our Philosophy</strong> is to serve with integrity, respect and compassion.</p>
                            <p><strong>Our Vision</strong> is to build a service environment that promotes safety, openness, warmth and peace. We seek to provide a calming and inviting space with competent, respectful and sensitive staff.</p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page Our Mission ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page proffesional ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage23" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage21">
                        <ul class="newpage21 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider01.jpg" alt="SLider" class="images-mobile">
                    <div class="post-999 post type-post status-publish format-standard has-post-thumbnail hentry category-staff" id="post-999">
                        <h2>Dr. Daniel B. Martínez</h2>
                        <p class="postmeta">March 17th, 2014</a></p>
                        <div class="the_content">
                            <img width="132" height="165" src="http://www.discoverccs.org/wp-content/uploads/2010/10/DrDanielMartinez-240x300.jpg" class="attachment-230x165 wp-post-image" alt="Dr. Daniel B. Martínez">              <p>Dr. Daniel B. Martínez is a licensed physician and surgeon. He is bilingual/bicultural(Spanish) and Board Certified in Child, Adolescent and Adult Psychiatry.
                                Dr. Martinez provides psychiatric evaluations for children and adults as well as medication monitoring and education for his patients and their families.
                                Dr. Martinez is greatly involved in educating the community. He provides trainings to colleagues and lay individuals. His areas of interest include ADHD, Anxiety Disorders, public and cultural issues in psychiatric treatment.
                                … <a href="http://www.discoverccs.org/?p=999">Read entire article »</a></p>
                        </div><!-- /the_content -->
                        <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=11" title="View all posts in Staff" rel="category">Staff</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page professional ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page provider ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage24" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage22">
                        <ul class="newpage22 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider02.jpg" alt="SLider" class="images-mobile">
                    <div class="post-686 post type-post status-publish format-standard has-post-thumbnail hentry category-office" id="post-686">
                    <h1 id="post-headline">Discover CCS Provider Hours</h1>
                    <p class="postmeta">October 28th, 2014</p>
                    <div class="the_content">
                    <p>This is our updated list of provider hours. If you have any questions, don’t hesitate to call us at <strong>(630) 261-1210</strong>. For general office hours, <a href="http://www.discoverccs.org/?p=2081">click here</a>.</p>
                    <table border="0" width="570" cellspacing="0" cellpadding="0">
                    <colgroup>
                        <col width="219">
                        <col width="200">
                        <col width="64">
                        <col width="23">
                        <col width="64"> </colgroup>
                    <tbody>
                    <tr>
                        <td height="20"><a title="Daniel B. Martinez, MD" href="http://www.discoverccs.org/?p=999">Daniel B. Martinez, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday (Oak Park)</td>
                        <td align="right">2:30 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday (2nd &amp; 4th)</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Samina Khattak, MD" href="http://www.discoverccs.org/?p=1017">Samina Khattak, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20">Kenneth G. Busch, MD</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Aamir Safdar, MD" href="http://www.discoverccs.org/?p=1001">Aamir Safdar, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">4:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">3:00 PM</td>
                        <td>to</td>
                        <td align="right">5:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">12:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3218">Craig Kestenberg, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">11:00 AM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3175">Alonso Cardenas, MD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">3:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20">Marian Glenn, Rn, APN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">5:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">4:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="&quot;20”">Erin Petrusic, RN, APN</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday (Oak Park)</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday (Oak Park) (1st &amp; 3rd)</td>
                        <td align="right">10:00 PM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a href="http://www.discoverccs.org/?p=3070">Blair M. Brown, PsyD</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Maria Valdez, LCPC" href="http://www.discoverccs.org/?p=1011">Maria Valdez. LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">1:00 PM</td>
                        <td>to</td>
                        <td align="right">7:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">12:00 PM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:30 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Rachel Mikula, LCSW" href="http://www.discoverccs.org/?p=1340">Rachel Mikula, LCSW</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">1:30 PM</td>
                        <td>to</td>
                        <td align="right">8:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">2:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Mercedes Cisneros-Watson, LCPC" href="http://www.discoverccs.org/?p=1040">Mercedes Cisneros-Watson, LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">6:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Wednesday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">8:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Thursday</td>
                        <td align="right">10:00 AM</td>
                        <td>to</td>
                        <td align="right">8:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Friday</td>
                        <td align="right">11:00 AM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Ralph Romero, LCPC" href="http://www.discoverccs.org/?p=1021">Ralph Romero, LCPC</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday at CCS – Melrose Park</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">1:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"><a title="Fr. Michael Garcia, OP, LCSW" href="http://www.discoverccs.org/?p=1079">Fr. Michael Garcia, OP, LCSW</a></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Monday</td>
                        <td align="right">2:00 PM</td>
                        <td>to</td>
                        <td align="right">5:00 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Tuesday at CCS – St. Vincent’s</td>
                        <td align="right">3:00 PM</td>
                        <td>to</td>
                        <td align="right">6:30 PM</td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">8:00 AM</td>
                        <td>to</td>
                        <td align="right">11:00 AM</td>
                    </tr>
                    <tr>
                        <td height="20">Eloisa Rosales, LCSW</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td height="20"></td>
                        <td>Saturday</td>
                        <td align="right">9:00 AM</td>
                        <td>to</td>
                        <td align="right">4:00 PM</td>
                    </tr>
                    </tbody>
                    </table>
                    </div><!-- /the_content -->

                    <div class="share_save_container">
                        <ul class="share_save_list">
                            <li><a href=" http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686&amp;title=Discover%20CCS%20Provider%20Hours" title="Digg this!" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/digg.png" alt="Digg this!"></a></li>
                            <li><a href=" http://del.icio.us/post?v=4&amp;noui&amp;jump=close&amp;url=http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686&amp;title=Discover%20CCS%20Provider%20Hours" title="Add to del.icio.us!" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/delicious.png" alt="Add to del.icio.us!"></a></li>
                            <li><a href="http://www.stumbleupon.com/submit?url=http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686&amp;title=Discover%20CCS%20Provider%20Hours" title="Stumble this!" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/stumbleupon.png" alt="Stumble this!"></a></li>
                            <li><a href=" http://technorati.com/faves?add=http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686" title="Add to Techorati!" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/technorati.png" alt="Add to Techorati!"></a></li>
                            <li><a href="http://twitter.com/?status=Discover%20CCS%20Provider%20Hours%20http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686" title="ReTweet" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/twitter.png" alt="Twitter"></a></li>
                            <li><a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686&amp;t=Discover%20CCS%20Provider%20Hours" title="Share on Facebook!" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/facebook.png" alt="Share on Facebook!"></a></li>
                            <li><a href=" http://reddit.com/submit?url=
http%3A%2F%2Fwww.discoverccs.org%2F%3Fp%3D686&amp;title=Discover%20CCS%20Provider%20Hours" rel="nofollow" title="Reddit!" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/reddit.png" alt="Reddit!"></a></li>
                            <li><a href="ymsgr:sendim?m=http://www.discoverccs.org/?p=686" title="Yahoo Messenger" rel="nofollow" target="_blank"><img src="http://www.discoverccs.org/wp-content/themes/cover-wp/images/share/yim.png" alt="Yahoo Messenger"></a></li>
                        </ul><!-- /share_save_list -->
                    </div><!-- /share_save_container -->

                    <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=16" title="View all posts in Office" rel="category">Office</a> </p>
                    <div id="related">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page provider ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page What is an Advanced ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage25" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage23">
                        <ul class="newpage23 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider05.jpg" alt="SLider" class="images-mobile">
                    <div class="post-3439 page type-page status-publish hentry" id="post-3439">
                        <h2>What is an Advanced Practitioner Nurse (APN)?</h2>
                        <p class="postmeta">October 28th, 2014</p>
                        <div class="the_content">
                            <p>Many people hear a lot of terms in regards to nurses and what can do.&nbsp; So here is a quick guide to nursing and why seeing an APN is a perfectly good choice for your care:</p>
                            <p>APN – Advanced Practice Nurse (minimum of a Master’s of Nursing degree, often board certified in a specialty, such as CCS’ APNs who are specialized in psychiatry.)&nbsp; APNs include four types of nurses who can have their own patients.&nbsp; They can assess, diagnose, order labs and medications.&nbsp; The four advance practice nurses are:</p>
                            <ul>
                                <li>Nurse Practitioners</li>
                                <li>Nurse Anesthetists</li>
                                <li>Nurse Midwives</li>
                                <li>Clinical Nurse Specialists (usually found in hospitals)</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>In Illinois, an APN works in collaboration with a medical doctor who serves as a resource and can help troubleshoot complex situations.&nbsp; Our APNs collaborate with our president, <a href="http://www.discoverccs.org/?p=999">Dr. Daniel Martinez</a>.</p>
                            <p>APNs hearken back to the days when nurses did a great deal of the care that today we associate with doctors.&nbsp; Nurses provided care in poor and rural areas, delivered babies and were the assistants to surgeons – which meant they did the anesthesia and pain control.&nbsp; Still today, in many states where there are fewer physicians, APNs practice independently and provide a critical part of the care network.</p>
                            <p>So when you have an appointment with Erin Petrusic or Marian Glenn, know that you are with APNs who have spent time specializing in psychiatric nursing and have trained at Rush University – the number 3 program in the country for psychiatric APNs.&nbsp; Also know that we are a training site for new APNs at Rush, so if you work with Greg Gaffney or Andrea Miller<i>,</i> know that you are in good hands!</p>
                            <p>&nbsp;</p>
                            <p>What does PMHP-BC mean?&nbsp; <b><i>Psychiatric- Mental Health Nurse Practitioner, Board Certified</i></b></p>
                            <p><b><i>&nbsp;</i></b></p>
                            <p><b>A quick guide to other kinds of nurses:</b></p>
                            <p>RN – Registered Nurse (minimum of an Associate degree, most now have a Bachelor’s, plus considerable additional medical and nursing training.&nbsp; Able to administer all medications (oral, shots, patches and intravenous), do nursing care planning, give direction to LPNs and techs, give patient teaching about medications and their health.</p>
                            <p>LPN – Licensed Practical Nurse (1 year of nursing school), able to administer regular simple medications and perform basic care tasks – usually in Nursing Homes).</p>
                            <p>CNA – Certified Nursing Assistant (75 hours of training) – may perform basic care tasks for patients, such as bathing, feeding, etc.</p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page What is an Advanced ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page testiomonial ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage26" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage24">
                        <ul class="newpage24 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider09.jpg" alt="SLider" class="images-mobile">
                    <div class="post-133 page type-page status-publish hentry" id="post-133">
                        <h2>CCS Testimonials</h2>
                        <p class="postmeta">October 31st, 2010</p>
                        <div class="the_content">
                            <div style="padding: 0.5em 0em;">“I would like to let Dr. Martinez know that my son has been off medication since July 2012. Since we took him off, he has been doing very well at school and at home. There are no more serious behavioral issues. We mention Dr. Martinez’s name often we we talk about good psychiatrists with other parents.”&nbsp;-&nbsp; T.M.</div>
                            <hr>
                            <div style="padding: 0.5em 0em;">“Dr. Martinez and his staff have been great. We have seen great results since we started seeing him.” -Parents of L.B.</div>
                            <hr>
                            <div style="padding: 0.5em 0em;">“Thanks for your help. The medicine really worked…My principal is nominating me for The Most Improved Student.” -Leo P.</div>
                            <hr>
                            <div style="padding: 0.5em 0em;">“We’re very thankful for Dr. Martinez’s guidance and the discipline tips he has provided to help us with our children. We have seen the difference and we’re glad we asked him for help.” -The Sanchez Family</div>
                            <hr>
                            <div style="padding-top: 0.5em;">“I have had five nervous breakdowns, back to back.&nbsp; The cause was that I stopped taking my medications for eight months straight!&nbsp; When the doctor would test my blood, I would take the medicine three days in a row before the test so that it would show that I was taking it.&nbsp; I swore I could fool Dr. Martinez, yet I was fooling myself.&nbsp; You should have seen what I endured during those breakdowns – police, paramedics, ambulances.&nbsp; I feel so horrible about it.&nbsp; Thank the good Lord that they are all now aware of my illness and take great care of me.&nbsp; This is the reason I can’t leave Chicago.&nbsp; I fear that I could get seriously hurt if the police did not know me.&nbsp; Actually, when I get like that, I am harmless.&nbsp; I would never hurt anyone around me!&nbsp; And my children know this too.</div>
                            <div style="text-indent: 20px;">When I take my medicine, I love life.&nbsp; I wake up to anything and everything the Lord has planned for me.&nbsp; I go to Mass every Sunday.&nbsp; I take my children to their doctor’s appointment.&nbsp; I take my dog to the vet.&nbsp; I clean the house.&nbsp; I go by my friends.&nbsp; I help out.&nbsp; I do groceries and laundry.&nbsp; I love it.&nbsp; I love getting up early and being on the go all the time.&nbsp; It keeps my mind busy, instead of worrying about the war or the recession that we are in!&nbsp; My kids can vow that I am the best mom in the world.&nbsp; I don’t hesitate to run to their rescue, no matter what it is!</div>
                            <div style="text-indent: 20px; padding-bottom: .5em;">My children are my life and as long as they are okay, I’m okay.&nbsp; I raised them very Catholic and they know not to do anything bad in this society.&nbsp; When I feel they are about to do something bad, I straighten them out a little bit.&nbsp; Then, they know better.&nbsp; God Bless America!!!” -E.H.</div>
                            <hr>
                            <div style="padding-top: 0.5em;">“Our family came to see Dr. Martinez because our young daughter was suffering from extremely high levels of anxiety. Dr. Martinez took time to understand our daughter’s specific symptoms before recommending a course of treatment.</div>
                            <div style="text-indent: 20px;">We, as parents, were very concerned about starting our daughter on medication but Dr. Martinez spent time with us until we were comfortable with the treatment plan. He took away the fear of the medicine and helped us realize that we were being responsible parents by giving our daughter access to this helpful tool.</div>
                            <div style="text-indent: 20px; padding-bottom: .5em;">I am happy to say that we have a different child today. Our daughter’s anxiety has been greatly reduced and we are thrilled to see her thriving at home, at school, and with friends. The medicine Dr. Martinez prescribed has been nothing short of miraculous in our eyes and we are very greatful for Dr. Martinez’s wisdom and compassion. We would recommend his services to anyone.” -D.S.</div>
                            <hr>
                            <div style="padding: 0.5em 0em;">“Dr. Martinez has a lovely practice. I truly respect all of the wonderful work he is doing and the services he provides!” -B.M</div>
                            <hr>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page testiomonial ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page friends ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage28" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage26">
                        <ul class="newpage26 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider07.jpg" alt="SLider" class="images-mobile">
                    <div class="post-1564 post type-post status-publish format-standard hentry category-circle-of-friends" id="post-1564">
                        <h2>Raymond E. Robertson: 1922 – 2007</h2>
                        <p class="postmeta">February 9th, 2013</p>
                        <div class="the_content">
                            <p>In memory of Raymond E. Robertson, a dear friend and mentor of Dr. Martinez: 1922-2007.
                                To read an article about Dr. Robertson, click here.
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                Gestalt prayer



                                I do my thing and you do your thing. I am not in this world to live up to your expectations, And you are not in this world to live up to mine. You are you, and I am I, and if by chance we find each other, it’s beautiful. If not, it can’t be helped. (Fritz Perls, “Gestalt Therapy Verbatim”, 1969)



                                … <a href="http://www.discoverccs.org/?p=1564">Read entire article »</a></p>
                        </div><!-- /the_content -->
                        <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=40" title="View all posts in Circle of Friends" rel="category">Circle of Friends</a></p>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page friends ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page Medical Student Rotation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage29" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage27">
                        <ul class="newpage27 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider03.jpg" alt="SLider" class="images-mobile">
                    <div class="post-128 page type-page status-publish hentry" id="post-128">
                        <h2>Medical Student Rotation</h2>
                        <p class="postmeta">September 9th, 2013</p>
                        <div class="the_content">
                            <p>Hello,</p>
                            <p>Thank you for considering CCS as your site for your psychiatry rotation.&nbsp; I have been training medical students for fifteen years, starting with Loyola medical students, then Northwestern and UIC medical students.&nbsp; For over three years, I have had medical students from foreign medical schools participate in my clerkship.&nbsp; My hope is to provide students with not only a quality educational experience but also an opportunity for self-discovery as you move into the final stages of your medical education and then choose among the various career paths that will become available to you.</p>
                            <p>I presently serve as Clinical Associate Professor&nbsp; of the Departments of Psychiatry at the University of IL at Chicago Medical Center.&nbsp; You will be exposed to administrative medicine and to working with indigent populations through my roles as Medical Director for two Chicago community mental health agencies.&nbsp; You will also experience working with well insured individuals through CCS, my private practice.</p>
                            <p>Finally, my hope is to instill in you the important duty of responsible citizenship.&nbsp; Because of your medical training, you will have the important role of being a physician in whichever community you live.&nbsp; Through my involvement in the IL Mental Health Planning and Advisory Council and my role as Chair of the Child and Adolescent Committee for the IL Psychiatry Society, I work to influence proper use of public funds by informing IL Legislature and national movements towards an improved and healthier society.</p>
                            <p>To begin your rotation with us, please give us a call so that we can help you establish your individualized clerkship.&nbsp; Again, thanking for considering and choosing us as your site.&nbsp; We look forward to your time with us.</p>
                            <p>Daniel B. Martinez, M.D.<br> President, CCS</p>
                            <p>——————————————————————————————————————–</p>
                            <p>The Following is Important Information and Documents Related to Your Medical Student Rotation.</p>
                            <ul>
                                <li><a href="http://www.discoverccs.org/?p=701">Medication Training for Non-Medical Staff</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2013/10/How-to-Present-Your-Case.pdf">How to Present Your Case</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2011/08/The-Prescription-Process.pdf">The Prescription Process</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2013/11/AIMS-Test-form.pdf">AIMS Form</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2014/01/General-Schedule-for-CCS-Locations-V.2.pdf">General Schedule for CCS Sites</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2013/12/Guide-for-Seeing-Patients.pdf">Guide for Seeing Patients</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2013/12/Focused-Psychiatric-Interview.pdf">Focused Psychiatric Interview</a></li>
                                <li><a href="http://www.discoverccs.org/wp-content/uploads/2013/12/The-Psychiatric-Interview-and-Mental-Status-Examination.pdf">The Psychiatric Interview and Mental Status Examination</a></li>
                                <li><a href="http://www.discoverccs.org/?cat=18">Medical Student Presentations</a></li>
                            </ul>
                            <p><strong> </strong><br> <strong></strong></p>
                            <p>&nbsp;</p>
                            <p>———————————————————————————————————————</p>
                            <p>Meet Our Alumni</p>
                            <h2><a href="http://www.discoverccs.org/?attachment_id=1123" rel="attachment wp-att-1123"><img class="alignnone size-thumbnail wp-image-1123" title="Rashmi" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/Rashmi-150x150.jpg" width="150" height="150"> <img title="dsc01992" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/dsc019921-73x150.jpg" width="96" height="152"> <img class="alignnone size-thumbnail wp-image-1124" title="Sunil, Cheryl and Hemal" alt="Sunil, Cheryl and Hemal" src="http://www.discoverccs.org/wp-content/uploads/2010/10/SunilCherylHemal-150x150.jpg" width="150" height="150"> <img class="alignnone size-thumbnail wp-image-1122" title="CrystalEvongRachel" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/CrystalEvongRachel-150x150.jpg" width="150" height="150"></a><a href="http://www.discoverccs.org/?attachment_id=292" rel="attachment wp-att-292"> <img title="dsc01878_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/dsc01878_thumb1.jpg" width="123" height="149"> <img class="alignnone size-thumbnail wp-image-306" title="may-24th-2010-001_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/may-24th-2010-001_thumb1-129x150.jpg" width="129" height="150"> <img class="alignnone size-thumbnail wp-image-959" title="Shawn Alam is a medical student from Xavier University" alt="Shawn Alam is a medical student from Xavier University" src="http://www.discoverccs.org/wp-content/uploads/2010/10/ShawnAlam-150x150.jpg" width="150" height="150"> <img title="img_1441_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/img_1441_thumb1-115x150.jpg" width="123" height="154"></a><a href="http://www.discoverccs.org/?attachment_id=298" rel="attachment wp-att-298"> <img class="alignnone size-thumbnail wp-image-303" title="march-17-2010-265_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/march-17-2010-265_thumb1-129x150.jpg" width="133" height="160"> <img class="alignnone size-thumbnail wp-image-301" title="march-17-2010-149_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/march-17-2010-149_thumb1-129x150.jpg" width="137" height="159"> <img class="alignnone size-thumbnail wp-image-291" title="david-brown_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/david-brown_thumb1-150x129.jpg" width="146" height="156"> <img class="alignnone size-thumbnail wp-image-298" title="june-9th-2010-003_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/june-9th-2010-003_thumb1-129x150.jpg" width="133" height="156"></a></h2>
                            <p><a href="http://www.discoverccs.org/?attachment_id=305" rel="attachment wp-att-305"><img class="alignnone size-thumbnail wp-image-305" title="may-24th-2010_thumb_1" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/may-24th-2010_thumb_11-129x150.jpg" width="129" height="150"></a> <img class="alignnone size-thumbnail wp-image-302" title="march-17-2010-260_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/march-17-2010-260_thumb1-129x150.jpg" width="129" height="150"> <img class="alignnone size-thumbnail wp-image-299" title="june-9th-2010-004_thumb_1" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/june-9th-2010-004_thumb_11-129x150.jpg" width="146" height="154"> <a href="http://www.discoverccs.org/?attachment_id=295" rel="attachment wp-att-295"><img class="alignnone size-thumbnail wp-image-295" title="img_1442_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/img_1442_thumb1-115x150.jpg" width="147" height="158"></a></p>
                            <p><a href="http://www.discoverccs.org/?attachment_id=297" rel="attachment wp-att-297"><img class="alignnone size-thumbnail wp-image-297" title="june-9th-2010-002_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/june-9th-2010-002_thumb1-128x150.jpg" width="128" height="150"></a> <img class="alignnone size-thumbnail wp-image-307" title="victor_thumb" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/victor_thumb1-126x150.jpg" width="126" height="150"> <a href="http://www.discoverccs.org/?attachment_id=1806" rel="attachment wp-att-1806"><img class="size-thumbnail wp-image-1806 alignnone" title="Nahazia" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/Nahazia-150x150.png" width="152" height="150"></a> <a href="http://www.discoverccs.org/?attachment_id=1808" rel="attachment wp-att-1808"><img class="alignnone size-thumbnail wp-image-1808" title="Babatunde" alt="" src="http://www.discoverccs.org/wp-content/uploads/2010/10/Babatunde1-150x150.png" width="150" height="150"></a></p>
                            <p><span id="more-128"></span><br> I am pleased to reflect on my most recent scholastic experience during my clerkship with Dr. Martinez.<br> I didn’t expect my psychiatry rotation to be so exciting, thanks to Dr.&nbsp; Martinez my clerkship was a wonderful experience.&nbsp; Dr. Martinez has an excellent knowledge of the field both in adult and child psychiatry and keeps it exciting for himself and his students.&nbsp; I was fortunate to attend 4 different locations and experience the various aspects of psychiatric disorders of adult, and of childhood.&nbsp; I also witnessed Telepsychiatry which I found to be one of the most amazing tools, as it gives an opportunity to those who doesn’t have easy access to psychiatric care; it’s a form of video conferencing that allows for interaction between patient and psychiatrist. I learned the basic diagnostic categories as documented in DSM IV, Psychopharmacology, psychotherapy, managing patients under stress and an excellent understating of outpatient management.&nbsp;&nbsp; I was able to learn the different aspects of business in the medical field along with <span style="text-decoration: underline;">confidentiality setting</span> in all the offices that I attended.<br> What I liked most about this clerkship was that we came across patients from different settings, we were trained in regards to the patient encounter and what to expect thereafter.&nbsp; Dr. Martinez gives you a summary of the patient so you get an idea of what the overall picture is.&nbsp; Not only that, but he will allow you to interact with the patient one on one at times so you can get a feel of the real experience, gives you an insight into the subject matter and boosts your confidence in dealing with variety of patients.&nbsp; Differential diagnoses were discussed along with treatment options that were available.&nbsp; We were regularly encouraged to bring about questions and topics which we could discuss at any time of the day.</p>
                            <p>Psychiatry was not one of my fields of interest earlier, now that I am done with psychiatry rotations, it has opened up options for me and am looking forward to future clinical setting especially in child psychiatry where I’d be more interested to work in.</p>
                            <p>Thank you Dr. Martinez for all your support, advice and above all for being a great mentor.<br> <strong>Nehazia</strong></p>
                            <p>————————————————————————————————————————————————-</p>
                            <p>The psychiatry rotation with Dr. Martinez was very educative and insightful with a variety of patients that we got to see with him. We almost saw a patient with every kind of psychiatric illness mentioned in our syllabus and the ones the board tests us on USMLE. The best part was that Dr. Martinez actually sat down and discussed with us every question that was put to him by every student in detail, going through the psychiatric illness and its differential which gave us a complete idea of entire category the illness falls into and its treatment. He explained to us the dosings and side effects of every single psychiatric medication used in regular clinical settings and the ones in the literature. We learned lots of interviewing techniques and interpersonal skills from him. He was kind enough to let us hang out with him wherever he went, no matter if it was a clinical setting or a business dealing or community settings related to the field of psychiatry. In short we got a all round knowledge of psychiatry as a subject and as a physician how we should be practical and logical in dealings with all issues of health care .</p>
                            <p>Thank you Dr. Martinez<br> <strong> K. Joshi.</strong></p>
                            <p><strong>————————————————————————————————————————————————</strong></p>
                            <p>I have witnessed myself many times where a physician does not act or look too concerned regarding my visit and this usually makes me feel uncomfortable and awkward in his/her office. I have also noticed at times that they rush through the visit and this as well makes me feel that my visit is not important to them. As a medical student, I believe I have and will benefit from this experience as I can learn to improve and build on issues of concern in the future as a practicing physician. I can help ease a patient’s emotional uncomfort by falling back on my own experiences as a patient and guide myself to improve the environment of my patients in the near future.<br> <strong>Ikinder G.</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>Now that I have completed my rotation at Pilsen Community Mental Health Center, I can definitely state that it has been a rewarding experience. Since I am not from Chicago, I think that my time interacting with the community has been limited. Life as a resident involves a lot of work, and I would basically go to work in the morning and leave in the afternoon with little interaction with the people in the community in which I worked. Therefore, before I left Chicago, I wanted to get a chance to have a better understanding of the community that my patients lived in, the social stresses that they face in this community, and how it impacts their mental illness. I think that this rotation has far exceeded my expectations. First, it afforded me the opportunity to see what type of consideration the cultural identity of the patients and use this in terms of tailoring programs that would be more inviting and acceptable to the patients that they serve. I was particularly fortunate to be able to get involved with trying to establish a relationship with the Latino Youth High School. It gave me the opportunity to see what problems are affecting the youth in the community. My research for my grand rounds opened my eyes to how much violence that these children are being exposed to. I was able to see how the high school has found innovative ways to try to combat these problems. This experience has definitely renewed my interest in the importance of community involvement. I know that whatever career choice I make I will definitely make time to get involved and give back to the community.<br> <strong>Denise M.</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>I am leaving Chicago and reflecting on my training and all the people that helped me along the way. Be sure to know that you are one of the most significant of those people. Your patience, mentorship, moral standard, and administration ability set a standard that I will continue to strive for through my entire career. Thank you so much for these gifts. The best of luck in all you do. Please stay in touch and I will do the same.<br> <strong>Karl M.</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>Working with Dr. Martinez was an honor and a pleasure of mine. Because of his professionalism combined with amazing teaching tactics, Dr. Martinez has opened my eyes to a future in psychiatry. Thank you Dr. Martinez for the opportunity to spend time with you and your wonderful staff.<br><strong>Bulland Z.&nbsp; – 7/23/12<br></strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>I had a great experience during my rotation at CCS. The staffs were very helpful and Dr Martinez is an excellent teacher. I would certainly be glad to return to CCS for my elective rotation in Psychiatry. Again, thank you Dr. Martinez for an awesome rotation in Psychiatry.<br><strong>Josue L. – 8/12/12</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>Working with Dr Martinez in my Psychiatry rotation was such a great beauty and success. All the staff was nice and very helpful. Also Dr Martinez creates a very peaceful working environment for his staff, students and patients. All his patients are speak highly of him and want to come back. So are different students that work with him. And this is because he provides us with quality medical education by ensuring perfect patient interaction. Also we have the option in working at two other clinics, one in Berwyn and the other in Desplaines observing telepsychiatry with patients in the Lutheran Services Institute. At the end of the rotation we had the option of presenting a power point lecture in which he gave us quality feedback information. Before doing this rotation I wasn’t planning on specializing in this field but I am gradually leaning on this speciality after finishing. I enjoyed this rotation that I came almost everyday because I really enjoyed being there. I would gladly recommend this rotation to other students.<br> <strong>Daniel T. – 9/27/12</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>I would like to thank Dr. Martinez and his wonderful staff, for a great rotation experience. It was a pleasure as a student to work along Dr. Martinez. He truly loves what he does and always has time to teach his students with respect and encouragement. I would definitely choose to do another rotation with CCS. I look forward in hearing/reading about CCS future endeavors. Keep up the great work!<br><strong>Jan M. – 1/13/13</strong></p>
                            <p><strong> ————————————————————————————————————————————————–</strong></p>
                            <p>I appreciate the opportunity to learn and observe and your trust in us to interact with your patients. You have also been an excellent motivator and mentor to me by providing sound practice – building tips. My perception of psychiatry has changed drastically. Honestly, prior to this rotation, psychiatry was my dead last choice! Now, I would certainly consider it. I know my impression of you as a person, and not only as a physician, has a lot to do with that. All the best Doc. <br><strong>Elroy D. – 12/5/13</strong></p>
                            <p>————————————————————————————————————————————————–</p>
                            <p>Dr. Martinez, I have successfully completed my six weeks of core rotations at your CSS clinic and I just want to thank you for providing me with the most extraordinary guidance and knowledge in the field of Psychiatry. It was an extremely pleasurable and highly inspirational experience. I have been significantly drawn to this specialty due to my time spent at your clinic and working under your supervision. You have taught me a wide variety of things, especially how to efficiently approach patient care. Your staff is filled with a great team of energetic, loving and focused future leaders and I’ve learned so much from them as well. I am highly grateful to you for investing so much of your time and effort in ensuring that your students received the best hands on education in this field. I look forward to you being my mentor in the future as I struggle through my path of medicine. I recall a quote which suits you best Sir, “Tell me and I forget, teach me and I may remember, involve me and I learn.” – Benjamin Franklin. Thank you for a memorable experience. <br><strong>Mohammad A. – 3/30/14</strong></p>
                        </div><!-- /the_content -->
                        <p class="details"></p>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page Medical Student Rotation ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <!--page CCS Magazine ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div id="seopage30" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section class="navigation-newpage28">
                        <ul class="newpage28 hidden">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#seopage7" data-transition="<?php echo $transitionefect ?>">Resources</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact</a></li>
                            <li><a href="#seopage17" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
                        </ul>
                    </section>
                    <img src="img/slider-images/slider08.jpg" alt="SLider" class="images-mobile">
                    <div id="the_loop">
                        <p class="address">Comprehensive Clinical Services, P.C. » CCS Magazine</p>
                        <div class="post-3205 post type-post status-publish format-standard has-post-thumbnail hentry category-magazine category-featured" id="post-3205">
                            <h2><a href="http://www.discoverccs.org/?p=3205" rel="bookmark" title="Permanent Link toCCS Magazine 2014 – 2nd Edition">CCS Magazine 2014 – 2nd Edition</a></h2>
                            <p class="postmeta">February 3rd, 2014</p>
                            <div class="the_content">
                                <img width="127" height="165" src="http://www.discoverccs.org/wp-content/uploads/2014/02/CCS-Magazine-Vol.-II-232x300.jpg" class="attachment-230x165 wp-post-image" alt="CCS Magazine 2014 – 2nd Edition">              <p>Check out our second edition of the CCS magazine. Discover who we are as individuals and healers in the field of mental health. Also, meet some new additions to the staff and learn about the services we provide. We invite you to become part of the CCS family.


                                    … <a href="http://www.discoverccs.org/?p=3205">Read entire article »</a></p>
                            </div><!-- /the_content -->
                            <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=61" title="View all posts in CCS Magazine" rel="category">CCS Magazine</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                        </div><!-- /post -->
                        <div class="post-2356 post type-post status-publish format-standard has-post-thumbnail hentry category-magazine category-featured tag-dr-martinez tag-medical-students-2 tag-psychiatrists tag-psychiatry tag-psychologists tag-rotation" id="post-2356">
                            <h2><a href="http://www.discoverccs.org/?p=2356" rel="bookmark" title="Permanent Link toIntroducing the CCS Magazine 1st Edition">Introducing the CCS Magazine 1st Edition</a></h2>
                            <p class="postmeta">October 15th, 2012 | <a href="http://www.discoverccs.org/?p=2356#respond" title="Comment on Introducing the CCS Magazine 1st Edition">Add a Comment</a></p>
                            <div class="the_content">
                                <img width="230" height="138" src="http://www.discoverccs.org/wp-content/uploads/2012/10/CCS-mag-print-300x181.png" class="attachment-230x165 wp-post-image" alt="Introducing the CCS Magazine 1st Edition">              <p>Check out our first edition of the CCS magazine and enjoy our introduction to who we are as individuals and healers in the field of mental health. We invite you to become part of the CCS family.

                                    Open publication – Free publishing – More healing

                                    … <a href="http://www.discoverccs.org/?p=2356">Read entire article »</a></p>
                            </div><!-- /the_content -->
                            <p class="details">Filed under: <a href="http://www.discoverccs.org/?cat=61" title="View all posts in CCS Magazine" rel="category">CCS Magazine</a>, <a href="http://www.discoverccs.org/?cat=1" title="View all posts in Featured" rel="category">Featured</a></p>
                        </div><!-- /post -->
                        <div class="navigation">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                    </div>

                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
        </div>

        </div>
        <!--page CCS Magazine ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




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
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
