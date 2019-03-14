<?php include 'php/section/header.php';include 'php/section/pagename.php';include 'php/section/click2call.php';?>
<div class="container bars" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
	<div class="row" itemscope itemtype="http://schema.org/CreativeWork">
		<div class="col-md-8 border-right" itemscope itemtype="http://schema.org/Blog">
			<div class="row">
				<div class="col-md-12">
					<h1 itemprop="name" class="uppercase">our blog</h1>
					<hr>
				</div>
			</div>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<hr>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<hr>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<hr>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<hr>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<hr>
			<div class="row bright" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
				<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
				   <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
					   <meta itemprop="url" content="<?php echo $Domain;?>/images/logo.png">
					   <meta itemprop="width" content="133">
					   <meta itemprop="height" content="34">
				   </div>
				   <meta itemprop="name" content="<?php echo $Company;?>">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-2" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="images/blog/min/blog-page.jpg" itemprop="image" alt="blog page-<?php echo "$Company";?>" class="img-thumbnail img-responsive">
					<meta itemprop="url" content="<?php echo $Domain;?>/images/blog/min/blog-page.jpg">
					<meta itemprop="width" content="262">
		        	<meta itemprop="height" content="251">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-10">
					<h2 itemprop="headline"><?php echo $BlogEntryT1;?></h2>
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
					<hr>
					<div itemprop="text"><?php echo $ExBlogEntryD1;?></div>
					<br><br>
					<a href="blog-page.php" itemprop="mainEntityOfPage" title="<?php echo "$BlogEntryT1";?>" class="btn btn-sm b_red-3 b_red-5-hover t_white uppercase"><i class="fa fa-eye"></i> read more</a>
				</div>
			</div>
			<?php include 'php/section/blog-pagination.php';?>
		</div>

		<div class="col-md-4">
			<?php include 'php/widgets/call.php';?>
			<?php include 'php/widgets/contact.php';?>
			<?php include 'php/widgets/coupon-1.php';?>
			<?php include 'php/widgets/services.php';?>
		</div>
	</div>
</div>
<?php include 'php/section/footer.php';?>