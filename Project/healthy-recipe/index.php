<?php

include 'header.php';

?>

<section id="center">
	  <div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
                <div class="item active"><!-- First-Slide -->
                    <img src="img/42.jpeg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated flipInX"> Punjabi</h3>
                        <h4 data-animation="animated flipInX">love the food </h4>
                    </div>
                </div>  
                <div class="item"> <!-- Second-Slide -->
                    <img src="img/47.jpeg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown">Vada Pav </h3>
                        <h4 data-animation="animated fadeInUp">famous in mumbai</h4>
                    </div>
                </div> 
                <div class="item"><!-- Third-Slide -->
                    <img src="img/46.jpeg" alt="" class="img-responsive"/>
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">Dosa and Sambhar</h3>
                        <h4 data-animation="animated flipInX">south indain speciality</h4>
                    </div>
                </div> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="js/custom.js"></script>
	</div>

	</section>


<section id="events">
 <div class="container">
  <div class="row">
   <div class="events_main clearfix">
     <div class="col-sm-12">
    <div class="events_1"><h3 class="text-center">Hunger should kick the can!</h3></div>
   </div>
     <div class="col-sm-12">
    <div class="col-sm-6">
	 <div class="events_2"><div class="grid">
					<figure class="effect-duke">
						<img src="img/49.jpg" alt="img17"/>
						<figcaption>
							
							<p> Don't be rude, donate some food.</p>
						<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div></div>
	</div>
	<div class="col-sm-6">
	 <div class="events_2"><div class="grid">
					
					<figure class="effect-duke">
						<img src="img/49.jpeg" alt="img17"/>
						<figcaption>
							
							<p>You can help beat hunger!</p>
						<a href="#">View more</a>						</figcaption>			
		  </figure>
	  </div></div>
	</div>
   </div>
   </div>
  </div>
 </div>
</section>

<section id="reviews">
 <div class="container">
  <div class="row">
   <div class="col-sm-12">
    <div class="reviews_1">
	  <h3 class="text-center">Best and Famous Food Quote</h3>
	</div>
   </div>
   <div class="col-sm-12">
    <div class="reviews_2">
                    <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="img/23.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="img/24.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="img/25.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p> A burst of flavors, an array of colors, and a sweet tinge constitutes irresistible Gujarati dishes. Welcome to a part of India that not only is fond of food but cherishes it as a way of living.</p>
                                                <small>GUJARATI FOOD</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">

                                                <p>bread items are very famous in bombay that's why Vadapav ,Bhaji pav ,Misal Pav is very famous and there food is very Spicy.</p>
                                                <small>MARATHI FOOD</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
<p> IN SOUTH INDAIN FOOD the famous item is Idli , Dosa, sambhar and there food are very spicier and hotter</p>
                                                <small>SOUTH INDAIN FOOD</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
     </div>
   </div>
  </div>
 </div>
</section>
  </div>
 </div>
</section>
<?php

include 'footer.php';

?>