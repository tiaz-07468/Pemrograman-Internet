
		<section class="faq-title text-center">
			<div class="faq-wrapper">
				<div class="container">
					<div class= "row">
						<h1 class="headline">Tentang GKBI</h1>
					</div>
					<div class="row">
						<div class="sub-headline">
							<p>Mengenal Lebih Dalam Tentang GKBI </p>
						</div>
					</div>	
				</div>
			</div>
		</section>

		<section class="faq-content">
			<div class="container">
				<div class="row">
						<div class="faq-header">GKBI | Gabungan Koperasi Batik Indonesia</div>

							<div class="faq-c">
							  <div class="faq-q"><span class="faq-t">+</span>Coorporate Overview</div>
							  <div class="faq-a">
							  <h3>VISI</h3>
							  <ul>
								<li>
									Sebagai perusahaan induk (holding company) yang sehat, profesional, dan kompetitif. 
									Sekaligus memiliki akses pasar dan finansial yang kuat, dalam rangka mencapai kesejahteraan para anggota koperasi dan masyarakat luas. 
								</li>
								</ul>
							  <h3>MISI</h3>
							  <ol>
									<li>	Mewujudkan PT GKBI Investment sebagai perusahaan induk (holding company) dari berbagai unit usaha yang berbasis investasi di sektor riil.</li>
									<li>	Menjalin kerja sama usaha dengan mitra strategis investor dalam atau luar negeri maupun lembaga-lembaga keuangan perbankan dan non perbankan.</li>
									<li>	Memfasilitasi dan mengembangkan berbagai unit usaha yang memiliki prospek profit/ manfaat yang signifikan dan dikelola secara profesional untuk kesejahteraan anggota koperasi dan masyarakat luas. </li>
							  </ol>
							
							  </div>
							</div>
							<!--
							<div class="faq-c">
							  <div class="faq-q"><span class="faq-t">+</span>Should I really be taking four times the recommended daily dose? </div>
							  <div class="faq-a">
							    <p>A growing body of evidence strongly suggests that vitamin D in high doses not only helps keep bones strong but also reduces the risk of colon, ovarian, and breast cancers, and diseases such as diabetes and multiple sclerosis. And many of us don't get enough because of a lack of exposure to sunlight (the sun triggers D's production in the skin) or diets that omit good sources (fatty fish such as salmon, mackerel, and tuna, and fortified milk and cereal). While the official daily dose for people age 51 to 70 is 400 IUs, most experts agree that they should aim for 800 to 1,000 IUs of supplemental D a day. But if you're under 50 and you consume the recommended 200 IUs (the equivalent of two glasses of milk daily) and get 10 to 15 minutes of sun exposure—without sunscreen—a day, a 400 IU supplement should do you fine.</p>
							  </div>
							</div>

							<div class="faq-c">
							  <div class="faq-q"><span class="faq-t">+</span>What happens if Pinocchio says, "my nose will grow now"</div>
							  <div class="faq-a">
							    <p>Certain questions are better left &nbsp; </p>
							  </div>
							</div>
							<div class="faq-c">
							  <div class="faq-q"><span class="faq-t">+</span>Could my cell phone kill me?</div>
							  <div class="faq-a">
							    <p>It seems unlikely. But if you use your mobile phone a lot, consider getting an earpiece or putting your caller on speaker so you can hold the phone away from your head. The biggest study yet, in which Danish researchers tracked 420,000 cell phone users for up to 21 years, found no cancer risk, but much of the data was collected when cell phones were more of a novelty than a primary form of communication. In a smaller recent Israeli study of 1,726 people, heavy cell phone use raised the risk for salivary gland tumors 50 percent on the side on which the subjects usually held the phone (though the risk overall is still vanishingly small). The biggest threat, however, has nothing to do with cancer: Driving while talking on a cell phone puts you in the same league as a drunk driver. You're four to five times more likely to have an accident. </p>
							  </div>
							</div>
							-->


					</div>
			</div>
		</section>

		<?php include_once "inc/script.php"; ?>

		<script>
      		new WOW().init();
		</script>
		<script type="text/javascript">
			$(".faq-q").click( function () {
			  var container = $(this).parents(".faq-c");
			  var answer = container.find(".faq-a");
			  var trigger = container.find(".faq-t");
			  
			  answer.slideToggle(200);
			  
			  if (trigger.hasClass("faq-o")) {
			    trigger.removeClass("faq-o");
			  }
			  else {
			    trigger.addClass("faq-o");
			  }
			});
		</script>	



