Vue.component('header-component',{
    template: `<div>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pabromaster</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>	

  <body>
    <header>
      <div class="grid-y" id="myHeader">
        <div class="cell small-12 large-7">
          <div class="grid-container grid-x align-middle">
            <div class="cell large-4 large-order-2 show-for-large logo">
              <img src="assets/img/logo.png">
            </div>
            <div class="cell large-4 large-order-1 show-for-large">
              <div class="header-contact align-left">
                <p> Contact :</p>
                <a href="+94 77 322 8583">+94 77 322 8583 |</a>
                <a href="mailto:pabro@sltnet.lk">pabro@sltnet.lk</a>
              </div>
            </div>
            <div class="cell large-4 large-order-3 show-for-large social-media">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-youtube"></a>
            </div>
          </div>
          <!--mobile view-->
          <div class="grid-container grid-x align-middle">
            <div class="cell small-10 hide-for-large mobile-logo">
              <img src="assets/img/logo.png">
            </div>
            <div class="cell small-2 hide-for-large">
              <div class="" data-responsive-toggle="example-menu" data-hide-for="large">
                <button class="mobile-menu-icon" type="button" data-toggle="example-menu"></button>
              </div>
            </div>
          </div><!--mobile view-->
          <!--mobile menu-->
          <div class="top-menu grid-container hide-for-large" id="example-menu" data-animate="">
            <ul class="menu vertical">
              <li><a href="index.html">Home</a></li>
              <li><a href="projects.html">Our Project</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="technology.html">Technology</a></li>
              <li><a href="why-us.html">Why us</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div><!--mobile menu-->
        </div>
        <!--top menu-->
        <div class="cell large-4 top-menu">
          <div class="grid-container show-for-large ">
            <ul class="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="projects.html">Our Project</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="technology.html">Technology</a></li>
              <li><a href="why-us.html">Why us</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
        </div><!--top menu-->
      </div>
    </header></div>`,
})

Vue.component('footer-component',{
  template:`<div>
  <!--footer-->
    <footer>
	    <div class="footer-menu">
		    <div class="grid-x grid-container large-up-4 medium-up-2 small-up-2">
			    <div class="cell">
				    <ul class="menu vertical">
					  <h5  >Pabro Master</h5>
		              <li><a href="#">Home</a></li>
		              <li><a href="#">Our Project</a></li>
		              <li><a href="#">Services</a></li>
		              <li><a href="#">Technology</a></li>
		              <li><a href="#">Why us</a></li>
		              <li><a href="#">About</a>
		              	    <ul class="">
			              	    <li><a href="#">Technology</a></li>
						  		<li><a href="#">Testimonials</a></li>
						  		<li><a href="#">CSR & Motivation</a></li>
						    </ul>
		              </li>
		              <li><a href="#">Contact us</a></li>
		            </ul>
			    </div>
			    <div class="cell ">
				    <ul class="menu vertical">
					  <h5  >Services</h5>
		              <li><a href="#">Home</a></li>
		              <li><a href="#">Our Project</a></li>
		              <li><a href="#">Services</a></li>
		              <li><a href="#">Technology</a></li>
		              <li><a href="#">Why us</a></li>
		              <li><a href="#">About</a></li>
		              <li><a href="#">Contact us</a></li>
		            </ul>
			    </div>
			    <div class="cell ">
				    <ul class="menu vertical">
					  <h5  >Technologies</h5>
		              <li><a href="#">Home</a></li>
		              <li><a href="#">Our Project</a></li>
		              <li><a href="#">Services</a></li>
		              <li><a href="#">Technology</a></li>
		              <li><a href="#">Why us</a></li>
		              <li><a href="#">About</a></li>
		              <li><a href="#">Contact us</a></li>
		            </ul>
			    </div>
			    <div class="cell ">
				    <ul class="menu vertical">
					  <h5  >Pabro Master Painters (Pvt) Ltd</h5>
		              <li><a href="#">No 290, D.R.Wijewardhana Mawatha,</a></li>
		              <li><a href="#">Colombo 10.</a></li>
		              <h5 >Follow Us</h5>
		              <a href="#" class="fa fa-facebook">Facebook</a>
		              <a href="#" class="fa fa-twitter">Twitter</a>
		              <a href="#" class="fa fa-youtube">You Tube</a>
		            </ul>
			    </div>
		    </div>
	    </div>
	    <div class="copiright">
		    <div class="grid-container">
			    <p>© 2019 Pabro Master, All Rights Reserved.</p>
			    <p>Designed by Comtech Web Solutions</p>
		    </div>
	    </div>
    </footer>

</div>`

})

var app = new Vue ({
    el:"#app"
})