<?php
class DesignsController extends AppController {
	public $name = "Designs";

	function admin_index() {
			$this->layout = "admin_layout";
			$designs = $this->Design->find('all');
		 	$this->set('designs', $designs);
	}
	
	public function admin_add() {
		$this->layout = "admin_layout";
		$this->Session->setFlash('');
		if ( !empty( $this->data ) ) {
			$data = $this->data['Design'];
			$collection_id = $this->data['collectionId'];
			// Upload images
			$fileName = $data['file']['name']; // the file name
			$fileTmpLoc = $data['file']['tmp_name'];
			$fileType = $data['file']['type'];
			$fileSize = $data['file']['size'];
			$fileErrorMsg = $data['file']['error'];
			$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName);
			$fileName = $data['code'].$fileName; 			// Lay cai ma de luu cai name xuong
			$kaboon = explode(".", $fileName);
			$fileExt = end($kaboon);
			$fileExt_temp = $fileExt; // this variable use for convert function
			//START PHP Image Upload Error Handling
			if(!$fileTmpLoc) {
				echo "ERROR: Please browse for a file before clicking the upload button";
				exit();
			} else if ( $fileSize > 5242880 ) {
				echo "ERROR: Your file was larger than 5megabytes in size.";
				unlink($fileTmpLoc);
				exit();
			} else if ( !preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
				// This conditions is only if you wish to allow uploading of specific file types
				echo "ERROR: Your image was not .gif, .jpg or .png.";
				unlink( $fileTmpLoc ) ; // Remove the uploaded file from the PHP temp folder
				exit();
			} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
				echo "ERROR: An error occured while processing the file. Try again." ;
				exit();
			}
			//END PHP Image Upload Error Hadling.............
			//Place it into your "uploads" folder now using the move_uploaded_file() function
			$moveResult = move_uploaded_file($fileTmpLoc, WWW_ROOT."uploads/$fileName");
			// Check to make sure the move result is true before continuing
			
			if( $moveResult != true ) {
				echo "ERROR: file not uploaded. Try again.";
				unlink($fileTmpLoc);   // Remove the uploaded file from the PHP temp folder
				exit();
			}
			//unlink($fileTmpLoc);
			//--------------------Include Adams Universal Image Resizing Function
			include_once("ak_php_img_lib_1.0.php");
			$target_file = WWW_ROOT."uploads/$fileName";
			$resized_file = WWW_ROOT."uploads/resized_$fileName";
			$wmax = 200;
			$hmax = 300;
			ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
			//--------------- End resize function -------------------
			//----------------Start Adams Universal Image Thumnail Function
			//$target_file =  WWW_ROOT."uploads/resized_$fileName";
			//$thumbnail =  WWW_ROOT."uploads/thumb_$fileName";
			//$wthumb = 150;
			//$hthumb = 150;
			//ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $fileExt);
			//----------------End thumbnail function -------------------
			//----------------Start Adams Convert to JPG function ----------
			/*
			if (strtolower($fileExt) != "jpg") {
			
				$target_file =  WWW_ROOT."uploads/resized_$fileName";
				$new_jpg = $target_file =  WWW_ROOT."uploads/resized_".$kaboom[0].".jpg";
				ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
			}	
			*/
			// Luu xuong bang images
			$url = "uploads/resized_$fileName";
			App::import('model','Image');
			$imageModel = new Image();
			$imageData = array('Image' => array(
												'url' => $url,
												'description' => ''
											)
			);
			$imageModel->save($imageData);
			$image_id = $imageModel->id;
			
