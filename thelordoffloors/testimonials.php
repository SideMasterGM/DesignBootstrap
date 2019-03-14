<?php include 'php/section/header2.php';include 'php/section/pagename.php'; include 'php/section/click2call.php';?>
<div class="bars b_white" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">

<?php include('conexion.php');?>
<?php
    $sql = "SELECT * FROM reviews ORDER BY id DESC" ;
    $result=mysqli_query($link,$sql);
    $total = mysqli_num_rows ($result);
    $total_registro = $total;
    $total_registro_mostrar = 5;
    $numero_paginas = ceil($total_registro / $total_registro_mostrar);
    $pagina_actual = isset( $_GET['page']) ? $_GET['page'] : 1;
    $paginacion_parametros =  $pagina_actual*$total_registro_mostrar - $total_registro_mostrar;
    $sql .= " LIMIT " . $paginacion_parametros . "," .$total_registro_mostrar;
    $sql2 = "SELECT SUM(start) as total FROM reviews";
?>


	 <div class="container bars">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="text-center">Our Reviews</h2>
                <p class="text-center"><?php echo "$Phrase3";?></p><hr>
                <?php if (empty($total_registro)) { }else{ ?> <h3  class="text-center">Showing <?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?> of <?php echo $total_registro ?></h3>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center"> 
                        <ul class="pagination-pic">
                          <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                          <li class="btn btn-sm b_brown-3 b_brown-6-hover t_gray-1 <?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a class="t_white" href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a>
                          </li>
                          <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 well">                
                
                <?php @session_start(); ?>
                <style>
                    .customclass{ display:none; }
                </style>
                <?php $_SESSION['token'] = md5(microtime()); ?>

                <form class="rating-form" action="guardar.php" method="post" name="rating-movie">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 borders-top">
                        <h3 class="text-center mt-3"><strong class="uppercase t-color5">Write a Testimonial</strong></h3>
                           
                        <fieldset class="form-group">
                            <div class="form-item">
                                <input id="rating-5" name="rating" type="radio" value="5" />
                                 <label for="rating-5" data-value="5">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">5</span>
                                </label>
                                <input id="rating-4" name="rating" type="radio" value="4" />
                                <label for="rating-4" data-value="4">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">4</span>
                                </label>
                                <input id="rating-3" name="rating" type="radio" value="3" />
                                <label for="rating-3" data-value="3">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">3</span>
                                </label>
                                <input id="rating-2" name="rating" type="radio" value="2" />
                                <label for="rating-2" data-value="2">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">2</span>
                                </label>
                                <input id="rating-1" name="rating" type="radio" value="1" />
                                <label for="rating-1" data-value="1">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">1</span>
                                </label> 
                            </div>
                        </fieldset>
                    </div>
                    <div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input name="firstname" type="text" id="firstname" class="customclass">
                            <input type="text" name="name" placeholder="Name" class="form-control b_white" required><br>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" name="city" placeholder="City" class="form-control b_white" required><br>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> <label class="t_black"> Write the Code</label>
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
                            <img src="captcha.php" />
                            <input name="captcha" class="form-control b_white" type="text" required><br>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="hidden" name="date" value='<?php echo @date('Y-m-d')?>'>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <input type="text" name="project" placeholder="Project" class="form-control b_white" required><br>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <textarea class="form-control b_white" name="review" placeholder="Comment" rows="6" required></textarea><br>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                            <input type="submit" name="Guardar" value="Publish Review" class="btn btn-sm b_brown-6 b_brown-3-hover t_white">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <div class="col-7 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                   <?php if (empty($total_registro)) { }else{ ?>
                    <?php if ($result2=mysqli_query($link,$sql2)) {
                        $row=mysqli_fetch_row($result2);
                        $format_number = number_format($row[0]/$total_registro, 2, '.', '');
                        $contador=0;
                    ?>
                    <div class="col-md-12 text-center">
                        <h3>Reviews:  <?php for ($i=1; $i <= $format_number ; $i++) {echo "<i class='fa fa-star t_yellow-3'></i>"; $contador++;}
                        //a continuacioon agregar estrella parcialmente llena
                        if(abs($contador - $format_number) > abs(0.0))
                        {
                            $porcentaje = 100*(1+($format_number-$i));?>
                            <i class='fa fa-star' style="background: linear-gradient(90deg, gold 0%, gold <?php echo $porcentaje; ?>%,#000 <?php echo $porcentaje+1; ?>%, #000000 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"></i> 
                        <?php } ?>
                        <?php $faltan=5-ceil($format_number); ?>
                        <?php if(ceil($format_number)<5){for ($i=1; $i <= $faltan ; $i++) {
                            echo "<i class='fa fa-star'></i>";
                        }
                    } ?> - <?php echo $format_number; ?> <small><?php echo $total_registro; ?> User Reviews </small></h3>
                    </div>
                    <?php } ?>
                    
                   
                    <?php } ?>
                </div>
                <div class="comment">
                    <?php
                    if ($result=mysqli_query($link,$sql)) {
                    while($row=mysqli_fetch_row($result)) {?>
                    <div class="col-md-12 well border border-secondary pt-3 pb-3 mb-4">
                        <h3><?php echo $row[0]. ' in '.$row[1]; ?> <small><?php for ($i=1; $i <= $row[5] ; $i++) {
                        echo "<i class='fa fa-star t_yellow-3'></i>";
                        } 
                        //a continuacion pongo las estrellas vacias
                        if(ceil($format_number)<5){
                            for ($i=1; $i <= (5-$row[5]) ; $i++) {
                                echo "<i class='fa fa-star t_yellow-3'></i>";
                            }
                        }

                        ?> - <?php echo $row[5].'.0'; ?> </small></h3>
                        <p>Date: <?php echo $row[3] ?><br>
                        Project: <strong><?php echo $row[2]; ?></strong></p>
                        <p><?php echo $row[4] ?></p>
                    </div>
                    <?php  }
                    mysqli_free_result($result);
                    } else {
                    echo "0 results";
                    }
                    
                    mysqli_close($link);
                    ?>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-2">
                   <ul class="pagination-pic"> <?php if($numero_paginas!=0){ echo 'Page'; } ?>
                      <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                      <li class="btn btn-sm b_brown-3 b_brown-6-hover t_gray-1 <?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a class="t_white" href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a>
                      </li>
                      <?php } ?>
                    </ul>
                </div>
                
            </div>
        </div> 
    </div>


	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="title-accent">
					<h1 itemprop="name">Comments from Our Customers</h1>
					<hr>
					<br>
				</div>
			</div>
		</div>	
	</div>
	<div class="container" itemprop="text">
		<?php for ($i=2; $i >=1; $i--) {?>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<p><span><?php echo $Date.$Testimonial[$i][0];?> | <?php echo $FiveStars;?></span></p>
				<h3><?php echo $Review.$Testimonial[$i][1];?></h3>
				<p><?php echo $Comment.$Testimonial[$i][2];?></p>
				<hr style="border-color:black;">
			</div>
		</div>
		<?php } ?>		
	</div>
</div>
<?php include 'php/section/footer.php';?>

