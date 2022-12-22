<?php include "header.php";?>
	<!-- gallery -->
	<div class="gallery-top">
		<!-- container -->
		<div class="container">
			<div class="gallery-info">
				<h3>Gallery</h3>
			</div>
			<div class="gallery-grids-top">
				<div class="gallery-grids-middle">
					<?php
					$dir = './images/gallery/';
					$files = scandir($dir); 
					foreach($files as $file)
					{
					    if(is_file($dir.$file)){ ?>
					    	<div class="col-md-3 gallery-grid" style="margin-bottom: 15px;">
								<a class="example-image-link" href="<?php echo $dir.$file;?>" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="<?php echo $dir.$file;?>" alt=""/></a>
							</div>
					    <?php }
					}
					?>
					<div class="clearfix"></div>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<?php include 'footer.php';?>