			// Luu xuong bang design
			$code = $data['code'];
			$description = $data['description'];
			$designData = array('Design' => array(
												'code' => $code,
												'description' => $description,
												'collection_id' => $collection_id,
												'image_id' => $image_id
											)
			);
			// luu
			$this->Design->save($designData);
			$this->Session->setFlash('<p class="info" id="success"><span class="info_inner">Add design successfull</span></p>');
			$this->redirect(array('action' => 'index'));
			
		} else {
			// lam cai chi o day sau
		}
	}
	public function admin_edit($id = null) {
		if($id == null) {
			$this->redirect(array('action' => 'index'));
		}
		$this->layout = 'admin_layout';
		$this->Design->id = $id;
		if(!empty($this->request->data)) {
			$collectionId = $this->request->data['collectionId'];
			$imageId = $this->request->data['image_id']; 
			$data = $this->request->data['Design'];
			
			$chk = "";
			if(isset($this->request->data['chk'])){
				$chk =  $this->request->data['chk'];	
			}
			if($chk == "on") { // co nghia la check vo la`  thay hinh`, thi` up cai' hinh
				$fileName = $data['file']['name']; // cho ni dang la phai kt o ngoai roi check luon co' ten file hay ko
				$fileTmpLoc = $data['file']['tmp_name'];
				$fileType = $data['file']['type'];
				$fileSize = $data['file']['size'];
				$fileErrorMsg = $data['file']['error'];
				$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName);
				$fileName = $data['code'].$fileName; 			// Lay cai ma de luu cai name xuong
				$kaboon = explode(".", $fileName);
				$fileExt = end($kaboon);
				$fileExt_temp = $fileExt; // this variable use for convert function
				//START PHP Image Upload Error Handling
				if(!$fileTmpLoc) {
					echo "ERROR: Please browse for a file before clicking the upload button";
					exit();
				} else if ( $fileSize > 5242880 ) {
					echo "ERROR: Your file was larger than 5megabytes in size.";
					unlink($fileTmpLoc);
					exit();
				} else if ( !preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
					// This conditions is only if you wish to allow uploading of specific file types
					echo "ERROR: Your image was not .gif, .jpg or .png.";
					unlink( $fileTmpLoc ) ; // Remove the uploaded file from the PHP temp folder
					exit();
				} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
					echo "ERROR: An error occured while processing the file. Try again." ;
					exit();
				}
				
				//END PHP Image Upload Error Hadling.............
				//Place it into your "uploads" folder now using the move_uploaded_file() function
				$moveResult = move_uploaded_file($fileTmpLoc, WWW_ROOT."uploads/$fileName");
				// Check to make sure the move result is true before continuing
				
				if( $moveResult != true ) {
					echo "ERROR: file not uploaded. Try again.";
					unlink($fileTmpLoc);   // Remove the uploaded file from the PHP temp folder
					exit();
				}
				//unlink($fileTmpLoc);
				//--------------------Include Adams Universal Image Resizing Function
				include_once("ak_php_img_lib_1.0.php");
				$target_file = WWW_ROOT."uploads/$fileName";
				$resized_file = WWW_ROOT."uploads/resized_$fileName";
				$wmax = 200;
				$hmax = 300;
				ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
				//--------------- End resize function -------------------
				//----------------Start Adams Universal Image Thumnail Function
				//$target_file =  WWW_ROOT."uploads/resized_$fileName";
				//$thumbnail =  WWW_ROOT."uploads/thumb_$fileName";
				//$wthumb = 150;
				//$hthumb = 150;
				//ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $fileExt);
				//----------------End thumbnail function -------------------
				//----------------Start Adams Convert to JPG function ----------
				/*
				if (strtolower($fileExt) != "jpg") {
				
					$target_file =  WWW_ROOT."uploads/resized_$fileName";
					$new_jpg = $target_file =  WWW_ROOT."uploads/resized_".$kaboom[0].".jpg";
					ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
				}	
				 */
				// luu xuong bang image
				//	truoc het la phai xoa' cai' image_id cu di cai da
				$url = "uploads/resized_$fileName";
				App::import('model', 'Image');
				$imageModel = new Image();
				if(isset($imageId)) {
					$imageModel->delete($imageId);	
				}
				
				$imageData = array('Image' => array(
												'url' => $url,
												'description' => ''
											)
				);
			$imageModel->save($imageData);
				// gan' lai imageID
				$imageId =  $imageModel->id;
				
			} else {
				// khong lam gi het
			}
			
			//o day update
			$code = $data['code'];
			$description = $data['description'];
			$designData = array('Design' => array(
												'code' => $code,
												'description' => $description,
												'collection_id' => $collectionId,
												'image_id' => $imageId
											)
			);
			
			if( $this->Design->save($designData) ) {
				$this->Session->setFlash('<p class="info" id="success"><span class="info_inner">Your design has been update</span></p>');
				$this->redirect(array('action '=> 'index'));
			} else {
				$this->Session->setFlash('<p class="info" id="success"><span class="info_inner">Unable to update this design</span></p>');
			}
			
		} else if(empty($this->data)) {
			// set $this->data
			$this->request->data = $this->Design->getById($id); 
		}
		
		
	}
	
	public function admin_delete($id = null) {
		// Xoa image trong bang image truoc con xoa' image trong server thi tinh sau
		$design = $this->Design->getById($id) ;
		$imageId = $design['Design']['image_id'];
		App::import('model', 'Image');
		$imageModel = new Image();
		$imageModel->delete($imageId);
		
		if($this->Design->delete($id)){
				$this->Session->setFlash('<p class="info" id="success"><span class="info_inner">The design with id = ' . $id . ' has been deleted.</span></p>');
				$this->redirect(array('action' => 'index'));
			}
	}
	
}
