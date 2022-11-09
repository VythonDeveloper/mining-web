<?php include "header.php";?>

	<!-- gallery -->
	<div class="gallery-top">
		<!-- container -->
		<div class="container">
			<div class="gallery-info">
				<h3>Gallery</h3>
			</div>
			<div class="gallery-grids-top">
				
				<div class="gallery-grids">
					<?php for($i = 1; $i < 5; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 5; $i < 9; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 9; $i < 13; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 13; $i < 17; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 17; $i < 21; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 21; $i < 25; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids gallery-grids-middle">
					<?php for($i = 25; $i < 29; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<div class="gallery-grids">
					<?php for($i = 29; $i < 31; $i++){ ?>
						<div class="col-md-3 gallery-grid">
							<a class="example-image-link" href="./images/gallery/gal%20(<?php echo $i;?>).jpg" data-lightbox="example-set" data-title=""><img loading="lazy" height="200px" width="200px" class="example-image" src="./images/gallery/gal%20(<?php echo $i;?>).jpg" alt=""/></a>
						</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<?php include 'footer.php';?>