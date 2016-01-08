		<section class="gallery-title text-center">
			<div class="gallery-wrapper">
				<div class="container">
					<div class= "row">
						<div>
							<h1 class="headline">Gallery Kami</h1>
						</div>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Produk dan Hasil Olahan Dari Koperasi  serta PT dibawah Himpunan GKBI</p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="gallery-content">
			<div class="container">
				<!-- timbol filter
				<div class="row port">
	    			<div class="col-md-8 col-md-offset-2 text-center button-group" id="filters">

	    				<button type="button" class="gallery-btn btn-primary btn is-checked" data-filter="*">All</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".care">Care</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".treatment">Treatment</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".staff">Staff</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".donation">Donation</button>
	    				<button type="button" class="gallery-btn btn-primary btn" data-filter=".pharmacy">Pharmacy</button>

	    			</div>
		    	</div>	<!-- row -->
	    		<div class="row">
	    			<div class="isotope" id="port-items">
		    	<?php
		    		include_once "lib/function.php";
		    		$res=$con->TampilProduk();
		    		foreach ($res as $data) {
		    	?>
	    				<div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
	    					<img class="img-responsive center-block" src="admin/inc/gambar/<?php echo $data['foto'];?>" alt="Image">
	    					<div class="item-desc hidden-xs">
								<div class="item-title">
									<?php
										$kop = $con->getDataKoperasi($data['idkoperasi']);

									echo "<h3>$kop[nama]</h3>";
									?>
								</div>
								<div class="item-tags">
									<h5><?php echo $data['isi'] ?></h5>
								</div>
							</div><!-- /.item-desc -->
	    				</div>
	    				<?php } ?>
<!-- /.item-desc -->
	    				</div>
	    			</div>	<!-- isotope -->
	    		</div>	<!-- row -->
			</div>
		</section>


		<?php include_once "inc/script.php" ?>

		<script>
      		new WOW().init();
		</script>

		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
		
	</body>
</html>
