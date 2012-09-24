<div class="row-fluid">	<!-- blank -->
	<div class="span12"></div>
</div>
<?php
	//pr($designs);
?>
<div class="row-fluid">
	<div class="span12">
		<h4>Order Information</h4>
		<p>Please select a design, select style, pick a fabric, fill your measurement, then input your contact information and press Submit button to order.</p>
		<div class="row-fluid">
			<div class="table">
				<div class="mission">
					<p>Mission</p>
				</div>
				<div class="date">
					<p>Date</p>
				</div>
				<div class="point_earned">
					<p>Points Earned</p>
				</div>
				<div class="table_content">
					<div class="">
						<div class="">
							<ul class="unstyled">
								<li class="mission_content">
									<a href="#" class="text_underline">survey: Favorite Beauty Products</a>
								</li>
								<li class="date_content">
									<p>Aug 12,2012</p>
								</li>
								<li class="point_content">
									<p>45</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable editor container">
			<nav id="subnav-two" class="nav">
				<ul class="unstyled">
					<li class="active" id="next-one">
						<a data-toggle="tab" href="#tab1" class="first">1. Select Design</a>
					</li>
					<li id="next-two">
						<a data-toggle="tab" href="#tab2">2. Style Detail</a>
					</li>
					<li id="next-three">
						<a data-toggle="tab" href="#tab3">3. Pick a Fabric</a>
					</li>
					<li id="next-four">
						<a data-toggle="tab" href="#tab4">4. Measurement</a>
					</li>
					<li id="next-five">
						<a data-toggle="tab" href="#tab5">5. Check out</a>
					</li>
				</ul>
			</nav>
			<div class="tab-content">
				<div id="tab1" class="tab-pane active">
					<div class="row-fluid">
						<ul class="thumbnails">
					<?php
					$numofDesign = count($designs);
					for($i = 0; $i < $numofDesign; $i++) {
						$data = $designs[$i];
						$design = $data['Design'];
						$code = $design['code'];
						$description = $design['description'];
						$image_id = $design['image_id'];
						// lay ra image
						App::import('model','Image');
						$imageModel = new Image();
						$image = $imageModel->findById($image_id);
						pr($image);
						echo	"<li class='span3'>"
									."<div class='thumbnail'>"
										."<img src='' alt=''>"
										."<h3>".$code."</h3>"
										."<p>".$description."</p>"
									."</div>"
								."</li>";	
					}
					?>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <h3>Thumbnail label</h3>
						      <p>Thumbnail caption...</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <h3>Thumbnail label</h3>
						      <p>Thumbnail caption...</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <h3>Thumbnail label</h3>
						      <p>Thumbnail caption...</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <h3>Thumbnail label</h3>
						      <p>Thumbnail caption...</p>
						      <p><input type="radio" />Select</p>
						    </div>
						  </li>
						</ul>
					</div>
				</div>
				<div id="tab2" class="tab-pane">
					<div class="row-fluid">
						<p>1. Jacket Type:</p>
						<p>95% of our customers choose 2 or 3 button single breasted jackets.</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>2. Lapel Type:</p>
						<p>Notch lapels are common, while peak lapels are considered more formal. Make sure to match peak lapels with a double breasted jacket; hand stitching is a matter of taste..</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>3. Black Vents:</p>
						<p>Most men are flattered by a double vent..</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>4. Jacket Pockets:</p>
						<p>Ticket pockets are a great accessory, especially on tall men. The slanted pockets give your jacket an English flavor.</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>5. Sleeve Buttons</p>
						<p>Have at least as many buttons on your sleeve as you have on your front. All buttons are fully functional.</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>6. Jacket Interior Lining</p>
						<p>We are happy to match your lining with your jacket's fabric, but feel free to choose whatever color you want.</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>7. Trouser Pleats</p>
						<p>No pleats look great on thin men, double pleats for those with a bit more size, single pleats are a great compromise.</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>8. Front Pocket</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					
					<div class="row-fluid">
						<p>9. Waist Strap</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>10. Number and Position of Back Pockets</p>
						<p>Why not make these trousers truly unique and eliminate a needless pocket?</p>
					</div>
						<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>11. Back Pocket Type</p>
					</div>
						<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>12. Trouser Bottoms</p>
						<p>Tall men typically go for cuffs while shorter men are best served by the no cuff; in addition, no pleats calls for no cuffs and two pleats requrite cuffs. Men who chose to have single pleat trouser can choose either option.</p>
					</div>
						<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					
					
				</div>
				<div id="tab3" class="tab-pane">
					<div class="row-fluid">
						<p>Cashmere & Silk</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
					
					<div class="row-fluid">
						<p>Cashmere Wool</p>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />One button, Single breasted Jacket</p>
						    </div>
						  </li>
						</ul>
					</div>
				</div>
				<div id="tab4" class="tab-pane">
					<div class="row-fluid">
						<p>Please Select your soulder Style</p>
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />Sloping</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />regular</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />square</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<p>Please Select style nearset to your figure</p>
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />Normal Posture</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />Erect</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />	Forward Stoop</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />	Forward Stomach</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/150x150" alt="">
						      <p><input type="radio" />		Stout</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<p>1. Full Shoulder</p>
							<span>Measure back at it's widest portion. This is the length between your shoulders.</span>
						</div>
						<div class="span3">
							<p>2. Sleeves</p>
							<span>Measure shoulder seam to the beginning of your wrist. Now add 1" to this measurement</span>
						</div>
						<div class="span3">
							<p>3. Chest </p>
							<span>Measure around chest at the nipple line. Place the tape measure directly underneath your arm pit. Wrap all the way around your chest and back until your hands come together. Add 1" to this measurment. </span>
						</div>
						<div class="span3">
							<p>4. Stomach</p>
							<span>Measure around stomach line at it's fullest point and add 1" to this measurment.</span>
						</div>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<p>5. Front Coat Length</p>
							<span>Measure from top of highest shoulder point down to your end of thumb. This is international Jacket Length  </span>
						</div>
						<div class="span3">
							<p>6. Coat Length</p>
							<span>Measure from lower collar seam to length desired. This measurement should be approximately 5 1/2" longer than your Sleeve measurement above.</span>
						</div>
						<div class="span3">
							<p>7. Front  </p>
							<span>Measure from top armpit angle to other armpit angle across your chest</span>
						</div>
						<div class="span3">
							<p>8. Back </p>
							<span>Measure from top armpit angle to other armpit angle across your back.</span>
						</div>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<p>9. Neck </p>
							<span>Measure around neck at the point where your collar would be and add 1/2 inch.   </span>
						</div>
						<div class="span3">
							<p>10. Waist</p>
							<span>Relax your stomach and measure around your Waist Line where you would normally wear your pants.</span>
						</div>
						<div class="span3">
							<p>11. Hip </p>
							<span>Measure around your hips at widest point of your buttocks. Add 1.5" to this measurement</span>
						</div>
						<div class="span3">
							<p>12. U.A Crotch </p>
							<span>Measure from the top of the front pant, Down through a crotch and around up to top of the back Pant.</span>
						</div>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						</ul>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<p>13. Length </p>
							<span>Measure from top of waist band where you would normally wear your pants to the bottom of your shoe heel. </span>
						</div>
						<div class="span3">
							<p>14. Thigh </p>
							<span>Measure width around the thigh as shown. </span>
						</div>
						<div class="span3">
							<p>15. Knee Width (Around Knee) </p>
							<span>Measure width around knee.</span>
						</div>
						<div class="span3">
							<p>16. Cuff</p>
							<span>Measure width around cuff as shown. </span>
						</div>
					</div>
					<div class="row-fluid">
						<ul class="thumbnails">
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						  <li class="span3">
						    <div class="thumbnail">
						      <img src="http://placehold.it/200x300" alt="">
						      <p><input type="text" />Size: (in cm)</p>
						    </div>
						  </li>
						</ul>
					</div>
				</div>
				<div id="tab5" class="tab-pane">
					    <form class="form-horizontal">
					    	<div class="control-group">
							    <label class="control-label" for="inputName">Full Name</label>
							    <div class="controls">
							    	<input type="text" id="inputName" placeholder="Full Name">
							    </div>
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="inputAddress">Address</label>
							    <div class="controls">
							    	<input type="text" id="inputAddress" placeholder="Address">
							    </div>
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="inputCountry">Country</label>
							    <div class="controls">
							    	<input type="text" id="inputCountry" placeholder="Country">
							    </div>
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="inputEmail">Email</label>
							    <div class="controls">
							    	<input type="text" id="inputEmail" placeholder="Email">
							    </div>
						    </div>
						    <div class="control-group">
							    <label class="control-label" for="inputCardNum">Credit card Number</label>
							    <div class="controls">
							    	<input type="text" id="inputCardNum" placeholder="Card number">
							    </div>
						    </div>
						   	<div class="control-group">
							    <label class="control-label" for="inputEmail">Message</label>
							    <div class="controls">
							    	<textarea></textarea>
							    </div>
						    </div>
						    <div class="control-group">
						    <div class="controls">
						    <button type="submit" class="btn">Check Out</button>
						    </div>
						    </div>
						   </form>
				</div>
			</div>
		</div>
	</div>
</div>