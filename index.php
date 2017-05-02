<?php
?>
<!doctype html>
 <html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meteo</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
  </head>

<body>
<header>

	<!-- Fixed navbar navbar-fixed-top-->
    <nav class="navbar navbar-default  c_navbar">
      <div class="container nopadding">
        <div class="navbar-header c_navbar_header">
          <button type="button" class="navbar-toggle collapsed c_navbar_toogle_btn" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
				<div class="logo_name">meteo</div>	
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse c_navbar_collapse">
		 <ul class="nav navbar-nav navbar-right c_navbar_right">
			<li>
				<a href="#"><div class="head_link_btn">Sign up / Log in</div></a>
				
			</li>
			<li>
				<a href="#"><div class="head_link_btn">Preferences</div></a>
			
			</li>
			<li>
				<a href="#"><div class="head_link_btn">Search</div></a>
			</li>
		 </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>

<!----------------- First Two Part section------------>
<section class="first_twopart_sec">
	<div class="container">
		<div class="row">
			<div class="col-md-8 nopadding">
				<div class="wea_sec">
					<div class="wea_title">
						<span>Brooklyn</span>,<span> NY 11233</span>
						<p>Monday, May 1</p>
					</div>
					<div class="wea_det">
						<div class="wea_per">
							<ul class="wea_per_ul">
								<li>Humidity : <span>60%</span></li>
								<li>Precipitation : <span>3%</span></li>
								<li>Wind : <span>25</span><span>mph</span></li>
							</ul>	
						</div>
						<div class="wea_deg">
							<div class="wea_deg_round">
								<div class="wea_deg_round_inner">
									<div class="inner_sun_deg">	
										<span class="wea_deg_digit">75<sup>&#9675;</sup></span>
										<span class="wea_deg_img">
											<img src="images/sun.png">
										</span>
									</div>
									<div class="wea_deg_type">Sunny</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4 nopadding">
				<div class="wea_side_panel">
					<ul class="wea_side_ul">
						<li><a href="">Today's picks</a></li>
						<li><a href="">Arts:30% discount of MoMa</a></li>
						<li><a href="">Sports: NY Mets game no rain</a></li>
						<li><a href="">Family: Great night for Bowling</a></li>
						<li><a href="">Food & Drinks: NYT top 10 wine bars</a></li>
						
					</ul>
				</div>
			</div>
		</div>	
	</div>
</section>

<!----------------- Second Full Part section------------>
<section class="sec_full_part">
	<div class="container">
		<div class="row">
			<div class="col-md-12 nopadding">
				<div class="wea_time_type_sec">
					<ul class="wea_time_type_ul">
						<li>
							<div class="wea_time_wise">6am</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">9am</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">12pm</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">3pm</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">6pm</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">9pm</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">12am</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">3am</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>
						<li>
							<div class="wea_time_wise">6am</div>
							<div class="wea_img_wise"><img src="images/sun.png" class="img-responsive"></div>
						</li>							
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
		

<!---------------- Five Day Forcast Section ------------------>
<section class="five_day_sec">
	<div class="container">
		<div class="row" id='forcast_data'>
			<div class="col-md-12 loader">Please wait! fetching data.. <img src="images/sunny.gif"> </div>
		</div>
	</div>
</section>
																				
<footer class="footer_sec">
	<div class="container">
		<div class="row">
			<div class="top_wea_foc">
				Top Weather Forecast Regions for you 
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wea_top_cat">
					<ul class="top_cat_ul">
						<a href=""><li>Top Picks</li></a>
						<a href=""><li>Free Events</li></a>
						<a href=""><li>Stay Home</li></a>
						<a href=""><li>Eat Well</li></a>
						<a href=""><li>See the Sites</li></a>
						<a href=""><li>Be Active</li></a>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wea_top_cat">
					<ul class="top_cat_ul">
						<a href=""><li>Brooklyn, NY</li></a>
						<a href=""><li>Los Angeles, CA</li></a>
						<a href=""><li>San Francisco, CA</li></a>
						<a href=""><li>Denver, CO</li></a>
						<a href=""><li>Philadelphia, PA</li></a>
						<a href=""><li>Miami, FL</li></a>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wea_top_cat">
					<ul class="top_cat_ul">
						<a href=""><li>Paris, FRA</li></a>
						<a href=""><li>London, UK</li></a>
						<a href=""><li>Madrid,SPA</li></a>
						<a href=""><li>Rome, ITA</li></a>
						<a href=""><li>Berlin, GER</li></a>
						<a href=""><li>Geneva, SWI</li></a>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="wea_top_cat">
					<ul class="top_cat_ul">
						<a href=""><li>Tokyo, JPN</li></a>
						<a href=""><li>Beijing, CHN</li></a>
						<a href=""><li>Mumbai, IND</li></a>
						<a href=""><li>Tel-Aviv, ISR</li></a>
						<a href=""><li>Kinshasa, DRC</li></a>
						<a href=""><li>Dakar, SEN</li></a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>		
			
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	 $("document").ready(function(){
		 $(window).scroll(function(){
			if($(window).scrollTop() >= 100){
				$('nav').addClass('navbar-fixed-top');
				$('nav').css('transition','all 0.2s ease');
				$('nav').css('box-shadow','0px 5px 30px -15px #333333');
			}
			else{
				$('nav').removeClass('navbar-fixed-top');
				$('.c_navbar').css('box-shadow','none');
			}
	   });
	});
	$("document").ready(function(){
		var url = 'fetch_forcast_data.php';
        $.ajax({
	        url: url,
	        type: 'POST',
        	success: function (data, status)
        	{
               $('#forcast_data').html(data);
			   //alert(data);
        	},
        	error: function (xhr, desc, err)
        	{
            	console.log("error");

        	}
    });   


	});	
		
</script>
</body>
</html>

