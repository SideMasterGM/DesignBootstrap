<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

.carousel {
	margin: 50px auto;
}
.carousel .item {
	color: #999;
	overflow: hidden;
    min-height: 120px;
	font-size: 13px;
}
.carousel .media {
	position: relative;
	padding: 0 0 0 20px;
	margin-left: 20px;
}
.carousel .media img {
	width: 75px;
	height: 75px;
	display: block;
	border-radius: 50%;
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    border: 2px solid #fff;
}
.carousel .testimonial {
    color: #fff;
    position: relative;    
    background: #9b9b9b;
	padding: 15px;
	margin: 0 0 20px 20px;
}
.carousel .testimonial::before, .carousel .testimonial::after {
	content: "";
	display: inline-block;
	position: absolute;
	left: 0;
	bottom: -20px;
}
.carousel .testimonial::before {
    width: 20px;
    height: 20px;
	background: #9b9b9b;
	box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);
}
.carousel .testimonial::after {
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    border-left-color: #fff;
}
.carousel .item .row > div:first-child .testimonial {
	margin: 0 20px 20px 0;
}
.carousel .item .row > div:first-child .media {
	margin-left: 0;
}
.carousel .testimonial p {
	text-indent: 40px;
    line-height: 21px;
	margin: 0;
}

.carousel .overview {
	padding: 3px 0 0 15px;
}
.carousel .overview .details {
	padding: 5px 0 8px;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #ff5555;
}
.carousel .carousel-control {
	width: 30px;
	height: 30px;
    background: #666;
    text-shadow: none;
	top: 4px;
}
.carousel-control i {
	font-size: 16px;
}
.carousel-control.left {
	left: auto;
	right: 40px;
}
.carousel-control.right {
	left: auto;
}
.carousel-indicators {
	bottom: -80px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 18px;
    height: 18px;
	border-radius: 0;
	margin: 1px 4px;
}
.carousel-indicators li {	
    background: #e2e2e2;
    border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
    background: #ff5555;    
    border: 5px double;    
}
.star-rating li {
	padding: 0 2px;
}
.star-rating i {
	font-size: 14px;
	color: #ffdc12;
}

</style>

<div class="container">
	<div class="row">
		<div class="col-sm-12">			
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<h2>Customer <b>Testimonials</b></h2>
				 
				<!-- Wrapper for carousel items -->
				<div class="">
					<div class="item active">

						<?php
							echo "Cantidad: ", count($Reviews);
							for ($i = 0; $i < count($Reviews); $i++){
								?>
									<div class="row">
										<div class="col-sm-2"></div>
										<div class="col-sm-8">
											<div class="testimonial">
												<p><?php echo $Reviews[$i]['comment']; ?></p>
											</div>
											<div class="media">
												<div class="media-left d-flex mr-3">
													<img src="images/user.png" alt="" />										
												</div>
												<div class="media-body">
													<div class="overview">
														<div class="name"><b><?php echo $Reviews[$i]['date']; ?> | <?php echo $Reviews[$i]['project']; ?></b></div>
														<div class="details">Review by <?php echo $Reviews[$i]['review']; ?></div>
														<div class="star-rating">
															<ul class="list-inline">
																<?php
																	for ($j = 0; $j < $Reviews[$i]['stars']; $j++){
																		?>
																			<li class="list-inline-item"><i class="fa fa-star"></i></li>
																		<?php
																	}

																	for ($j = $Reviews[$i]['stars']; $j < 5; $j++){
																		?>
																			<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
																		<?php
																	}
																?>
															</ul>
														</div>
													</div>										
												</div>
											</div>
										</div>
										<div class="col-sm-2"></div>
									</div>
									<br/>
								<?php
							}
						?>
						
						<center>
							<a href="https://www.homeadvisor.com/rated.MonkeyTreeService.71834656.html#ratingsReviews" target="blank" style="padding: 10px 25px; background-color: rgba(0,0,0,.7); color: #fff;">Ver más</a>
						</center>
					</div>
				</div>
				

			</div>
		</div>
	</div>
</div>