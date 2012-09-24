
<div class="container">
	
		<div class="row-fluid">
			<div class="span12">
				<h4>Order Information</h4>
				<p>Please select a design, select style, pick a fabric, fill your measurement, then input your contact information and press Submit button to order.</p>
				<div class="row-fluid">
					<table class="table">
						<thead>
							<tr>
								<th>Design</th>
								<th>Fabric</th>
								<th>Quantity</th>
								<th>Price</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td> <input type="text" name="quantity1" class="input-mini"> </td>
								<td>$</td>
								
							</tr>
						</tbody>
					</table>
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
						App::import('model', 'StyleDetail');
						$imageModel = new Image();
						$image = $imageModel->findById($image_id);
						$url = "";
						if(isset($image)) {
							$url = $image['Image']['url'];
						}
					//	pr($image);
						echo	"<li class='span3'>"
									."<div class='thumbnail'>"
										."<img src='" .$this->webroot.$url. "' alt='' />"
										."<h3>".$code."</h3>"
										."<p>".$description."</p>"
										."<p><input name='style_design' type='radio' />Select One</p>"
									."</div>"
								."</li>";	
					}
					?>									
								</ul>
							</div>
						</div>
						<div id="tab2" class="tab-pane">
					<?php
					// o day la lay style ra de ma loc qua ne
					$numofStyles = 		count($styles);
			for($j = 0; $j < $numofStyles; $j++){
				$style = $styles[$j];
				
				$styleId = $style['Style']['id'];
				$stylename = $style['Style']['name'];
				$styleDescription = $style['Style']['description'];
				echo	'<div class="row-fluid">' 
						 .	"<p><h4>".$stylename."</h4></p>"
						 .	"<p>".$styleDescription."</p>"
						 ."</div>";						
				echo 	'<div class="row-fluid">';
				echo	 	'<ul class="thumbnails">';
				// o day thi` in ra style detail
				$styleDetaiModel = new StyleDetail();
				$styleDetails = $styleDetaiModel->findAllByStyleId($styleId);
				$numOfstyleDetails = count($styleDetails);
				for($k = 0; $k < $numOfstyleDetails; $k++){
					$styleDetail = $styleDetails[$k]['StyleDetail'];
					if(isset($styleDetail)) {
						$imageModel = new Image();
						$image = $imageModel->findById($styleDetail['image_id']);
						$url = $image['Image']['url'];
						echo '<li class="span3">';
						echo 		'<div class="thumbnail">';
						echo 			'<img src="'.$this->webroot.$url.'" alt="">';
						echo 			'<p><input name="style_design" type="radio" />' .$styleDetail['name']. '</p>';
						echo 		'</div>';
						echo '</li>';
					}
				}
				
				
				echo	 	'</ul>';
				echo 	'</div>';			
			}
					?>							
						</div>
						<div id="tab3" class="tab-pane">
			<?php
				// lay fabric theo category
				$numofCategories = count($categories);
				//pr($categories);
				for($i = 0; $i < $numofCategories; $i++){
					$category = $categories[$i]['Category'];
					$fabrics = $categories[$i]['Fabric'];
					$categoryName = $category['name'];
					echo '<div class="row-fluid">';
					echo 	'<p><h4>'.$categoryName.'</h4></p>';
					echo '</div>';
					echo '<div class="row-fluid">';
					echo '<ul class="thumbnails">';
					if(isset($fabrics)) {
						for($x = 0; $x < count($fabrics); $x++) {
							$fabric = $fabrics[$x];
							$imageId = $fabric['image_id'];
							$fabricCode = $fabric['code'];
							$price = $fabric['price'];
							$fabricDescription = $fabric['description'];
							$imageModel = new Image();
							$image = $imageModel->findById($imageId);
							$url = $image['Image']['url'];
							echo '<li class="span3">';
							echo 		'<div class="thumbnail">';
							echo 			'<img src="'.$this->webroot.$url.'" alt="">';
							echo 			'<p>'.$fabricCode.'</p>';
							echo 			'<p>'.$fabricDescription.'</p>';
							echo 			'<p>';
							echo 				'Price: '.$price;
							echo 				'<input name="style_design" type="radio" />Select One</p>';
							echo 			'</p>';
							echo 		'</div>';
							echo '</li>';
						}
						
					}
					echo '</ul>';
					echo '</div>';
				}
			?>				
						</div>
						<div id="tab4" class="tab-pane">
			<?php
						if($type == "1") { // Men mesurament
							
						
			?>		
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td colspan="4">
											<div class='thumbnail'>
												<h5>Please Select Your Shoulder Style:</h5>
												<div class='width30 inline'>											
													<p><?=$this->html->image('sloping.jpg');?></p>
													<label for='shoulder'>
													<input name='shoulder' type='radio' id='shoulder'>sloping
													</label>
												</div>
												
												<div class='width30 inline'>											
													<p><?=$this->html->image('regular.jpg');?></p>
													<label for='regular'>
													<input name='shoulder' type='radio' id='regular'>regular
													</label>
												</div>
												
												<div class='width30 inline'>											
													<p><?=$this->html->image('square.jpg');?></p>
													<label for='square'>
													<input name='shoulder' type='radio' id='square'>square
													</label>
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td colspan='4'><h5 class='txt_center'>Please Select Style nearest to your figure:</h5></td>
									</tr>
									<tr>
										<td colspan='4'>
											<div class='thumbnail'>
												<div class='width15 inline'>											
													<p><?=$this->html->image('normal_posture.jpg');?></p>
													<label for='normal-posture'>
													<input name='figureStyle' type='radio' id='normal-posture'>Normal Posture
													</label>
												</div>
												
												<div class='width15 inline'>											
													<p><?=$this->html->image('erect.jpg');?></p>
													<label for='erect'>
													<input name='figureStyle' type='radio' id='erect'>Erect
													</label>
												</div>
												
												<div class='width15 inline'>											
													<p><?=$this->html->image('forward_stoop.jpg');?></p>
													<label for='forward_stoop'>
													<input name='figureStyle' type='radio' id='forward_stoop'>Forward Stoop
													</label>
												</div>
												
												<div class='width15 inline'>											
													<p><?=$this->html->image('forward_stomach.jpg');?></p>
													<label for='forward_stomach'>
													<input name='figureStyle' type='radio' id='forward_stomach'>Forward Stomach
													</label>
												</div>
												
												<div class='width15 inline'>											
													<p><?=$this->html->image('stout.jpg');?></p>
													<label for='stout'>
													<input name='figureStyle' type='radio' id='stout'>Stout
													</label>
												</div>
											</div>
										</td>
									</tr>
									
									<tr>
										<td width='25%'>
											<strong>1. Full Shoulder</strong>
											<p>Measure back at it's widest portion. This is the length between your shoulders.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure01.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='fullShoulder' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>2. Sleeves</strong>
											<p>Measure shoulder seam to the beginning of your wrist. Now add 1" to this measurement.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure02.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='sleeves' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>3. Chest</strong>
											<p>Measure around chest at the nipple line. Place the tape measure directly underneath your arm pit. Wrap all the way around your chest and back until your hands come together. Add 1" to this measurment.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure03.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='chest' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'> 
											<strong>4. Stomach</strong>
											<p>Measure around stomach line at it's fullest point and add 1" to this measurment.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure04.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='stomach' type='text' class='input-mini'> </p>
										</td>
									</tr>
									
									<tr>
										<td width='25%'>
											<strong>5. Front Coat Length</strong>
											<p>Measure from top of highest shoulder point down to your end of thumb. This is international Jacket Length.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure05.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='frontCoatLng' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>6. Coat Length</strong>
											<p>Measure from lower collar seam to length desired. This measurement should be approximately 5 1/2" longer than your Sleeve measurement above.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure06.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='coatLng' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>7. Front</strong>
											<p>Measure from top armpit angle to other armpit angle across your chest.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure07.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='front' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'> 
											<strong>8. Back</strong>
											<p>Measure from top armpit angle to other armpit angle across your back.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure08.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='back' type='text' class='input-mini'> </p>
										</td>
									</tr>
									
									<tr>
										<td width='25%'>
											<strong>9. Neck</strong>
											<p>Measure around neck at the point where your collar would be and add 1/2 inch.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure09.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='neck' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>10. Waist</strong>
											<p>Relax your stomach and measure around your Waist Line where you would normally wear your pants.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure11.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='waist' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>11. Hip</strong>
											<p>Measure around your hips at widest point of your buttocks. Add 1.5" to this measurement.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure12.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='hip' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'> 
											<strong>12. U.A Crotch</strong>
											<p>Measure from the top of the front pant, Down through a crotch and around up to top of the back Pant.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure10.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='uaCrotch' type='text' class='input-mini'> </p>
										</td>
									</tr>
									
									<tr>
										<td width='25%'>
											<strong>13. Length</strong>
											<p>Measure from top of waist band where you would normally wear your pants to the bottom of your shoe heel.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure14.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='lngth' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>14. Thigh</strong>
											<p>Measure width around the thigh as shown.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure15.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='thigh' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'>
											<strong>15. Knee Width (Around Knee)</strong>
											<p>Measure width around knee.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure19.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='knee' type='text' class='input-mini'> </p>
										</td>
										<td width='25%'> 
											<strong>16. Cuff</strong>
											<p>Measure width around cuff as shown.</p>
											<p class='txt_center'><?=$this->html->image('mmeasure16.gif');?></p>
											<p class='txt_center'>Size: <strong>(in cm)</strong></p>
											<p class='txt_center'> <input name='cuff' type='text' class='input-mini'> </p>
										</td>
									</tr>
								</tbody>
							</table>
				<?php
					} else {
						echo "tao them 1 cai women collection vo day";
						
					}
				?>			
							
						</div>
						<div id="tab5" class="tab-pane">
							<form>
							  <legend>Legend</legend>
							  <label>Label name</label>
							  <input type="text" placeholder="Type something�">
							  <span class="help-block">Example block-level help text here.</span>
							  <label class="checkbox">
							    <input type="checkbox"> Check me out
							  </label>
							  <button type="submit" class="btn">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
