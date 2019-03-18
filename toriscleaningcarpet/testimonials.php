<?php include 'php/section/header.php'; include 'php/section/pagename.php';?>
<?php include('conexion.php'); ?>
<?php 
	$queryAll = ("SELECT * FROM reviews ORDER BY ID DESC");
	$total_registro = $dataBase->querySingle("SELECT COUNT(*) as count FROM reviews");
	$total_registro_mostrar = 10;
	$numero_paginas = ceil($total_registro / $total_registro_mostrar);
	$pagina_actual = isset( $_GET['page']) ? $_GET['page'] : 1;
	$paginacion_parametros =  $pagina_actual*$total_registro_mostrar - $total_registro_mostrar;
	$queryAll .= " LIMIT {$paginacion_parametros},{$total_registro_mostrar}";
	$sentencia_busqueda = $dataBase->query($queryAll);
?>
<div class="container padding4">
	<div class="row">
		<div class="col-md-3 bg-color1 p-3 sidebar">
			<form class="rating-form" action="guardar.php" method="post" name="rating-movie">
				<fieldset class="form-group">
					<legend class="form-legend">Give Us a Review:</legend>
					<span class="badge badge-dark">(5 Stars - Very Good)</span><br>
					<span class="badge badge-dark">(1 Star - Very Bad)</span><br>
					<small>Select Stars</small><br>
					
					<div class="form-item bg-dark p-2 text-center">
						<input id="rating-5" name="rating" type="radio" value="5" />
						<label for="rating-5" data-value="5">
							<span class="ir">5 <i class="material-icons">stars</i></span>
						</label>
						<input id="rating-4" name="rating" type="radio" value="4" />
						<label for="rating-4" data-value="4">
							<span class="ir">4 <i class="material-icons">stars</i></span>
						</label>
						<input id="rating-3" name="rating" type="radio" value="3" />
						<label for="rating-3" data-value="3">
							<span class="ir">3 <i class="material-icons">stars</i></span>
						</label>
						<input id="rating-2" name="rating" type="radio" value="2" />
						<label for="rating-2" data-value="2">
							<span class="ir">2 <i class="material-icons">stars</i></span>
						</label>
						<input id="rating-1" name="rating" type="radio" value="1" />
						<label for="rating-1" data-value="1">
							<span class="ir"><small>1</small> <i class="material-icons">stars</i></span>
						</label>
					</div>
				</fieldset>
				<input name="firstname" type="text" id="firstname" class="customclass" hidden>
				<input type="text" name="name" placeholder="Name" class="form-control" required><br>
				<input type="text" name="city" placeholder="City" class="form-control" required><br>
				<input type="hidden" name="date" value='<?php echo @date('Y-m-d')?>'>
				<input type="text" name="project" placeholder="Project" class="form-control" required><br>
				<textarea class="form-control" name="review" placeholder="Comment" required></textarea><br>
				<div class="form-group mb-0">
					<div class="row align-items-center mb-3">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12"><span>Write the Code</span></div>
						<div class="col-lg-5 col-md-12 col-sm-12 col-12"><img src="captcha.php" width="60" /></div>
					</div>
					<input class="form-control" name="captcha" type="text" required><br>
				</div>
				<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>">
				<button name="submit" type="submit" class="btn btn-primary btnc1 btnc1-hover t_white" id="submit"> Send Message</button>
			</form>
		</div>
		<div class="col-md-9">
			<div class="row text-center mb-3">
				<div class="col-md-12">
					<h1 class="text-center display-5 font-weight-normal mt-3">What Our Customers Says:</h1>
					<?php if (empty($total_registro)) { }else{ ?>
						<p>
							<i class="material-icons">aspect_ratio</i> Showing <strong><?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?></strong> Reviews
							<br>
							<i class="material-icons">dashboard</i> Total of Reviews: <strong><?php echo $total_registro;?></strong>
						</p>
					<?php } ?>
		        </div>
		    </div>
		    <div class="row mb-3">
		        <?php while ($resultInArray = $sentencia_busqueda->fetchArray(SQLITE3_ASSOC)) { ?>
		        <div class="col-md-12"><h4><i class="material-icons">account_box</i> <?php echo $resultInArray['name'];?> <i class="material-icons">chevron_right</i> <?php for ($i=1; $i <= $resultInArray['star'] ; $i++) {echo '<i class="material-icons text-warning">star</i>'; } ?> <!--- <?php echo $resultInArray['star'].'.0'; ?>--></h4></div>
		        <div class="col-md-3"><small><i class="material-icons text-secondary">event</i> <strong>Date:</strong> <?php echo $resultInArray['rdate'];?></small></div>
		        <div class="col-md-4"><small><i class="material-icons text-secondary">assignment_turned_in</i> <strong>Project:</strong> <?php echo $resultInArray['project'];?></small></div>
		        <div class="col-md-5"><small><i class="material-icons text-secondary">assistant</i> <strong>Location:</strong> <?php echo $resultInArray['city'];?></small></div>
		        <div class="col-md-12 mt-2 text-justify"><p><?php echo $resultInArray['review'] ?></p></div>
		        <?php } ?>
		    </div>
		    <div class="row text-center">
				<div class="col-md-12">
					<nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					  	<?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
						  <li class="page-item <?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a class="page-link" href="testimonials.php?page=<?php echo $i; ?>" title="Go to Page <?php echo $i;?>"><?php echo $i; ?></a></li>
						<?php } ?>
					  </ul>
					</nav>
					<small><i class="material-icons">aspect_ratio</i> Showing <strong><?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?></strong> Reviews</small>
		        </div>
		    </div>
		</div>
	</div>
</div>

<?php include 'php/section/footer.php';?>