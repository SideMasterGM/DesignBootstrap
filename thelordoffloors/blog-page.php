<?php include 'php/section/header.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?><!--Recuerda Cambiar las URL-->
<div class="container bars" itemscope itemtype="http://schema.org/NewsArticle">
<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" content="<?php echo $Domain;?>/blog-page.php"/>	
	<div class="row">
		<div class="col-md-8 border-right">
			<h1 itemprop="headline"><?php echo $BlogEntryT1;?></h1>
			<div itemprop="text">
				<hr>
				<em>
					<time itemprop="datePublished" datetime="2016-07-15T07:07:21+00:00"><!--CAMBIAR FECHAS DEL POST-->
						<time itemprop="dateModified" datetime="2016-07-15T07:07:21+00:00">
							<?php echo $Date.$BlogDate1;?>
						</time>
					</time>
				</em> / 
				<em>
					<span itemprop="author" itemscope itemtype="https://schema.org/Person">
						<span itemprop="name">
							<?php echo $Review.$BlogAuthor1;?>
						</span>
					</span>
				</em> / 
				<em><?php echo $Comment;?> <a href="blog-page.php" title="tag1">Tag1</a>,<a href="blog-page.php" title="tag2">Tag1</a>,<a href="blog-page.php" title="tag3">Tag1</a></em>
				<p>&nbsp;</p>
				<p itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/full/blog-page.jpg" itemprop="image"  alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/full/blog-page.jpg">
					<meta itemprop="width" content="727">
		        	<meta itemprop="height" content="410">
				</p>
				<div itemprop="text"><?php echo $BlogEntryD1;?></div>
			</div>	
		</div>
		<div class="col-md-4">
			<?php include 'php/widgets/tags.php';?>
			<?php include 'php/widgets/call.php';?>
			<?php include 'php/widgets/services.php';?>
			<?php include 'php/widgets/coupon-1.php';?>
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>