<style>
    /* carousel */
    blockquote small{
        color:white !important;
    }

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
</style>
<script>// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});</script>
<div class="row testimonial_bg">
    
    <div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    <h2>TESTIMONIAL</h2>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-1 col-md-10'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
          <li data-target="#quote-carousel" data-slide-to="3"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                    <img class="img-circle" src="upload/testimonials/fep3j2.jpg" style="width: 100px;height:100px;">
               
                </div>
                <div class="col-sm-9">
                  <p>We had an excellent time in Alleppey and loved that we did not have to go through the hassle of haggling with local vendors. The arrangements actually exceeded our expectations at times and were rather reasonably </p>
                  <small>NATASHA SAINI (INDIAN) & GEORGIA (GREEK) , FROM UAE</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                    <img class="img-circle" src="upload/testimonials/bgkufx.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>I have to admit that we had great holidays on your boat.The crew &amp; everybody that took care of us was extraordinary friendly, the food was great &amp; we enjoyed it a lot. We felt like being with friends. I will recommend this to everyone</p>
                  <small>Dr.Kämmerer, Germany</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                    <img class="img-circle" src="upload/testimonials/aor3i3.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>It is with great pleasure I would like to thank Samsons Holidays for the the whole experience of Kerala tour particularly Wayanad, Munnar & Houseboat tour in Alleppey etc. My family & children enjoyed the stay,travel around & food. Thank you Samsons </p>
                  <small>TOMY KOTTOOR, Aluva</small>
                </div>
              </div>
            </blockquote>
          </div>
          
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                    <img class="img-circle" src="upload/testimonials/zf4x5n.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Me & my family with the group 7 transferred from Ernakulam  to Allappey for house boat day tour, we were served with welcome drink on arrival & later of the day  served  with Grand Lunch with fresh Karimean, Evening snacks with  Tea, a memorable trip  </p>
                  <small>Peter Fernandez, Sharjah, UAE</small>
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

<div class="row">
    <div class="col-md-6" style="background-color: rgb(47,123,79);height:10px;"></div>
    <div class="col-md-6"  style="background-color: rgb(186,23,29);height:10px;"></div>
    
    
</div>