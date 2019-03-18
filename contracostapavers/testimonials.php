<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<?php include('conexion.php'); ?>
<?php 
	$queryAll = ("SELECT * FROM reviews ORDER BY rdate DESC");
	$total_registro = $dataBase->querySingle("SELECT COUNT(*) as count FROM reviews");
	$total_registro_mostrar = 10;
	$numero_paginas = ceil($total_registro / $total_registro_mostrar);
	$pagina_actual = isset( $_GET['page']) ? $_GET['page'] : 1;
	$paginacion_parametros =  $pagina_actual*$total_registro_mostrar - $total_registro_mostrar;
	$queryAll .= " LIMIT {$paginacion_parametros},{$total_registro_mostrar}";
	$sentencia_busqueda = $dataBase->query($queryAll);
?>
<div class="bar2">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
<form class="rating-form" action="guardar.php" method="post" name="rating-movie">
	<fieldset class="form-group">
		<legend class="form-legend">Rating:</legend>
		
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
	<input type="text" name="name" placeholder="Name" class="form-control" required><br>
	<input type="text" name="city" placeholder="City" class="form-control" required><br>
	<input type="hidden" name="date" value='<?php echo @date('Y-m-d')?>'>
	<input type="text" name="project" placeholder="Project" class="form-control" required><br>
	<textarea class="form-control" name="review" placeholder="Comment" required></textarea><br>
	<div class="form-group text-center">
		<?php
		require_once('recaptchaphp-1.11/recaptchalib.php');
		$publickey = "6LdDETEUAAAAAL9TtvB6PQSg-vFkopFZOwOR9jx7"; // you got this from the signup page
		echo recaptcha_get_html($publickey);
		?>
		
	</div>
	<input type="submit" name="Guardar" class="btn btn b_gradient b_gradient-1-hover t_black">
</form>
				
			</div>
			<div class="col-md-9">
				
			</div>
		</div>


<div class="row text-center">
		<?php if (empty($total_registro)) { }else{ ?>
		<p>Showing <?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?> of <?php echo $total_registro ?></p>
            <ul class="pagination">
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
              <?php } ?>
            </ul>
           <?php } ?>
		</div>
<div class="row">
			<?php 
				while ($resultInArray = $sentencia_busqueda->fetchArray(SQLITE3_ASSOC)) {
			 ?>
			 <div class="col-md-8 col-md-offset-2 well">
				<h3><?php echo $resultInArray['name']. ' in '.$resultInArray['city'] ?> <small><?php for ($i=1; $i <= $resultInArray['star'] ; $i++) { 
					echo "<i class='fa fa-star c_gold'></i>";
				} ?> - <?php echo $resultInArray['star'].'.0'; ?> </small></h3>
				<small>Date: <?php echo $resultInArray['rdate'] ?></small>
				<p>Project: <strong><?php echo $resultInArray['project'] ?></strong></p>
				<p><?php echo $resultInArray['review'] ?></p>
			</div>
			<?php } ?>

		</div>
<br>
		<div class="row text-center">
            <ul class="pagination">
              <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
              <li class="<?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a></li>
              <?php } ?>
            </ul>	
		</div>
	</div>
</div>

<?php include 'php/section/social.php';?>
<?php include 'php/section/footer.php';?>