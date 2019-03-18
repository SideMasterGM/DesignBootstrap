<?php include 'php/section/header.php'; include 'php/section/click2call.php';?>
<div class="bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="container bars" itemprop="text">
		<div class="row">
			<?php include('conexion.php'); ?>
			<?php 
				$queryAll = $dataBase->query('SELECT * FROM reviews');
			?>


			<?php 
				while ($resultInArray = $queryAll->fetchArray(SQLITE3_ASSOC)) {
			 ?>
			 <div class="col-md-6 col-md-offset-3 well">
				<h3 class="text-left"><?php echo $resultInArray['name'] ?></h3>
				<small>Date: <?php echo $resultInArray['rdate'] ?></small>
				<p>Project: <strong><?php echo $resultInArray['project'] ?></strong></p>
				<p><?php echo $resultInArray['review'] ?></p>
			</div>
			<?php } ?>
		</div>
		<br>
		<div class="row">
			
		</div>
	</div>
</div>
<div class="b_gray-1">
<?php include 'php/section/bar6.php';?>
</div>
<?php include 'php/section/bar4.php';?>
<?php include 'php/section/footer.php';?>